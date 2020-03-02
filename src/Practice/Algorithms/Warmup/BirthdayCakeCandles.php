<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class BirthdayCakeCandles
{
    public function birthdayCakeCandles(array $ar): int
    {
        $maxHeight = (int) max($ar);

        $onlyHighest = function ($height) use ($maxHeight) {
            return (int) $height === $maxHeight;
        };

        return count(array_filter($ar, $onlyHighest));
    }
}
