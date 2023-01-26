<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $product_count = Product::count();
        $user_count = User::count();
        return view('dashboard', [
            'product_count' => $product_count,
            'user_count' => $user_count,
        ]);
    }
}
