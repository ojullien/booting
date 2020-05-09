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
 * The default chaining behavior is implemented inside this base stage class.
 */
abstract class AbstractStage implements StageInterface
{
    /**
     * @var StageInterface
     */
    private $pNextStage;

    /**
     * Builds the chain.
     *
     * @param StageInterface $stage
     * @return StageInterface
     */
    final public function setNext(StageInterface $stage): StageInterface
    {
        $this->pNextStage = $stage;
        // Returning a stage from here will let us link stages in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $stage;
    }

    /**
     * Default handling behavior: it pass execution to the next stage.
     *
     * @param array<array-key,mixed> $settings The settings.
     * @return \Psr\Container\ContainerInterface|null
     */
    public function boot(array $settings): ?ContainerInterface
    {
        $pReturn = null;

        if (isset($this->pNextStage)) {
            $pReturn = $this->pNextStage->boot($settings);
        }

        return $pReturn;
    }
}
