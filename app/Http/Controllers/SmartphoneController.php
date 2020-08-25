<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;

class SmartphoneController extends Controller
{
    //
   public function mobile()
    {
		$smartphones = Smartphone::all();
		
        return view('mobile_list', ['smartphones' => $smartphones]);
    }
	
    //
	
	public function viewMobile(Request $request, $id)
    {
		$smartphone = Smartphone::find($id);
		
        return view('mobile_view',  ['smartphone' => $smartphone]);
    }
	
	public function postMobile(Request $request, $id)
    {
		$brand = $request->input('brand');
		$model = $request->input('model');
		$color = $request->input('color');
		$storage = $request->input('storage');
		$price = $request->input('price');
		
		$smartphone = Smartphone::find($id);
		
		$smartphone->brand = $brand;
		$smartphone->model = $model;
		$smartphone->color = $color;
		$smartphone->storage = $storage;
		$smartphone->price = $price;
		
		$smartphone->save();
		
        return redirect()->route('mobile');
    }
	
    //
	public function newMobile(Request $request)
    {
		$brand = $request->input('brand');
		$brand = $request->input('color');
		
		$smartphone = new Smartphone;
		$smartphone->brand = $brand;
		$smartphone->color = $brand;
		$smartphone->brand = $brand;
		
		$smartphone->save();
		
        return redirect()->route('mobile');
    }
}
