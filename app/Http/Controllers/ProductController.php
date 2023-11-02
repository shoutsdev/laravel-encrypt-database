<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(): View
    {
        $products = Product::get();

        return view('products',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'detail' => 'required'
        ]);

        $input = $request->all();

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }
}
