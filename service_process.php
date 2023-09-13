<?php
print_r($_POST);
extract($_POST);
include("admin/include/config.php");
$qry="INSERT INTO service (firstnm,lastnm,email,number,address,modelcar,servicetype) VALUES ('".$firstnm."','".$lastnm."',
'".$email."','".$number."','".$address."','".$modelcar."','".$servicetype."')";
echo $qry;
// EXIT();
$res=mysqli_query($conn,$qry);
if($res){
    ?>
<script>alert("complete")</script>
    <?php
}
else{
    echo "please try again later";
}
header("location:service.php");
?>