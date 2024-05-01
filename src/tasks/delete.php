<?php

$handle = fopen(__DIR__ . '/../../todolist.csv', 'w');

$data = [];

foreach($data as $taskData) {
    fputcsv($data, $taskData);
}

header('Location: ../../');