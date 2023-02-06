<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [
        'id',
    ];


    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }

    public function music()
    {
        return $this->hasMany(Singer::class);
    }




}
