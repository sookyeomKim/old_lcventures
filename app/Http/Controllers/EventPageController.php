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

    public function getCreatePage($eventPageName, Request $request)
    {
        $defaultValue = $request->all();

        return view('layouts.page.event.' . $eventPageName . '/' . $request->input('c_i_level') . 'Reg', compact('defaultValue'));
    }
}
