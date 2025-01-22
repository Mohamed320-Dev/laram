<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    public function index() {
        $languages = ["PHP", "LARAVEL", "JS", "MYSQL"];
        return view('First', compact('languages'));
    }
}
