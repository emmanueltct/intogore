<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\Subcourse;
use App\Models\CourseEnrollment;
use App\Models\CourseComment;
use App\Notifications\userNotification;
use Notification;
use DB;

class CourseEnrollmentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    if(!isset($_GET['Course'])){
        $subscribed_user=[];
        return view('enrolled-Users',compact('subscribed_user'))->withErrors(['user'=>'It seems like youre using wrong Url please back to Course list']); 
    }else{

            if($_GET['Course']=="All"){
                $subscribed_user=CourseEnrollment::join('courses','course_enrollments.courseId','courses.id')
                ->select('course_enrollments.id as id',
                'courses.courseTitle as title',
                'courses.CourseEnroll as enroll',
                'courses.CoursePrice as price',
                'course_enrollments.userEmail as email',
                'course_enrollments.userPhone as phone',
                'course_enrollments.userName as names',
                'course_enrollments.coursePayment as payment',
                'course_enrollments.paymentApprovalCode as code',
                'course_enrollments.created_at as date'
                )
                ->orderBy('course_enrollments.coursePayment', 'asc')
                ->get();
        
                return view('enrolled-Users',compact('subscribed_user'));
            }else{

            $course_id=$_GET['Course'];
            $subscribed_user=CourseEnrollment::join('courses','course_enrollments.courseId','courses.id')
            ->select('course_enrollments.id as id',
            'courses.courseTitle as title',
            'courses.CourseEnroll as enroll',
            'courses.CoursePrice as price',
            'course_enrollments.userEmail as email',
            'course_enrollments.userPhone as phone',
            'course_enrollments.userName as names',
            'course_enrollments.coursePayment as payment',
            'course_enrollments.paymentApprovalCode as code',
            'course_enrollments.created_at as date'
            )
            ->where('course_enrollments.courseId','=',$course_id)
            ->orderBy('course_enrollments.coursePayment', 'asc')
            ->get();
    
            return view('enrolled-Users',compact('subscribed_user'));
            }
        }
    }
    public function updateConfirm(Request $request){
        $code=time();
        $approve="Paid";
        $affected = DB::table('course_enrollments')
              ->where('id', $request->course_id)
              ->update(['coursePayment'=>$approve,'paymentApprovalCode' => $code]);
        $confirmedUser=DB::table('course_enrollments')->where('id', $request->course_id)->get();
        //return $confirmedUser[0]->userName;
        
        
        $message="You have access to all subscribed courses and you will be requested to provide your email the same as one you used to register on this course for enrollement verification. If you face any trouble to access our courses please call us on 0781942079 or use our contact page for user enrollement clarifications";
        $offeredText=[
            'subject'=>'Crypto trading courses Payment confirmation',
            'greeting'=>'Dear '.$confirmedUser[0]->userName,
            'name'=>$confirmedUser[0]->userName,
            'intro'=>'Thank you for making payment to our crypto trading courses on Intogore.com, your payment was received successfully',
            'body'=>$message,
            'thanks'=>'Thank you.',
            'offerText'=>'you can access our free coures here',
            'offerUrl'=>url('/Crypto-Courses'),
            'offerId'=>rand(1111,9999),
        ];
             Notification::route('mail',$confirmedUser[0]->userEmail)->notify(new userNotification($offeredText));

              return redirect()->back()->withSuccess('User Information is updated and payment is confirmed');
    }

    public function updateRemove(Request $request){
        $code='0000';
        $approve="Not Paid";
        $affected = DB::table('course_enrollments')
              ->where('id', $request->course_id)
              ->update(['coursePayment'=>$approve,'paymentApprovalCode' => $code]);
              return redirect()->back()->withErrors(['user_update'=>'User Information is updated and payment confirmation is removed']);
    }

    public function updateDelete(Request $request){
        $affected = DB::table('course_enrollments')
              ->where('id', $request->course_id)
              ->Delete();
              return redirect()->back()->withErrors(['user_update'=>'User Payment Information is deleted']);
    }
}
