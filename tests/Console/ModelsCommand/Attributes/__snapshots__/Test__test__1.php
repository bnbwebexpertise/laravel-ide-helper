<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Attributes\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Attributes\Models\Simple
 *
 * @property integer $id
 * @property string $unset
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Simple newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple query()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Simple whereUnset($value)
 * @mixin \Eloquent
 */
class Simple extends Model
{
    public function name(): Attribute
    {
        return new Attribute(
            function (?string $name): ?string {
                return $name;
            },
            function (?string $name): ?string {
                return $name === null ? null : ucfirst($name);
            }
        );
    }

    /**
     * ide-helper does not recognize this method being an Attribute
     * because the method has no actual return type;
     * phpdoc is ignored here deliberately due to performance reasons and also
     * isn't supported by Laravel itself.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function notAnAttribute()
    {
        return new Attribute(
            function (?string $value): ?string {
                return $value;
            },
            function (?string $value): ?string {
                return $value;
            }
        );
    }
}
