<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    protected $table = "author";
    protected $fillable = [
        'author',
        'id'
    ];

    public function datbuku()
    {
        return $this->hasMany(datbuku::class);
    }
}
