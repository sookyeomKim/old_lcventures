@extends('adminMaster')
@section('pageTitle', '어드민-메인')
@section('styles')
    <link rel="stylesheet" href="{{elixir('css/adminDataTable.css')}}">
@endsection
@section('contents')
    <aside class="col-sm-3 col-lg-2 admin-aside">
        <div>
            <ul>
                <li>
                    <a href="{{route('admin.events.index')}}">진행 중인 이벤트</a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 admin-main">
        <section class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.index')}}">home</a></li>
                <li><a href="{{route('admin.events.index')}}">events</a></li>
                <li class="active">baidu</li>
            </ol>
        </section>
        <section class="row">
            <div class="col-lg-12">
                <h1>진행 중인 이벤트</h1>
                <div class="well">
                    <table id="baidu-table" class="table table-hover">
                        <thead>
                        <tr>
                            <th>신청 레벨</th>
                            <th>신청인 성함</th>
                            <th>신청인 연락처</th>
                            <th>신청인 이메일</th>
                            <th>상호명</th>
                            <th>주소</th>
                            <th>업종1</th>
                            <th>업종2</th>
                            <th>사업자 등록 번호</th>
                            <th>대표자 성함</th>
                            <th>대표자 연락처</th>
                            <th>소개</th>
                            <th>영업시간-주중</th>
                            <th>영업시간-주말</th>
                            <th>영업시간-휴일</th>
                            <th>휴무일</th>
                            <th>인당 평균 가격</th>
                            <th>키워드</th>
                            <th>교통 접근 방법</th>
                            <th>홈페이지 URL</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('scripts')
    <script src="{{elixir('js/adminDataTable.js')}}"></script>
    <script>
        $('#baidu-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('baidu.list') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'c_i_level', name: 'c_i_level'},
                {data: 'c_m_name', name: 'c_m_name'},
                {data: 'c_m_phone', name: 'c_m_phone'},
                {data: 'c_m_email', name: 'c_m_email'},
                {data: 'c_name', name: 'c_name'},
                {data: 'c_addr', name: 'c_addr'},
                {data: 'c_first_cob', name: 'c_first_cob'},
                {data: 'c_second_cob', name: 'c_second_cob'},
                {data: 'c_crn', name: 'c_crn'},
                {data: 'c_rep_name', name: 'c_rep_name'},
                {data: 'c_rep_phone', name: 'c_rep_phone'},
                {data: 'c_intro', name: 'c_intro'},
                {data: 'weekdays_times', name: 'weekdays_times'},
                {data: 'weekend_times', name: 'weekend_times'},
                {data: 'holiday_times', name: 'holiday_times'},
                {data: 'c_holiday', name: 'c_holiday'},
                {data: 'c_traffic', name: 'c_traffic'},
                {data: 'c_homepage_url', name: 'c_homepage_url'}
            ]
        });
    </script>
@endsection
