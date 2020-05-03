<?php

declare(strict_types=1);

namespace OseilleTest\Booting\Boot;

use Oseille\Booting\Boot\AbstractStage;
use OseilleTest\Utils\StubContainer;
use Psr\Container\ContainerInterface;

/**
 * PSR-11 container stage.
 */
class ContainerStage extends AbstractStage
{
    /**
     * PSR-11 container stage.
     *
     * @param array<array-key,mixed> $settings The settings.
     * @return \Psr\Container\ContainerInterface|null
     */
    public function boot(array $settings): ?ContainerInterface
    {
        return new StubContainer();
    }
}
