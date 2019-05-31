<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    //
     //table name
     protected $table="customer";
     //primary key
     protected $primaryKey="id";
     //set the timestamps
     public $timestamps=false;
  protected $fillable = [
  'id','Fname','Lname','City','Email','phoneNo','street'
  ];
  public function Orders(){
      return $this->hasMany('App\Order');
  }

}
