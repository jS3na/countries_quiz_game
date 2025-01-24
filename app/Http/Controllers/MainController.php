<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private $app_data;

    public function __construct(){
        $this->app_data = require(app_path('app_data.php'));
    }
}
