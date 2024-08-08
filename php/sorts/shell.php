<?php
declare(strict_types=1);

function shellSort(array $array, callable $cmp): array
{
    $count = count($array);
    for ($d = intdiv($count, 2); $d > 0; $d = intdiv($d, 2)) {
        for ($i = $d; $i < $count; ++$i) {
            for ($j = $i - $d; $j >= 0; $j -= $d) {
                if ($cmp($array[$j], $array[$j + $d]) <= 0) {
                    break;
                }
                [$array[$j], $array[$j + $d]] = [$array[$j + $d], $array[$j]];
            }
        }
    }
    return $array;
}
