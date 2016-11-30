<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class AdminController extends Controller
{
    public function index()
    {
        $Inquiries = Inquiry::query()->paginate(10);
        return view('layouts.admin.index', compact('Inquiries'));
    }
}
