@extends('layout.master')

@section('content')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row"></div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inputs</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/wisata/{{$wisata->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Wisata</label>
                                <input name="nama_depan" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Wisata" value="{{$wisata->nama_wisata}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Wisata</label>
                                <input name="jenis_wisata" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Wisata" value="{{$wisata->jenis_wisata}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="lokasi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$wisata->lokasi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomer Telepon</label>
                                <input name="nomer_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomer Telepon" value="{{$wisata->nomer_hp}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Avatar</label>
                                <input type="file" name="avatar" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-warning ">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
@section('content1')
<h1>Edit Data Wisata</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
@endsection
