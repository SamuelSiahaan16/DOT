<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = "barang";
    public $timesetamps = false;
    public function product()
    {
        return $this->belongsTo(KategoriBarang::class,'kategori_id','id');
    }
}