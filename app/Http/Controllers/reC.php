<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reC extends Controller
{
    public function index() {
        return response()->json('sw');
    }
}
