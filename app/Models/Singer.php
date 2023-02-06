<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $guarded = [
        'id',
    ];



    public function music()
    {
        return $this->hasMany(Music::class);
    }

    public function album()
    {
        return $this->hasMany(Album::class);
    }


}
