<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CourseComment extends Model
{
   // use HasFactory;

    protected $fillable=['id','subcourseId','userEmail','userName','courseComments'];
    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;

    public function sub_courses():BelongsTo  
    {  
    return $this->belongsTo('App\Models\Subcourse');  
    } 

}
