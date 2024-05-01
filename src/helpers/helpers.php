<?php

function cleanString($string): string
{
    return htmlspecialchars(htmlentities($string));
}

function cleanPost($post): array
{
    $newPost = [];

    foreach ($post as $key => $value) {
        $newValue = cleanString($value);
        $newKey = cleanString($key);

        $newPost[$newKey] = $newValue;
    }

    return $newPost;
}

function readCSV($filename): array
{
    $handle = fopen(__DIR__ . '/../../' . $filename . '.csv', 'r');

    $data = [];

    while ($line = fgetcsv($handle)) {
        $data[] = $line;
    }

    return $data;
}

function writeCSV($data, $filename, $mode = 'a'): void
{
    $handle = fopen(__DIR__ . '/../../' . $filename . '.csv', $mode);

    foreach ($data as $line) {

        fputcsv($handle, $line);
    }

    fclose($handle);
}

function sort_arr($a, $b): int
{
    // index des dates
    if ($a[2] == $b[2]) {
        return 0;
    }
    return ($a[2] < $b[2]) ? -1 : 1;
}

function sortTasks() {
    $tasks = readCSV('todolist');

    uasort($tasks, 'sort_arr');

    writeCSV($tasks, 'todolist', 'w');
}