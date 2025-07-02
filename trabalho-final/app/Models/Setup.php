<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $table = 'setups';

    protected $fillable = [
        'playerId',
        'weaponId',
        'armorId',
        'accessoriesId',
    ];

    public function Accessory(){
        return $this->belongsTo(Accessory::class, 'accessoriesId');
    }

    public function Armor(){
        return $this->belongsTo(Armor::class, 'armorId');
    }

    public function Player(){
        return $this->belongsTo(Player::class, 'playerId');
    }

    public function Weapon(){
        return $this->belongsTo(Weapon::class, 'weaponId');
    }
}
