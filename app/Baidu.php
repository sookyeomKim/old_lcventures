<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baidu extends Model
{
    protected $fillable = ['c_i_level', 'c_name', 'c_addr', 'c_m_name', 'c_m_phone', 'c_m_email', 'c_first_cob', 'c_second_cob', 'c_crn', 'c_rep_name', 'c_rep_phone', 'c_intro', 'weekdays_times', 'weekend_times', 'holiday_times', 'c_holiday', 'c_avg_price', 'c_traffic', 'c_homepage_url', 'c_rep_img', 'c_log_img', 'c_bl_img', 'c_add_img1', 'c_add_img2', 'c_add_img3', 'c_add_img4', 'c_add_img5', 'c_add_img6', 'c_add_img7', 'c_add_img8', 'c_add_video'];

    public static $Rules = ['c_m_name' => 'required',
        'c_m_email' => 'required',
        'c_i_level' => 'required',
        'c_name' => 'required|max:60',
        'c_addr' => 'required|max:60',
        'c_m_phone' => ['required', 'regex:/^(010|011|016|017|018|019)\d{3,4}\d{4}$/', 'max:11'],
        'c_first_cob' => 'required',
        'c_second_cob' => 'required',
        'c_crn' => ['required', 'regex:/^[0-9]+$/'],
        'c_rep_name' => 'required|max:60',
        'c_rep_phone' => ['required', 'regex:/^(010|011|016|017|018|019)\d{3,4}\d{4}$/', 'max:11'],
        'c_intro' => 'required',
        'weekdays_times_start' => 'required',
        'weekdays_times_end' => 'required',
        'weekend_times_start' => 'required',
        'weekend_times_end' => 'required',
        'holiday_times_start' => 'required',
        'holiday_times_end' => 'required',
        'c_holiday' => 'required',
        'c_avg_price' => 'required',
        'c_tag' => 'required',
        'c_traffic' => 'required',
        'c_log_img' => 'required',
        'c_bl_img' => 'required'
    ];
}
