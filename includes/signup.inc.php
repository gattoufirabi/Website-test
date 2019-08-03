<?php
if(isset($_POST['submit'])){
    print ('Get the fuck out');
    exit;
}
else {
require 'connect.inc.php';
$usernameid=$_POST['usernameid'];
$mailid=$_POST['useremail'];
$passwordid=$_POST['userpass'];
$passwordreid=$_POST['userpass-repeat'];
$newpsw=password_hash($passwordid, PASSWORD_DEFAULT);
$query="INSERT INTO data (Userid,Usermail,Userpass) VALUES ('$usernameid','$mailid','$newpsw')";
if($passwordreid !==$passwordid){
    header("location:../signup.php?error=passwordcheck&id=".$usernameid. "&mailer=".$mailid);
    exit();
}
else if (mysqli_query($conn, $query)) {
    header("location:../signup.php?error=succes");
} else  {
    header("Location: ../signup.php?error=invalidusernameout&mailer=".$mailid);
    exit();
}
}
?>