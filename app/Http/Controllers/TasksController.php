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

    public function caimito(){
        return view('caimito')->with('title', 'Caimito');
    }
    public function capulin1(){
        return view('capulin1')->with('title', 'capulin1');
    }
}
