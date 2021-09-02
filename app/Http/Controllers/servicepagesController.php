<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class servicepagesController extends Controller
{
   public function create(){
   	return view('pages.services.create');
   }
   public function store(Request $request){
   	 $this->validate($request,[
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $Service = new Service;
         $Service->icon = $request->icon;
        $Service->title = $request->title;
        $Service->description = $request->description;


        $Service->save();
        return redirect()->route('admin.services.create')->with('success' , " New Service Create SuccessFully !..");
   }

   public function list(){
   	$service =  Service::all();
   	return view('pages.services.list',compact('service'));
   }

   public function edit($id){
   	$service = Service::find($id);
return view('pages.services.edit',compact('service'));
   }

   public function update(Request $request,$id){
   	 $this->validate($request,[
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $Service = Service::find($id);
         $Service->icon = $request->icon;
        $Service->title = $request->title;
        $Service->description = $request->description;
      $Service->save();
        return redirect()->route('admin.services.list')->with('success' , " New Service Updated SuccessFully !..");
   }

   public function delete($id){
   	$service = Service::find($id);
   	$service->delete();
    return redirect()->route('admin.services.list')->with('success' , " New Service Deleted SuccessFully !..");
   }
}
