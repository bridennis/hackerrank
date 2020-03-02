<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class MiniMaxSum
{
    public function miniMaxSum(array $arr): void
    {
        $sum = array_sum($arr);
        $miniSum = PHP_INT_MAX;
        $maxSum = 0;

        foreach ($arr as $value) {
            $reducedSum = $sum - $value;

            if ($reducedSum < $miniSum) {
                $miniSum = $reducedSum;
            }

            if ($reducedSum > $maxSum) {
                $maxSum = $reducedSum;
            }
        }

        echo $miniSum, ' ', $maxSum;
    }
}
