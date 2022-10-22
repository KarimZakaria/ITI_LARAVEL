@extends('layouts.app')

@section('title', 'Add New User')

@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{ route('users.index') }}">
            Users
        </a>
    </div>
    <div class="card bg-light">
        <div class="card-header ">
            <h3>Create New User</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <label class="mt-1"><strong> Name : </strong></label>
                    <input class="@error('name') is-invalid @enderror form-control" value="{{ old('name') }}"
                        type="text" name="name" id="name">
                </div>
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <div class="form-group mt-3">
                    <label class="mt-1"><strong>Email : </strong></label>
                    <input class="@error('email') is-invalid @enderror form-control" value="{{ old('email') }}"
                        type="email" name="email" id="email">
                </div>
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <div class="form-group mt-3 pb-3">
                    <label class="mt-1"><strong>Password : </strong></label>
                    <input class="@error('password') is-invalid @enderror form-control" value="{{ old('password') }}"
                        type="password" name="password" id="password">
                </div>
                @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
@endsection
