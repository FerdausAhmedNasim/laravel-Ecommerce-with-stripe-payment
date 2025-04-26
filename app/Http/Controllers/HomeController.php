<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'admin') {
                return view('backend.layouts.dashboard.index');
            } elseif ($usertype == 'user') {
                $products = Product::paginate(10); // প্রতিপৃষ্ঠায় ১০টি প্রোডাক্ট
                return view('frontend.layouts.home.index', compact('products'));
            }
        }

        return redirect()->route('login');
    }
}
