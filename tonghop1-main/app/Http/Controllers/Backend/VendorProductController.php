<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;


class VendorProductController extends Controller
{
   public function VendorAllProduct(){
    
            $id = Auth::user()->id;
            $products = Product::where('vendor_id',$id)->latest()->get();
            return view('vendor.backend.product.vendor_product_all',compact('products'));
        } // End Method 
    
     public function VendorAddProduct(){
             
            $brands = Brand::latest()->get();
            $categories = Category::latest()->get();
            return view('vendor.backend.product.vendor_product_add',compact('brands','categories'));
    
        } // End Method 



        public function VendorStoreProduct(Request $request)
        {
    
    
            // 
        } // End Method 
    
        public function VendorEditProduct($id)
        {
    
            return view('vendor.backend.product.vendor_product_edit');
        } // End Method 
    
    
    
        public function VendorUpdateProduct(Request $request)
        {
            // 
        } // End Method 
    
    
        public function VendorUpdateProductThabnail(Request $request)
        {
    
            // 
        } // End Method 
    
    
        //Vendor Multi Image Update 
        public function VendorUpdateProductmultiImage(Request $request)
        {
    
            // 
        } // End Method 
    
    
        public function VendorMultiimgDelete($id)
        {
            // 
        } // End Method 
    
    
        public function VendorProductInactive($id)
        {
    
            // 
        } // End Method 
    
    
        public function VendorProductActive($id)
        {
    
            // 
        } // End Method 
    
    
        public function VendorProductDelete($id)
        {
            // 
        } // End Method 
    
    
    }