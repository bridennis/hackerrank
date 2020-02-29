<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class Staircase
{
    public function staircase($n): void
    {
        for ($i = 1; $i <= $n; $i++) {
            echo str_pad(str_repeat('#', $i), $n, ' ', STR_PAD_LEFT), PHP_EOL;
        }
    }
}
