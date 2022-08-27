<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class LowercaseCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return strtolower($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return strtolower($value);
    }
}
