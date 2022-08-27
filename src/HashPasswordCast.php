<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class HashPasswordCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }
}
