<?php

include('../helpers/helpers.php');

$post = cleanPost($_POST);

writeCSV([$post], 'todolist');

header('Location: ../../');

die();
