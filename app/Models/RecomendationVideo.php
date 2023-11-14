<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecomendationVideo extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;
}