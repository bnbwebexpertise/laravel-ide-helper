<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\SoftDeletes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\SoftDeletes\Models\Simple
 *
 * @property integer $id
 * @property string $unset
 * @method static \Illuminate\Database\Eloquent\Builder|Simple newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple newQuery()
 * @method static \Illuminate\Database\Query\Builder|Simple onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple query()
 * @method static \Illuminate\Database\Eloquent\Builder|Simple whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Simple whereUnset($value)
 * @method static \Illuminate\Database\Query\Builder|Simple withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Simple withoutTrashed()
 * @mixin \Eloquent
 */
class Simple extends Model
{
    use SoftDeletes;
}
