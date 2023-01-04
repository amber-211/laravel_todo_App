<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todo');
    }
    public function data(){
        $e = Todo::get();

        
        return view('data',compact('e'));
    }
}
