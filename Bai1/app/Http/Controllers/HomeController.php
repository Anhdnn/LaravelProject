<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NhanVien;


class HomeController extends Controller
{
    public function __construct(){
        
    }
    public function index(){
        return 'Home';
    }
    public function LoadForm(){
        return view('form');
    }
    public function HandleForm(){
        $file = request()->file('file-test');
        dd($file);
        // $file->store('file');
        return True;
    }
    public function Auth(){
        $user = Auth::user();

    }
}
