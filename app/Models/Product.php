<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $keyType='string';
     public $incremmenting=false;

     public function product_likes():HasMany
     {
         return $this->hasMany('App\Models\ProductLike','productId');
     }
}
