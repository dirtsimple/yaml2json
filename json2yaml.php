<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

echo Yaml::dump(
	json_decode( file_get_contents('php://stdin') ), 4, 2,
	Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK | Yaml::DUMP_OBJECT_AS_MAP
);

echo "\n";
