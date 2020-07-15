<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Slide;
use App\Product;
use App\TypeProduct;
use DB;

class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::All();
        $product_types=TypeProduct::All();
        
        $colors=DB::table('colors')
        ->select(['colors.name'])
        ->join('products', 'colors.id', '=', 'products.id_color')
        ->get();
        //select color from products group by (color);
        // echo $colors;
        // echo $slide;
        $new_products=Product::where('new',1)->paginate(6);
        $products=DB::table('products')->where('promotion_price','<>',0)->get();
        return view('page.trangchu')->with(['colors'=>$colors,'product_types'=>$product_types,
        'slide'=>$slide,'new_products'=>$new_products,'products'=>$products]);
    }
    public function getSearch(Request $request){
        $col=$request->color;
        $pri=$request->price;
        $typ=$request->type;
        if(!$col && !$pri && !$typ){
            return redirect()->route('trangchu');
        }
        $slide=Slide::All();
        $product_types=TypeProduct::All();
        $colors=DB::table('products')
        ->select(['color'])
        ->groupBy('color')
        ->get(); 
        $price1=0;
        $price2=100000000; 
        if($pri==500){
            $price2=50000;
        }else if($pri==1000){
            $price1=500000;
            $price2=10000000; 
        }
        else if($pri==2000){
            $price1=10000000;
            $price2=20000000; 
        }
        else if($pri==5000){
            $price1=20000000;
            $price2=50000000; 
        }
        else if($pri==6000){
            $price1=50000000;
        }
        if($typ){
            $products=DB::table('products')
        ->where('color', 'like', $col )
        ->where('unit_price', '<',$price2)
        ->where('unit_price', '>',$price1)
        ->where('id_type',$typ)
        ->paginate(9);
        echo('huhu'.$products);
        }else{
            $products=DB::table('products')
            ->where('color', 'like', $col )
            ->where('unit_price', '<',$price2)
            ->where('unit_price', '>',$price1)
            ->paginate(9);
            echo('haha'.$products);
        }
       
        // return view('page.search')->with(['colors'=>$colors,'product_types'=>$product_types,
        // 'slide'=>$slide,'products'=>$products]);
    }
    public function getSignup(){
        return view('page.register');
    }
    public function postSignup(registerRequest $Request){
        $users = new User();
        $users->name = $Request->name;
        $users->email = $Request->email;
        $users->role ='user';
        $users->password = Hash::make($Request->password);
        $users->save();
        return redirect('index')->with('message','Táº¡o tÃ i khoáº£n thÃ nh cÃ´ng');
    }
    public function getLogin(){
        return view('page.login');
    }

    public function postLogin(loginRequest $Request){
        $loginIfor = array('email'=>$Request->email,'password'=>$Request->password);
        $user = User::where([
                ['email','=',$Request->email],
            ])->first();
        if($user){
            if(Auth::attempt($loginIfor)){
    
            return redirect('index')->with(['thongbao'=>'ÄÄƒng nháº­p thÃ nh cÃ´ng']);
            }
            else{
                return redirect('login')->with(['message'=>'ÄÄƒng nháº­p khÃ´ng thÃ nh cÃ´ng,email hoáº·c ']);
            }
        }
        else{
           return redirect('register')->with(['messages'=>'TÃ i khoáº£n chÆ°a kÃ­ch hoáº¡t,Vui lÃ²ng Ä‘Äƒng kÃ­ tÃ i khoáº£n']); 
        }
        
    
    }
}
