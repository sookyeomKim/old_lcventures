@extends('master')
@section('pageTitle', '이벤트')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/event.css')}}">
    <style>
        .x-mark {
            width: 40px;
            height: 40px;
            position: relative;
            border-radius: 6px;
            cursor: pointer;
        }

        .x-mark:before, .x-mark:after {
            content: '';
            position: absolute;
            width: 36px;
            height: 4px;
            background-color: #8b8b8b;
        }

        .x-mark:before {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
            left: -18px;
        }

        .x-mark:after {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: -18px;
        }

        .modal-header {
            text-align: right;
            border-bottom: none;
        }

        .modal-body {
            margin: 0 auto;
            width: 90%;
            padding: 0 15px;
        }

        .modal-footer {
            border-top: none;
            text-align: center;
        }

        .modal-footer button {
            display: inline-block;
            width: 80%;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid #000;
            border-radius: 4px;
            background-color: #F9ED9E;
        }

        .inquiry-wrap h1 {
            font-size: 20px;
            font-weight: 700;
        }

        .inquiry-wrap * {
            box-sizing: border-box;
        }

        .inquiry-wrap hr {
            border-top-color: #000;
        }

        #inquiry_submit img {
            width: 100%;
        }

        .inquiry-group {
            margin-bottom: 15px;
        }

        .inquiry-label {
            width: 20%;
            padding: 3px 15px 0 15px;
            float: left;
            text-align: right;
            display: inline-block;
            max-width: 100%;
            font-weight: 700;
        }

        .inquiry-input-wrap {
            float: left;
            width: 80%;
        }

        .inquiry-input {
            display: block;
            width: 100%;
            height: 28px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
        }

        .inquiry-textarea {
            display: block;
            width: 100%;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
        }

        .inquiry-radio-wrap {
            width: 50%;
            float: left;
        }

        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #bbb;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            color: #bbb;
        }

        :-ms-input-placeholder { /* IE 10+ */
            color: #bbb;
        }

        :-moz-placeholder { /* Firefox 18- */
            color: #bbb;
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
            <p class="sub_slogan01"><img src="{{asset('images/sub_slogan0203.png')}}" alt=""></p>
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
                <div class="l_img01"><img src="{{asset('images/work0501_03.jpg')}}" alt=""
                                          style="padding:50px 0 0 61px;"></div>
                <a data-toggle="modal" data-target="#inquiryModal">
                    <img src="{{asset('images/work0501_02.jpg')}}" alt="" style="margin-left: 163px; cursor: pointer;">
                </a>
            </div>
            <!-- //컨텐츠 영역 끝 -->


        </div>
    </div>

    <div id="inquiryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="inquiry_submit">
                    <div class="modal-header">
                        <a class="x-mark" data-dismiss="modal" aria-label="Close"></a>
                    </div>
                    <div class="modal-body">
                        <section class="inquiry-wrap">
                            <h1>빠른 상담 문의</h1>
                            <hr>
                            <input type="hidden" name="inquiry_id" value="">
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label" for="inquiry_uname">이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;름</label>
                                <div class="inquiry-input-wrap">
                                    <input type="text" id="inquiry_uname" class="inquiry-input" name="iq_u_name"
                                           value="" placeholder="홍길동">
                                </div>
                            </div>
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label" for="inquiry_cname">업&nbsp;&nbsp;&nbsp;&nbsp;체&nbsp;&nbsp;&nbsp;&nbsp;명</label>
                                <div class="inquiry-input-wrap">
                                    <input type="text" id="inquiry_cname" class="inquiry-input" name="iq_c_name"
                                           value="" placeholder="(주)엘씨벤처스">
                                </div>
                            </div>
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label" for="inquiry_phone">연&nbsp;&nbsp;&nbsp;&nbsp;락&nbsp;&nbsp;&nbsp;&nbsp;처</label>
                                <div class="inquiry-input-wrap">
                                    <input type="text" id="inquiry_phone" class="inquiry-input" name="iq_u_phone"
                                           value="" placeholder="01012345678">
                                </div>
                            </div>
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label" for="inquiry_email">이&nbsp;&nbsp;&nbsp;&nbsp;메&nbsp;&nbsp;&nbsp;&nbsp;일</label>
                                <div class="inquiry-input-wrap">
                                    <input type="text" id="inquiry_email" class="inquiry-input" name="iq_u_email"
                                           value="" placeholder="lcventures@lcventures.com">
                                </div>
                            </div>
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label">예 상 비 용</label>
                                <div class="inquiry-input-wrap">
                                    <div class="inquiry-radio-wrap">
                                        <input type="radio" name="iq_cost" value="1" checked="checked">
                                        <span>월 100만원 이하</span>
                                    </div>
                                    <div class="inquiry-radio-wrap">
                                        <input type="radio" name="iq_cost" value="2">
                                        <span>100~500만원</span>
                                    </div>
                                    <div class="inquiry-radio-wrap">
                                        <input type="radio" name="iq_cost" value="3">
                                        <span>500~1000만원</span>
                                    </div>
                                    <div class="inquiry-radio-wrap">
                                        <input type="radio" name="iq_cost" value="4">
                                        <span>1000만원 이상</span>
                                    </div>
                                </div>
                            </div>
                            <div class="inquiry-group clearfix">
                                <label class="inquiry-label" for="iq_content">상 담 내 용</label>
                                <div class="inquiry-input-wrap">
                                <textarea id="inquiry_content" class="inquiry-textarea" name="inquiry_content"
                                          value="" cols="50"></textarea>
                                </div>
                            </div>
                            <hr>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">빠른상담 문의</button>
                    </div>
                    <img src="{{asset('images/work0501_04.jpg')}}">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{elixir('js/event.js')}}"></script>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $("#inquiry_submit").submit(function (e) {
                e.preventDefault();
                var unameRegExp = new RegExp(/[\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]/, 'gi');
                var cnameRegExp = new RegExp(/[\{\}\[\]\/?.,;:|*~`!^\-_+<>@\#$%&\\\=\'\"]/, 'gi');
                var phoneRegExp = new RegExp(/^[\d]{10,11}$/);
                var emailRegExp = new RegExp(/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/, 'i');
                if (unameRegExp.test($("#inquiry_uname").val()) || $("#inquiry_uname").val() == "") {
                    alert("이름을 다시 입력해주세요.");
                    $("#inquiry_uname").focus();
                    return false
                }

                if (cnameRegExp.test($("#inquiry_cname").val()) || $("#inquiry_cname").val() == "") {
                    alert("업체명을 다시 입력해주세요.");
                    $("#inquiry_cname").focus();
                    return false
                }

                if (!phoneRegExp.test($("#inquiry_phone").val()) || $("#inquiry_phone").val() == "") {
                    alert("연락처를 다시 입력해주세요.");
                    $("#inquiry_phone").focus();
                    return false
                }

                if (!emailRegExp.test($("#inquiry_email").val()) || $("#inquiry_email").val() == "") {
                    alert("이메일을 다시 입력해주세요.");
                    $("#inquiry_email").focus();
                    return false
                }

                if ($("#inquiry_content").val() == "") {
                    alert("상담내용을 다시 입력해주세요.");
                    $("#inquiry_content").focus();
                    return false
                }

                var ajaxRequest;
                var formData = {
                    iq_u_name: $('#inquiry_uname').val(),
                    iq_c_name: $('#inquiry_cname').val(),
                    iq_u_phone: $('#inquiry_phone').val(),
                    iq_u_email: $('#inquiry_email').val(),
                    iq_cost: $('[name="iq_cost"]:checked').val(),
                    iq_content: $('#inquiry_content').val(),
                };
                ajaxRequest = $.ajax({
                    url: "{{route('searchNshoping.store')}}",
                    type: "POST",
                    dataType: 'json',
                    data: formData
                });

                ajaxRequest.done(function (res, ts, jqXhr) {
                    if (res) {
                        alert("신청이 완료되었습니다.");
                        $('#inquiryModal').modal('hide')
                    } else {
                        alert("서버 문제로 인하여 신청이 완료되지 않았습니다. 전화로 문의주세요.");
                    }
                });

                ajaxRequest.fail(function (res) {
                    alert("실패")
                })
            });
        })
    </script>
@endsection