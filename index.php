<?php

require 'Task.php';
require 'functions.php';

$pdo = openDB();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';