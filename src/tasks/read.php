<?php



$handle = fopen(__DIR__ . '/../../todolist.csv', 'r');

$data = [];

while ($line = fgetcsv($handle)) {
    $data[] = $line;
}


sort($data);
