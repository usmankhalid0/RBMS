@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create Users</div>
                <div class="card-body">
                    <a href="{{ route('user.index') }}" class="btn btn-success mb-3">Back</a>
                    <form method="post" action="{{ route('user.store') }}">
                        @csrf
                        <div class="mt-2">
                        <label>Name:</label>
                        <input class="form-control" name="name" type="text">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror    
                        </div> 
                        <div class="mt-2">
                            <label>Email:</label>
                            <input class="form-control" name="email" type="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror    
                            </div> 
                            <div class="mt-2">
                                <label>Password:</label>
                                <input class="form-control" name="password" type="text">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror    
                                </div> 

                                <div class="mt-2">
                                    <label>Role:</label>
                                    <select class="form-select" name="role[]" multiple>
                                        <option>Seleet Role</option>
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>                                            
                                        @endforeach
                                    </select>  
                                    </div> 

                        <div class="mt-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
