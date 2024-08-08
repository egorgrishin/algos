<?php
declare(strict_types=1);

function shakerSort(array $array, callable $cmp): array
{
    [$l, $r] = [0, count($array)];
    while ($l < $r) {
        for ($i = $l; $i < $r - 1; ++$i) {
            if ($cmp($array[$i], $array[$i + 1]) > 0) {
                [$array[$i], $array[$i + 1]] = [$array[$i + 1], $array[$i]];
            }
        }
        --$r;
        for ($i = $r; $i > $l; --$i) {
            if ($cmp($array[$i], $array[$i - 1]) < 0) {
                [$array[$i], $array[$i - 1]] = [$array[$i - 1], $array[$i]];
            }
        }
        ++$l;
    }
    return $array;
}
