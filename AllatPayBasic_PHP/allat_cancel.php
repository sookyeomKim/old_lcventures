<?php
  include "./allatutil.php";


  /********************* Service Code *********************/
  $at_shop_id   = "가맹점 ShopId";
  $at_cross_key = "가맹점 CrossKey";

  $at_data   = "allat_shop_id=".$at_shop_id.
               "&allat_enc_data=".$_POST["allat_enc_data"].
               "&allat_cross_key=".$at_cross_key;

  $at_txt = CancelReq($at_data,"SSL");

  $REPLYCD   =getValue("reply_cd",$at_txt);
  $REPLYMSG  =getValue("reply_msg",$at_txt);

  //----------------------------------------------------------------------------------------
  if( !strcmp($REPLYCD,"0000") ){
    $CANCEL_YMDHMS=getValue("cancel_ymdhms",$at_txt);
    $PART_CANCEL_FLAG=getValue("part_cancel_flag",$at_txt);
    $REMAIN_AMT=getValue("remain_amt",$at_txt);
    $PAY_TYPE=getValue("pay_type",$at_txt);

    echo "결과코드    : ".$REPLYCD."<br>";
    echo "결과메세지  : ".$REPLYMSG."<br>";
    echo "취소일시    : ".$CANCEL_YMDHMS."<br>";
    echo "취소여부    : ".$PART_CANCEL_FLAG."<br>";
    echo "잔액        : ".$REMAIN_AMT."<br>";
    echo "지불수단    : ".$PAY_TYPE."<br>";
  }else{
    echo "결과코드    : ".$REPLYCD."<br>";
    echo "결과메세지  : ".$REPLYMSG."<br>";
  }
?>
