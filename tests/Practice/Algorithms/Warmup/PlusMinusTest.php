<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\PlusMinus;
use PHPUnit\Framework\TestCase;

class PlusMinusTest extends TestCase
{
    /** @test */
    public function itShouldCalcPlusMinus(): void
    {
        $sut = new PlusMinus();

        $arr = [-4, 3, -9, 0, 4, 1];

        $expected = <<<OUTPUT
        0.500000
        0.333333
        0.166667
        
        OUTPUT;
        $this->expectOutputString($expected);

        $sut->plusMinus($arr);

        ob_clean();

        $arr = [];

        $expected = <<<OUTPUT
        0.000000
        0.000000
        0.000000
        
        OUTPUT;
        $this->expectOutputString($expected);

        $sut->plusMinus($arr);
    }
}
