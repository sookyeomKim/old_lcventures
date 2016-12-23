<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function getPage($eventPageName)
    {
        $eventName = preg_split('/-/', $eventPageName, -1, PREG_SPLIT_NO_EMPTY);
        if (\Request::is('page/event/*')) {
            try {
                return view('layouts.page.event.' . $eventName[0] . '/' . $eventName[1]);
            } catch (\Exception $exception) {
                return \Redirect::route('main');
            }
        } else {
            return \Redirect::route('main');
        }
    }

    public function getCreatePage($eventPageName, $registerLevel, Request $request)
    {
        /*$defaultValue = $request->all();

        return view('layouts.page.event.' . $eventPageName . '/' . $request->input('c_i_level') . 'Reg', compact('defaultValue'));*/

        $defaultValue = $request->all();

        if ($eventPageName == 'baidu') {
            $this->validate($request,
                [
                    'c_name' => 'required|max:60',
                    'c_addr' => 'required|max:100',
                    'c_m_name' => 'required|max:60',
                    'c_m_phone' => ['required', 'regex:/^(010|011|016|017|018|019)\d{3,4}\d{4}$/', 'max:11'],
                    'c_m_email' => 'required|max:60|email',
                ]);
        }

        return view('layouts.page.event.' . $eventPageName . '.' . $registerLevel . 'Reg', compact('defaultValue'));
    }
}
