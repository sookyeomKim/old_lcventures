<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Baidu;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.index');
    }

    public function eventsIndex()
    {
        return view('layouts.admin..events.index');
    }

    public function baiduIndex()
    {

        return view('layouts.admin..events.baiduConsultingList');
    }
}
