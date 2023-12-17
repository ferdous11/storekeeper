<!-- resources/views/sales/create.blade.php -->

@extends('layouts.app')

@section('content')
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container mt-4">
    <form action="{{ route('sales.store') }}" method="post">
        @csrf
        <label for="product_id">Select Product:</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <button type="submit">Complete Sale</button>
    </form>
    </div>
</section>
@endsection
