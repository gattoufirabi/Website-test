<?php
if (isset($_POST['submit'])){
echo 'Get the fuck out';
exit();
}
else {
    require 'connect.inc.php';
    $iden=$_POST['username'];
    $psw=$_POST['password'];
    $req="SELECT * FROM data WHERE Userid=? OR Usermail=?;";
    $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$req)){
           echo"wrong";
           exit();
       }
        mysqli_stmt_bind_param($stmt,'ss',$iden,$iden);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if ($row= mysqli_fetch_assoc($result)){
         $pass = password_verify($psw,$row['Userpass']);
         if ($pass == false){
         header("location:../index.php?error=wrongpass");
         exit();
        }
         else if ($pass== true){
          session_start();
          $_SESSION['uid']=$row['Userid'];
          $_SESSION['maile']=$row['Usermail'];
          header('location:../index.php?error=success');
          exit();

         }
         else{
             header('location: ../index.php?eroor=unknown');
             exit();
        }
        }
        else {
            header("location: ../index.php?error=nouser");
            exit;
                }
    }
?>