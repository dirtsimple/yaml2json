# YAML to JSON Converter

This is a pure-PHP YAML to JSON converter for use with [jqmd](https://github.com/bashup/jqmd), [imposer](https://github.com/dirtsimple/imposer), and similar tools in environments where better conversion tools are not available.  It takes no options, reading YAML from stdin and writing JSON to stdout.  The executable is a PHAR named `yaml2json.php` to avoid conflict with other yaml2json executables, and it's distributed as a PHAR to avoid installation conflicts with other library versions.
