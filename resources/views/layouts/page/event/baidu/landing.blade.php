@extends('master')
@section('pageTitle', '바이두맵 광고 신청')
@section('styles')
    <style>
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        thead, tbody, th, td {
            padding-top: 0;
            border: 1px solid #000;
        }

        th, td {
            padding: 5px;
        }

        input {
            border: none;
            width: 100%;
            height: 108%;
        }

        button, .registerBtn {
            cursor: pointer;
        }

        .tableBox {
            width: 90%;
            margin: 0 auto;
        }

        tbody th:not(#applicantInfo th), #table01 th:not(thead th) {
            border-right: 1px solid black;
            background-color: #dcdcdc;
        }

        h1 {
            color: #0080ff;
            padding: 10px;
            text-align: center;
            border-top: 2px solid #0080ff;
            border-bottom: 2px solid #0080ff;
        }

        .navy {
            color: mediumblue;
        }

        #submitBtn {
            width: 360px;
            margin: 20px auto;
            cursor: pointer;
            background: url('Images/button.png') no-repeat;
        }

        /*button*/

        button #submitBtn {
            width: 360px;
            height: 44px;
            background: url('Images/button.png') no-repeat;
            cursor: pointer;
        }

        #c_first_cob, #c_second_cob {
            width: 100%;
            height: 109%;
            padding: 0px;
        }

        #applicantInfo .levelSelect {
            padding: 0;
        }

        #c_i_level {
            width: 100%;
            height: 100%;
            padding: 0px;
            border: 0px;
        }

        #table01 .selectStyle {
            padding: 0px;
        }

        input .time {
            width: 45%;
        }

        textarea {
            width: 99.5%;
            height: 100%;

        }

        /*#table01 th:not(thead){
            background-color:
        }*/

        #table01 td {
            padding: 1px;
        }

        #table3 td {
            padding: 5px;
            font-weight: bold;
            text-align: center;
        }

        #table3 .registerBtn, #table3 button {
            border: 0px;
            padding: 5px;
            width: 100%;
            color: white;
            border: 1px solid #696969;
            background-color: #696969;
        }

        #table01 th, #table3 tr td:nth-child(1), #table3 tr td:nth-child(4) {
            background-color: #dcdcdc;
        }

        /* font 밝은회색 */
        #table3 tr td:nth-child(2), #table3 tr td:nth-child(5) {
            color: #dcdcdc;
            font-weight: normal;
        }

        #table3 tr td:nth-child(3), #table3 tr td:nth-child(6) {
            padding: 0px;
            color: #dcdcdc;
            font-weight: normal;
        }

        #weekdays_times input, #weekend_times input, #holiday_times input {
            width: 48.5%;
        }

        .alert {
            color: red;
        }

        #table3 #emptyCell {
            background-color: white;
        }

        #table3 button:visited {
            border: none;
        }

        #table01 thead th, table thead {
            color: white;
            text-align: center;
            font-weight: bolder;
            background-color: #0080ff;
        }

        tbody th, thead th {
            text-align: center;
        }

        #applicantInfo {
            padding: 5% 9.6%;
            background-color: #dcdcdc;
        }

        #applicantInfo td {
            padding: 1px;
        }

        #applicantInfo input {
            height: 107%;
        }

        #applicantInfo table {
            width: 801px;
            margin-bottom: 15px;
            border: 2px solid black;
            background-color: white;
        }

        #applicantInfo table tr:nth-child(1) th:nth-child(1) {
            color: white;
            background-color: #696969;
        }

        #applicantInfo table tr th {
            font-weight: bold;
        }

        #applicantInfo #register-button {
            width: 100%;
            cursor: pointer;
        }

        .error-text {
            color: red;
        }
    </style>
@endsection
@section('sub')
    <div id="wrap">
        <!-- 상단 메뉴 시작-->
        <div id="toparea">
            <div class="topmenu">
                <h1><a href="/"><img src="/../images/logo.png" alt="lcventures"></a></h1>
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
            <p class="sub_slogan01"><img src="../../images/sub_slogan0203.png" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">

            <!-- 레프트 메뉴 영역 시작 -->
            <div class="leftmenu">
                <h2>BUSI<span style="display:block; line-height:28px; padding-bottom:12px;">NESS</span></h2>
                <ul>
                    <li><a href="{{url('page/snsMarketing')}}">SNS marketing</a></li>
                    <li><a href="{{url('page/integratedMarketing')}}">Integrated marketing</a></li>
                    <li><a href="{{url('page/display')}}">Keyword &amp; Display</a></li>
                    <li><a href="{{url('page/viralMarketing')}}">Viral marketing</a></li>
                </ul>
            </div>
            <!-- //레프트 메뉴 영역 끝 -->

            <!-- 컨텐츠 영역 시작 -->
            <div class="contents">
                <div class="l_img01"><img src="../../images/baidu_landing.jpg" alt=""></div>
                <div id="applicantInfo">
                    <form id="register-from" method="post">
                        <input type="hidden" name="_method" value="get">
                        <table>
                            <tr>
                                <th colspan="2">신청자 정보</th>
                            </tr>
                            <tr>
                                <th><label for="c_name">상호명</label></th>
                                <td>
                                    <input type="text" id="c_name" class="baidu-reg-input" name="c_name"
                                           value="{{old('c_name')}}">

                                    @if($errors->has('c_name'))
                                        <div class="error-text">{{$errors->first('c_name')}}</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><label for="c_addr">주소</label></th>
                                <td>
                                    <input type="text" id="c_addr" class="baidu-reg-input" name="c_addr"
                                           value="{{old('c_addr')}}">
                                    @if($errors->has('c_addr'))
                                        <div class="error-text">{{$errors->first('c_addr')}}</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><label for="c_m_name">성함</label></th>
                                <td>
                                    <input type="text" id="c_m_name" class="baidu-reg-input" name="c_m_name"
                                           value="{{old('c_m_name')}}">
                                    @if($errors->has('c_m_name'))
                                        <div class="error-text">{{$errors->first('c_m_name')}}</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><label for="c_m_phone">연락처</label></th>
                                <td>
                                    <input type="text" id="c_m_phone" class="baidu-reg-input" name="c_m_phone"
                                           value="{{old('c_m_phone')}}">
                                    @if($errors->has('c_m_phone'))
                                        <div class="error-text">{{$errors->first('c_m_phone')}}</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><label for="c_m_email">이메일</label></th>
                                <td>
                                    <input type="email" id="c_m_email" class="baidu-reg-input" name="c_m_email"
                                           value="{{old('c_m_email')}}">
                                    @if($errors->has('c_m_email'))
                                        <div class="error-text">{{$errors->first('c_m_email')}}</div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>레벨(선택)</th>
                                <td class="levelSelect">
                                    <select id="c_i_level" name="c_i_level">
                                        <option value="standard" selected="selected">스탠다드</option>
                                        <option value="silver">실버</option>
                                        <option value="gold">골드</option>
                                        <option value="premium">프리미엄</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div id="register-button">
                            <img src="{{asset('Images/baiduRegButton.png')}}"/>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //컨텐츠 영역 끝 -->
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        (function ($) {
            $('#register-button').click(function () {
                $('#register-from').attr('action', '{{url('page/event/baidu/register')}}' + '/' + $('#c_i_level').val()).submit();
            });

            $('.baidu-reg-input').keydown(function () {
                $(this).siblings().remove()
            })
        })(jQuery)
    </script>
@endsection