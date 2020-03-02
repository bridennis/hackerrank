<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

use DateTimeImmutable;

final class TimeConversion
{
    public function timeConversion(string $s): string
    {
        return DateTimeImmutable::createFromFormat('h:i:sA', $s)->format('H:i:s');
    }
}
