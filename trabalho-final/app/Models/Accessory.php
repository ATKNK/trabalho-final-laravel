<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessory extends Model
{
    use SoftDeletes;

    protected $table = 'accessories';

    protected $fillable = [
        'name',
        'effect',
        'effectModifier',
        'rarity',
        'classId',
    ];

    public function Setup()
    {
        return $this->hasMany(Setup::class, 'accessoriesId');
    }
    public function PlayerClass()
    {
        return $this->belongsTo(PlayerClass::class, 'classId');
    }

    public static function rarityColors(): array
    {
        return [
            -1 => '#828282',
            0 => '#FFFFFF',
            1 => '#9696FF',
            2 => '#96FF96',
            3 => '#FFC896',
            4 => '#FF9696',
            5 => '#FF96FF',
            6 => '#D2A0FF',
            7 => '#96FF0A',
            8 => '#FFFF0A',
            9 => '#05C8FF',
            10 => '#FF2864',
            11 => '#B428FF',
            12 => '#73FAD1',
        ];
    }

    public function getRarityColorAttribute(): string
    {
        return self::rarityColors()[$this->rarity] ?? '#FFFFFF';
    }
}
