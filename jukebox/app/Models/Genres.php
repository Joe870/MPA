<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function songs(){
        return $this->hasMany(Song::class);
        // return $this->hasMany(Song::class, 'genre_id');
    }
}
