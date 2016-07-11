<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class projects extends Model
{
	use SoftDeletes;

   protected $dates = ['deleted_at'];
   protected $fillable = ['title','details','date'];
   public $timestamps = false;   

  

}
