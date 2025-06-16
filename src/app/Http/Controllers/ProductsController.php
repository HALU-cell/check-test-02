<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Support\Composer;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::simplePaginate(6);
        return View('index', compact('products'));
    }

    public function search(Request $request) {
        $products = Product::KeywordSearch($request->keyword)->simplePaginate(6);
        return view('index', compact('products'));
    }

    public function detail($id) {
        $product = Product::find($id);
        return view('detail', compact('product'));
    }

    public function update(Request $request){

        return redirect('/products');
    }

    public function register() {
        return view('register');
    }
}
