<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\IntogoreCategory;
use App\Models\TrendingComment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
//user App\Lib\SummernoteImage;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
    public function index()
    {
        //
        $category=IntogoreCategory::all();
        //return $category;
        return view('post',compact(['category']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$post=Post::all();
        //return $post;

        $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as posts_id',
            'posts.posttitle as posttitle',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->get();

        $news="";
        $articles="";
        $updates="";
        $innovatio="";
        
      

        //return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
       // return $request;
    $request->validate([

            'postCategory' => 'required',
            'postTitle' => 'required|unique:posts|max:255',
            'postDescription' => 'required|max:500',
            'postDetailDescription' => 'required',
            'postThumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:300,min_height=300',
    ]);

    

  
    $path=$_SERVER['DOCUMENT_ROOT'].'/images';
    $image=$request->postThumbnail;
    $imageName=imageSize($image,$path);
    
    if($imageName){

     $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$request->postTitle);
     $title= str_replace(' ', '-', strtolower($title));
     $id= Str::orderedUuid();
     $content=SummernoteImage($request->postDetailDescription);

        DB::table('posts')->insert([
            //097859
            'id'=>$id,
            'postCategory' => $request->postCategory,
            'posttitle' => $request->postTitle,
            'PostEndLink'=>$title,
            'postThumbnail' => $imageName,
            'postDescription' => $request->postDescription,
            'postDetailDescription'=>$content,
            'created_at' => now()
        ]);
      
          return redirect()->back()->with('success', 'Your post was saved successfully!');
    
        }else{
        return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
    } 
        //
    }


    public function userComments (Request $request){
        $id= Str::orderedUuid();
        DB::table('trending_comments')->insert([
            //097859
            'id'=>$id,
            'postId' => $request->post_id,
            'commentatorEmail' => $request->comment_email,
            'commentatorName' => $request->comment_name,
            'postComments' => $request->comment_message,
            'created_at' => now()
        ]);

        return response()->json(['success'=>'your comment is successfull saved']);
        //return $request->all();
    }

    public function postLike(Request $req){
        $id= Str::orderedUuid();
        DB::table('trending_likes')->insert([
            //097859
            'id'=>$id,
            'postId' => $req->userLike,
            'userLike' =>1,
            'created_at' => now()
        ]);

        $countLike= DB::table('trending_likes')->where('postId','=',$req->userLike)->count();
        return response()->json(['success'=>'thank you for hiting like button','result'=>$countLike]);
    }

    /**
     * Display the specified resource.
     */
    public function adminAllPost(){

        //$test=SummernoteImage();
        //return $test;
        $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as id',
            'posts.posttitle as posttitle',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as postdescription',
            'posts.Approval as approval',
            'posts.created_at as createdat',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->get();
        return view('Admin-All-Post',compact('post'));

    }

 
    public function adminPublishPost(Request $request){
        $approve='Approved';
        $affected = DB::table('posts')
                    ->where('id', $request->post_id)
                    ->update(['Approval'=>$approve]);
        return redirect()->back()->withSuccess('This Post is approved and visible to public users');
    }

    public function userPostComments($id){
        if($id=="All"){
            $comments=TrendingComment::join('posts','trending_comments.postId','posts.id')
            ->select('trending_comments.*','posts.posttitle')
            ->orderBy('created_at', 'DESC')->get();
            return view('Admin-postComments',compact('comments'));
        }else{
        $comments=TrendingComment::join('posts','trending_comments.postId','posts.id')
        ->select('trending_comments.*','posts.posttitle')
        ->where('postId','=',$id)->orderBy('created_at', 'DESC')->get();

        return view('Admin-postComments',compact('comments'));
        }
    }

    public function show($post_id)
    {
        //
        $post=IntogoreCategory::join('posts','intogore_categories.id','posts.postCategory')->select(
            'posts.id as id',
            'posts.posttitle as posttitle',
            'posts.postThumbnail as postthumbnail',
            'posts.postDescription as intro',
            'posts.postDetailDescription as postdescription',
            'posts.Approval as approval',
            'posts.created_at as created_at',
            'intogore_categories.categoryEndLink as endLink',
            'intogore_categories.category as cat',
            'intogore_categories.id as cat_id',
            )
        ->where('posts.id',$post_id)
        ->first();
        return view('Admin-view-SinglePost',compact('post')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $post_id)
    {
        //
        $category=IntogoreCategory::all();
        $post=DB::table('posts')
        ->select()
        ->where('id',$post_id)->first();
        //return $post;
        return view('Admin-EditPost',compact(['post','category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post)
    {
        //
        $request->validate([

            'postCategory' => 'required',
            'postTitle' => 'required|max:255',
            'postDescription' => 'required|max:500',
            'postDetailDescription' => 'required',
            'postThumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $imageName="";
    if($request->hasFile('postThumbnail')){
        $path=$_SERVER['DOCUMENT_ROOT'].'/images';
        $image=$request->postThumbnail;
        $imageName=imageSize($image,$path);
      
    }else{
        $imageName=$request->current_image;
    }
    
    if($imageName){
     $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$request->postTitle);
     $title= str_replace(' ', '-', strtolower($title));
     //$id= Str::orderedUuid();   
       $content=SummernoteImage($request->postDetailDescription);
     

        //return public_path();

        DB::table('posts')
        ->where('id',$request->post_id)
        ->update([
            'postCategory' => $request->postCategory,
            'posttitle' => $request->postTitle,
            'PostEndLink'=>$title,
            'postThumbnail' => $imageName,
            'postDescription' => $request->postDescription,
            'postDetailDescription'=>$content,
            'created_at' => now()
        ]);
            return redirect()->back()->with('success', 'Your post was saved successfully!');
        }else{
         return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
        }
    }

   public function  removePostComment(Request $request){
    $comment_id=$request->comment_id;
        $affected = DB::table('trending_comments') ->where('id',$comment_id)->Delete();
        return redirect()->back()->withErrors(['user_update'=>'One comment is deleted']);
   }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $post_id=$request->post_id;
        $affected = DB::table('posts') ->where('id',$post_id)->Delete();
        return redirect()->route('adminViewAllPost')->withErrors(['user_update'=>'One post information is deleted']);
    }
}
