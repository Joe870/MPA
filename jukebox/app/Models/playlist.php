<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function playlists(){
        return $this->hasMany(Playlist::class);
    }
}
