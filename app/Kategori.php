<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    protected $fillable = ['id_kategori', 'nama_kategori'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "kategori";
    protected $primaryKey = 'id_kategori';
}
