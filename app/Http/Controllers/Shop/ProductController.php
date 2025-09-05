<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::query()
            ->with(['images', 'category'])         // eager load supaya hemat query
            ->when($request->q, fn($q) =>
                $q->where('name', 'like', '%'.$request->q.'%')
            )
            ->when($request->category, fn($q, $cat) =>
                $q->whereHas('category', fn($qq) => $qq->where('slug', $cat)->orWhere('name', $cat))
            )
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();

        return view('products.collection', compact('products'));
    }

    public function show(Products $product) 
    {
        $product->load(['images', 'category']);
        return view('products.show', compact('product'));
    }
}
