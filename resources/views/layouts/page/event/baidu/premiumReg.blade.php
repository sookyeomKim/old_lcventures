@extends('master')
@section('pageTitle', '바이두맵-스탠다드 신청')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/baidu.css')}}">
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid #000;
        }

        th, td {
            border: 2px solid #000;
        }
    </style>
@endsection
@section('sub')
    <div id="wrap">
        <!-- 상단 메뉴 시작-->
        <div id="toparea">
            <div class="topmenu">
                <h1><a href="/"><img src="/images/logo.png" alt="lcventures"></a></h1>
                <ul>
                    <li class="m01">
                        <h2><a>ABOUT</a></h2>
                        <ul>
                            <li><a href="{{url('page/vision')}}"><span>About us</span><span class="on">비전</span></a>
                            </li>
                            <li><a href="{{url('page/ceoIntro')}}"><span>Message to client</span><span
                                            class="on">CEO인사말</span></a>
                            </li>
                            <li><a href="{{url('page/organization')}}"><span>Organization</span><span
                                            class="on">조직도</span></a>
                            </li>
                            <li><a href="{{url('page/coporateIdentity')}}"><span>Coporate Identity</span><span
                                            class="on">엘씨벤처스CI</span></a>
                            </li>
                            <li><a href="{{url('page/contactUs')}}"><span>Contact us</span><span class="on">오시는길</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m02">
                        <h2><a>Business</a></h2>
                        <ul>
                            <li><a href="{{url('page/snsMarketing')}}"><span>SNS marketing</span><span
                                            class="on">SNS마케팅</span></a></li>
                            <li><a href="{{url('page/integratedMarketing')}}"><span>Integrated marketing</span><span
                                            class="on">통합마케팅</span></a>
                            </li>
                            <li><a href="{{url('page/display')}}"><span>Keyword &amp; Display</span><span
                                            class="on">키워드/디스플레이마케팅</span></a></li>
                            <li><a href="{{url('page/viralMarketing')}}"><span>Viral marketing</span><span
                                            class="on">바이럴마케팅</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m03">
                        <h2><a>PORTFOLIO</a></h2>
                        <ul>
                            <li><a href="{{url('page/designPortfolio')}}"><span>Design</span><span class="on">디자인</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m04">
                        <h2><a>RECRUIT</a></h2>
                        <ul>
                            <li><a href="{{url('page/employmentProcess')}}"><span>Employment process</span><span
                                            class="on">채용프로세스</span></a>
                            </li>
                            <li><a href="{{url('page/employmentNotice')}}"><span>Employment notice</span><span
                                            class="on">채용공고</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //상단 메뉴 끝-->

        <!-- 상단 비주얼 영역 시작 -->
        <div id="visual01">
            <p class="sub_slogan01"><img src="../images/sub_slogan02.png" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">
            <form action="{{route('baidu.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="c_m_name" name="c_m_name" value="{{$defaultValue['c_m_name']}}">
                <input type="hidden" id="c_m_email" name="c_m_email" value="{{$defaultValue['c_m_email']}}">
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">구분</th>
                        <th>기재란</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th colspan="2">상호명</th>
                        <td><input type="text" id="c_name" name="c_name" value="{{$defaultValue['c_name']}}"></td>
                    </tr>
                    <tr>
                        <th colspan="2">주소</th>
                        <td><input type="text" id="c_addr" name="c_addr" value="{{$defaultValue['c_addr']}}"></td>
                    </tr>
                    <tr>
                        <th colspan="2">신청자 연락처</th>
                        <td><input type="text" id="c_m_phone" name="c_m_phone" value="{{$defaultValue['c_m_phone']}}">
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="2">업종</th>
                        <th>제1업종</th>
                        <td>
                            <select id="c_first_cob" name="c_first_cob"></select>
                        </td>
                    </tr>
                    <tr>
                        <th>제2업종</th>
                        <td>
                            <select id="c_second_cob" name="c_second_cob"></select>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="3">사업자등록증<br>정보</th>
                        <th>사업자등록번호</th>
                        <td><input type="text" id="c_crn" class="{{ $errors->has('c_crn') ? ' has-error' : '' }}" name="c_crn"></td>
                    </tr>
                    <tr>
                        <th>대표자 성함</th>
                        <td><input type="text" id="c_rep_name" name="c_rep_name"></td>
                    </tr>
                    <tr>
                        <th>대표자 연락처</th>
                        <td><input type="text" id="c_rep_phone" name="c_rep_phone"></td>
                    </tr>
                    <tr>
                        <th colspan="2">소개</th>
                        <td><input type="text" id="c_intro" name="c_intro"></td>
                    </tr>
                    <tr>
                        <th rowspan="3">영업 시간</th>
                        <th>주중</th>
                        <td>
                            <div id="weekdays_times">
                                <input type="text" class="time start" name="weekdays_times_start">
                                <input type="text" class="time end" name="weekdays_times_end">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>주말</th>
                        <td>
                            <div id="weekend_times">
                                <input type="text" class="time start" name="weekend_times_start">
                                <input type="text" class="time end" name="weekend_times_end">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>휴일</th>
                        <td>
                            <div id="holiday_times">
                                <input type="text" class="time start" name="holiday_times_start">
                                <input type="text" class="time end" name="holiday_times_end">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">휴무일</th>
                        <td><input type="text" id="c_holiday" name="c_holiday"></td>
                    </tr>
                    <tr>
                        <th colspan="2">인당 평균 가격</th>
                        <td><input type="text" id="c_avg_price" name="c_avg_price"></td>
                    </tr>
                    <tr>
                        <th colspan="2">키워드(TAG)</th>
                        <td>
                            <textarea id="c_tag" name="c_tag"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">교통접근방법</th>
                        <td><input type="text" id="c_traffic" name="c_traffic"></td>
                    </tr>
                    <tr>
                        <th colspan="2">홈페이지 URL(없으면 공백)</th>
                        <td><input type="text" id="c_homepage_url" name="c_homepage_url"></td>
                    </tr>
                    </tbody>
                </table>

                <div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>

                <table>
                    <caption>이미지 첨부</caption>
                    <thead>
                    <tr>
                        <th>사업자등록증</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="file" name="c_log_img"></td>
                        <td><input type="file" name="c_bl_img"></td>
                        <td><input type="file" name="c_rep_img"></td>
                        <td><input type="file" name="c_add_img1"></td>
                        <td><input type="file" name="c_add_img1"></td>
                        <td><input type="file" name="c_add_img2"></td>
                        <td><input type="file" name="c_add_img3"></td>
                        <td><input type="file" name="c_add_img4"></td>
                        <td><input type="file" name="c_add_img5"></td>
                        <td><input type="file" name="c_add_img6"></td>
                        <td><input type="file" name="c_add_img7"></td>
                        <td><input type="file" name="c_add_img8"></td>
                        <td><input type="file" name="c_add_video"></td>
                    </tr>
                    </tbody>
                </table>

                <button type="submit">전송</button>
            </form>
        </div>
        <!-- //바디 영역 끝 -->
    </div>
@endsection
@section('scripts')
    <script src="{{elixir('js/baidu.js')}}"></script>
    <script>
        (function ($) {
            //ajax 토큰
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            getFisrtCob();

            getSecondCob();

            setTimePicker();

            setTag();

            $('#baidu_reg_button').click(function () {
                baidu_reg_ajax();
            });

            function getFisrtCob() {
                $.ajax({
                    type: 'get',
                    url: '{{route('openApi.firstCob')}}',
                    dataType: 'json'
                }).done(function (data) {
                    $.each($.parseJSON(data), function (key, value) {
                        var optionTag = $('<option value="' + value.cobName + '">' + value.cobName + '</option>');
                        var cloneOptionTag = optionTag.clone(true);
                        $('#c_first_cob').append(cloneOptionTag)
                    });
                });
            }

            function getSecondCob() {
                $.ajax({
                    type: 'get',
                    url: '{{route('openApi.secondCob')}}',
                    dataType: 'json'
                }).done(function (data) {
                    $.each($.parseJSON(data), function (key, value) {
                        var optionTag = $('<option value="' + value.cobName + '">' + value.cobName + '</option>');
                        var cloneOptionTag = optionTag.clone(true);
                        $('#c_second_cob').append(cloneOptionTag)
                    });
                })
            }

            function setTimePicker() {
                $('#weekdays_times .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#weekdays_times').datepair();

                $('#weekend_times .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#weekend_times').datepair();

                $('#holiday_times .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#holiday_times').datepair();
            }

            function setTag() {
                $('#c_tag').tagEditor();
            }

            function baidu_reg_ajax() {
                /*var formData = {
                 c_i_level: $('#c_i_level').val(),
                 c_name: $('#c_name').val(),
                 c_addr: $('#c_addr').val(),
                 c_m_name: $('#c_m_name').val(),
                 c_m_phone: $('#c_m_phone').val(),
                 c_m_email: $('#c_m_email').val(),
                 c_first_cob: $('#c_first_cob').val(),
                 c_second_cob: $('#c_second_cob').val(),
                 c_crn: $('#c_crn').val(),
                 c_rep_name: $('#c_rep_name').val(),
                 c_rep_phone: $('#c_rep_phone').val(),
                 c_intro: $('#c_intro').val(),
                 weekdays_times: $('#weekdays_times').val(),
                 weekend_times: $('#weekend_times').val(),
                 holiday_times: $('#holiday_times').val(),
                 c_holiday: $('#c_holiday').val(),
                 c_avg_price: $('#c_avg_price').val(),
                 c_tag: $('#c_tag').val(),
                 c_traffic: $('#c_traffic').val(),
                 c_homepage_url: $('#c_homepage_url').val()
                 };*/

                /*$.ajax({
                 type: 'post',
                 dataType: 'json',
                 url:{{}},
                 data: formData
                 }).done(function (data) {

                 }).fail(function () {

                 });*/
            }
        })(jQuery)
    </script>
@endsection