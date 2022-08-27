<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class BooleanCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return (bool) $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return (bool) $value;
    }
}
