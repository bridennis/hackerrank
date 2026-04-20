<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\MiniMaxSum;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(MiniMaxSum::class)]
final class MiniMaxSumTest extends TestCase
{
    #[Test]
    public function itShouldFindMiniMaxSum(): void
    {
        $sut = new MiniMaxSum();

        $expected = '10 14';
        $this->expectOutputString($expected);

        $arr = [1, 2, 3, 4, 5];
        $sut->miniMaxSum($arr);
    }
}
