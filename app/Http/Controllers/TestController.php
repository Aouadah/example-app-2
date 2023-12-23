<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $message = "Deze text komt uit de testcontroller";
        return view('startpagina', ['message' => $message]);
    }
}
