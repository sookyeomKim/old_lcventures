<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baidu;
use App\BaiduTag;
use App\BaiduTagRel;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;

class BaiduController extends Controller
{
    public function getBaidu()
    {
        return Datatables::of(Baidu::query())->make(true);
    }

    public function storeBaidu(Request $request)
    {
        $this->validate($request, Baidu::$Rules);

        $task = Baidu::create([
            'c_name' => $request->input('c_name'),
            'c_addr' => $request->input('c_addr'),
            'c_m_name' => $request->input('c_m_name'),
            'c_m_phone' => $request->input('c_m_phone'),
            'c_m_email' => $request->input('c_m_email'),
            'c_first_cob' => $request->input('c_first_cob'),
            'c_second_cob' => $request->input('c_second_cob'),
            'c_crn' => $request->input('c_crn'),
            'c_rep_name' => $request->input('c_rep_name'),
            'c_rep_phone' => $request->input('c_rep_phone'),
            'c_intro' => $request->input('c_intro'),
            'weekdays_times' => $request->input('weekdays_times_start') . '~' . $request->input('weekdays_times_end'),
            'weekend_times' => $request->input('weekend_times_start') . '~' . $request->input('weekend_times_end'),
            'holiday_times' => $request->input('holiday_times_start') . '~' . $request->input('holiday_times_end'),
            'c_holiday' => $request->input('c_holiday'),
            'c_avg_price' => $request->input('c_avg_price'),
            'c_traffic' => $request->input('c_traffic'),
            'c_homepage_url' => $request->input('c_homepage_url'),
            'c_log_img' => $this->imageSave('c_log_img'),
            'c_bl_img' => $this->imageSave('c_bl_img'),
            'c_rep_img' => $this->imageSave('c_rep_img'),
            'c_add_img1' => $this->imageSave('c_add_img1'),
            'c_add_img2' => $this->imageSave('c_add_img2'),
            'c_add_img3' => $this->imageSave('c_add_img3'),
            'c_add_img4' => $this->imageSave('c_add_img4'),
            'c_add_img5' => $this->imageSave('c_add_img5'),
            'c_add_img6' => $this->imageSave('c_add_img6'),
            'c_add_img7' => $this->imageSave('c_add_img7'),
            'c_add_img8' => $this->imageSave('c_add_img8'),
            'c_add_video' => $this->imageSave('c_add_video')
        ]);

        $getBaidu = Baidu::where('c_name', '=', $request->input('c_name'))->where('c_m_name', '=', $request->input('c_m_name'))->where('c_crn', '=', $request->input('c_crn'))->orderBy('id', 'desc')->get();
        $getBaiduId = $getBaidu[0]->id;

        $tagArry = preg_split('/,/', $request->c_tag, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($tagArry as $item) {
            $checkTag = BaiduTag::where('tag_name', '=', $item)->get();
            if (count($checkTag) == 0) {
                BaiduTag::create([
                    'tag_name' => $item
                ]);
                BaiduTagRel::create([
                    'baidu_id' => $getBaiduId,
                    'tag_id' => BaiduTag::where('tag_name', '=', $item)->get()[0]->id]);
            } else {
                $checkTagName = BaiduTagRel::where('baidu_id', '=', $getBaiduId)->where('tag_id', '=', BaiduTag::where('tag_name', '=', $item)->get()[0]->id)->get();
                if (count($checkTagName) == 0) {
                    BaiduTagRel::create([
                        'baidu_id' => $getBaiduId,
                        'tag_id' => BaiduTag::where('tag_name', '=', $item)->get()[0]->id]);
                }
            }
        }

        return \Response::json($task);
    }

    public function imageSave($name)
    {
        $file = Input::file($name);
        if ($file != null) {
            $image = \Image::make($file);
            $fileNmae = $file->getClientOriginalName();
            $path = public_path('uploads/images/' . $fileNmae);
            $image->save($path);
            return $fileNmae;
        } else {
            return null;
        }
    }
}
