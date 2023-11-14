<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;
class verifyCourses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id=$request->route()->parameters();
      
       $usercourse=DB::table('subcourses')->select(
        'subcourses.id as course_id',
        'courses.courseTitle',
        'subcourses.courseCategory',
        'courses.CourseEnroll',
        'subcourses.SubCourseEndLink',
        'subcourses.created_at')
       ->join('courses','courses.id','=','subcourses.courseCategory')
       ->where('subcourses.SubCourseEndLink','=',$id['id'])
       ->first();

        //dd($usercourse->CourseEnroll);

        if($usercourse->CourseEnroll == "Free"){
            return $next($request);
        }else{
            
            if(!$request->cookie('name')){
                $course=$usercourse->courseTitle;
                return redirect()->route('verifyPaidCourses')->with('',compact('course')); 
            }else{
                $user=$request->cookie('name');
                    $course=DB::table('course_enrollments')->select()
                    ->where('courseId',$usercourse->courseCategory) 
                    ->where('userEmail',$user) 
                    ->where('coursePayment','=','Paid') 
                    ->get(); 
                    
                    if(count($course)>0){
                        return $next($request);
                    }else{
                        return redirect('/Crypto-Courses')->with('error','You are not enrolled to this course, Otherwise claim for your payment verification'); 
                    }
                
                }
            }
       
    }
    
}
