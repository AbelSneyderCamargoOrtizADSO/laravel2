<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy("id", "desc")->paginate(3);
        return view("productos.index", compact("products"));
    }

    public function show(Product $product){
        return view("productos.show", compact("product"));
    }

    public function create()
    {
        return view("productos.create");
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:5|max:255',
            'price' => 'required',
            'description' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->route("productos.index");
        // return redirect()->route("productos.index")->with("mensaje", "Producto creado con exito");
    }

    public function edit(Product $product){
        return view("productos.edit", compact('product'));
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required|min:5|max:255',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route("productos.show", $product);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route("productos.index");
    }

}
