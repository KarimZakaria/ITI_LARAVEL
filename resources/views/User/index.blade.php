@extends('layouts.app')

@section('title')
    All Users
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="">
                <div class="d-flex justify-content-between">
                    <h3>All Users</h3>
                    <a class="btn btn-success" href="{{ route('users.create') }}">
                        <i class="fa fa-plus"></i> Add New User
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class="bg-dark text-white text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm ms-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm ms-1">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm ms-1" type="submit" value="Delete"
                                        onclick="confirm('Are You Sure deleteing ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    @empty
                        No Users Found
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
