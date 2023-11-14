<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Subcourse extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;

    public function courses(): BelongsTo  
    {  
    return $this->belongsTo('App\Models\course');  
    } 
    
    public function course_comments():HasMany
    {
        return $this->hasMany('App\Models\CourseComment','subcourseId');
    }

}
