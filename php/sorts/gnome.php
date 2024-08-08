<?php
declare(strict_types=1);

function gnomeSort(array $array, callable $cmp): array
{
    $count = count($array);
    [$i, $max] = [1, 2];
    while ($i < $count) {
        if ($cmp($array[$i - 1], $array[$i]) <= 0) {
            $i = $max;
            ++$max;
            continue;
        }
        [$array[$i], $array[$i - 1]] = [$array[$i - 1], $array[$i]];
        --$i;
        if ($i === 0) {
            $i = $max;
            ++$max;
        }
    }
    return $array;
}
