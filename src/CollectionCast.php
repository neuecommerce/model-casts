<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Collection;

final class CollectionCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return Collection::make(
            json_decode($value ?? [], true)
        );
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value ?? []);
    }
}
