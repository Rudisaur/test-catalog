<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function store(Request $request): View
    {
        $file = $request->file('image');
        $filePath = $file->store('images');
        $name = $request->input('name');
        $price = $request->input('price');

        Product::query()->create([
            ...compact('name', 'price'),
            'link_to_image' => $filePath,
        ]);

        return view('product-success-store', compact('name', 'price'));
    }

    public function index()
    {

    }
}
