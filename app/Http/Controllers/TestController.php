<?php
/**
 * Created by PhpStorm.
 * User: ikks0
 * Date: 2016-12-23
 * Time: 오후 5:53
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        return view('layouts.page.event.baidu.standardReg');
    }

    public function storeBaidu(Request $request)
    {
        $this->validate($request,
            [
                'c_name' => 'required|max:60',
                'c_addr' => 'required|max:100',
                'c_m_phone' => ['required', 'regex:/^(010|011|016|017|018|019)\d{3,4}\d{4}$/', 'max:11'],
            ]);
    }
}