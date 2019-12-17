<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class daftarcontroller extends Controller {
	public function index(){
		return view('daftar');
	}
		public function proses(Request $request){
		DB::table('user')->insert([
		'name' => $request->name,
		'ktp' => $request->ktp,
		'date' => $request->date,
		'alamat' => $request->alamat,
		'email' => $request->email,
		'password' => $request->password,
	]);

	return redirect('/Beranda');
	}

	public function hapus($id) {
		DB::table('user')->where('id',$id)->delete();

		return redirect('/DaftarAkun');
	}
}