<?php

namespace App\Http\Controllers;
use App\Product;
use App\TypeProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class AdminController extends Controller
{
    public function getA(){
        return view('welcome');
    }
    public function getIndexAdmin(){
        $product = Product::all();
        return view('admin.trangchuAdmin',compact('product'));
    }
    public function getProductManagement(){
        $product = Product::all();
        return view('admin.product_management',compact('product'));
    }
    // public function getOrderManagement(){
    //     $product = Bill::all();
    //     return view('admin.product_management',compact('order'));
    // }
    public function getCustomerManagement(){
        return view('admin.customer_management');
    }
    /*================Admin====================*/
      //***************Add************************************
    public function insert(){
    	return view('admin.addProduct');
    }
    public function insertProduct(Request $request)
    {
        $products = new Product;
        $products->name =  $request->input('tensanpham');
        $products->description = $request->input('mota');
        $products->unit_price = $request->input('gia');
        $products->promotion_price = null;
        $products->image = $request->input('hinhanh');
        $products->new = 1;
        $products->id_type = $request->input('loai');
        $products->id_color = $request->input('mausac');
        $products->save();
        return $this->getProductManagement();
    }
    /****************Edit*****************************/
    public function editPro ($id)
    {
        $product = Product::find($id);
        return view('admin.editProduct', compact('product'));
    }
   public function editProduct(Request $request, $id)
   {
        $products = Product::find($id);
        $products->name =  $request->input('tensanpham');
        $products->description = $request->input('mota');
        $products->unit_price = $request->input('gia');
        $products->promotion_price = null;
        $products->image = $request->input('hinhanh');
        $products->new = 1;
        $products->id_type = $request->input('loai');
        $products->id_color = $request->input('mausac');
    	$products->save();
    	return $this->getProductManagement();
   }
   //*********delete************************************
   public function deleteProduct($id)
   {
       $product = Product::find($id);
       $product->delete();
       return $this->getProductManagement();
   }
}

