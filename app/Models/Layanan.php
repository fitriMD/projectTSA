<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Layanan extends Model
{
    use HasFactory;
    protected $table = "layanan";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'judul',
        'isi',
        'foto',
        'kategori_id',
    ];

    // public function kategori()
    // {
    // 	return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    // }

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
