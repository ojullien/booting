<?php

declare(strict_types=1);

namespace OseilleTest\Booting\Boot;

/**
 * @coversDefaultClass \Oseille\Booting\Boot\AbstractStage
 */
class AbstractStageTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers ::setNext
     * @group specification
     */
    public function testSetNext()
    {
        $pDoNothingStage = new DoNothingStage();
        // Note: As we test setNext we call boot on ContainerStage.
        $pContainer = $pDoNothingStage->setNext(new ContainerStage())->boot([]);
        $this->assertInstanceOf('\Psr\Container\ContainerInterface', $pContainer);
    }

    /**
     * @covers ::boot
     * @group specification
     */
    public function testBoot()
    {
        $pDoNothingStage = new DoNothingStage();
        $pDoNothingStage->setNext(new ContainerStage());
        $pContainer = $pDoNothingStage->boot([]);
        $this->assertInstanceOf('\Psr\Container\ContainerInterface', $pContainer);
    }
}
