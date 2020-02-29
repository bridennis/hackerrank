<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class PlusMinus
{
    public function plusMinus($arr): void
    {
        $summer = array_fill(0, 3, 0);

        foreach ($arr as $value) {
            $key = $value > 0 ? 0 : ($value < 0 ? 1 : 2);
            $summer[$key]++;
        }

        foreach ($summer as $value) {
            printf("%.6f\n", count($arr) ? $value / count($arr) : 0);
        }
    }
}
