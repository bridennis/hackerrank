<?php

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\BirthdayCakeCandles;
use HackerRank\Practice\Algorithms\Warmup\Staircase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Staircase::class)]
class StaircaseTest extends TestCase
{
    #[Test]
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
