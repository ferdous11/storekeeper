<!-- resources/views/transaction_history.blade.php -->

@extends('layouts.app')

@section('content')
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container mt-4">
        <!-- resources/views/transaction_history.blade.php -->
        <h1>Transaction History</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Action</th> <!-- Add a new column for the Edit button -->
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->price }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>
                            <!-- Add an Edit button that redirects to the product edit page -->
                            <a href="{{ route('products.edit', $transaction->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $transactions->links() }}
    </div>
    </section>
@endsection
