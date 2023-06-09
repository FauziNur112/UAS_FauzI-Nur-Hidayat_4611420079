<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datbuku extends Model
{
    protected $table = "datbuku";
    protected $fillable = [
        'buku_id',
        'judul',
        'tahun_terbit',
        'jumlah_stok',
        'denda_buku',
        'author_id',
        'penerbit_id'

    ];

    public function author()
    {
        return $this->belongsToMany(author::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(penerbit::class);
    }
}
