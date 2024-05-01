<?php

include(__DIR__ . '/../lib/bootstrap.php');

$post = cleanPost($_POST);

writeCSV([$post], 'todolist');

sortTasks();

header('Location: ../../');

die();
