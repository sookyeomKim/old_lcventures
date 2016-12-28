<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use Yajra\Datatables\Facades\Datatables;


class InquiryController extends Controller
{
    public function getSearchNshoping()
    {
        return Datatables::of(Inquiry::query())->make(true);
    }

    public function storeSearchNshoping(Request $request)
    {
        $take = Inquiry::create($request->all());
        return \Response::json($take);
    }
}
