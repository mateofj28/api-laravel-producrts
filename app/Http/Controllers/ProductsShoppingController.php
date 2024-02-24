<?php

namespace App\Http\Controllers;

use App\Models\products_shopping;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productsShopping = products_shopping::all();
        // manda una respuesta en json sobre la lista del productos
        return response()->json($productsShopping);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $productsShopping = new products_shopping;
        $productsShopping->product_id = $request->product_id;
        $productsShopping->shopping_id = $request->shopping_id;
        $productsShopping->save();
        return response()->json($productsShopping, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(products_shopping $productsShoppings_shopping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products_shopping $productsShoppings_shopping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products_shopping $productsShoppings_shopping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products_shopping $productsShoppings_shopping)
    {
        //
    }
}
