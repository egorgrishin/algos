<?php
declare(strict_types=1);

function printArr(array $arr): void
{
    var_dump(
        implode(',', $arr),
    );
}
