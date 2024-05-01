<?php

require(__DIR__ . '/../lib/csv.php');

$data = readCSV('todolist');

require('./src/views/partials/header.phtml');
require('./src/views/index.phtml');
require('./src/views/partials/footer.phtml');
