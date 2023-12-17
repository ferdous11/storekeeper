@extends('layouts.app')

@section('content')
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container mt-4">
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        <label for="price">Product Price:</label>
        <input type="number" name="price" step="0.01" required>
        <label for="quantity">Product Quantity:</label>
        <input type="number" name="quantity" required>
        <button type="submit">Add Product</button>
    </form>
    </div>
</section>
    @endsection