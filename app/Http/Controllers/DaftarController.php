<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class daftarcontroller extends Controller {
	public function index(){
		return view('auth.register');
	}
		public function proses(Request $request){
		DB::table('user')->insert([
		'name' => $request->name,
		'ktp' => $request->ktp,
		'tgllahir' => $request->date,
		'alamatu' => $request->alamat,
		'email' => $request->email,
		'password' => $request->password,
	]);

	return redirect('/pemesanan');
	}

	public function hapus($id) {
		DB::table('user')->where('id',$id)->delete();

		return redirect('/DaftarAkun');
	}
}
