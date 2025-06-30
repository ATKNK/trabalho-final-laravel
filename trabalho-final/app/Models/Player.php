<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'health',
        'mana',
        'class',
    ];

    public function PlayerClass(){
        return $this->belongsTo(PlayerClass::class);
    }
}
