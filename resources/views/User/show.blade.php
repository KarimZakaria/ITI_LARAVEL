@extends('layouts.app')

@section('content')
    <div class="card bg-light">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Show {{ $user->name }}'s Info</h3>
                <a class="btn btn-success" href="{{ route('users.index') }}">
                    Users
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <td scope="col">{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="col">E-Mail</th>
                        <td scope="col">{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Creation Date</th>
                        <td scope="col">{{ $user->created_at->diffForHumans() }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
