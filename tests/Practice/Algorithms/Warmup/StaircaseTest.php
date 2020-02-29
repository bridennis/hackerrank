<?php

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\Staircase;
use PHPUnit\Framework\TestCase;

class StaircaseTest extends TestCase
{
    /** @test */
    public function itShouldDrawStaircase(): void
    {
        $sut = new Staircase();

        $expected = <<<OUTPUT
          #
         ##
        ###
        
        OUTPUT;
        $this->expectOutputString($expected);

        $sut->staircase(3);

        ob_clean();

        $expected = <<<OUTPUT
        
        OUTPUT;
        $this->expectOutputString($expected);

        $sut->staircase(0);
    }
}
