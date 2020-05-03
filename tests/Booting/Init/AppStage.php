<?php

declare(strict_types=1);

/**
 * @package Oseille\Booting\Init
 * @link    https://github.com/ojullien/oseille/booting for the canonical source repository
 * @license https://github.com/ojullien/oseille/booting/blob/master/LICENSE MIT.
 */

namespace OseilleTest\Booting\Init;

use Oseille\Booting\Init\AbstractStage;
use Psr\Container\ContainerInterface;

/**
 * Application stage.
 */
class AppStage extends AbstractStage
{
    /**
     * Returns the App.
     *
     * @param \Psr\Container\ContainerInterface $container The PSR-11 container
     * @return object|null
     */
    public function initialize(ContainerInterface $container): ?object
    {
        return new \stdClass();
    }
}
