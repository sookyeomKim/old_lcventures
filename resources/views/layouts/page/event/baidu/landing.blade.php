@extends('master')
@section('pageTitle', '바이두맵 광고 신청')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/baidu.css')}}">
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
            <div class="l_img01"><img src="../../images/baidu_landing.jpg" alt="" style="width: 100%;"></div>
            <!-- 컨텐츠 영역 시작 -->
            <div class="baidu-reg-wrap">
                <form id="register-from" method="post">
                    <input type="hidden" name="_method" value="get">
                    <table>
                        <tr>
                            <th colspan="2">신청자 정보</th>
                        </tr>
                        <tr>
                            <th><label for="c_name">상호명</label></th>
                            <td class="{{$errors->has('c_name')?'has-error':''}}">
                                <input type="text" id="c_name" class="baidu-reg-input" name="c_name"
                                       value="{{old('c_name')}}" placeholder="ex)(주)엘씨벤처스">

                                @if($errors->has('c_name'))
                                    <p class="error-message">{{$errors->first('c_name')}}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_addr">주소</label></th>
                            <td class="{{$errors->has('c_addr')?'has-error':''}}">
                                <input type="text" id="c_addr" class="baidu-reg-input" name="c_addr"
                                       value="{{old('c_addr')}}" placeholder="ex)서울 강남구 역삼동 696-20 도원빌딩 4층">
                                @if($errors->has('c_addr'))
                                    <p class="error-message">{{$errors->first('c_addr')}}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_m_name">성함</label></th>
                            <td class="{{$errors->has('c_m_name')?'has-error':''}}">
                                <input type="text" id="c_m_name" class="baidu-reg-input" name="c_m_name"
                                       value="{{old('c_m_name')}}" placeholder="ex)김수겸">
                                @if($errors->has('c_m_name'))
                                    <p class="error-message">{{$errors->first('c_m_name')}}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_m_phone">연락처</label></th>
                            <td class="{{$errors->has('c_m_phone')?'has-error':''}}">
                                <input type="text" id="c_m_phone" class="baidu-reg-input" name="c_m_phone"
                                       value="{{old('c_m_phone')}}" placeholder="ex)01012345678">
                                @if($errors->has('c_m_phone'))
                                    <p class="error-message">{{$errors->first('c_m_phone')}}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_m_email">이메일</label></th>
                            <td class="{{$errors->has('c_m_email')?'has-error':''}}">
                                <input type="email" id="c_m_email" class="baidu-reg-input" name="c_m_email"
                                       value="{{old('c_m_email')}}" placeholder="ex)skkim@lcventures.co.kr">
                                @if($errors->has('c_m_email'))
                                    <p class="error-message">{{$errors->first('c_m_email')}}</p>
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
                    <button type="button" id="baidu_reg_button">
                        <img src="{{asset('images/baiduRegButton.png')}}" alt="바이두신청서 전송하기">
                    </button>
                </form>
            </div>
            <!-- //컨텐츠 영역 끝 -->
        </div>
    </div>
    @endsection
@section('scripts')
    <!--[if lte ie 9]>
    <script src="{{elixir('js/jquery.placeholder.js')}}"></script>
    <![endif]-->
    <script>
        (function ($) {
            $('#baidu_reg_button').click(function () {
                $('#register-from').attr('action', '{{url('page/event/baidu/register')}}' + '/' + $('#c_i_level').val()).submit();
            });

            $('.error-message').click(function () {
                $(this).text('').parent().removeClass('has-error').find('input').focus();
            });
        })(jQuery)
    </script>
@endsection