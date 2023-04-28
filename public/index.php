<?php
const BASE_PATH = __DIR__ . '/htdocs/';

require "app/helper.php";

spl_autoload_register(function ($class) {
$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});
