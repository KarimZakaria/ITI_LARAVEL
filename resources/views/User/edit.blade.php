@extends('layouts.app')

@section('content')
    <div class="card bg-light">
        <div class="card-header ">
            <h3>Edit {{ $user->name }}'s Info</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @METHOD('PATCH')
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group mt-3">
                    <label class="mt-1"><strong> Name : </strong></label>
                    <input class="@error('name') is-invalid @enderror form-control" type="text" name="name"
                        id="name" value="{{ $user->name }}">
                </div>
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <div class="form-group mt-3">
                    <label class="mt-1"><strong>Email : </strong></label>
                    <input class="@error('email') is-invalid @enderror form-control" type="email" name="email"
                        id="email" value="{{ $user->email }}" autocomplete="off">
                </div>
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <div class="form-group mt-3 pb-3">
                    <label class="mt-1"><strong>Password : </strong></label>
                    <input class="@error('password') is-invalid @enderror form-control" type="password" name="password"
                        id="password" value="{{ $user->password }}">
                </div>
                @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>
@endsection
