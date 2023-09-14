<?php
extract($_POST);
include("admin/include/config.php");
$qry="INSERT INTO contact (name,email,subject,message) VALUES ('".$name."','".$email."',
'".$subject."','".$message."')";
$res=mysqli_query($conn,$qry);
if($res){
    ?>
    <?php
}
else{
    echo "please try again later";
}
header("location:contact.php");
?>