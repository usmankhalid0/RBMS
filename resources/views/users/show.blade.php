@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <a href="{{ route('user.index') }}" class="btn btn-success">back</a>
                    <p><strong>Name</strong>:{{ $user->name }}</p>
                    <p><strong>Email</strong>:{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
