<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
      //table name
      protected $table="suppliers";
      //primary key
      protected $primaryKey="supplierid";
      //set the timestamps
      
   protected $fillable = [
   'CompanyName','city', 'street', 'supplierId','PostalAddress',
   ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
