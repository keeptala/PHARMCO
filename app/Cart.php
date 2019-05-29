<?php

namespace App;

class Cart 
{   
    //items is an associative array of items currently in the shoping cart
        public $items=null;
        public $totalQty=0;
        public $totalPrice=0;

        public function __constructor($oldCart){
            if($oldCart){
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }
        }
        public function  add($items,$ProductID){
             $storedItem=[
                 'qty'=> 0 ,
                 'price' => $items->price,
                 'item' => $items,
                 'ProductID'=>$ProductID,
                'Product_image'=> $items->Product_image
                ];
             //checking if items array has items
             if($this->items){
                 //if true then check if the particular item exists in the items array
                 //by passing its productID
                 if(array_key_exists($ProductID,$this->items)){
                     //if true the initialize stored item to the item in the cart
                        $storedItem = $this->items[$ProductID];}
                //         $storedItem['qty']++;
                //         $storedItem['price'] = $items->price * $storedItem['qty'];
                //         $this->items[$ProductID]=$storedItem;
                //  }//if product does not exist in the cart then
                //  else{
                //     $storedItem['qty']++;
                //     $storedItem['price'] = $items->price * $storedItem['qty'];
                //     //store the new item into the items array 
                //     $this->items[$ProductID]=$storedItem;
                    
                //  }
             }//if the cart is empty then
             $storedItem['qty']++;
             $storedItem['price'] = $items->price * $storedItem['qty'];
             $this->items[$ProductID]=$storedItem;
             $this->totalQty += 1;
             $this->totalPrice += $items->price;
            
        }   

}
