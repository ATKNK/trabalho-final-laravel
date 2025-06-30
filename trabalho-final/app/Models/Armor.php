<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Armor extends Model
{
    use SoftDeletes;

    protected $table = 'armors';

    protected $fillable = [
        'name',
        'setBonus',
        'setBonusModifier',
        'defense',
    ];

    public function PlayerClass(){
        return $this->belongsTo(PlayerClass::class);
    }
}
