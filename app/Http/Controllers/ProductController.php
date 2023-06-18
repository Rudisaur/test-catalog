<?php

namespace App\Http\Controllers;

use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function store(Request $request): View
    {

        $file = $request->file('image');
        $uploadedFileUrl = Cloudinary::upload($file->getRealPath())->getSecurePath();
        $name = $request->input('name');
        $price = $request->input('price');

        Product::query()->create([
            ...compact('name', 'price'),
            'link_to_image' => $uploadedFileUrl,
        ]);

        return view('product-success-store', compact('name', 'price'));
    }

    public function index()
    {
        $products = Product::query()->latest()->take(5)->get()->toArray();

        return view('catalog', compact('products'));
    }
}
