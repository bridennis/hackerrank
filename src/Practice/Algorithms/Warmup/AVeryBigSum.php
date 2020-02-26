<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class AVeryBigSum
{
    public function aVeryBigSum($ar): string
    {
        $sum = function ($carry, $item) {
            $bigSum = array_reverse(str_split(strval($carry)));
            $bigNumber = array_reverse(str_split(strval($item)));

            $biggestNumber = count($bigSum) > count($bigNumber) ? $bigSum : $bigNumber;
            $result = [];
            $quotient = 0;
            foreach (array_keys($biggestNumber) as $key) {
                $sum = ($bigSum[$key] ?? 0) + ($bigNumber[$key] ?? 0) + $quotient;
                $quotient = (int) floor($sum / 10);
                $result[] = $sum % 10;
            }

            if ($quotient) {
                $result[] = $quotient;
            }

            return implode('', array_reverse($result));
        };

        return array_reduce($ar, $sum, 0);
    }
}
