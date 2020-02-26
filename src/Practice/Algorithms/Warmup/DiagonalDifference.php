<?php

declare(strict_types=1);

namespace HackerRank\Practice\Algorithms\Warmup;

final class DiagonalDifference
{
    public function diagonalDifference(array $arr): int
    {
        $row = 0;
        $leftToRightSum = 0;
        $rightToLeftSum = 0;

        foreach ($arr as $cols) {
            $col = 0;
            foreach ($cols as $value) {
                if ($col === $row) {
                    $leftToRightSum += $value;
                    break;
                }
                $col++;
            }

            $col = 0;
            foreach (array_reverse($cols) as $value) {
                if ($col === $row) {
                    $rightToLeftSum += $value;
                    break;
                }
                $col++;
            }
            $row++;
        }

        return abs($leftToRightSum - $rightToLeftSum);
    }
}
