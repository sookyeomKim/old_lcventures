@extends('adminMaster')
@section('pageTitle', '어드민-메인')
@section('styles')

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
                <li class="active">home</li>
            </ol>
        </section>
        <section class="row">
            <div class="col-lg-12">
                <h1>진행 중인 이벤트</h1>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="{{route('admin.events.baidu.index')}}">바이두맵</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-lg-12">
                <h1>뭐가 올까요</h1>
            </div>
        </section>
    </main>
@endsection
@section('scripts')
@endsection
