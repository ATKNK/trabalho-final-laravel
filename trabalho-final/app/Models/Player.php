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
        'classId',
        'userId',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Setup(){
        return $this->hasMany(Setup::class, 'playerId');
    }
    public function PlayerClass(){
        return $this->belongsTo(PlayerClass::class, 'classId');
    }
}
