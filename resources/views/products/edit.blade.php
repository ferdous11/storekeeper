<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container mt-4">
        <form action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('put')
            <label for="name">Product Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
            <label for="price">Product Price:</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
            <label for="quantity">Product Quantity:</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" required>
            <button type="submit">Update Product</button>
        </form>
    </div>
</section>
@endsection
