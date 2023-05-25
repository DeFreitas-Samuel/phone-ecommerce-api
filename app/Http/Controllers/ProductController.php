<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function index(): Collection
    {
        return Product::all();
    }

    public function show(string $productId): Product
    {
        return Product::query()->findOrFail($productId);
    }
}
