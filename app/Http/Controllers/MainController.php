<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo "I am inside the app!";
    }

    public function newNote()
    {
        echo "I am creating a new note!";
    }
}
