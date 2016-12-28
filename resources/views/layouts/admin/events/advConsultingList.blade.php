@extends('adminMaster')
@section('pageTitle', '어드민-바이두 리스트')
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
                <li class="active">searchNshoping</li>
            </ol>
        </section>
        <section class="row">
            <div class="col-lg-12">
                <h1>진행 중인 이벤트</h1>
                <div class="well">
                    <table id="baidu-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>신청 날짜</th>
                            <th>회사명</th>
                            <th>신청인 성함</th>
                            <th>신청인 연락처</th>
                            <th>신청인 이메일</th>
                            <th>예상 비용</th>
                            <th>상담내용</th>
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
        (function ($) {
            setDataTables();

            function setDataTables() {
                $('#baidu-table').DataTable({
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    columnDefs: [
                        {width: 20, targets: 0},
                        {width: 150, targets: 1},
                        {width: 100, targets: 2},
                        {width: 75, targets: 3},
                        {width: 100, targets: 4},
                        {width: 130, targets: 5},

                        {
                            width: 100,
                            targets: 6,
                            data: 'iq_cost',
                            'render': function (data) {
                                if(data==1){
                                    return "월 100만원 이하";
                                }else if(data==2){
                                    return "100~500만원";
                                }else if(data==3){
                                    return "500~1000만원";
                                }else if(data==4){
                                    return "1000만원 이상";
                                }
                            }
                        },
                        {width: 500, targets: 7},
                    ],
                    ajax: '{!! route('searchNshoping.list') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'iq_c_name', name: 'iq_c_name'},
                        {data: 'iq_u_name', name: 'iq_u_name'},
                        {data: 'iq_u_phone', name: 'iq_u_phone'},
                        {data: 'iq_u_email', name: 'iq_u_email'},
                        {data: 'iq_cost', name: 'iq_cost'},
                        {data: 'iq_content', name: 'iq_content'}
                    ]
                });
            }
        })(jQuery);
    </script>
@endsection
