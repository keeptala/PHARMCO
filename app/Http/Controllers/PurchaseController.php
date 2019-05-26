<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class PurchaseController extends Controller
{
    public function __construct()
    { }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_of_purchase = Purchase::all();
        return view('purchase.index')->with('purchases',$list_of_purchase);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load a list of purchase
        return view('purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //we get the request of the purchase and store it in the database
        $purchase=new Purchase;       
        $purchase->ProductID=$request->input('ProductID'); 
        $purchase->BuyingPrice=$request->input('BuyingPrice');
        $purchase->Quantity=$request->input('Quantity');
        // dd($request->all());
        // $purchase->purchases->Product()->update($request,$purchase->ProductID);
        $purchase->save();
        return redirect('/purchase')->with('success','Purchase made');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //shows a specific purchase
       $purchase= Purchase::find($id);
       return view('purshase.show')->with('post',$purchase);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
