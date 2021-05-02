<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Category;
use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $productsApple = Product::where('category_id',1)->get();
        $newProducts =  \DB::table('products')->orderBy('id','desc')->limit(8)->get();
//        dd($newProducts);die;
//        $categories = Category::all();
//        //get count product  in cart
//        if(empty(\Auth::check())){
//            $session_id = Session::get('session_id');
//            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
//        }else
//        {
//            $use_email = Auth::user()->email;
//            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
//        }
        return view('frontend.index',compact('newProducts'));
//        return view('frontend.index');
    }
}
