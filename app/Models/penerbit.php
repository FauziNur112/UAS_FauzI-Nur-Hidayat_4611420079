<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    protected $table = "penerbit";
    protected $fillable = [
        'penerbit',
        'id'
    ];

    public function datbuku()
    {
        return $this->hasMany(datbuku::class);
    }
}
