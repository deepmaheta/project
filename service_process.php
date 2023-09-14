<?php
session_start();
extract($_POST);
echo $date;
include("admin/include/config.php");
$qry = "INSERT INTO service (status,date,time,firstnm,lastnm,email,number,address,modelcar,servicetype) VALUES ('active','" . $date . "','" . $time . "','" . $firstnm . "','" . $lastnm . "',
'" . $email . "','" . $number . "','" . $address . "','" . $modelcar . "','" . $servicetype . "')";
$res=mysqli_query($conn,$qry);
if ($res) {
    $_SESSION['serviceaddstatus']=true;
?>
<?php
} else {
    echo "please try again later";
}
header("location:service.php");
?>