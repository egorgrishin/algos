<?php
declare(strict_types=1);

function insertSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = 1; $i < $count; $i++) {
        for ($j = $i; $j > 0; $j--) {
            if ($cmp($array[$j - 1], $array[$j]) <= 0) {
                break;
            }
            [$array[$j], $array[$j - 1]] = [$array[$j - 1], $array[$j]];
        }
    }
    return $array;
}
