<?php

namespace App\Services;

use App\Models\Modifier;

class ModifierService
{
    public static function applyModifier(float $base, float $mod, string $math): float
    {
        switch ($math) {
            case '+':
                return $base + $mod;
            case '-':
                return $base - $mod;
            case '+%':
                return $base + ($mod / 100 * $base);
            case '-%':
                return $base - ($mod / 100 * $base);
            default:
                return $base;
        }
    }

    public function applyByModifierId(float $base, float $value, int $modifierId): float
    {
        $modifier = Modifier::find($modifierId);

        if (!$modifier) return $base;

        return $this->applyModifier($base, $value, $modifier->math);
    }
}
