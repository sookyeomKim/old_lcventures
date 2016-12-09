@extends('adminMaster')
@section('pageTitle', '광고컨설팅리스트')
@section('styles')
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="row">
            <aside class="col-sm-2">
                <div>
                    <ul>
                        <li>이벤트 목록</li>
                    </ul>
                </div>
            </aside>
            <main class="col-sm-10">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>이름</th>
                        <th>업체명</th>
                        <th>연락처</th>
                        <th>이메일</th>
                        <th>예상비용</th>
                        <th>상담내용</th>
                        <th>등록일</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Inquiries as $Inquiry)
                        <td>{{$Inquiry->iq_u_name}}</td>
                        <td>{{$Inquiry->iq_c_name}}</td>
                        <td>{{$Inquiry->iq_u_phone}}</td>
                        <td>{{$Inquiry->iq_u_email}}</td>
                        <td>{{$Inquiry->iq_cost}}</td>
                        <td>{{$Inquiry->iq_content}}</td>
                        <td>{{$Inquiry->created_at}}</td>
                    @endforeach
                    </tbody>
                </table>
            </main>
            <div class="text-center">
                {{$Inquiries->links()}}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
