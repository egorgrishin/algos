<?php
declare(strict_types=1);

function bubbleSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = $count - 1; $i > 0; $i--) {
        $isSorted = true;
        for ($j = 0; $j < $i; $j++) {
            if ($cmp($array[$j], $array[$j + 1]) > 0) {
                [$array[$j], $array[$j + 1]] = [$array[$j + 1], $array[$j]];
                $isSorted = false;
            }
        }
        if ($isSorted) break;
    }
    return $array;
}
