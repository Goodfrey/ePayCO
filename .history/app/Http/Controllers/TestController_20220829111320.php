<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public static function index(Request $request)
    {
        dd("Test Controller");
    }
}
