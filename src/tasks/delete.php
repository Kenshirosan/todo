<?php

require(__DIR__ . '/../helpers/helpers.php');

writeCSV([], 'todolist', 'w');

header('Location: ../../');

die();