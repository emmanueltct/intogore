<?php

namespace App\Http\Controllers;

use App\Models\Trending;
use App\Models\RecommendVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AllTrendingForm()
    {
       return view('Trending');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title= str_replace(' ', '-', strtolower($request->trendingTitle));
        $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$title);
        $id= Str::orderedUuid();

        DB::table('trendings')->insert([
            'id'=>$id,
            'trendingTitle' => $request->trendingTitle,
            'urlEndPart'=>$title,
            'sourceLink' => $request->trendingLink,
            'Comments' => $request->comments,
            'created_at' => now()
        ]);

        return redirect()->back()->with('success', 'Your post was saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $trending=DB::table('trendings')->get();
        return view('Admin-All-TrendingPost',compact('trending'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $trending=DB::table('trendings')->where('id',$id)->first();
        return view('Admin-Edit-Trending',compact('trending'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $title= str_replace(' ', '-', strtolower($request->trendingTitle));
        $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$title);
        $id= Str::orderedUuid();

        DB::table('trendings')->where('id',$request->trending_id)->update([
            'trendingTitle' => $request->trendingTitle,
            'urlEndPart'=>$title,
            'sourceLink' => $request->trendingLink,
            'Comments' => $request->comments
        ]);

        return redirect()->back()->with('success', 'Your trending post was updated successfully!');

    }

    public function publish (Request $request){
        $approve='Approved';
        $affected = DB::table('trendings')
                    ->where('id', $request->trending_id)
                    ->update(['status'=>$approve]);
        return redirect()->back()->withSuccess('The Post is approved and visible to public users');  
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        //
        $trending_id=$request->trending_id;
        $affected = DB::table('trendings') ->where('id', $trending_id)->Delete();
        return redirect()->back()->withErrors(['user_update'=>'The Post information is deleted']);
    }

    public function RecommendVideoForm(){
        return view('Admin-recommend-video');
    }

    public function SaveRecommendVideo(Request $request){
        $id= Str::orderedUuid();

        DB::table('recomendation_videos')->insert([
            'id'=>$id,
            'VideoTitle' => $request->VideoTitle,
            'sourceLink' => $request->sourceLink,
            'created_at' => now()
        ]);
        return redirect()->back()->withSuccess('The video recommendation is posted');  
    }
}
