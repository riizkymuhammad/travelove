<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['jenis_wisata', 'nama_wisata', 'lokasi', 'nomer_hp', 'a-wisata', 'fasilitas', 'user_id', 'photo_wisata'];
}
