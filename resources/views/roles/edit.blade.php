@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Role Edit</div>
                <div class="card-body">
                    <a href="{{ route('role.index') }}" class="btn btn-success mb-3">Back</a>
                    <form method="post" action="{{ route('role.update',$role->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="mt-2">
                        <label>Name:</label>
                        <input class="form-control" name="name" type="text" value="{{ $role->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror    
                        </div> 
                        <div class="mt-2">
                            <h3>Permission</h3>
                            @foreach ($permiss as $p)
                            <label><input type="checkbox" name="permission[{{ $p->name }}]" value="{{ $p->name }}" {{ $role->hasPermissionTo( $p->name )?'checked':'' }}>{{ $p->name }}</label><br/>
                                
                            @endforeach
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
