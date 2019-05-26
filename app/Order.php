<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
    //table name
    protected $table="orders";
    //primary key
    protected $primaryKey="OrderID";
    //set the timestamps
    public $timestamps=false;
    public $_token=false;
    protected $fillable = [
        'OrderID','id','dateOfOrder','deliverStatus','BuyingPrice','DateOfDelivery'
        ];
        // public function OrderProduct(){
        //     return $this->hasMany('App\Suppliers');
        // }
    

}
