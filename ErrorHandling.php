<style>
h5.error{
    position: relative;
   top:350px;
    left:600px;
    color : blue;
}
</style>
<?php

function customError($errno,$errmsg,$errfile,$errline)
{
$message=" Error no:".$errno." Error Message:".$errmsg." File name: " .$errfile." Line:".$errline;
error_log($message,3,"errors.txt");
?> <h5 class="error"> <?php die("Fatal error , cant proceed.");?></h5>

<?php
}
set_error_handler("customError");
?>
