<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected  $table = 'posts';

   protected $fillable = ['name', 'quantity', 'price', 'image'];

}
