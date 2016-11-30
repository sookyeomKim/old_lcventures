@extends('master')
@section('pageTitle', '조직도')
@section('styles')
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
                            <li><a href="{{url('page/vision')}}"><span>About us</span><span class="on">비전</span></a></li>
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
            <p class="sub_slogan01"><img src="../images/sub_slogan0402.png" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">

            <!-- 레프트 메뉴 영역 시작 -->
            <div class="leftmenu">
                <h2>RE<span style="display:block; line-height:28px; padding-bottom:12px;">CRUIT</span></h2>
                <ul>
                    <li><a href="../recruit/recruit01.html">Employment Process</a></li>
                    <li><a class="on" href="../recruit/recruit02.html">Employment notice</a></li>
                </ul>
            </div>
            <!-- //레프트 메뉴 영역 끝 -->

            <!-- 컨텐츠 영역 시작 -->
            <div class="contents">
                <div class="board_area">

                    <div class="board_top">
                        <p class="bt_left"><a href="#"><img src="../images/btn_recruit.jpg" alt=""></a></p>
                        <div class="bt_rifht">
                            <select class="select01" style="width:120px;">
                                <option value="">대상선택</option>
                                <option value="">경력</option>
                                <option value="">신입</option>
                            </select>
                            <select class="select01" style="width:120px;">
                                <option value="">직군선택</option>
                                <option value="">디자인</option>
                                <option value="">마케팅</option>
                            </select>
                        </div>
                    </div>

                    <div class="list">
                        <table cellpadding="0" border="0" cellspacing="0">
                            <colgroup>
                                <col width="8%"/>
                                <col width="*"/>
                                <col width="10%"/>
                                <col width="10%"/>
                                <col width="20%"/>
                                <col width="10%"/>
                            </colgroup>
                            <tr>
                                <th>번호</th>
                                <th>모집분야</th>
                                <th>대상</th>
                                <th>직군</th>
                                <th>모집기간</th>
                                <th>지원하기</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- //컨텐츠 영역 끝 -->

            <!-- 빈레이어 -->
            <p class="f_em02">&nbsp;</p>

        </div>
        <!-- //바디 영역 끝 -->
    </div>
@endsection
