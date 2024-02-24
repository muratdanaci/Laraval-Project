<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->created_at = $request->created_at;
        $product->updated_at = $request->updated_at;
        $product->active = $request->active;
        $product->save();
        return redirect()->back();
    }

    public function edit ($id)
    {
        $product = Products::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->created_at = $request->created_at;
        $product->updated_at = $request->updated_at;
        $product->active = $request->active;
        $product->save();
        return redirect()->back();
    }

    public function delete ($id)
    {
        Products::find($id)->delete();
        return redirect()->back();
    }
}
