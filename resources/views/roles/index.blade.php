@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Roles</div>
                <div class="card-body">
                    @can('role-create')
                    <a href="{{ route('role.create') }}" class="btn btn-success">Create Roles</a>
                    @endcan
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('role.destroy',$role->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        @can('role-edit')
                                        <a href="{{ route('role.edit',$role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        @endcan
                                        @can('role-list')
                                        <a href="{{ route('role.show',$role->id) }}" class="btn btn-info btn-sm">Show</a>
                                        @endcan
                                        @can('role-delete')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                        @endcan
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
