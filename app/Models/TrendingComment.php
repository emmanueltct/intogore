<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingComment extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;
    
    public function posts(): BelongsTo  
        {  
        return $this->belongsTo('App\Models\Post');  
        }  
}
