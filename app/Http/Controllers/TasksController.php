<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    // public function home(){
    // 	return 'Hello World!';
    // }

    public function home(){
    	return view('dashboard');
    }

    public function welcome(){
    	return view('welcome');
    }

    public function apple(){
        return view('apple')->with('title', 'Apple');
    }

    public function pear(){
        return view('pear')->with('title', 'Pear');
    }

    public function banana(){
        return view('banana')->with('title', 'Banana');
    }
}
