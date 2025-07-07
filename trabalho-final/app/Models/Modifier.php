<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Accessory;
use App\Models\Armor;

class Modifier extends Model
{
    protected $table = 'modifiers';

    protected $fillable = ['name', 'math'];

    public function Accessory(){
        return $this->hasMany(Accessory::class);
    }

    public function Armor(){
        return $this->hasMany(Armor::class);
    }
}
