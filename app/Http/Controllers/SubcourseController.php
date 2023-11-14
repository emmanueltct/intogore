<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Subcourse;
use App\Models\course;
use App\Models\CourseComment;
use Illuminate\Http\Request;

use DB;
class SubcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(!isset($_GET['Chapter'])){

        }else{
            $id=$_GET['Chapter'];
            $course=Subcourse::join('courses','courses.id','subcourses.courseCategory')
                    ->select('subcourses.id as id',
                            'subcourses.courseCategory as cat',
                            'subcourses.mainTitle as title',
                            'subcourses.courseIntro as intro',
                            'subcourses.courseThumbnail as thumbnail',
                            'subcourses.courseDescription as description',
                            'subcourses.coursePublishment as publishes',
                            'subcourses.created_at as created_at',
                            'courses.courseTitle as main_course',
                            )
                    ->where('subcourses.courseCategory',$id)
                    ->get();
        // return $course;
            return view('Admin-view-subcourse',compact(['course']));
        }
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $course=course::orderBy('created_at','desc')->get();
        return view('add-subCourse', compact(['course']));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     * 
     */

    public function store(Request $request)
    {
        //
        //return $request->all();
       
       
        $path='courses/images';
        $image=$request->courseThumbnail;
        $imageName=imageSize($image,$path);
      
        if($imageName){
        $content=SummernoteImage($request->courseDescription);
        $title= str_replace(' ', '-', strtolower($request->mainTitle));
        $id= Str::orderedUuid();

        DB::table('subcourses')->insert([
           
            'id'=>$id,
            'courseCategory' => $request->courseCategory,
            'mainTitle' => $request->mainTitle,
            'SubCourseEndLink'=>$title,
            'courseThumbnail' => $imageName,
            'courseIntro' => $request->courseIntro,
            'courseDescription'=>$content,
            'created_at' => now()
        ]);
            return redirect()->back()->with('success', 'Your post was saved successfully!');
        //
        }else{
            return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
        }
    }

    public function publishSubCourse(Request $request){
         $approve='Released';
         $affected = DB::table('subcourses')
                ->where('id', $request->course_id)
                ->update(['coursePublishment'=>$approve]);
    return redirect()->back()->withSuccess('The Course is approved and is visible to public users'); 
    }

    public function adminCourseComment(){
        if(isset($_GET['Course'])){
           
            if($_GET['Course']=="All"){
                $main="";
                $id=$_GET['Course'];
                $comments=CourseComment::join('subcourses','course_comments.subcourseId','subcourses.id')
                ->select('course_comments.*','subcourses.mainTitle')
                ->orderBy('Created_at', 'DESC')->get();  
                
               // return view('admin_comment',compact('comments')); 
            }
            else{
            $main=$_GET['heading'];    
            $id=$_GET['Course'];
            $comments=CourseComment::join('subcourses','course_comments.subcourseId','subcourses.id')
            ->select('course_comments.*','subcourses.mainTitle')
            ->where('subcourseId','=',$id)->orderBy('Approval', 'DESC')->get();  
        }
        return view('admin_comment',compact(['comments','main']));
    }else{
        $comments=[];
        return view('admin_comment',compact('comments'))->withErrors(['user'=>'It seems like youre using wrong Url please back to Course list']);    
        }
    }


public function confirmComment(Request $request){
    $approve='Approved';
    $affected = DB::table('course_comments')
                ->where('id', $request->course_id)
                ->update(['Approval'=>$approve]);
    return redirect()->back()->withSuccess('User comments is approved and visible to public users');
}

public function removeComment(Request $request){
    $affected = DB::table('course_comments')
                ->where('id',$request->course_id )->delete();
    return redirect()->back()->withErrors(['user_update'=>'User comment is permanently deleted']); 
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $subcourse=DB::table('subcourses')->select()
        ->where('subcourses.id','=',$id)
        ->first();
        //return  $subcourse;
        return view('Admin_view_SingleCourse',compact('subcourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $course=course::orderBy('created_at','desc')->get();

        $subcourse=DB::table('subcourses')->select()
        ->where('subcourses.id','=',$id)
        ->first();
        return view('Admin_edit_SingleCourse',compact(['subcourse','course']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $subcourse)
    {
        //

        $imageName=$request->current_image;

        if($request->hasFile('courseThumbnail')){
            
            $path='courses/images';
            $image=$request->courseThumbnail;
            $imageName=imageSize($image,$path);
          
        }
        
        if($imageName){
        $title= str_replace(' ', '-', strtolower($request->mainTitle));
        $id= Str::orderedUuid();

        $content=SummernoteImage($request->courseDescription);
        DB::table('subcourses')->where('id',$request->subcourse_id)
            ->update([
            'courseCategory' => $request->courseCategory,
            'mainTitle' => $request->mainTitle,
            'SubCourseEndLink'=>$title,
            'courseThumbnail' => $imageName,
            'courseIntro' => $request->courseIntro,
            'courseDescription'=>$content,
            'updated_at' => now()
        ]);
        return redirect()->route('showSingleSubCourse',$subcourse)->withSuccess('Course information is updated'); 
        
        }else{
        return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
    }
    }

    /**
     * Remove the specified resource from storage.
     */

     public function SubCourseLike(Request $req){
        $id= Str::orderedUuid();
        DB::table('sub_course_likes')->insert([
            //097859
            'id'=>$id,
            'subCourseId' => $req->userLike,
            'userLike' =>1,
            'created_at' => now()
        ]);

        $countLike= DB::table('sub_course_likes')->where('subCourseId','=',$req->userLike)->count();
        return response()->json(['success'=>'thank you for hiting like button','result'=>$countLike]);
    }

    public function destroy(Request $request)
    {
        //
        $deleteCourse=$request->course_id;
        $course_id=$request->course_category;
        
        $affected = DB::table('subcourses') ->where('id',$deleteCourse )->Delete();
        return redirect()->route('allSubCourse',['Chapter'=>$course_id])->withErrors(['user_update'=>'The course chapter is deleted']);
    }
}
