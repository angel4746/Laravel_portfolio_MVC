<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backend.product.manage',['products'=>$products]);
    }
    public function create(){
        return view('backend.product.add');
    }
    public function store(Request $request){
        $product = new Product();
        $product->title =$request->title;
        $product->desc =$request->desc;
       
        $image= $request->image;
        $imgName =$image->getClientOriginalName();
        $folder = 'product-image/';

        $image ->move($folder,$imgName);
        $product->image =$folder.$imgName;
        $product->save(); 
        return back()->with('massage','pic and title added done!!');

    }
   
    public function edit($id){
        $product = Product::find($id);
        return view('backend.product.edit',compact('product'));
    }
    public function update(Request $request, $id){
        $product = product::find($id);
        $product->title =$request->title;
        $product->desc =$request->desc;

        if($request->image){
            if(file_exists($product->image)){
                    unlink($product->image);
                }
                $image= $request->image;
                $imgName =$image->getClientOriginalName();
                $folder = 'product-image/';

                $image ->move($folder,$imgName);
                $product->image =$folder.$imgName;
            }
            $product->save(); 
            return back()->with('massage','pic and title Updated succsefully!!');
        }
    

    public function destroy($id){
        $product = Product::find($id);
        if(file_exists($product->image)){
            unlink($product->image);
        }
        $product -> delete();
        return back()->with('massage','Deleted Succecfully');
    }
}
