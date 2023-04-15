<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    public function product(){
        $categories = Category::all();
        $products = product::all();
        return view('admin.product.product',[
            'categories'=>$categories,
            'products'=>$products,
        ]);
    }
    public function product_store(Request $request){
        $request->validate([
            'product_name'=>'required|max:20',
            'category'=>'required',
            'product_desc'=>'required',
            'product_price'=>'required',
        ]);
        if($request->product_image == ''){
            product::insert([
                'product_name'=>$request->product_name,
                'category_id'=>$request->category,
                'product_desc'=>$request->product_desc,
                'product_price'=>$request->product_price,
            ]);
            
        }else{
            $product = $request->product_image;
            $extention =$product->getClientOriginalExtension();
            $file_name = Str::lower(str_replace(' ','-',$request->product_name)).'-'.rand(999999,10000000).'.'.$extention;
            Image::make($product)->save(public_path('uploads/product/'.$file_name));
            product::insert([
                'product_name'=>$request->product_name,
                'category_id'=>$request->category,
                'product_image'=>$file_name,
                'product_desc'=>$request->product_desc,
                'product_price'=>$request->product_price,
            ]);
        }
        
        return back();
    }
    public function product_edit($product_id){
        $categories = Category::all();
        $product_info = product::findOrFail($product_id);
        return view('admin.product.edit_product',[
            'product_info'=>$product_info,
            'categories'=>$categories,

        ]);
    }
    public function product_update(Request $request){
        // dd($request->subCategory_image);
        if($request->product_image == ''){
            product::find($request->product_id)->update([
                'product_name'=>$request->product_name,
                'category_id'=>$request->category,
                'product_desc'=>$request->product_desc,
                'product_price'=>$request->product_price,
            ]);
            return back();
        }else{
            $product_image = product::find($request->product_id);
            if($product_image->product_image != null){
                $delete_from= public_path('uploads/product/'.$product_image->product_image);
                unlink($delete_from);
            }
            

            $product = $request->product_image;
            $extention =$product->getClientOriginalExtension();
            $file_name = Str::lower(str_replace(' ','-',$request->product_name)).'-'.rand(999999,10000000).'.'.$extention;
            Image::make($product)->save(public_path('uploads/product/'.$file_name));
            product::find($request->product_id)->update([
                'product_name'=>$request->product_name,
                'category_id'=>$request->category,
                'product_image'=>$file_name,
                'product_desc'=>$request->product_desc,
                'product_price'=>$request->product_price,
            ]);
            return back();
        }
        
    }
    public function product_delete(Request $request, $id){
        $product_image = product::find($request->id);
        if($product_image->product_image != null){
            $delete_from= public_path('uploads/product/'.$product_image->product_image);
            unlink($delete_from);
        }
        product::findOrFail($id)->delete();
        return back()->with('success','Product Deleted Successfully');
    }
}
