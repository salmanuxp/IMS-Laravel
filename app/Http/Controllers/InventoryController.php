<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventory.add_items');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
        ]);

        $product = Product::create([

            'product_name' => $request->get('product_name'),
            'product_price' => $request->get('product_price')
        ]);

        $inventory = Inventory::create([

            'product_quantity' => $request->get('product_quantity'),
            'user_id' => Auth::id(),
        ]);

        $inventory->products()->sync([$product->id]);
//        dd($inventory->toArray());
        return redirect()->to('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        $items = Inventory::with('products')->where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
//        dd($items->toArray());
        return view('Inventory.show', compact('items'));
//        return view('Inventory.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id'  => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
        ]);

        $id = $request->get('id');

        $inventory = Inventory::find($request->id);

        $inventory->update([
            'product_quantity'=>$request->get('product_quantity')
        ]);

        $inventory->products()->update([
            'product_name' => $request->get('product_name'),
            'product_price' => $request->get('product_price'),
        ]);


        return redirect()->to('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
