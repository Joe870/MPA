<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ["songName","durationLength","genreId","artist_name"];

    public function playlists(){
        return $this->belongsToMany(Playlist::class);
    }
}


