@extends('master')
@section('pageTitle', '바이럴마케팅')
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
            <p class="sub_slogan01"><img src="../images/sub_slogan0204.png" alt=""></p>
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
                    <li><a class="on" href="{{url('page/viralMarketing')}}">Viral marketing</a></li>
                </ul>
            </div>
            <!-- //레프트 메뉴 영역 끝 -->

            <!-- 컨텐츠 영역 시작 -->
            <div class="contents">
                <div class="tab">
                    <ul>
                        <li><a href="../work/work0401.html"><img src="../images/tab_work0401_on.gif" alt=""></a></li>
                        <li><a href="../work/work0402.html"><img src="../images/tab_work0402_off.gif" alt=""></a></li>
                        <li><a href="../work/work0403.html"><img src="../images/tab_work0403_off.gif" alt=""></a></li>
                        <li><a href="../work/work0405.html"><img src="../images/tab_work0405_off.gif" alt=""></a></li>
                    </ul>
                </div>
                <div class="l_img01"><img src="../images/work0401_01.jpg" alt="" style="padding:50px 0 0 61px;"></div>
                <div class="l_img01"><img src="../images/work0401_02.jpg" alt="" style="padding:50px 0 0 61px;"></div>
            </div>
            <!-- //컨텐츠 영역 끝 -->

            <!-- 빈레이어 -->
            <p class="f_em02">&nbsp;</p>

        </div>
        <!-- //바디 영역 끝 -->
    </div>
@endsection
