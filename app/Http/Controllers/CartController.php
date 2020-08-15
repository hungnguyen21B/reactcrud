<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Cart;
use App\Size;
use App\Bill;
use App\BillDetail;
use App\Customer;
use App\Product;

use App\TypeProduct;
use DB;
use Session;
use Carbon\Carbon;

class CartController extends Controller
{
    //
    public function getCart()
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
            return redirect()->back();
        } else {
            $products = [];
            $sizes = [];
            $totalPrice=0;
            $id_Cus = Session::get('login');
            $carts = Session('cart') ? Session::get('cart') : [];
            $carts= $this->getCartOfUser($carts,$id_Cus);
            for ($i = 0; $i < count($carts); $i++) {
                    // query
                    //select `product_sizes`.`id_pro`, `product_sizes`.`id_size`, `sizes`.`name` 
                    //from `product_sizes` ,`sizes` where 
                    //`product_sizes`.`id_pro` = 1 and `product_sizes`.`id_size` = `sizes`.`id`
                    $size = DB::table('product_sizes')
                        ->select([
                            'product_sizes.id_pro', 'product_sizes.id_size',
                            'sizes.name'
                        ])
                        ->join('sizes', 'product_sizes.id_size', '=', 'sizes.id')
                        ->where('product_sizes.id_pro', '=', intval($carts[$i]->id_Pro))
                        ->get();
                    $product = Product::find($carts[$i]->id_Pro);
                    if ($product) {
                        $product->quantity = $carts[$i]->quantity;
                        $totalPrice+=($product->promotion_price!=0)?$product->promotion_price*$product->quantity:$product->unit_price*$product->quantity;
                        array_push($products,$product);
                    }
                    if ($size) {
                        array_push($sizes, $size);
                    }
            }
            // echo (json_encode($sizes));
            return view('page.cart')->with(['products' => $products, 'sizes' => $sizes,'totalPrice'=>$totalPrice]);
        }
    }

    function checkExist($carts, $id_Cus, $id_Pro,$status)
    {
        for ($i = 0; $i < count($carts); $i++) {
            if ($carts[$i]->id_Cus == $id_Cus && $carts[$i]->id_Pro == $id_Pro) {
                ($status=="add")?$carts[$i]->quantity++:$carts[$i]->quantity--;
                return $carts;
            }
        }
        return null;
    }
    public function addCart($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $check = $this->checkExist($carts, Session::get('login'), $id,"add");
            if (!$check) {
                array_push($carts, new Cart(Session::get('login'), $id, 1));
            } else {
                $carts = $check;
            }
            Session::put('cart', $carts);
            // $products = Product::find($id);
            // return view('page.cart');
            // echo ('<script>alert("Added a product");</script>');
        }
        return redirect()->back();
    }
    public function addQuantity($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $carts = $this->checkExist($carts, Session::get('login'), $id,"add");
            Session::put('cart', $carts);
        }
        return redirect()->back();
    }
    public function minusQuantity($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $carts = $this->checkExist($carts, Session::get('login'), $id,"minus");
            Session::put('cart', $carts);
        }
        return redirect()->back();
    }
    public function checkout(Request $Request){
        $carts = Session('cart') ? Session::get('cart') : [];
        $id_Cus=Session::get('login');
        $carts= $this->getCartOfUser($carts,$id_Cus);
        if(count($carts)>0){
            $cus = new Customer();
            $cus->name = $Request->name;
            $cus->email = $Request->email;
            $cus->gender = $Request->gender;
            $cus->address = $Request->address;
            $cus->note = $Request->note;
            $cus->save();
            $bill = new Bill();
            $bill->id_cus = $cus->id;
            $dt = Carbon::now();
            $bill->date = $dt->toDateString();
            $bill->total_price = $Request->totalPrice;
            $bill->payment = $Request->payment;
            $bill->note = $Request->note;
            $bill->save();
            foreach($carts as $cart){
                $bill_detail = new BillDetail();
                $product=Product::find($cart->id_Pro);
                $price=($product->promotion_price!=null)?$product->unit_price:$product->promotion_price;
                $bill_detail->total_price=$price*$cart->quantity*4;
                $bill_detail->quantity=$cart->quantity;
                $bill_detail->id_bill=$bill->id;
                $bill_detail->rental_time=4;
                //4 ngay
                $bill_detail->id_pro=$cart->id_Pro;
                $bill_detail->save();
            }
            Session::put('cart', $this->removeCartOfUser($carts,$id_Cus));
            return redirect()->route('trangchu');
        }
        else{
            return redirect()->route('trangchu');
        }
    }
    public function getCartOfUser($carts,$id_Cus){
        $arr = [];
        foreach ($carts as $cart){
            if ($cart->id_Cus==$id_Cus){
                array_push($arr,$cart);
            }
        }
        return $arr;
    }
    public function removeCartOfUser($carts,$id_Cus){
        $arr = [];
        foreach ($carts as $cart){
            if ($cart->id_Cus!=$id_Cus){
                array_push($arr,$cart);
            }
        }
        return $arr;
    }
}
