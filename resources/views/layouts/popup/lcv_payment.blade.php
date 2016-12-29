<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LC VENTURES</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
</head>
<?php
$ShopID = "lcventures";

$Date = date("Ymdhis") . "" . rand(10000, 99999);
$OrderNo = "LCV" . $Date;

?>

<body style="background:#fff;">
<div id="wrap" style="width:675px; height:670px;">
    <form name="fm" method="post" action="{{url('popup/lcv_payment_result')}}">
        {{ csrf_field() }}
        <input type="hidden" name="allat_shop_id" value="<?=$ShopID?>">
        <input type="hidden" name="allat_order_no" value="<?=$OrderNo?>">
        <input type="hidden" name="allat_amt" value="1100000">
        <input type="hidden" name="allat_pmember_id" value="lcventures">
        <input type="hidden" name="allat_product_cd" value="1100000">
        <input type="hidden" name="allat_product_nm" value="컨설팅 110">
        <!-- 	<input type="hidden" name="allat_buyer_nm"> -->
        <input type="hidden" name="allat_recp_nm">
        <input type="hidden" name="allat_recp_addr" value="강남구 역삼동 696-20 도원빌딩4층">
        <input type="hidden" name="allat_enc_data">

        <div class="payArea">
            <div class="formArea">
                <p class="txt01">필수 입력사항</p>
                <div class="form1">
                    <p class="f01"><label><span>성함</span><input type="text" name="allat_buyer_nm" style="width:150px;"></label>
                        <label><span>회사정보</span><input name="CompanyName" type="text" style="width:150px;"></label></p>
                    <p class="f02"><label><span>연락처</span><input type="text" name="Tel1" style="width:80px;"> - <input
                                    type="text" name="Tel2" style="width:80px;"> - <input type="text" name="Tel3"
                                                                                          style="width:80px;"></label>
                    </p>
                </div>
            </div>
            <p class="t01"><img src="{{asset('images/pay_t01.png')}}" alt=""></p>
            <div class="pay">
                <ul>
                    <li><label><span><img src="{{asset('images/pay01.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay" checked
                                                                                                   onclick="PayType(1100000,'컨설팅 110')">
                            110만원(vat포함)</label></li>
                    <li><label><span><img src="{{asset('images/pay02.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay"
                                                                                                   onclick="PayType(2200000,'컨설팅 220')">
                            220만원(vat포함)</label></li>
                    <li><label><span><img src="{{asset('images/pay03.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay"
                                                                                                   onclick="PayType(3300000,'컨설팅 330')">
                            330만원(vat포함)</label></li>
                    <li><label><span><img src="{{asset('images/pay04.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay"
                                                                                                   onclick="PayType(4400000,'컨설팅 440')">
                            440만원(vat포함)</label></li>
                    <li><label><span><img src="{{asset('images/pay05.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay"
                                                                                                   onclick="PayType(5500000,'컨설팅 550')">
                            550만원(vat포함)</label></li>
                    <li><label><span><img src="{{asset('images/pay06.png')}}" alt=""></span><input type="radio"
                                                                                                   name="pay"
                                                                                                   onclick="PayType(11000000,'컨설팅 1100')">
                            1100만원(vat포함)</label></li>
                </ul>
            </div>
            <div class="btnArea">
                <p class="btn_pay01"><a>선택상품 : <span id="PayType">컨설팅 110</span></a></p>
                <p class="btn_pay02"><a href="javascript:ftn_approval(document.fm);" class="btn_pay02">결제하기</a></p>
            </div>
        </div>
    </form>
</div>
<script src="{{elixir('js/vendor.js')}}"></script>
<script language=JavaScript charset='euc-kr' src="https://tx.allatpay.com/common/AllatPayRE.js"></script>
<script language=Javascript>
    function ftn_approval(dfm) {

        if (document.fm.allat_buyer_nm.value == "") {
            alert("성함을 입력해주세요.");
            document.fm.allat_buyer_nm.focus();
        }
        else if (document.fm.CompanyName.value == "") {
            alert("회사명을 입력해주세요.");
            document.fm.CompanyName.focus();
        }
        else if (document.fm.Tel1.value == "" || document.fm.Tel2.value == "" || document.fm.Tel3.value == "") {
            alert("연락처를 입력해주세요.");
            document.fm.Tel1.focus();
        } else {

            document.fm.allat_recp_nm.value = document.fm.allat_buyer_nm.value;
            //Amount = document.PaymentForm.allat_amt.value ;
            Type = document.fm.allat_product_nm.value;
            Amount = number_format(document.fm.allat_amt.value, 0, ".", ",");
            Msg = "\"" + Type + "\" 상품에 대한 " + Amount + "원 결제 하시겠습니까?";

            if (confirm(Msg) == true) {    //확인
//			document.fm.submit();
                var ret;
                ret = visible_Approval(dfm);//Function 내부에서 submit을 하게 되어있음.
                console.log(ret)
                if (ret.substring(0, 4) != "0000" && ret.substring(0, 4) != "9999") {
                    // 오류 코드 : 0001~9998 의 오류에 대해서 적절한 처리를 해주시기 바랍니다.
                    alert(ret.substring(4, ret.length));     // Message 가져오기
                }
                if (ret.substring(0, 4) == "9999") {
                    // 오류 코드 : 9999 의 오류에 대해서 적절한 처리를 해주시기 바랍니다.
                    alert(ret.substring(8, ret.length));     // Message 가져오기
                }
            } else {   //취소
                return;
            }
        }


    }
</script>
<script language="javascript">

    /**
     * PHP 함수 number_format 같이 천자리마다 ,를 자동으로 찍어줌
     * @param num number|string : 숫자
     * @param decimals int default 0 : 보여질 소숫점 자리숫
     * @param dec_point char default . : 소수점을 대체 표시할 문자
     * @param thousands_sep char default , : 천자리 ,를 대체 표시할 문자
     * @returns {string}
     */
    function number_format(num, decimals, dec_point, thousands_sep) {
        num = parseFloat(num);
        if (isNaN(num)) return '0';

        if (typeof(decimals) == 'undefined') decimals = 0;
        if (typeof(dec_point) == 'undefined') dec_point = '.';
        if (typeof(thousands_sep) == 'undefined') thousands_sep = ',';
        decimals = Math.pow(10, decimals);

        num = num * decimals;
        num = Math.round(num);
        num = num / decimals;

        num = String(num);
        var reg = /(^[+-]?\d+)(\d{3})/;
        var tmp = num.split('.');
        var n = tmp[0];
        var d = tmp[1] ? dec_point + tmp[1] : '';

        while (reg.test(n)) n = n.replace(reg, "$1" + thousands_sep + "$2");

        return n + d;
    }

    function PayType(Amount, Type) {
        document.getElementById("PayType").innerHTML = Type;
        document.fm.allat_amt.value = Amount;
        document.fm.allat_product_nm.value = Type;
        document.fm.allat_product_cd.value = Amount;
    }


    function goPay() {
        if (popBg.style.display == "block") {
            popBg.style.display = "none";
        } else {
            popBg.style.display = "block";
        }

    }
</script>
<!---- 수동 설치 설명 Layer를 사용하지 않으시려면, 아래 스크립트를 삭제 해 주시기 바랍니다 ---->
<script language=Javascript>initCheckOB();</script>
</html>