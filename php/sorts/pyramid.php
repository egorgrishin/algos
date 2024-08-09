<?php
declare(strict_types=1);

function pyramidSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($i = intdiv($count, 2) - 1; $i >= 0; $i--) {
        heapify($array, $i, $count, $cmp);
    }

    for ($i = $count - 1; $i > 0; $i--) {
        [$array[0], $array[$i]] = [$array[$i], $array[0]];
        heapify($array, 0, $i, $cmp);
    }
    return $array;
}

function heapify(array &$array, int $i, int $max, callable $cmp): void
{
    $l = $i * 2 + 1;
    $r = $i * 2 + 2;
    $index = $i;

    if ($l < $max && $cmp($array[$l], $array[$index]) > 0)
        $index = $l;
    if ($r < $max && $cmp($array[$r], $array[$index]) > 0)
        $index = $r;
    if ($index === $i)
        return;

    [$array[$i], $array[$index]] = [$array[$index], $array[$i]];
    heapify($array, $index, $max, $cmp);
}
