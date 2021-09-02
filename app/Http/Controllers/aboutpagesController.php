<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\About;

class aboutpagesController extends Controller
{
   public function create(){
		return view('pages.abouts.create');
	}
	public function store(Request $request){
		$this->validate($request,[
			'title1'=>'required',
			'title2'=>'required',
			'img'=>'required',
			'description'=>'required',
			
		]);

		$abouts = new About;
		$abouts->title1 = $request->title1;
		$abouts->title2 = $request->title2;
		$abouts->description = $request->description;
		$img_file = $request->file('img');
		Storage::putFile('public/img/',$img_file);
		$abouts->img = "storage/img/".$img_file->hashName();
        $abouts->save();
		return redirect()->route('admin.abouts.create')->with('success' , " New About Create SuccessFully !..");
	}

	public function list(){
		$abouts =  About::all();
		return view('pages.abouts.list',compact('abouts'));
	}

	public function edit($id){
		$abouts = About::find($id);
		return view('pages.abouts.edit',compact('abouts'));
	}

	public function update(Request $request,$id){
		$this->validate($request,[
			'title1'=>'required',
			'title2'=>'required',
			
			'description'=>'required',
			
		]);

		$abouts = About::find($id);
		$abouts->title1 = $request->title1;
		$abouts->title2 = $request->title2;
		$abouts->description = $request->description;
		if ($request->file('img')) {
			$img_file = $request->file('img');
			Storage::putFile('public/img/',$img_file);
			$abouts->img = "storage/img/".$img_file->hashName();
		}
        $abouts->save();
		return redirect()->route('admin.abouts.list')->with('success' , "  About Updated SuccessFully !..");



		
	}

	public function delete($id){
		$abouts = About::find($id);
		@unlink(public_path($abouts->img));
		
		$abouts->delete();
		return redirect()->route('admin.abouts.list')->with('success' , " New About Deleted SuccessFully !..");
	}
}
