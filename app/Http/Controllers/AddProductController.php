<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function create() {
        return view('add_product', ['categories' => Category::all(),]);
    }

    public function store() {
        $this->validate(request(), [
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $product = Product::create(\request(['category_id', 'name', 'image', 'price', 'quantity']));

        return redirect()->to('/');

    }
}
