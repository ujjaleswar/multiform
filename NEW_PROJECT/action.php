<?php
include 'databse.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $date=$_POST['trip-start'];
    $email=$_POST['email'];
    $fatherfname=$_POST['ffname'];
    $fatherlname=$_POST['flname'];
    $motherfname=$_POST['mfname'];
    $motherlname=$_POST['mlname'];
    $gender=$_POST['gender'];
    $Nationality=$_POST['Nationality'];
    $HomeAddress=$_POST['HomeAddress'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $mob=$_POST['mob'];
    $hscInstitution=$_POST['hscInstitution'];
    $hsc=$_POST['hsc'];
    $HSCpercentage=$_POST['HSCpercentage'];
    $SSCInstitution=$_POST['SSCInstitution'];
    $ssc=$_POST['ssc'];
    $SSCpercentage=$_POST['SSCpercentage'];
    $Currentlypurshing=$_POST['Currentlypurshing'];
    $Currenteducational=$_POST['Currenteducational'];
    $overalP=$_POST['overalp'];
    $currentbac=$_POST['currentbac'];
    

$res=mysqli_query($con,"INSERT into ubn values('$fname','$lname','$date','$email','$fatherfname','$fatherlname','$motherfname',
'$motherlname','$gender','$Nationality','$HomeAddress','$city','$country','$phone','$mob','$hscInstitution','$hsc','$HSCpercentage',
'$SSCInstitution',' $ssc','$Currentlypurshing','$Currenteducational','$overalP','$currentbac')");
if($res)
{
    echo "data store sucessfully";
}
else
{
    echo "fail";
}
}
?>
