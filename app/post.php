<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //table name
    protected $table="posts";
    //primary key
    public $primarykey="id";
    //set the timestamps
    public $timestamps=true;
}
