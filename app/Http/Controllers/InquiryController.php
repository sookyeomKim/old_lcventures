<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;


class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $take = Inquiry::create($request->all());
        return \Response::json($take);
    }
}
