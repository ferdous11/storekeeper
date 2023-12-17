<!-- resources/views/sales/history.blade.php -->

@extends('layouts.app')

@section('content')
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container mt-4">
    <h1>Sales History</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>${{ $sale->total_price }}</td>
                    <td>{{ $sale->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $sales->links() }}
    </div>
</section>
@endsection
