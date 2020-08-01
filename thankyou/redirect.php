<?php

//s1 = domain
//s2 = fb id
//s3 = Custom Event
//s4 = Currency



$price = $_REQUEST['price'];


$fbid = isset($_REQUEST['s2'])? $_REQUEST['s2'] : $_REQUEST['sub2']

$Event = isset($_REQUEST['s3'])? $_REQUEST['s3'] : $_REQUEST['sub3']
$Currency = isset($_REQUEST['s4'])? $_REQUEST['s4'] : $_REQUEST['sub4']

?>
<script>
    window.location = "fb.php?fbid=<?php echo $fbid; ?>&Event=<?php echo $Event; ?>&currency=<?php echo $Currency; ?>&price=<?php echo $price; ?>";
</script>
