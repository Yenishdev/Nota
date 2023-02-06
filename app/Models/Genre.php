<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function music()
    {
        return $this->hasOne(Music::class)
            ->orderBy('id', 'asc');
    }

}
