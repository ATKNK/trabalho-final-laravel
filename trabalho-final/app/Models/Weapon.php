<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weapon extends Model
{
    use SoftDeletes;

    protected $table = 'weapons';

    protected $fillable = [
        'name',
        'baseDamage',
        'knockback',
        'attackSpeed',
        'classId',
    ];
    public function Setup(){
        return $this->hasMany(Setup::class, 'weaponId');
    }

    public function PlayerClass(){
        return $this->belongsTo(PlayerClass::class, 'classId');
    }
}
