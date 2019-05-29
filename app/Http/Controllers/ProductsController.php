<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\cart;
use Session;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::orderBy('name','desc')->paginate(10);
       return view('products.card')->with('products',$products);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return the create Product view
        return view('Products.create');
    }

  //displays a specific resource
    public function store(Request $request)
    {
       //stores and validate data from a form
       $this->validate(
        $request,[
                'name'=>'required',
                'description'=>'required',
                'product_image'=>'image|nullable|max:1999'
                ]
        );
//todo:handle image upload
        $productImageToStore="noimage.jpg";
        $product=new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->supplierid = $request->input('Supplierid');
        $product->product_image=$productImageToStore;
        $product->save();
        return redirect('/product')->with('success','Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //specific product
//        $product= product::find($id);
//        return $request->session()->all();
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //locate the product to be deleted then load the edit view
        $product=Product::find($id);
        return view('products.edit')->with('product',$product);
    }

    public function getAddToCart(Request $request,$productID){
        $product = Product::find($productID);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
       // dd($oldcart);
        $cart = Cart::add($product,$productID,$oldcart);
        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        $message=$product->name.'  added to cart';
        return back()->with('success',$message);
    }
    public function getCart(){
        if(!session::has('cart')){
            return view('products.cart');
        }
        $items=session::get('cart')["items"];

        return view('products.cart')->with('items', $items );
       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate(
            $request,[
                    'name'=>'required',
                    'description'=>'required'
            ]
            );
            $product=Product::find($id);
            $product->name=$request->input('name');
            $product->description=$request->input('description');
            $product->save();
            return redirect('/products')->with('success','Product Updated');
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
        $product=Product::find($id);
        $product->delete();
        return redirect('/products')->with('success','Product Removed');
    }
}
