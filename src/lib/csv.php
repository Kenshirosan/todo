<?php

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