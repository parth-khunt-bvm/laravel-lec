<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
    public function brandList(){
        return view('pages.brand-control.brand');
    }

    public function addbrand(){
        return view('pages.brand-control.add-brand');
    }

    public function storebrand(Request $postData){
         $postData->validate([
            'brand'=>'required|string|max:255',
            'brand_code'=>'required|string|max:15',
            'status'=>'required|in:A,I'
         ]);

         Brand::create([

            'brand'=>$postData->brand,
            'brand_code'=>$postData->brand_code,
            'status'=>$postData->status

         ]);

         return redirect()->route('admin.brand-data.brand')->with('auccess', 'Brand added successfully');


         
    }
}
