<?php

declare(strict_types=1);

namespace HackerRank\Tests\Practice\Algorithms\Warmup;

use HackerRank\Practice\Algorithms\Warmup\TimeConversion;
use PHPUnit\Framework\TestCase;

final class TimeConversionTest extends TestCase
{
    /** @test */
    public function itShouldConvertTime(): void
    {
        $sut = new TimeConversion();

        $actual = $sut->timeConversion('07:05:45PM');
        $expected = '19:05:45';

        $this->assertEquals($actual, $expected);

        $actual = $sut->timeConversion('07:05:45AM');
        $expected = '07:05:45';

        $this->assertEquals($actual, $expected);

        $actual = $sut->timeConversion('12:00:00AM');
        $expected = '00:00:00';

        $this->assertEquals($actual, $expected);

        $actual = $sut->timeConversion('12:00:00PM');
        $expected = '12:00:00';

        $this->assertEquals($actual, $expected);
    }
}
