<?php
declare(strict_types=1);

function combSort(array $array, callable $cmp): array
{
    $step = $count = count($array);
    $isSorted = false;
    while ($step > 1 || !$isSorted) {
        $isSorted = true;
        if ($step > 1) {
            $step = (int) ($step / 1.247);
        }
        for ($i = 0; $i + $step < $count; $i++) {
            $j = $i + $step;
            if ($cmp($array[$i], $array[$j]) > 0) {
                [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
                $isSorted = false;
            }
        }
    }
    return $array;
}
