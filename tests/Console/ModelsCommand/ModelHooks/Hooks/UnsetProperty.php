<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks;

use Barryvdh\LaravelIdeHelper\Console\ModelsCommand;
use Barryvdh\LaravelIdeHelper\Contracts\ModelHookInterface;
use Illuminate\Database\Eloquent\Model;

class UnsetProperty implements ModelHookInterface
{
    public function run(ModelsCommand $command, Model $model): void
    {
        $command->unsetProperty('unset');
    }
}
