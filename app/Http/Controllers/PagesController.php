<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
		return view('pages/about');
	}

	public function training(){
		return view('pages/training');
	}

	public function certification(){
		return view('pages/certification');
	}

	public function students(){
		return view('pages/students');
	}

	public function donations(){
		return view('pages/donations');
	}

	public function contact(){
		return view('pages/contact');
	}

	public function welcome(){
		return view('pages/welcome');
	}
}
