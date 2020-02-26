<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\DiagonalDifference;
use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    /** @test */
    public function itShouldCalcDiagonalDifference(): void
    {
        $sut = new DiagonalDifference();

        $arr = [
            [11, 2, 4],
            [4, 5, 6],
            [10, 8, -12],
        ];
        $actual = $sut->diagonalDifference($arr);

        $this->assertEquals(15, $actual);

        $arr = [
            [1, 4],
            [3, 2],
        ];
        $actual = $sut->diagonalDifference($arr);

        $this->assertEquals(4, $actual);

        $arr = [
            [],
            [],
        ];
        $actual = $sut->diagonalDifference($arr);

        $this->assertEquals(0, $actual);

        $arr = [];
        $actual = $sut->diagonalDifference($arr);

        $this->assertEquals(0, $actual);
    }

    /** @test */
    public function itShouldCalcDiagonalDifferenceOnArrayWithVariableIndexes(): void
    {
        $sut = new DiagonalDifference();

        $arr = [
            ['2' => 11, 2, 4],
            [4, 5, 'qwe' => 6],
            [10, 'index' => 8, -12],
        ];
        $actual = $sut->diagonalDifference($arr);

        $this->assertEquals(15, $actual);
    }
}
