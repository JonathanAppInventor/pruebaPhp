<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
	public function index(){
		$products=App\Product::all();
		return view('welcome', compact('products'));
	}
	public function supplier(){
		return view('supplierForm');
	}
	public function add(Request $request){
		//return view('welcome');
		//return $request->all();
		$newProduct = new App\Product;
		$newProduct->product = $request->product;
		$newProduct->quantity = $request->quantity;
		$newProduct->lot_num = $request->lot_num;
		$newProduct->exp_date = $request->exp_date;
		$newProduct->save();		
		return back();
	}
	public function client($name = null){
		$equipo = ['Juan', 'Pedro', 'Chucho'];
		return view('clientForm',compact('equipo', 'name'));
	}
}	