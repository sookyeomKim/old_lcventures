<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page($pageName)
    {
        if (\Request::is('page/*')) {
            try {
                return view('layouts.page.' . $pageName);
            } catch (\Exception $exception) {
                return \Redirect::route('main');
            }
        } else {
            return \Redirect::route('main');
        }
    }
}
