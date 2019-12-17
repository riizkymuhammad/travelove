<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    public function index()
    {
        $data_wisata = \App\Wisata::all();
        return view('wisata.index', ['data_wisata' => $data_wisata]);
    }
    public function create(Request $request)
    {

        $input = $request->all();
        if ($request->hasFile('photo_wisata')) {
            $project_image = $request->file('photo_wisata');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            $request->file('photo_wisata')->move("/admin/img", $filename);
            $input['photo_wisata'] = $filename;
        }
        $input['photo_wisata'] = $filename;

        Wisata::create($input);

        //Insert ke table user
        $user = new \App\User;
        $user->role = 'wisata';
        $user->name = $request->nama_wisata;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke table Siswa
        $request->request->add(['user_id' => $user->id]);

        return redirect('/wisata')->with('sukses', 'Data berhasil diinput');
    }
    //kita ambil route dengan wisata dengan id 1
    //masuk ke route lalu lempar ke controller
    //lalu membuat suatu variabel yang isinya mengambil model dari wisata find id yaitu 1
    //lalu keluarkan hasilnya dd><
    public function edit($id)
    {
        $wisata = \App\Wisata::find($id);
        return view('wisata/edit', ['wisata' => $wisata]);
    }

    public function update(Request $request, $id)
    {
         dd($request->all());
        $wisata = \App\Wisata::find($id);
        $wisata->update($request->all());
        if($request->hasFile('photo_wisata')){
            //memindahkan request avatar ke folder image lalu simpan ke originalname
            $request->file('photo_wisata')->move('images/',$request->file('photo_wisata')->getClientOriginalExtension());
            $wisata->avatar = $request->file('photo_wisata')->getClientOriginalExtension();
            $wisata->save();
            //mengupload gambar dan menyimpan dalam database
        }
        return redirect('/wisata')->with('sukses', 'Data Berhasil di update ');
    }

    public function delete($id)
    {
        $wisata = \App\Wisata::find($id);
        $wisata->delete($wisata);
        return redirect('/wisata')->with('sukses', 'Data berhasil dihapus');
    }

    public function profilewisata($id)
    {
        $wisata = \App\Wisata::find($id);
        return view('wisata.profilewisata', ['wisata' => $wisata]);
    }
}
