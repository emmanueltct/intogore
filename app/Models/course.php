<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class course extends Model
{
    use HasFactory;
    protected $fillable=['id','courseTitle','courseEndLink','courseDescription','courseThumbnail','CourseEnroll','CoursePrice'];
    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;

    public function subcourses():HasMany
    {
        return $this->hasMany('App\Models\Subcourse','courseCategory');
    }

    public function course_enrollments():HasMany
    {
        return $this->hasMany('App\Models\CourseEnrollment','courseId');
    }
}
