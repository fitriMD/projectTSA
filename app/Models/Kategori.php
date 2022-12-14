<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Layanan;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "contactus";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'keterangan',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
