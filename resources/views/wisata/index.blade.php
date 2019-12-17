@extends('layout.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="row"></div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h1>Data Wisata</h1>
                    <!-- Menambahkan data wisata-->
                    <div class="right">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
                            <code>Tambah data wisata</code>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <!-- PANEL DEFAULT -->
                        @foreach($data_wisata as $wisata)
                        <div class="panel" class="demo-button">
                            <table class="table table-hover">
                                <div class="panel-heading">
                                    <a href="/wisata/{{$wisata->id}}/profilewisata">
                                        <h3 class="panel-title">{{$wisata->nama_wisata}}</h3>
                                        <div class="right">
                                            <button>
                                                <a href="/wisata/{{$wisata->id}}/edit" class="btn btn-warning btn-sm">Edit</a></i>
                                                <a href="/wisata/{{$wisata->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakinmau dihapus?')">Delete</a></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <p><img src="{{$wisata -> photo_wisata ? $wisata ->photo_wisata : 'No Photo'}}"></p>
                                    <p>{{$wisata->jenis_wisata}}</p>
                                    <p>{{$wisata->lokasi}}</p>
                                    <p>{{$wisata->nomer_hp}}</p>
                                </div>
                            </table>
                        </div>
                        @endforeach
                        <!-- END PANEL DEFAULT -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">Tambah kan Wisata Baru</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/wisata/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="" name="user_id" value="{{Auth::user()->id}}" hidden>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama wisata</label>
                            <input name="nama_wisata" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Wisata">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Wisata</label>
                            <input name="jenis_wisata" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Wisata">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email wisata">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">lokasi</label>
                            <textarea name="lokasi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomer Telepon</label>
                            <input name="nomer_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomer Telepon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Foto</label>
                            <input type="file" name="photo_wisata">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @stop
    @section('content1')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    <div class="row">
        <div class="col-6">
            <h1>Data Wisata</h1>
        </div>
        <div class="col-6">

        </div>

        <table class="table table-hover">

            <tr>
                <th>Nama Wisata</th> <br>
                <th>Jenis Wisata</th>
                <th>Alamat</th>
                <th>Nomer Telepon</th>

            </tr>
            @foreach($data_wisata as $wisata)

            <tr>
                <td>{{$wisata->nama_wisata}}</td>
                <td>{{$wisata->jenis_wisata}}</td>
                <td>{{$wisata->lokasi}}</td>
                <td>{{$wisata->nomer_hp}}</td>
                <td>
                    <a href="/wisata/{{$wisata->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/wisata/{{$wisata->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakinmau dihapus?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>


    </div>

    <!-- Modal -->

    @endsection
