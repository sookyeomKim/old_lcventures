@extends('master')
@section('pageTitle', '홈')
@section('styles')
    <style>


        /*#baiduPopNormal {
            position: absolute;
            top: 23px;
            left: 20px;
            width: 328px;
            height: 450px;
            background-image: url(../../../public/images/baiduPopImg.jpg);
            background-size: cover;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            z-index: 9999;
        }

        #baiduPopButton{
            width: 45px;
            height: 45px;
            cursor: pointer;
            margin-left: 263px;
        }*/
    </style>
@endsection
@section('main')
    <!-- Popup 창 -->
    <div id="main_wrap">
        <div id="indPop">
            <div class="indPop-wrap">
                <div id="indPopButton"></div>
                <a href="{{url('page/event/searchNshoping-landing')}}" id="indPopMoveButton" target="_blank"></a>
            </div>
        </div>

        <div id="baiduPop">
            <div class="baiduPop-wrap">
                <div id="baiduPopButton"></div>
                <a href="{{url('page/event/baidu-landing')}}" id="baiduPopMoveButton" target="_blank"></a>
            </div>
        </div>

        <div id="popBg" style="display:none">
            <div id="popPay">
                <p class="btn_close"><a href="javascript:goPay();"><img src="images/btn_close.png" alt=""></a></p>
                <div class="popIfame">
                    <iframe name="payFrame" src="#" frameborder="0" width="675" height="655" marginwidth="0"
                            marginheight="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>

        <!--<div id="event-popup-bg">
            <div id="event-popup-wrap">
                <a id="event-popup-close">
                    <img src="images/btn_close.png" alt="닫기 버튼">
                </a>
                <a href="./work/work0501.php">

                </a>
                <a id="event-popup-prevent">
                    <span>오늘 하루 보지 않기</span>
                </a>
            </div>
        </div>-->

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

        <!-- 오른쪽 베너 시작-->
        <div id="rbnn">
            <ul>
                <li><a href="http://blog.naver.com/lcventures1/220577987135" target="#"><img src="images/rBnn01.png"
                                                                                             alt=""></a>
                </li>
                <li><a href="http://blog.naver.com/lcventures1" target="#"><img src="images/rBnn02.png" alt=""></a></li>
                <li><a href="http://plus.kakao.com/home/@%EC%97%98%EC%94%A8%EB%B2%A4%EC%B2%98%EC%8A%A4" target="#"><img
                                src="images/rBnn03.png" alt=""></a></li>
                <li>
                    <a href="https://www.facebook.com/%EC%97%98%EC%94%A8%EB%B2%A4%EC%B2%98%EC%8A%A4-791126930935354/?fref=ts"
                       target="#"><img src="images/rBnn04.png" alt=""></a></li>
                <li><a href="javascript:goPay();"><img src="images/rBnn05.png" alt=""></a></li>
            </ul>
        </div>
        <!-- //오른쪽 베너 끝-->

        <div id="main_contents">
            <p class="m_slogan"><img src="images/mt01.png" alt=""></p>
            <div class="q_menu">
                <ul>
                    <li><a href="{{url('page/snsMarketing')}}"><img src="images/mc01.png" alt=""></a></li>
                    <li><a href="{{url('page/designPortfolio')}}"><img src="images/mc03.png" alt=""></a></li>
                </ul>
                <ul>
                    <li><a href="{{url('page/keyword')}}"><img src="images/mc04.png" alt=""></a></li>
                    <li><a href="{{url('page/display')}}"><img src="images/mc05.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!-- 푸터 시작 -->
        <div id="main_footer_area">
            <div class="footer">
                <p class="add"><img src="images/foot_img01.png" alt=""></p>
                <div class="sns">
                    <a href="mailto:biz@lcventures.co.kr"><img src="images/sns01.png" alt=""></a>
                    <a href="http://blog.naver.com/lcventures1" target="_blank"><img src="images/sns02.png" alt=""></a>
                    <!--
                    <a href="http://goto.kakao.com" target="_blank"><img src="images/sns04.png"  alt=""></a>
                    <a href="#" onclick="ready00();"><img src="images/sns03.png"  alt=""></a>
                    -->
                </div>
            </div>
        </div>
        <!-- //푸터 끝 -->
    </div>
@endsection
@section('scripts')
    <script>
        (function ($) {
            $("#indPopButton").click(function () {
                $("#indPop").hide();
            });

            $("#baiduPopButton").click(function () {
                console.log("ddd")
                $("#baiduPop").hide();
            });

            function goPay() {
                if (popBg.style.display == "block") {
                    document.all["payFrame"].src = "#";
                    popBg.style.display = "none";
                } else {
                    document.all["payFrame"].src = "{{url('paypopup/lcv_payment')}}";
                    popBg.style.display = "block";
                }
            }
        })(jQuery);
    </script>
@endsection
