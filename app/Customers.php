<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
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

}
