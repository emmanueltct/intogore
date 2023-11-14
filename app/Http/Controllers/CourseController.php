<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\course;
use Illuminate\Http\Request;
use DB;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add-course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $path='courses/images';
        $image=$request->courseThumbnail;
        $imageName=imageSize($image,$path);
      
        if($imageName){

        $title= str_replace(' ', '-', strtolower($request->courseTitle));
        $id= Str::orderedUuid();

        $content=SummernoteImage($request->mainCourseIntro);
       course::create(['id'=>$id,'courseTitle'=>$request->courseTitle,'courseEndLink'=>$title,'courseDescription'=>$content,'courseThumbnail'=>$imageName]);
       return redirect('/admin/Add-SubCourse')->with('success', 'Main Course topic was saved successfully! please add sub courses categories');
      // return redirect()->back()->with('success', 'Your post was saved successfully!');
       //
       }else{
           return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
       }

    }
 
    public function AllCourseList(){
        $course=course::all();
        return view('Admin-View-All-Course',compact('course'));
    }


    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($course)
    {
        //
        
        $singlecourse=DB::table('courses')->select()
        ->where('courses.id','=',$course)
        ->first();
        return view('Admin_edit-course',compact(['singlecourse']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
       // return $request->all();
        $title= str_replace(' ', '-', strtolower($request->courseTitle));
        
        $imageName=$request->current_image;

        if($request->hasFile('courseThumbnail')){
            
            $path='courses/images';
            $image=$request->courseThumbnail;
            $imageName=imageSize($image,$path);
          
        }
        
        if($imageName){
        $content=SummernoteImage($request->mainCourseIntro);
        
        course::where('id',$id)->
        update(['courseTitle'=>$request->courseTitle,
        'courseEndLink'=>$title,
        'courseDescription'=>$content,
        'courseThumbnail'=>$imageName,
        'CourseEnroll' =>$request->subscription,
        'CoursePrice' =>$request->courseprice]);
        return redirect()->route('AdmincourseList')->withSuccess('Course information is updated'); 
      
        }else{
            return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $course)
    {
        //
         
        $affected = DB::table('courses') ->where('id', $course)->Delete();
        return redirect()->route('AdmincourseList')->withErrors(['user_update'=>'The course is deleted to our list']);
    }
}
