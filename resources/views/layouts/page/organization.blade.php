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
                            <li><a href="{{url('vision')}}"><span>About us</span><span class="on">비전</span></a></li>
                            <li><a href="/about/about02.html"><span>Message to client</span><span
                                            class="on">CEO인사말</span></a>
                            </li>
                            <li><a href="/about/about03.html"><span>Organization</span><span class="on">조직도</span></a>
                            </li>
                            <li><a href="/about/about04.html"><span>Coporate Identity</span><span
                                            class="on">엘씨벤처스CI</span></a>
                            </li>
                            <li><a href="/about/about05.html"><span>Contact us</span><span class="on">오시는길</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m02">
                        <h2><a>Business</a></h2>
                        <ul>
                            <li><a href="/work/work0101.html"><span>SNS marketing</span><span
                                            class="on">SNS마케팅</span></a></li>
                            <li><a href="/work/work0201.html"><span>Integrated marketing</span><span
                                            class="on">통합마케팅</span></a>
                            </li>
                            <li><a href="/work/work0302.html"><span>Keyword &amp; Display</span><span
                                            class="on">키워드/디스플레이마케팅</span></a></li>
                            <li><a href="/work/work0401.html"><span>Viral marketing</span><span class="on">바이럴마케팅</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m03">
                        <h2><a>PORTFOLIO</a></h2>
                        <ul>
                            <li><a href="/portfolio/portfolio01.html"><span>Design</span><span class="on">디자인</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="m04">
                        <h2><a>RECRUIT</a></h2>
                        <ul>
                            <li><a href="/recruit/recruit01.html"><span>Employment process</span><span
                                            class="on">채용프로세스</span></a>
                            </li>
                            <li><a href="/recruit/recruit02.html"><span>Employment notice</span><span
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
            <p class="sub_slogan01"><img src="../images/sub_slogan0103.png"  alt=""></p>
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
                    <li><a href="../about/about01.html">About us</a></li>
                    <li><a href="../about/about02.html">Message to client</a></li>
                    <li><a class="on" href="../about/about03.html">Organization</a></li>
                    <li><a href="../about/about04.html">Coporate Identity</a></li>
                    <li><a href="../about/about05.html">Contact us</a></li>
                </ul>
            </div>
            <!-- //레프트 메뉴 영역 끝 -->

            <!-- 컨텐츠 영역 시작 -->
            <div class="contents">
                <div class="c_img01"><img src="../images/about03.jpg"  alt="" style="padding:102px 0 120px 0;"></div>
            </div>
            <!-- //컨텐츠 영역 끝 -->

            <!-- 빈레이어 -->
            <p class="f_em02">&nbsp;</p>

        </div>
        <!-- //바디 영역 끝 -->
    </div>
@endsection