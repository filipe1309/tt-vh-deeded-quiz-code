<?php

/*
* add two numbers
* @param int $first
* @param int $second
* @return int
*/
function add(int $first, int $second): int
{
    if ($first == 0) {
        return $second;
    }
    return add($first - 1, $second + 1);
}

echo add(3, 4); // 7
