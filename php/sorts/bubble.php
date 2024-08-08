<?php
declare(strict_types=1);

function bubbleSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $isSorted = true;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($cmp($array[$i], $array[$j]) > 0) {
                [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
                $isSorted = false;
            }
        }
        if ($isSorted) break;
    }
    return $array;
}
