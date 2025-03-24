<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameFlash extends Model
{
    protected $table = 'game_flashes';
    protected $fillable = [
        'title',
        'url',
        'description',
        'iframe_src',
        'tags',
        'category',
        'thumbnail',
    ];
}
