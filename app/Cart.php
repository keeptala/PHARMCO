<?php

namespace App;

class Cart 
{   


        public static function  add($items,$ProductID,$oldcart){

            $storedItem=[
                'qty'=> 0 ,
                //  'price' => $items->price,
                'price' => 20,
                'item' => $items,
                'ProductID'=>$ProductID,

            ];
            //checking if items array has items
            if($oldcart["items"]){
                //if true then check if the particular item exists in the items array
                //by passing its productID
                if(array_key_exists("".$ProductID."",$oldcart["items"])){
                    //if true the initialize stored item to the item in the cart
                    $storedItem = $oldcart["items"]["".$ProductID.""];
                    $storedItem['qty']++;
                    $storedItem['price'] = $items->price * $storedItem['qty'];
                    $oldcart["items"]["".$ProductID.""]=$storedItem;
                }//if product does not exist in the cart then
                else{
                    $storedItem['qty']++;
                    $storedItem['price'] = $items->price * $storedItem['qty'];
                    //     //store the new item into the items array
                    $oldcart["items"]["".$ProductID.""] = $storedItem;
                    $oldcart["totalQty"] += 1;
                }

            }//if the cart is empty then
             else{
                 $oldcart = [];
                 $storedItem['qty']++;
                 $storedItem['price'] = $items->price * $storedItem['qty'];
                 $oldcart["items"]["".$ProductID.""]=$storedItem;
                 $oldcart["totalQty"] = 1;
             }
             $oldcart["totalPrice"] = $storedItem["price"];
             return $oldcart;
        }   

}
