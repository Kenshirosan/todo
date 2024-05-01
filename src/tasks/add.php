<?php

include('../helpers/helpers.php');

$post = cleanPost($_POST);

writeCSV([$post], 'todolist');

sortTasks();

header('Location: ../../');

die();
