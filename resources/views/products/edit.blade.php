@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Create Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Add fields for description, price, image -->
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection