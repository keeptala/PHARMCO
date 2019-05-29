<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Order;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Now, when iterating over the content of the cart, you can access the model.
        foreach(Cart::content() as $row) {
	echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
}
        // return Cart::Content();
        // // $list_of_purchase = Order::all();
        // return view('purchase.index')->with('purchases',$list_of_purchase);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Cart::add('1', 'buffen',12,20,null,['product_image'=>'noimage']);
        // // //create a new order
        // // return view('products.cart');
        // You can even make it a one-liner
Cart::add('3', 'buprenex', 12, 10, 50, ['size' => 'small'])->associate('Product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //adding using array syntax
        //Cart::add(['id' => '293ad', 
        //'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']])
        //add takes in the id,name,quantity,price,weight,[extra atributes]
       $add= Cart::add('1', 'buffen',12,20,null,['product_image'=>'noimage']);
        if($add){echo 'done';}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        return Cart::get($Id);
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
        $rowId = '"27bb92aa49b4151d5065d56d483dd495"';

        Cart::update($rowId, 2); // Will update the quantity
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
        $rowId = '8cbf215baa3b757e910e5305ab981172';

        Cart::remove($Id);
    }
}
