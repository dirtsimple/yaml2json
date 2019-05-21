<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

echo json_encode(
	Yaml::parse(
		file_get_contents('php://stdin'),
		Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_OBJECT
	)
);

echo "\n";
