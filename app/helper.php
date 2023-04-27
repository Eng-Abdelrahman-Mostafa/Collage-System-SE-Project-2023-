<?php
function authorize($condition,$statusCode = 403){
    if(!$condition){
        abort($statusCode);
    }
}
function abort($statusCode){
    http_response_code($statusCode);
    require "views/errors/{$statusCode}.view.php";
    die();
}
function view($name,$data = []){
    extract($data);
    return require "views/{$name}.view.php";
}
function dd($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

