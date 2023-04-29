<?php
function authorize($condition,$statusCode = 403){
    if(!$condition){
        abort($statusCode);
    }
}
function abort($statusCode){
    http_response_code($statusCode);
    require base_path("views/errors/{$statusCode}.view.php");
    die();
}
function view($name,$data = []){
    extract($data);
    return require BASE_PATH."views/{$name}.view.php";
}
function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}
function base_path($path = ''){
    return BASE_PATH.$path;
}
function config($key = ''){
    return require base_path("app/config.php")[$key];
}
function asset($path = ''){
    return base_path("public/assets/{$path}");
}
