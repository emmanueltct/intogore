<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntogoreCategory;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category=IntogoreCategory::all();
        return view('Admin-Post-Category' , compact(['category']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $id= Str::orderedUuid();
        $title= str_replace(' ', '-', strtolower($request->categoryName));
       IntogoreCategory::create(['id'=>$id,'category'=>$request->categoryName,'categoryEndLink'=>$title]);
       return redirect()->back()->with('success', 'Your post was saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category=IntogoreCategory::find($id);
        return view('Admin_edit_post_category',compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $title= str_replace(' ', '-', strtolower($request->categoryName));
       $category=IntogoreCategory::where('id',$id)

        ->update([
            'category'=>$request->categoryName,
            'categoryEndLink'=>$title,
            'created_at' => now()
        ]);
        return redirect()->route('viewcategory')->withSuccess("Data is updated successful");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=IntogoreCategory::destroy($id);
        return redirect()->route('viewcategory')->withErrors("Data is removed successful");
    }
}
