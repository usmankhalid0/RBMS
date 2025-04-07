@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create Product</div>
                <div class="card-body">
                    <a href="{{ route('products.index') }}" class="btn btn-success mb-3">Back</a>
                    <form method="post" action="{{ route('products.store') }}">
                        @csrf
                        <div class="mt-2">
                        <label>Name:</label>
                        <input class="form-control" name="name" type="text">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror    
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
