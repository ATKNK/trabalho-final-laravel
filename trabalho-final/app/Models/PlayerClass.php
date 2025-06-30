<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PlayerClass extends Model
{
    use SoftDeletes;

    protected $table = 'classes';

    protected $fillable = [
        'name',
    ];

    public function Accessory(){
        return $this->hasMany(Accessory::class);
    }

    public function Armor(){
        return $this->hasMany(Armor::class);
    }

    public function Weapon(){
        return $this->hasMany(Weapon::class);
    }
}
