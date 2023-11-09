<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinktreeController extends Controller
{
    public function index(){
        return view("linktree.index");
    }
}
