<?php
<?php
$leadid = $_REQUEST['leadid'];
$affid  = $_REQUEST['affid'];
$oid    = $_REQUEST['oid'];
$campid = $_REQUEST['campid'];
$cid    = $_REQUEST['cid'];
$tid    = $_REQUEST['tid'];
$udid   = $_REQUEST['udid'];
$price  = $_REQUEST['price'];
$s1     = isset($_REQUEST['s1'])?  $_REQUEST['s1'] : $_REQUEST['sub1'];
$s2     = isset($_REQUEST['s2'])?  $_REQUEST['s2'] : $_REQUEST['sub2'];
$s3     = isset($_REQUEST['s3'])?  $_REQUEST['s3'] : $_REQUEST['sub3'];
$s4     = isset($_REQUEST['s4'])?  $_REQUEST['s4'] : $_REQUEST['sub4'];
$s5     = isset($_REQUEST['s5'])?  $_REQUEST['s5'] : $_REQUEST['sub5'];



$qs = "leadid={$leadid}&affid={$affid}&oid={$oid}&campid={$campid}&cid={$cid}&tid={$tid}&s1={$s1}&s2={$s2}&s3={$s3}&s4={$s4}&s5={$s5}&price={$price}&udid={$udid}";

header("location: {$_REQUEST['s1']}/thankyou/redirect.php?$qs")
?>
