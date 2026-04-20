<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\BirthdayCakeCandles;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(BirthdayCakeCandles::class)]
final class BirthdayCakeCandlesTest extends TestCase
{
    #[Test]
    public function itShouldCalcHighestCandles(): void
    {
        $sut = new BirthdayCakeCandles();

        $arr = [3, 2, 1, 3];
        $actual = $sut->birthdayCakeCandles($arr);
        $expected = 2;

        $this->assertEquals($actual, $expected);
    }
}
