@extends('layouts.app')

@section('title', 'Add New User')

@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{ route('users.create') }}">
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
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group mt-3">
                    <label class="mt-1"><strong>Email : </strong></label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="form-group mt-3 pb-3">
                    <label class="mt-1"><strong>Password : </strong></label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
@endsection
