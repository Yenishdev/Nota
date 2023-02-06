<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $guarded = [
        'id',
    ];



    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function playlistMusic()
    {
        return $this->belongsTo(Playlist_music::class);
    }


}
