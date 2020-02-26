<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\AVeryBigSum;
use PHPUnit\Framework\TestCase;

final class AVeryBigSumTest extends TestCase
{
    /** @test */
    public function itShouldSumBigNumbers(): void
    {
        $sut = new AVeryBigSum();

        $numbers = [
            1000000001, 1000000002, 1000000003, 1000000004, 1000000005,
        ];
        $actual = $sut->aVeryBigSum($numbers);

        $this->assertEquals('5000000015', $actual);

        $numbers = [
            9000000000000000007, 9000000000000000007,
        ];
        $actual = $sut->aVeryBigSum($numbers);

        $this->assertEquals('18000000000000000014', $actual);

        $numbers = [
            PHP_INT_MAX, PHP_INT_MAX, PHP_INT_MAX,
        ];
        $actual = $sut->aVeryBigSum($numbers);

        $this->assertEquals('27670116110564327421', $actual);
    }
}
