<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    use HasFactory;

    protected $fillable=['id','courseId','userEmail','userPhone','userName','coursePayment','paymentApprovalCode','	updated_at'];
    protected $primaryKey='id';
    protected $keyType='string';
    public $incremmenting=false;

    public function courses():BelongsTo  
    {  
        return $this->belongsTo('App\Models\course');  
    } 
}
