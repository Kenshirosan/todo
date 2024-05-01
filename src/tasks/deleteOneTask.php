<?php

require('../helpers/helpers.php');

$data = readCSV('todolist');

$post = cleanPost($_POST);

array_splice($data, $post['taskId'], 1);

writeCSV($data, 'todolist', 'w');

sortTasks();

header('Location: ../../');

die();
