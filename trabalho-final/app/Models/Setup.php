<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setup extends Model
{
    use SoftDeletes;
    protected $table = 'setups';

    protected $fillable = [
        'playerId',
        'weaponId',
        'armorId',
        'accessory1Id',
        'accessory2Id',
        'accessory3Id',
        'accessory4Id',
        'accessory5Id',
        'accessory6Id',
        'accessory7Id',
    ];

    public function Accessory1()
    {
        return $this->belongsTo(Accessory::class, 'accessory1Id');
    }
    public function Accessory2()
    {
        return $this->belongsTo(Accessory::class, 'accessory2Id');
    }
    public function Accessory3()
    {
        return $this->belongsTo(Accessory::class, 'accessory3Id');
    }
    public function Accessory4()
    {
        return $this->belongsTo(Accessory::class, 'accessory4Id');
    }
    public function Accessory5()
    {
        return $this->belongsTo(Accessory::class, 'accessory5Id');
    }
    public function Accessory6()
    {
        return $this->belongsTo(Accessory::class, 'accessory6Id');
    }
    public function Accessory7()
    {
        return $this->belongsTo(Accessory::class, 'accessory7Id');
    }


    public function Armor()
    {
        return $this->belongsTo(Armor::class, 'armorId');
    }

    public function Player()
    {
        return $this->belongsTo(Player::class, 'playerId');
    }

    public function Weapon()
    {
        return $this->belongsTo(Weapon::class, 'weaponId');
    }
}
