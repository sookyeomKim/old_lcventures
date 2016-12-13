@extends('master')
@section('pageTitle', '바이두맵 광고 신청')
@section('styles')
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
            </div>
            <!-- //컨텐츠 영역 끝 -->
        </div>
        <form action="{{url('page/event/baidu/create')}}" method="post">
            <input type="hidden" name="_method" value="get">
            {{ csrf_field() }}
            <table>
                <caption>신청자 정보</caption>
                <tbody>
                <tr>
                    <td>상호명</td>
                    <td><input type="text" name="c_name"></td>
                </tr>
                <tr>
                    <td>주소</td>
                    <td><input type="text" name="c_addr"></td>
                </tr>
                <tr>
                    <td>성함</td>
                    <td><input type="text" name="c_m_name"></td>
                </tr>
                <tr>
                    <td>연락처</td>
                    <td><input type="text" name="c_m_phone"></td>
                </tr>
                <tr>
                    <td>이메일</td>
                    <td><input type="text" name="c_m_email"></td>
                </tr>
                <tr>
                    <td>레벨(선택)</td>
                    <td><select name="c_i_level" id="">
                            <option value="standard">스탠다드</option>
                            <option value="silver">실버</option>
                            <option value="gold">골드</option>
                            <option value="premium">프리미엄</option>
                        </select></td>
                </tr>
                </tbody>
            </table>
            <button type="submit">전송</button>
        </form>
    </div>
@endsection
@section('scripts')
@endsection