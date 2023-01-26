<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Headline;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::all(),
            'headline' => Headline::first(),
            'promotion' => Promotion::first(),
            'features' => Feature::all()
        ];
        return view('home', $data);
    }
}
