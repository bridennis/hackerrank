<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\BirthdayCakeCandles;
use PHPUnit\Framework\TestCase;

final class BirthdayCakeCandlesTest extends TestCase
{
    /** @test */
    public function itShouldCalcHighestCandles(): void
    {
        $sut = new BirthdayCakeCandles();

        $arr = [3, 2, 1, 3];
        $actual = $sut->birthdayCakeCandles($arr);
        $expected = 2;

        $this->assertEquals($actual, $expected);
    }
}
