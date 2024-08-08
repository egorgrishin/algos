<?php
declare(strict_types=1);

function bubbleSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($cmp($array[$i], $array[$j])) {
                [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
            }
        }
    }
    return $array;
}

$nums = [1, 9, 2, 8];
var_dump(implode(',', bubbleSort($nums, fn (int $a, int $b): bool => $a > $b)));
var_dump(implode(',', bubbleSort($nums, fn (int $a, int $b): bool => $a < $b)));


