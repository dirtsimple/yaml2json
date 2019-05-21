# YAML/JSON Converters

This is a pure-PHP YAML to JSON (and JSON to YAML) converter pair for use with [jqmd](https://github.com/bashup/jqmd), [imposer](https://github.com/dirtsimple/imposer), and similar tools in environments where better conversion tools are not available.

The converters take no options, reading one format from stdin and writing the other to stdout.  The executables are PHARs named `yaml2json.php` and `json2yaml.php` to avoid conflict with other executables with these base names, and are distributed as PHARs to avoid dependency conflicts.

(That is, requiring this package installs only the executable PHARs to `vendor/bin` to be used *purely as command-line tools*, without affecting the requiring project's autoloader or dependencies.)