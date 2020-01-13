<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function api() {
        return 'api';
    }

    public function web() {
        return view('welcome');
    }
}
