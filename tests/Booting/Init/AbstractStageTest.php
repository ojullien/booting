<?php

declare(strict_types=1);

namespace OseilleTest\Booting\Init;

use OseilleTest\Utils\StubContainer;

/**
 * @coversDefaultClass \Oseille\Booting\Init\AbstractStage
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
        // Note: As we test setNext we call initialize on AppStage.
        $pApp = $pDoNothingStage->setNext(new AppStage())->initialize(new StubContainer());
        $this->assertInstanceOf('\StdClass', $pApp);
    }

    /**
     * @covers ::initialize
     * @group specification
     */
    public function testInitialize()
    {
        $pDoNothingStage = new DoNothingStage();
        $pDoNothingStage->setNext(new AppStage());
        $pApp = $pDoNothingStage->initialize(new StubContainer());
        $this->assertInstanceOf('\StdClass', $pApp);
    }
}
