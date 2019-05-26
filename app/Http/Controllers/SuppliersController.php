<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all details of all suppliers
        return Suppliers::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //we will load a create view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
         $this->validate(
            $request,[
                'CompanyName'=>'required',
                'city'=>'required', 'street'=>'required', 'PostalAddress'=>'required',
            ]
            );
            $supplier=Suppliers::find($id);
            $supplier->CompanyName=$request->input('CompanyName');
            $supplier->city=$request->input('city');
            $supplier->street=$request->input('street');
            $supplier->PostalAddress=$request->input('PostalAddress');
  
            $supplier->save();
            return redirect('/supplier')->with('success','supplier Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show specific supplier
        return Suppliers::find($id);
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
        return $supplier = Suppliers::find($id);
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
        $this->validate(
            $request,[
                'CompanyName'=>'required',
                'city'=>'required', 'street'=>'required', 'PostalAddress'=>'required',
            ]
            );
            $supplier=Suppliers::find($id);
            $supplier->CompanyName=$request->input('CompanyName');
            $supplier->city=$request->input('city');
            $supplier->street=$request->input('street');
            $supplier->PostalAddress=$request->input('PostalAddress');
  
            $supplier->save();
            return redirect('/supplier')->with('success','supplier Created');
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
        $supplier=Suppliers::find($id);
        // if(auth()->user()->id !==$supplier->user_id){
        //     return redirect('/supplier')->with('error','UnAuthorised Page'); 
        // }
        $supplier->delete();
        return redirect('/supplier')->with('success','supplier Removed');
    }
}
