<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class wisatacontroller extends Controller {
	public function index(){
		return view('wisata');
	}
}