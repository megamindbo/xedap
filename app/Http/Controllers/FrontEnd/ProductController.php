<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function details($id)
    {
//        var_dump(3333333333);die;

//        $products = DB::table('products')->select(DB::raw('count(*) as productCount , name , image,os'))
//            ->groupBy('name')
//            ->get();
        //dd($categories);
        // $categories = Category::all();
        $productDetails = Product::find($id);
        $productDetailsImage = ProductImages::where('product_id',$id)->pluck('image')->first();
        $productDetailsImageAlls = ProductImages::where('product_id',$id)->pluck('image');
//        dd($productDetailsImageAlls);
        //relate product
//        $productRelates = Product::where('id','<>',$id)->where('category_id',$productDetails->category_id)->get();
        //get count product  in cart
//        if(empty(\Auth::check())){
//            $session_id = Session::get('session_id');
//            $countProducts =  DB::table('carts')->where('session_id',$session_id)->count();
//        }else
//        {
//            $use_email = Auth::user()->email;
//            $countProducts =  DB::table('carts')->where('user_email',$use_email)->count();
//        }
//        ,compact('productDetails','productDetailsImage','productDetailsImageAll')
        return view('frontend.layoutsproduct.details',compact('productDetails','productDetailsImageAlls'));
    }
}
