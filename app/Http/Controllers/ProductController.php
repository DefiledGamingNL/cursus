<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{

    public function index()
    {
        return Inertia::render('Products/Index');
    }

    public function show(Product $product): Response
    {
        return Inertia::render('Products/Show', [
            'product' => $product
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Products/Create');
    }

}
