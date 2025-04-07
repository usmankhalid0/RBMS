@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Roles</div>
                <div class="card-body">
                    <a href="{{ route('role.index') }}" class="btn btn-success">back</a>
                    <p><strong>Name</strong>:{{ $role->name }}</p>
                    <h3>Permissions</h3>
                    @foreach ($role->permissions as $per )
                    <p>{{ $per->name }}</p><br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
