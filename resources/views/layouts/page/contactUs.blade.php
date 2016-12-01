@extends('master')
@section('pageTitle', '오시는길')
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
            <p class="sub_slogan01"><img src="../images/sub_slogan0105.png" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">

            <!-- 레프트 메뉴 영역 시작 -->
            <div class="leftmenu">
                <h2>ABOUT</h2>
                <ul>
                    <li><a href="{{url('page/vision')}}">About us</a></li>
                    <li><a href="{{url('page/ceoIntro')}}">Message to client</a></li>
                    <li><a href="{{url('page/organization')}}">Organization</a></li>
                    <li><a href="{{url('page/coporateIdentity')}}">Coporate Identity</a></li>
                    <li><a class="on" href="{{url('page/contactUs')}}">Contact us</a></li>
                </ul>
            </div>
            <!-- //레프트 메뉴 영역 끝 -->

            <!-- 컨텐츠 영역 시작 -->
            <div class="contents">
                <div class="l_img01">
                    <div style="margin:102px 0 0 63px;">
                        <p><img src="../images/about0401.jpg" alt="" style="margin:0 0 22px 0;"></p>
                        <p><img src="../images/about0402.jpg" alt="" style="margin:0 0 120px 0;"></p>
                    </div>
                    <div class="pa_tr" style="right:16px;">
                        <a href="mailto:biz@lcventures.co.kr"><img src="../images/sns01.png" alt=""
                                                                   style="padding-left:4px;"></a>
                        <a href="http://blog.naver.com/lcventures1" target="_blank"><img src="../images/sns02.png"
                                                                                         alt=""
                                                                                         style="padding-left:4px;"></a>
                        <a href="#" onclick="ready00();"><img src="../images/sns03.png" alt=""
                                                              style="padding-left:4px;"></a>
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
