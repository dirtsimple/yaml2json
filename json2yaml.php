<?php
require_once __DIR__ . '/vendor/autoload.php';
use dirtsimple\CleanYaml;

echo CleanYaml::dump(
	json_decode( file_get_contents('php://stdin') )
);
