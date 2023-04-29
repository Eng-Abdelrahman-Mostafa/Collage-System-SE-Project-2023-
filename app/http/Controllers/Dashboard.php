<?php
namespace app\http\Controllers;
//write code here
class Dashboard {
    public function index() {
        view('dashboard');
    }
}

//write code here

return new Dashboard();
