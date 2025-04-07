@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <a href="{{ route('user.create') }}" class="btn btn-success">Create User</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@foreach ($user->getRoleNames() as $role )
                                    <button class="btn btn-primary btn-sm">{{ $role }}</button>
                                    
                                @endforeach</td>
                                <td>
                                    <form method="POST" action="{{ route('user.destroy',$user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('user.show',$user->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
