@extends('master')
@section('pageTitle', '바이두맵-스탠다드 신청')
@section('styles')
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
            <form action="" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="c_m_phone" value="{{$defaultValue['c_m_name']}}">
                <input type="hidden" name="c_m_email" value="{{$defaultValue['c_m_email']}}">
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
                        <td><input type="text" value="{{$defaultValue['c_name']}}"></td>
                    </tr>
                    <tr>
                        <th colspan="2">주소</th>
                        <td><input type="text" value="{{$defaultValue['c_addr']}}"></td>
                    </tr>
                    <tr>
                        <th colspan="2">신청자 연락처</th>
                        <td><input type="text" value="{{$defaultValue['c_m_phone']}}"></td>
                    </tr>
                    <tr>
                        <th rowspan="2">업종</th>
                        <th>제1업종</th>
                        <td>
                            <select id="c_first_cob"></select>
                        </td>
                    </tr>
                    <tr>
                        <th>제2업종</th>
                        <td>
                            <select id="c_second_cob"></select>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="3">사업자등록증<br>정보</th>
                        <th>사업자등록번호</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>대표자 성함</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>대표자 연락처</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th colspan="2">소개</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th rowspan="3">영업 시간</th>
                        <th>주중</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>주말</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>휴일</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">휴무일</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th colspan="2">가격 인당 평균 가격</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th colspan="2">키워드(TAG)</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th colspan="2">교통접근방법</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th colspan="2">홈페이지 URL(없으면 공백)</th>
                        <td><input type="text"></td>
                    </tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                    <tr>
                        <th>요청 사항</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><textarea></textarea></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <!-- //바디 영역 끝 -->

    </div>
@endsection
@section('scripts')
    <script>
        (function ($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

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
        })(jQuery)
    </script>
@endsection