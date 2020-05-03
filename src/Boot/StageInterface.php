<?php

declare(strict_types=1);

/**
 * @package Oseille\Booting\Boot
 * @link    https://github.com/ojullien/oseille/booting for the canonical source repository
 * @license https://github.com/ojullien/oseille/booting/blob/master/LICENSE MIT.
 */

namespace Oseille\Booting\Boot;

use Psr\Container\ContainerInterface;

/**
 * The Stage declares the interface, common for all concrete stages.
 * It contains a method for handling the configuration array.
 * and an another method for setting the next Stage on the chain.
 */
interface StageInterface
{
    /**
     * Builds the chain.
     *
     * @param StageInterface $stage
     * @return StageInterface
     */
    public function setNext(StageInterface $stage): StageInterface;

    /**
     * Loads, configures and then executes bootstrap stages.
     *
     * @param array<array-key,mixed> $settings The settings.
     * @return \Psr\Container\ContainerInterface|null
     */
    public function boot(array $settings): ?ContainerInterface;
}
