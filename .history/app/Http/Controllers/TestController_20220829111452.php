<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public static function index(Request $request)
    {
        $clients    =   User::first();
        dd($clients);
        dd("Test Controller");
    }
}
