<?php
declare(strict_types=1);

function selectSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = 0; $i < $count - 1; $i++) {
        $t = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($cmp($array[$t], $array[$j]) > 0) {
                $t = $j;
            }
        }
        if ($t !== $i) {
            [$array[$i], $array[$t]] = [$array[$t], $array[$i]];
        }
    }
    return $array;
}
