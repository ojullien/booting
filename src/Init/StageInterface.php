<?php

declare(strict_types=1);

/**
 * @package Oseille\Booting\Init
 * @link    https://github.com/ojullien/oseille/booting for the canonical source repository
 * @license https://github.com/ojullien/oseille/booting/blob/master/LICENSE MIT.
 */

namespace Oseille\Booting\Init;

use Psr\Container\ContainerInterface;

/**
 * The Stage declares the interface, common for all concrete stages.
 * It contains a method for handling the PSR-11 container.
 * and an another method for setting the next Stage on the chain.
 */
interface StageInterface
{


    /**
     * Creates and initializes the App.
     *
     * @param \Psr\Container\ContainerInterface $container The PSR-11 container
     * @return object|null
     */
    public function initialize(ContainerInterface $container): ?object;
}
