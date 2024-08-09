<?php
declare(strict_types=1);

function countingSort(array $arr, int $min, int $max): array
{
    $counts = array_fill($min, $max - $min + 1, 0);
    printArr($counts);
    foreach ($arr as $value) ++$counts[$value];

    $i = 0;
    foreach ($counts as $value => $count) {
        for (; $count > 0; $count--) {
            $arr[$i] = $value;
            ++$i;
        }
    }
    return $arr;
}
