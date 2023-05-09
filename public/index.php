<?php
use app\http\Controllers\Controller;
use Core\Router;
const BASE_PATH = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;

require BASE_PATH . "app/helper.php";


spl_autoload_register(function ($class) {
$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

// create new router object
$router = new Core\Router();
$routes = require base_path("routes/routes_provider.php");

$config = require base_path("app/config.php");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$url = $protocol . "://" . $host . $uri;
$url= str_replace($config['app']['url'], '', $url);
$method = $_SERVER['REQUEST_METHOD'];
if (strpos($url, "?") !== false) {
    $url = explode("?", $url)[0];
}
$router->route($url, $method);




