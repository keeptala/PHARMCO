<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customers::all();
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
        //
        $this->validate(
            $request,[
                'Fname'=>'required','Lname'=>'reqired','City'=>'required',
                'Email'=>'required','phoneNo'=>'required','street'=>'required'
            ]
            );
            $customer=Customer::find($id);
            $customer->Fname=$request->input('Fname');
            $customer->Lname=$request->input('Lname');
            $customer->City=$request->input('City');
            $customer->Email=$request->input('Email');
            $customer->phoneNo=$request->input('phoneNo');
            $customer->street=$request->input('street');
            
            $customer->save();
            return redirect('/customer')->with('success','customer Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Customers::find($id);
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
       return $customer = Customers::find($id);
        
     
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
        $this->validate(
            $request,[
                    'Fname'=>'required','Lname'=>'reqired','City'=>'required',
                    'Email'=>'required','phoneNo'=>'required','street'=>'required'
            ]
            );
            $customer=Customer::find($id);
            $customer->Fname=$request->input('Fname');
            $customer->Lname=$request->input('Lname');
            $customer->City=$request->input('City');
            $customer->Email=$request->input('Email');
            $customer->phoneNo=$request->input('phoneNo');
            $customer->street=$request->input('street');
            
            $customer->save();
            return ['success'=>'Post Updated'];
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
        $customer=Customer::find($id);
        // if(auth()->user()->id !==$customer->user_id){
        //     return redirect('/customer')->with('error','UnAuthorised Page'); 
        // }
        $customer->delete();
        return redirect('/customer')->with('success','customer Removed');
    }
}
