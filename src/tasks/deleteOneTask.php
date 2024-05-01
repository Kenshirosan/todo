<?php

require('../helpers/helpers.php');
require('read.php');

$post = cleanPost($_POST);

array_splice($data, $post['taskId'], 1);

$handle = fopen(__DIR__ . '/../../todolist.csv', 'w');

foreach($data as $task) {
    fputcsv($handle, $task);
}

fclose($handle);

header('Location: ../../');
die();