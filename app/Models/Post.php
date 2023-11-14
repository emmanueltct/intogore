<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\TrendingComment;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;

    public function trending_comments():HasMany
    {
        return $this->hasMany('App\Models\TrendingComment','postID');
    }

    public function trending_likes():HasMany
    {
        return $this->hasMany('App\Models\TrendingLike','postID');
    }

}
