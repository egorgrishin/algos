<?php
declare(strict_types=1);

require_once 'bubble.php';
require_once 'shaker.php';

const ITERATIONS_COUNT = 10;
const NUMS_COUNT = 1000;

for ($i = 0; $i < ITERATIONS_COUNT; $i++) {
    $nums = [];
    for ($j = 0; $j < NUMS_COUNT; $j++) $nums[] = rand(-10_000, 10_000);
    $sorted = $nums;
    $cmp = fn (int $a, int $b): int => $a - $b;
    usort($sorted, $cmp);

    if (
        bubbleSort($nums, $cmp) !== $sorted ||
        shakerSort($nums, $cmp) !== $sorted
    ) {
        die('Error' . PHP_EOL);
    }
}

exit('OK' . PHP_EOL);