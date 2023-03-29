<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return 'Book Index';
    }
    public function view(){
        return 'Book View';
    }
}
