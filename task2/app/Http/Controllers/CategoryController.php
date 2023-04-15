<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    public function category(){
        $categories = Category::all();
        return view('admin.category.category',[
            'categories'=>$categories,
        ]);
    }
    public function category_store(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories',
            'category_image'=>'required|image',
        ]);

        if($request->category_image ==''){
            Category::create([
                'category_name'=>$request->category_name,
            ]);
        }else{
            $category_image = $request->category_image;
            $Extention =$category_image->getClientOriginalExtension();
            $file_name = Str::lower(str_replace(' ','_',$request->category_name)).'.'.rand(999999,100000000).'.'.$Extention;
            Image::make($category_image)->save(public_path('uploads/category/'.$file_name));
        }
        Category::insert([
            'category_name'=>$request->category_name,
            'category_image'=>$file_name,
        ]);
        return back();
    }
    public function category_delete(Request $request, $id){
        $category_image = Category::find($request->id);
        if($category_image->category_image != null){
            $delete_from= public_path('uploads/category/'.$category_image->category_image);
            unlink($delete_from);
        }
        // $products = product::where('category_id',$id)->get();
        // return $products;
        // die();


        Category::findOrFail($id)->delete();
        return back()->with('success','Category Deleted Successfully');
    }
    public function category_edit($id){
        $category_id = Category::findOrFail($id);
        return view('admin.category.edit_category',[
            'category_id'=>$category_id,
        ]);
    }

    public function category_update(Request $request){
        $request->validate([
            'category_name'=>'required',
        ]);
        if($request->category_image ==''){
            Category::findOrFail($request->category_id)->update([
                'category_name'=>$request->category_name,
            ]);
            return back();
        }else{
            $present_image = Category::findOrFail($request->category_id);
            $delete_form =public_path('uploads/category/'.$present_image->category_image);
            unlink($delete_form);
            $category_image = $request->category_image;
            $extention =$category_image->getClientOriginalExtension();
            $file_name =$request->category_name.'-'.rand(999999,1000000).'.'.$extention;
            Image::make($category_image)->save(public_path('uploads/category/'.$file_name));
            Category::findOrFail($request->category_id)->update([
                'category_name'=>$request->category_name,
                'category_image'=>$file_name,
            ]);
            return back();
        }
    }
}
