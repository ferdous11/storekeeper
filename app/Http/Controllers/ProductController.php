<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();

        return redirect()->route('products.create')->with('success', 'Product created successfully!');
    }


public function dashboard()
{
    $todaySales = $this->getSalesForDate(now());
    $yesterdaySales = $this->getSalesForDate(now()->subDay());
    $thisMonthSales = $this->getSalesForDate(now()->startOfMonth());
    $lastMonthSales = $this->getSalesForDate(now()->subMonth()->startOfMonth());

    return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
}

private function getSalesForDate($date)
{
    return Product::whereDate('created_at', $date)->sum('quantity');
}

public function transactionHistory()
{
    $transactions = Product::orderBy('created_at', 'desc')->paginate(10);
    return view('transaction_history', compact('transactions'));
}

public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $product->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'quantity' => $request->input('quantity'),
    ]);

    return redirect()->route('products.edit', $product->id)->with('success', 'Product updated successfully!');
}

}
