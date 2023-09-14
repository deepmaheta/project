<?php
include_once('include/config.php');
$qry="Update service set status='completed' where ID='".$_REQUEST['id']."'";
$res=mysqli_query($conn,$qry);
if($res){
    header("location:service.php");
}
else
{
    echo "false";
}
echo $qry;
?>