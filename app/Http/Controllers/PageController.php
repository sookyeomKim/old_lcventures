<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page($pageName){
        return view('layouts.page.' . $pageName);
    }
}
