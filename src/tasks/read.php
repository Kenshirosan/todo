<?php

require(__DIR__ . '/../helpers/helpers.php');

$data = readCSV('todolist');

uasort($data, 'sort_arr');

writeCSV($data, 'todolist', 'w');

$data = readCSV('todolist');
