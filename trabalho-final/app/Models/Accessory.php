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
    ];
}
