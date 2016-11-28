<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - 온라인마케팅 엘씨벤처스(주)</title>
    <meta name="description" content="카카오 공식대행사, 밴드, 페이스북 등 SNS마케팅, 검색광고, 쇼핑광고, 디스플레이, 바이럴마케팅">
    <meta name="keywords"
          content="네이버, 다음, 카카오, 네이트, 줌, 카카오광고, 카카오스토리, 밴드, SNS, 쇼핑박스, 쇼핑광고, 검색광고, 키워드광고, 디스플레이광고,배너광고, 바이럴, 바이럴마케팅, 온라인마케팅, 온라인광고, 공식대행사, 광고대행사, 검색광고대행사, 모바일광고, 파워링크, 클릭초이스,프리미엄링크, 클릭스, 카카오스타일, 크리테오, 모비온, GDN, DDN, 바이럴광고, PPL광고, 페이스북마케팅, 페이스북광고,카카오스토리마케팅, 카카오광고, 밴드광고, 온라인광고대행사, 온라인마케팅대행사, 통합마케팅, IMC">
    <meta name="naver-site-verification" content="f55e04451ebaede9aa5002ead75dec13421beef9"/>
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
@yield('main')
@yield('sub')
</body>
</html>