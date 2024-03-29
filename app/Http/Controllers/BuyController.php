<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buys = Buy::all();
        // manda una respuesta en json sobre la lista del productos
        return response()->json($buys);

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
        $buy = new Buy;
        $buy->name = $request->name;
        $buy->totalPrice = $request->totalPrice;
        $buy->save();
        return response()->json($buy, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buy $buy)
    {
        //

        $buys = Buy::all();

        $arrayAnswer = $buys->map(function($buy){
            return [
                'message' => 'buy details',
                'buy' => $buy,
                'products' => $buy->products
            ];
        })->all();

        

        return response()->json($arrayAnswer);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buy $buy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
