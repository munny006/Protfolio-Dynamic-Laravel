<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Main;
use\App\Models\Service;
use App\Models\Protfolio;
use App\Models\About;
class makeController extends Controller
{
    public function index(){

    	$main = Main::first();
    	$service = Service::all();
    	$protfolios = Protfolio::all();
    	$abouts = About::all();

    	return view('pages.index',compact('main','service','protfolios','abouts'));
    }

    public function dashboard(){

    	return view('pages.dashboard');

    }

}
