<?php

namespace App\Http\Controllers;

use App\OrderProducts;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderedProduct=[];
        $items=$request->session()->get('cart')['items'];
       ///validate that all products are in stock and store the users order to an associative array of orders
       foreach ($items as $item ){
           $quantityInStock=$item['item']['QuantityInStock'];
           if($quantityInStock >= $item['qty']){
              $product=['qty'=>$item['qty'],'price'=>$item['price'],'productID'=>$item['ProductID']];
               $orderedProduct[$item['ProductID']] = $product;
           }
       }

        //first get the current users id
        $AuthUser=auth()->user()->id;
        $order=new Order();
        $order->id=$AuthUser;
        $order->process_status=0;
        $order->deliverStatus='Pending';
        $order->save();
        //after storing the order we retrive the order id so that we can store the orderedProducts
        $orderID=DB::select('select orders.OrderID from orders where orders.id=:AuthUser and orders.process_status=0 ',['AuthUser'=>$AuthUser]);
        //after obtaining the order id we will update the orderedProducts table

        foreach ($orderedProduct as $product){
            $ProductOrdered=new OrderProducts();
            $ProductOrdered->OrderID=$orderID[0]->OrderID;
            $productid=intval($product['productID']);
            $ProductOrdered->ProductID= $productid;
            $ProductOrdered->Quantity=$product['qty'];
            $ProductOrdered->SellingPrice=$product['price'];
            $ProductOrdered->save();
        }
        DB::update('update orders set orders.process_status=1 where orders.OrderID=:id',['id'=>$orderID[0]->OrderID]);
        $request->session()->forget('cart');
        return view('products.ordered');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {

    }
    //Cart::total(); to get the total calculated from the price and weight
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // to get the instance of the cart
    public function edit($id)
    {
        $product = Product::find($id);
        if(!$product) {
             return redirect()->back()->with('failed', 'Product is currently out of stock!');
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => 24.48,
                        "photo" => $product->product_image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->product_image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //takes in the request id

    }
}
