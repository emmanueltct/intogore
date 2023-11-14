<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  

    public function index()
    {
        //
        $products=DB::table('products')->where('Approval','=','Approved')->get();
        //return $products;
        return view("All-Products",compact(['products']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=DB::table('products')->get();
        return view('products',compact(['products']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'companyTitle' => 'required',
            'productName' => 'required|unique:products|max:255',
            'productPrice' => 'required|numeric|min:0',
            'productDiscount' => 'required|numeric|min:0',
            'Currency'=>'required|max:8',
            'productThumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

     

        $imageName = time().'.'.$request->productThumbnail->extension();  
        $path="/public/product/images";
        $request->file('productThumbnail')->storeAs($path,$imageName);
       
       if($imageName){

        $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$request->productName);
        $title= str_replace(' ', '-', strtolower($title));
        $id= Str::orderedUuid();


            DB::table('products')->insert([ 
                'id'=>$id,
                'companyTitle' => $request->companyTitle,
                'productName' => $request->productName,
                'productEndLink'=>$title,
                'productPrice' => $request->productPrice,
                'productDiscount' => $request->productDiscount,
                'productCurrency'=>$request->Currency,
                'productThumbnail' => $imageName,
                'created_at' => now()
            ]);
    
            return redirect()->back()->with('success', 'Your post was saved successfully!');  
        }else{
            return redirect()->back()->withErrors(['Thumbnail image should be a rectangle or square format']); 
        }
    }


    public function AdminAllProduct(){
        $products=DB::table('products')->get();
        return view('Admin-All-Products',compact(['products'])); 
    }

    public function publishProducts(Request $request){
        $approve='Approved';
        $affected = DB::table('products')
                    ->where('id', $request->product_id)
                    ->update(['Approval'=>$approve]);
        return redirect()->back()->withSuccess('This Product is approved and visible to public users'); 
 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $all_product=DB::table('products')->get();
        $product=DB::table('products')->where('productEndLink',$id)->first();
        return view('product-detail',compact(['product','all_product']));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        //
        $products=DB::table('products')->where('id',$product)->first();
        return view('Admin-EditProduct',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        //
        $request->validate([
            'productName' => 'required|max:255',
            'productPrice' => 'required|numeric|min:0',
            'productDiscount' => 'required|numeric|min:0',
            'Currency'=>'required|max:8',
            'productThumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

        $imageName="";

        if($request->hasFile('productThumbnail')){
           
            $imageName = time().'.'.$request->productThumbnail->extension(); 
            $path=$_SERVER['DOCUMENT_ROOT']."/product/images";
            $request->productThumbnail->move($path,$imageName);
        }else{
            $imageName=$request->product_image; 
        }

      
        
        $title = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$request->productName);
        $title= str_replace(' ', '-', strtolower($title));
        $id= Str::orderedUuid();


            DB::table('products')->where('id',$request->product_id)
             ->update([ 
                'productName' => $request->productName,
                'productEndLink'=>$title,
                'productPrice' => $request->productPrice,
                'productDiscount' => $request->productDiscount,
                'productCurrency'=>$request->Currency,
                'productThumbnail' => $imageName
            ]);
    
            return redirect()->back()->with('success', 'The Product information updated successfully!');  

       
       // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */

    public function ProductLike(Request $req){
        $id= Str::orderedUuid();
        DB::table('product_likes')->insert([
            //097859
            'id'=>$id,
            'productId' => $req->userLike,
            'userLike' =>1,
            'created_at' => now()
        ]);

             $countLike= DB::table('product_likes')->where('productId','=',$req->userLike)->count();
             return response()->json(['success'=>'thank you for hiting like button','result'=>$countLike]);
    }


    public function destroy(Request $request)
    {
        //
       
        $product_id=$request->product_id;
        $affected = DB::table('products') ->where('id', $product_id)->Delete();
        return redirect()->back()->withErrors(['user_update'=>'The product information is deleted']);
    }
}
