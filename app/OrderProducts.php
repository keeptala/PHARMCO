<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    //table name
    protected $table="orderproduct";
    //primary key
    public $primaryKey="id";
    //set the timestamps
    public $timestamps=false;

    public function OrderedProducts(){
        return $this->belongsTo('App\Order');
    }
}
