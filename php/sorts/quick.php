<?php
declare(strict_types=1);

function quickSort(array $array, callable $cmp)
{
    $count = count($array);
    if ($count <= 1) return $array;
    $l = $m = $r = [];
    $p = $array[rand(0, $count - 1)];
    for ($i = 0; $i < $count; $i++) {
        if ($cmp($array[$i], $p) < 0) {
            $l[] = $array[$i];
        } elseif ($cmp($array[$i], $p) > 0) {
            $r[] = $array[$i];
        } else {
            $m[] = $array[$i];
        }
    }
    return array_merge(quickSort($l, $cmp), $m, quickSort($r, $cmp));
}
