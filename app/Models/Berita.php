<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'judul_berita',
        'tgl_berita',
        'isi',
        'gambar',
    ];
}
