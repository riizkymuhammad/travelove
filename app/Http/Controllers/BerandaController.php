<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class berandacontroller extends Controller {
	public function index(){
		return view('pengguna.beranda');
	}
}
