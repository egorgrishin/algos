<?php
declare(strict_types=1);

require_once 'bubble.php';
require_once 'comb.php';
require_once 'gnome.php';
require_once 'insert.php';
require_once 'select.php';
require_once 'shaker.php';
require_once 'shell.php';

const ITERATIONS_COUNT = 1000;
const NUMS_COUNT = 100;

for ($i = 0; $i < ITERATIONS_COUNT; $i++) {
    $nums = [];
    for ($j = 0; $j < NUMS_COUNT; $j++) $nums[] = rand(-10_000, 10_000);
    $original = $nums;
    $sorted = $nums;
    $cmp = fn (int $a, int $b): int => $a - $b;
    usort($sorted, $cmp);

    if (
        bubbleSort($nums, $cmp) !== $sorted ||
        combSort($nums, $cmp) !== $sorted ||
        gnomeSort($nums, $cmp) !== $sorted ||
        insertSort($nums, $cmp) !== $sorted ||
        selectSort($nums, $cmp) !== $sorted ||
        shakerSort($nums, $cmp) !== $sorted ||
        shellSort($nums, $cmp) !== $sorted
    ) {
        die('Error' . PHP_EOL);
    }
}

exit('OK' . PHP_EOL);
