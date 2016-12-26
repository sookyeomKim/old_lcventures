@extends('master')
@section('pageTitle', '바이두맵-스탠다드 신청')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/baidu.css')}}">
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
            <p class="sub_slogan01"><img src="{{asset('images/sub_slogan02.png')}}" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">
            <form id="register-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" role="form">
                <input type="hidden" id="next-url" value="{{url('page/event/baidu-landing')}}">;
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <input type="hidden" id="c_i_level" name="c_i_level"
                       value="{{$defaultValue['c_i_level']}}">
                <input type="hidden" id="c_m_email" name="c_m_email" value="{{$defaultValue['c_m_email']}}">
                <input type="hidden" id="c_m_name" name="c_m_name" value="{{$defaultValue['c_m_name']}}">
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
                        <td><input type="text" id="c_crn"
                                   name="c_crn"></td>
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
                        <th colspan="2">인당 평균 가격(원)</th>
                        <td><input type="text" id="c_avg_price" name="c_avg_price" class="number"></td>
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
                        <td><input type="file" id="c_log_img" name="c_log_img"></td>
                        <td><input type="file" id="c_bl_img" name="c_bl_img"></td>
                    </tr>
                    </tbody>
                </table>

                <button type="button" id="baidu_reg_button">전송</button>
            </form>
        </div>
        <!-- //바디 영역 끝 -->
    </div>
@endsection
@section('scripts')
    <script src="{{elixir('js/baidu.js')}}"></script>
    <script>
        (function ($) {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            getFisrtCob();

            getSecondCob();

            setTimePicker();

            setTag();

            setFormat();

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

            function setFormat() {
                $('input.number').keyup(function (event) {

                    // 방향키 스킵
                    if (event.which >= 37 && event.which <= 40) return;

                    // 숫자 포맷팅
                    // 숫자 의외의 다른 문자는 제거하고 3개의 숫자마다 콤마를 붙혀준다.
                    $(this).val(function (index, value) {
                        return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    });
                });
            }

            function baidu_reg_ajax() {
                $.ajax({
                    url: '{{route('baidu.store')}}',
                    data: new FormData($('#register-form')[0]),
                    dataType: 'json',
                    type: 'post',
                    processData: false,
                    contentType: false
                }).done(function (data) {
                    alert('신청이 완료되었습니다.');
                    window.location.href = '/';
                }).fail(function (data) {
                    if (data.status === 422) {
                        $.each(JSON.parse(data.responseText), function (key, value) {
                            /*$("#" + key).parents('.form-group').addClass('has-error').find('.error-text').text(value).css({
                             'color': 'red'
                             });*/
                        })
                    }
                })
            }
        })(jQuery)
    </script>
@endsection