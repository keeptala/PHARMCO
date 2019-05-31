<?php

namespace App;

class Cart 
{   

        ///to add a new item into the cart with the parameters
        /// items,the productId and the old cart
        public static function  add($items,$ProductID,$oldCart){

            $storedItem=[
                'qty'=> 0 ,
                //  'price' => $items->price,
                'price' => 20,
                'item' => $items,
                'ProductID'=>$ProductID,

            ];
            //checking if items array has items
            if($oldCart["items"]){
                //if true then check if the particular item exists in the items array
                //by passing its productID
                if(array_key_exists("".$ProductID."",$oldCart["items"])){
                    //if true then initialize stored item to the item in the cart
                    $storedItem = $oldCart["items"]["".$ProductID.""];
                    $storedItem['qty']++;
                    $storedItem['price'] = $items->price * $storedItem['qty'];
                    $oldCart["items"]["".$ProductID.""]=$storedItem;
                }//if product does not exist in the cart then
                else{
                    $storedItem['qty']++;
                    $storedItem['price'] = $items->price * $storedItem['qty'];
                    //store the new item into the items array
                    $oldCart["items"]["".$ProductID.""] = $storedItem;
                    $oldCart["totalQty"] += 1;
                }

            }//if the cart is empty then
             else{
                 $oldCart = [];
                 $storedItem['qty']++;
                 $storedItem['price'] = $items->price * $storedItem['qty'];
                 $oldCart["items"]["".$ProductID.""]=$storedItem;
                 $oldCart["totalQty"] = 1;
             }
             $oldCart["totalPrice"] = $storedItem["price"];
             return $oldCart;
        }   

}
