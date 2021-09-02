<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Protfolio;

class protfoliopagesController extends Controller
{
	public function create(){
		return view('pages.protfolios.create');
	}
	public function store(Request $request){
		$this->validate($request,[
			'title'=>'required',
			'sub_title'=>'required',
			'big_img'=>'required',
			'small_img'=>'required',
			'description'=>'required',
			'client'=>'required',
			'category'=>'required',
		]);

		$protfolios = new Protfolio;
		$protfolios->title = $request->title;
		$protfolios->sub_title = $request->sub_title;
		$protfolios->description = $request->description;
		$protfolios->client = $request->client;
		$protfolios->category = $request->category;

		$big_file = $request->file('big_img');
		Storage::putFile('public/img/',$big_file);
		$protfolios->big_img = "storage/img/".$big_file->hashName();

		$small_file = $request->file('small_img');
		Storage::putFile('public/img/',$small_file);
		$protfolios->small_img = "storage/img/".$small_file->hashName();

		$protfolios->save();
		return redirect()->route('admin.protfolios.create')->with('success' , " New Protfolio Create SuccessFully !..");
	}

	public function list(){
		$protfolios =  Protfolio::all();
		return view('pages.protfolios.list',compact('protfolios'));
	}

	public function edit($id){
		$protfolios = Protfolio::find($id);
		return view('pages.protfolios.edit',compact('protfolios'));
	}

	public function update(Request $request,$id){
		$this->validate($request,[
			'title'=>'required',
			'sub_title'=>'required',

			'description'=>'required',
			'client'=>'required',
			'category'=>'required',
		]);

		$protfolios =  Protfolio::find($id);
		$protfolios->title = $request->title;
		$protfolios->sub_title = $request->sub_title;
		$protfolios->description = $request->description;
		$protfolios->client = $request->client;
		$protfolios->category = $request->category;
		if ($request->file('big_img')) {
			$big_file = $request->file('big_img');
			Storage::putFile('public/img/',$big_file);
			$protfolios->big_img = "storage/img/".$big_file->hashName();
		}
		if($request->file('small_img')){

			$small_file = $request->file('small_img');
			Storage::putFile('public/img/',$small_file);
			$protfolios->small_img = "storage/img/".$small_file->hashName();
		}



		$protfolios->save();
		return redirect()->route('admin.protfolios.list')->with('success' , " Protfolio Updated SuccessFully !..");
	}

	public function delete($id){
		$protfolios = Protfolio::find($id);
		@unlink(public_path($protfolios->big_img));
		@unlink(public_path($protfolios->small_img));
		$protfolios->delete();
		return redirect()->route('admin.protfolios.list')->with('success' , " New Service Deleted SuccessFully !..");
	}

}
