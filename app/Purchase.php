<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //table name
    protected $table="purchase";
    //primary key
    protected $primaryKey="PurchaseNo";
    //set the timestamps
    public $timestamps=false;
    public $_token=false;
    protected $fillable = [
       'PurchaseNo','ProductID','Quantity','dateOfPurchase','BuyingPrice'
        ];

        public function purchase(){
            return $this->belongsTo('App\Suppliers');
        }
        public function product(){
            return $this->belongsTo('App\Product');
        }
}
