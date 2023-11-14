<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use App\Models\IntogoreCategory;
use App\Models\Post;
use App\Models\course;
use App\Models\Subcourse;
use App\Models\CourseEnrollment;
use App\Models\CourseComment;
use App\Models\Product;
use App\Models\Trending;
use App\Models\TrendingComment;
use App\Models\RecommendVideo;
use App\Notifications\userNotification;
use Notification;
use Cookie;
use DB;

class HomeControllers extends Controller
{
    //
    public function AdminWelcome(){
        $post=Post::all()->count();
        $course=course::all()->count();
        $product=Product::all()->count();
        $subscribed_user=CourseEnrollment::count();
        $comments=CourseComment::count();
        $trending=Trending::count();
        $post_comment=TrendingComment::count();
        $post_category=IntogoreCategory::count();
        //return $product ;
        return view('Admin_Home', compact(['post','course','product','subscribed_user','comments','trending','post_comment','post_category']));
    }
    public function showIndex(){

        $news=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.PostEndLink  as PostEndLink',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where('intogore_categories.category','=','News')
        ->where('posts.Approval','=','Approved')
        ->orderBy('posts.created_at', 'desc')
        ->limit(4)
        ->get();

      
        $articles=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.PostEndLink  as PostEndLink',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where('intogore_categories.category','=','Articles')
        ->where('posts.Approval','=','Approved')
        ->orderBy('posts.created_at', 'desc')
        ->limit(3)
        ->get();

        $updates=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.PostEndLink  as PostEndLink',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where('intogore_categories.category','=','Crypto analytics')
        ->where('posts.Approval','=','Approved')
        ->orderBy('posts.created_at', 'desc')
        ->limit(4)
        ->get();

        $innovation=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.PostEndLink  as PostEndLink',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where('intogore_categories.category','=','Blockchain Innovations')
        ->where('posts.Approval','=','Approved')
        ->orderBy('posts.created_at', 'desc')
        ->limit(8)
        ->get();

        $products=DB::table('products')->where('Approval','=','Approved')->limit(8)->get();
        $trendings=DB::table('trendings')->latest()->first();
        $courses=DB::table('courses')->select('id','courseTitle','courseDescription','courseThumbnail')
        ->latest()->limit(9)->get();
        //return $products;
        return view('index2',compact(['news','articles','updates','innovation','products','courses','trendings']));
    }

    public function shownAbout(){
        return view('about');
    }

    public function shownContact(){
        return view('contact');
    }



    public function ReadContents ($post_id){
        $category=IntogoreCategory::all();
        $post_id=DB::table('posts')->select('posts.id')->where('posts.PostEndLink','=',$post_id)->get();
        $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')
        ->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.PostEndLink  as PostEndLink',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.postDetailDescription as postDetailDescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where ('posts.id','=',$post_id[0]->id)
        ->where('posts.Approval','=','Approved')
        ->get();

    $Totalcomment=DB::table('trending_comments')->where('postId','=',$post_id[0]->id,)->count();
    $comments=DB::table('trending_comments')->where('postId','=',$post_id[0]->id)->get();
    $countLike= DB::table('trending_likes')->where('postId','=',$post_id[0]->id)->count();
    $recommendVideo=DB::table('recomendation_videos')->latest()->limit(1)->get();        

        return view('single-post',compact(['post','category','Totalcomment','comments','countLike','recommendVideo']));
    }


    public function AllPost($id){
        $category=IntogoreCategory::all();
        if($id=="All"){
            $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
                'posts.id as posts_id',
                'posts.posttitle as posttitle',
                'posts.PostEndLink  as PostEndLink',
                'posts.postThumbnail as postthumbnail',
                'posts.postDescription as postdescription',
                'posts.created_at as createdat',
                'intogore_categories.categoryEndLink as endLink',
                'intogore_categories.category as cat',
                'intogore_categories.id as cat_id',
                )
            ->where('posts.Approval','=','Approved') 
            ->paginate(6)  ;
            
        }else{

            $post_id=DB::table('intogore_categories')->select('intogore_categories.id')->where('intogore_categories.categoryEndLink','=',$id)->get();
            $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
                'posts.id as posts_id',
                'posts.posttitle as posttitle',
                'posts.PostEndLink  as PostEndLink',
                'posts.postThumbnail as postthumbnail',
                'posts.postDescription as postdescription',
                'posts.created_at as createdat',
                'intogore_categories.categoryEndLink as endLink',
                'intogore_categories.category as cat',
                'intogore_categories.id as cat_id',
                )
            ->where('posts.postCategory','=',$post_id[0]->id)
            ->where('posts.Approval','=','Approved')
            ->paginate(6); 
        }

       $counter=DB::table('posts')->select(array('intogore_categories.category as cat','posts.id as post_id','posts.postTitle as post_title','posts.PostEndLink  as PostEndLink','posts.created_at as created_date' ,DB::Raw('COUNT(trending_likes.userLike)as LikeCount')))
       ->join('trending_likes','trending_likes.postId','=','posts.id')
       ->join('intogore_categories','intogore_categories.id','=','posts.postCategory')
       ->where('posts.Approval','=','Approved')
       ->groupBy('posts.id')
       ->orderBy('LikeCount','desc')
       ->take(5)
       ->get();

       $latest=DB::table('posts')->select('intogore_categories.category as cat','posts.id as post_id','posts.postTitle as post_title','posts.PostEndLink  as PostEndLink','posts.created_at as created_date')
       ->join('intogore_categories','intogore_categories.id','=','posts.postCategory')
       ->orderBy('posts.created_at','desc')
       ->where('posts.Approval','=','Approved')
       ->limit(5)
       ->get();
       
       $trendings= DB::table('trendings')->simplePaginate(5);
       $recommendVideo=DB::table('recomendation_videos')->latest()->limit(1)->get();
     //  return $recommendvideo;
        return view('all-post',compact(['post','category','counter','latest','trendings','recommendVideo']));
    }

    public function showCryptoCourses(Request $request,$id){

            $usercourse=DB::table('subcourses')
            ->select('subcourses.id as course_id',
            'subcourses.courseCategory as category_id',
            'courses.courseTitle as cat',
            'courses.courseEndLink as main_course',
            'subcourses.SubCourseEndLink as endLink',
            'subcourses.mainTitle as main_title',
            'subcourses.courseThumbnail  as courseThumbnail',
            'subcourses.courseIntro as course_intro',
            'subcourses.courseDescription as course_description',
            'subcourses.created_at as createdAt')

            ->join('courses','courses.id','=','subcourses.courseCategory')
            ->where('subcourses.SubCourseEndLink','=',$id)
            ->where('subcourses.coursePublishment','=','Released')
            ->get();

            $mainCourse=$usercourse[0]->category_id;        
            $countLike= DB::table('sub_course_likes')->where('subCourseId','=',$usercourse[0]->course_id)->count();
            $AllChapters=DB::table('subcourses')->select()->where('courseCategory',$mainCourse)   
                   ->get();

            return view('SingleCourse',compact(['usercourse','AllChapters','countLike']));
       
    }

    public function showCourses(){
        $course=DB::table('courses')->select()->get();

        //$comments=course::find('9956e4b0-dbb1-4037-b59d-4234500d754b')->subcourses;
       //return $comments;
        return view('All-course',compact(['course']));
    }

    public function getTrendingNews(){
        $trending=DB::table('trendings')->get();
        return view('Trending_news',compact('trending'));
    }

    public function enrollmentCourses($courseid){
      $courseid=DB::table('courses')->select()->where('courseEndLink','=',$courseid)
                        ->first(); 
               
        if($courseid){
         return view('user-course-enroll',compact(['courseid']));
        }else{
            return redirect('/Crypto-Courses')->with('error','The course you are trying to enroll is not availlable, "Try Again"');;         
        }
       
    }

    public function saveEnrollmentCourses(Request $request){
        $request->validate([
            'course_id' => 'required',
            'userEmail' => 'required|email',
            'userPhone' => 'required|max:10',
            'userName' => 'required',   
         ]);
         $check_userEnroll=DB::table('course_enrollments')->select('id')->where('courseId',$request->course_id)
                            ->where('userEmail',$request->userEmail)
                            ->first();

      if(!$check_userEnroll){
          $id= Str::orderedUuid();
          CourseEnrollment::create(['id'=>$id,
                        'courseId'=>$request->course_id,
                        'userEmail'=>$request->userEmail,
                        'userPhone'=>$request->userPhone,
                        'userName'=>$request->userName,
                        'coursePayment'=>'Not Paid',
                        'paymentApprovalCode'=>'0000']);

                        $message=" We are working tirelessly to serve our community, your registration process is received and still in processing, you will have access to our system when your payment is accepted. For other information don't hesitate to communicate with us.";
                        $offeredText=[
                            'subject'=>'Crypto trading course registration',
                            'greeting'=>'Dear '.$request->userName,
                            'name'=>$request->userName,
                            'intro'=>'Thank you for making registration to Intogore.com for accessing our trading courses of Crypto Currency',
                            'body'=>$message,
                            'thanks'=>'Thank you.',
                            'offerText'=>'you can access our free coures here',
                            'offerUrl'=>url('/Crypto-Courses'),
                            'offerId'=>rand(1111,9999),
                        ];
                        Notification::route('mail',$request->userEmail)->notify(new userNotification($offeredText));

                       // $subject="Course registration message";
                        
                       // Mail::to($request->userEmail)
                       // ->send(new ContactMail($request->userName,$request->userEmail,$message,$subject));
                    
                     return redirect()->route('SuccessEnrollmentCryptoCourses')->withSuccess('Thank you for registering to this course you will get confirmation email after Payement is done as well as to be able to access this course. For other information call our number or check your Email notification');
    
            }else{
                return redirect()->route('SuccessEnrollmentCryptoCourses')->withSuccess('You are already registerd to this course, please make sure if you paid Course Fees or contact-us for clarafication');  
            }
        }

public function UserEnrollmentCoursesSuccess(){
    return view('Enrollement_success');
}

public function postCourseComments(Request $request){
    $id= Str::orderedUuid();
    CourseComment::create([
        'id'=>$id,
        'subcourseId'=>$request->post_id,
        'userEmail'=>$request->comment_email,
        'userName'=>$request->comment_name,
        'courseComments'=>$request->comment_message
    ]);
    $comments=CourseComment::all();
    return response()->json(['success'=>200]);
}

 public function getCourseComments($id){
    //return response()->json(['success'=>$id]);
 
    $comments=DB::table('course_comments')->select()->where('subcourseId','=',$id)->orderBy('created_at', 'DESC')->get(); 
    return response()->json(['success'=>$comments]);
 }


 public function verifyCoursesForm(){
    return view('verifyEnroll');
 }

    public function verifyCourses(Request $request){

        //return response()->json(['success'=>$request->userEmail])  ;
        $value1=$request->userEmail;
        $minutes=120;
        Cookie::queue(Cookie::make('name',$value1,$minutes));
        return redirect()->back()->withSuccess('You email Saved to be checked on Course Accessibility please back to our course list');

        if($registered){
           
           // $response=new Response('check user enrollment');
            //return response()->json(['success'=>200])->withCookie(Cookie('name',$course,$minutes));
        }else{ 
            $cookie = \Cookie::forget('name');
            return response()->json(['success'=>400])->withCookie($cookie);
        }
     
   
    }

    public function getCookie(Request $request){
        $value=$request->cookie('name');
        return  $value;
    }
}
