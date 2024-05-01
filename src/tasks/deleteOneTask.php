<?php

require('../helpers/helpers.php');

$data = readCSV('todolist');

$post = cleanPost($_POST);

array_splice($data, $post['taskId'], 1);

writeCSV($data, 'todolist', 'w');

header('Location: ../../');

die();
