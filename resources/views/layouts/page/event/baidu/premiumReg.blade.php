@extends('master')
@section('pageTitle', '바이두맵-실버 신청')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/baidu.css')}}">
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
            <p class="sub_slogan01"><img src="{{asset('images/sub_slogan02.png')}}" alt=""></p>
        </div>
        <!-- //상단 비주얼 영역 끝 -->

        <!-- 빈레이어 -->
        <p class="f_em">&nbsp;</p>

        <!-- 바디 영역 시작 -->
        <div id="container">
            <div class="baidu-reg-wrap">
                <form id="register-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" role="form">
                    <input type="hidden" id="next-url" value="{{url('page/event/baidu-landing')}}">
                    <input type="hidden" id="baidu-store-url" value="{{route('baidu.store')}}">
                    <input type="hidden" id="firstCob-url" value="{{route('openApi.firstCob')}}">
                    <input type="hidden" id="secondCob-url" value="{{route('openApi.secondCob')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <input type="hidden" id="c_i_level" name="c_i_level"
                           value="{{$defaultValue['c_i_level']}}">
                    <input type="hidden" id="c_m_email" name="c_m_email" value="{{$defaultValue['c_m_email']}}">
                    <input type="hidden" id="c_m_name" name="c_m_name" value="{{$defaultValue['c_m_name']}}">
                    <table class="info-reg-table">
                        <thead>
                        <tr>
                            <th colspan="2" class="one-col-th subject-th">구분</th>
                            <th class="one-col-th subject-th">기재란</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_name">상호명</label></th>
                            <td><input type="text" id="c_name" name="c_name" class="baidu-reg-input"
                                       value="{{$defaultValue['c_name']}}"></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_addr">주소</label></th>
                            <td><input type="text" id="c_addr" name="c_addr" class="baidu-reg-input"
                                       value="{{$defaultValue['c_addr']}}"></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_m_phone">신청자 연락처</label></th>
                            <td><input type="text" id="c_m_phone" name="c_m_phone" class="baidu-reg-input"
                                       value="{{$defaultValue['c_m_phone']}}">
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="left-col-th">업종</th>
                            <th class="right-col-th"><label for="c_first_cob">제1업종</label></th>
                            <td>
                                <select id="c_first_cob" name="c_first_cob" class="baidu-reg-select"></select>
                            </td>
                        </tr>
                        <tr>
                            <th class="right-col-th"><label for="c_second_cob">제2업종</label></th>
                            <td>
                                <select id="c_second_cob" name="c_second_cob" class="baidu-reg-select"></select>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="3" class="left-col-th">사업자등록증<br>정보</th>
                            <th class="right-col-th"><label for="c_crn">사업자등록번호</label></th>
                            <td>
                                <input type="text" id="c_crn"
                                       name="c_crn" class="c_crn baidu-reg-input" placeholder="ex)123-45-67890">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th class="right-col-th"><label for="c_rep_name">대표자 성함</label></th>
                            <td>
                                <input type="text" id="c_rep_name" name="c_rep_name" class="baidu-reg-input"
                                       placeholder="ex)김대표">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th class="right-col-th"><label for="c_rep_phone">대표자 연락처</label></th>
                            <td>
                                <input type="text" id="c_rep_phone" name="c_rep_phone" class="baidu-reg-input"
                                       placeholder="ex)01012345678">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_intro">소개</label></th>
                            <td>
                                <input type="text" id="c_intro" name="c_intro" class="baidu-reg-input">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="3" class="left-col-th">영업 시간</th>
                            <th class="right-col-th"><label for="weekdays_times_start">주중</label></th>
                            <td>
                                <div id="weekdays_times" class="times-wrap">
                                    <div class="times-left-wrap">
                                        <input type="text" id="weekdays_times_start" class="time start"
                                               name="weekdays_times_start">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="times-center-wrap">
                                        &sim;
                                    </div>
                                    <div class="times-right-wrap">
                                        <input type="text" id="weekdays_times_end" class="time end"
                                               name="weekdays_times_end">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="right-col-th"><label for="weekend_times_start">주말</label></th>
                            <td>
                                <div id="weekend_times" class="times-wrap">
                                    <div class="times-left-wrap">
                                        <input type="text" id="weekend_times_start" class="time start"
                                               name="weekend_times_start">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="times-center-wrap">
                                        &sim;
                                    </div>
                                    <div class="times-right-wrap">
                                        <input type="text" id="weekend_times_end" class="time end"
                                               name="weekend_times_end">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="right-col-th"><label for="holiday_times_start">휴일</label></th>
                            <td>
                                <div id="holiday_times" class="times-wrap">
                                    <div class="times-left-wrap">
                                        <input type="text" id="holiday_times_start" class="time start"
                                               name="holiday_times_start">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="times-center-wrap">
                                        &sim;
                                    </div>
                                    <div class="times-right-wrap">
                                        <input type="text" id="holiday_times_end" class="time end"
                                               name="holiday_times_end">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_holiday">휴무일</label></th>
                            <td>
                                <input type="text" id="c_holiday" name="c_holiday" class="baidu-reg-input"
                                       placeholder="ex)월화수">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_avg_price">인당 평균 가격(원)</label></th>
                            <td>
                                <input type="text" id="c_avg_price" name="c_avg_price"
                                       class="c_avg_price baidu-reg-input" placeholder="ex)10,000">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_tag">키워드(TAG)</label></th>
                            <td>
                                <textarea id="c_tag" name="c_tag"></textarea>
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_traffic">교통접근방법</label></th>
                            <td>
                                <input type="text" id="c_traffic" name="c_traffic" class="baidu-reg-input"
                                       placeholder="ex)선릉역 7번 출구 도보 1분 거리">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="one-col-th"><label for="c_homepage_url">홈페이지 URL(없으면 공백)</label></th>
                            <td>
                                <input type="text" id="c_homepage_url" name="c_homepage_url" class="baidu-reg-input">
                                <p class="error-message">
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                        <tr>
                            <th class="subject-th">요청사항</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="term-wrap">
                                <ul>
                                    <li>&ast;결제 : 신청 및 등록한지 4주 후, 지도서비스 등록 확인 가능하며, 등록 확인 후 결제 진행</li>
                                    <li>계좌이체 / 세금계산서 발행</li>
                                    <li>계좌정보 : 기업은행 00-0000-000-000 (예금주 주식회사 엘씨벤처스)</li>
                                    <li>&ast;사업자등록증 1부 첨부</li>
                                    <li>&ast;대표사진 1장(간판이 보이는 상점의 정면 모습)</li>
                                    <li>&ast;추가사진 1장~8장(실내, 메뉴, 상품, 상차림 등의 모습)</li>
                                    <li>&ast;동영상(소개 등, 30초 이내)</li>
                                    <li>&ast;기업(또는 브랜드)로고</li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="img-reg-table">
                        <thead>
                        <tr>
                            <th class="subject-th" colspan="4">이미지 첨부</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th><label for="c_bl_img">사업자등록증</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_bl_img" name="c_bl_img" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_rep_img">대표사진</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_rep_img" name="c_rep_img" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_add_img1">추가사진1</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img1" name="c_add_img1" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_add_img2">추가사진2</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img2" name="c_add_img2" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_add_img3">추가사진3</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img3" name="c_add_img3" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_add_img4">추가사진4</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img4" name="c_add_img4" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_add_img5">추가사진5</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img5" name="c_add_img5" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_add_img6">추가사진6</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img6" name="c_add_img6" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_add_img7">추가사진7</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img7" name="c_add_img7" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_add_img8">추가사진8</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_img8" name="c_add_img8" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="c_log_img">기업로고</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_log_img" name="c_log_img" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                            <th><label for="c_add_video">동영상</label></th>
                            <td>
                                <div class="upload-wrap">
                                    <div class="upload-text-wrap">
                                        <input type="text" class="upload-text" readonly placeholder="업로드 파일(JPG)">
                                        <p class="error-message">
                                        </p>
                                    </div>
                                    <div class="upload-button-wrap">
                                        <a>등록하기</a>
                                        <input type="file" id="c_add_video" name="c_add_video" class="upload-button"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <a id="baidu_reg_button" disabled="disabled">
                        <img src="{{asset('images/baiduRegButton2.png')}}" alt="바이두신청서 전송하기">
                    </a>
                </form>
            </div>
        </div>
        <!-- //바디 영역 끝 -->
    </div>
    @endsection
@section('scripts')
    <!--[if lte ie 9]>
    <script src="{{elixir('js/jquery.placeholder.js')}}"></script>
    <![endif]-->
    <script src="{{elixir('js/baidu.js')}}"></script>
@endsection