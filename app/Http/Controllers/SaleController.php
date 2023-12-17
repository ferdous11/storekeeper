<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Product;

class SaleController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        $quantity = $request->input('quantity');

        $totalPrice = $product->price * $quantity;

        Sale::create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
        ]);

        // Update product quantity
        $product->decrement('quantity', $quantity);

        return redirect()->route('sales.create')->with('success', 'Sale created successfully!');
    }
    public function history()
    {
        $sales = Sale::with('product')->latest()->paginate(10);
        return view('sales.history', compact('sales'));
    }
}
