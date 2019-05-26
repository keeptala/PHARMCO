<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       //table name
       protected $table="products";
       //primary key
       protected $primaryKey="ProductID";
       //set the timestamps
       public $timestamps=false;
    protected $fillable = [
    'QuantityInStock',
    'name', 'ProductID', 'supplierId','description',
    ];

    public function product(){
        return $this->hasMany('App\Suppliers');
    }

    public function purchases(){
        return $this->hasMany('App\Purchase ');
    }
}