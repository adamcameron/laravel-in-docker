<?php

namespace adamcameron\lid\tests\Unit\Service;

use PHPUnit\Framework\TestCase;
use adamcameron\lid\Service\GreetingService;

class GreetingServiceTest extends TestCase
{
    /** @testdox It returns the expected greeting */
    public function testGetGreeting()
    {
        $greetingService = new GreetingService();
        $this->assertEquals("G'day world!", $greetingService->getGreeting());
    }
}
