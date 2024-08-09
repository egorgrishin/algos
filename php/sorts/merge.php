<?php
declare(strict_types=1);

function mergeSort(array $arr, callable $cmp): array
{
    $count = count($arr);
    if ($count < 2) return $arr;

    $mid = intdiv($count, 2);
    $l = mergeSort(array_slice($arr, 0, $mid), $cmp);
    $r = mergeSort(array_slice($arr, $mid), $cmp);

    $lCount = count($l);
    $rCount = count($r);
    $i = $j = 0;
    while ($i < $lCount && $j < $rCount) {
        if ($cmp($l[$i], $r[$j]) < 0) {
            $arr[$i + $j] = $l[$i];
            ++$i;
        } else {
            $arr[$i + $j] = $r[$j];
            ++$j;
        }
    }
    for (; $i < $lCount; $i++) $arr[$i + $j] = $l[$i];
    for (; $j < $rCount; $j++) $arr[$i + $j] = $r[$j];

    return $arr;
}
