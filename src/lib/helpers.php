<?php

function sort_arr($a, $b): int
{
    // index des dates
    if ($a[2] == $b[2]) {
        return 0;
    }
    return ($a[2] < $b[2]) ? -1 : 1;
}

function sortTasks(): void
{
    $tasks = readCSV('todolist');

    uasort($tasks, 'sort_arr');

    writeCSV($tasks, 'todolist', 'w');
}