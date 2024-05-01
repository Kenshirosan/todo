<?php

require(__DIR__ . '/../lib/csv.php');

$data = readCSV('todolist');

require(__DIR__ . '/../views/partials/header.phtml');
require(__DIR__ . '/../views/index.phtml');
require(__DIR__ . '/../views/partials/footer.phtml');
