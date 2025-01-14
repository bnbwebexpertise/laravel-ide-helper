<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored;

use Barryvdh\LaravelIdeHelper\Console\ModelsCommand;
use Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;
use Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored\Models\Ignored;
use Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored\Models\NotIgnored;
use Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\Ignored\Models\Simple;

class Test extends AbstractModelsCommand
{

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('ide-helper.ignored_models', [
            Ignored::class,
        ]);

        $app['config']->set('ide-helper.ignored_models_properties', [
            NotIgnored::class => ['ignored'],
        ]);
    }


    public function test(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }
}
