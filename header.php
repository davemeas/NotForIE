<?php 
if(preg_match('/(?i)msie/',$_SERVER['HTTP_USER_AGENT'])){
    include ('assets/includes/ie.php');
    exit;
}
?>
