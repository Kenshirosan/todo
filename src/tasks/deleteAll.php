<?php

require(__DIR__ . '/../lib/csv.php');

writeCSV([], 'todolist', 'w');

header('Location: ../../');

die();
