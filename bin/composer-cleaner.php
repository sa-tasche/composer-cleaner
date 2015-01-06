<?php

require __DIR__ . '/../src/Cleaner.php';

set_exception_handler(function($e) {
	echo "ERROR: {$e->getMessage()}\n";
	exit(1);
});

$cleaner = new Cleaner;
$cleaner->clean(getcwd());
