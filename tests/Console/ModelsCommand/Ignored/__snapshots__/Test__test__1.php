<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored\Models\NotIgnored
 *
 * @property integer $id
 * @method static \Illuminate\Database\Eloquent\Builder|NotIgnored newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotIgnored newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotIgnored query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotIgnored whereId($value)
 * @mixin \Eloquent
 */
class NotIgnored extends Model
{
}
