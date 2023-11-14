<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntogoreCategory extends Model
{
    use HasFactory;
    protected $fillable=['id','category','categoryEndLink'];
    protected $primaryKey='id';
    protected $keyType='string';
     public $incremmenting=false;
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);

    }
}
