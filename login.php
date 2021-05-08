<?php

include("config.php");

if(isset($_POST['submit'])){


$name1=$_POST['name'];
$pwd1=$_POST['pwd'];


$query="SELECT * FROM login WHERE username = '$name1'";
$qq=mysqli_query($con,$query);
if($qq){
   $row=mysqli_fetch_assoc($qq);
 
   if($row['password'] === $pwd1){

    session_start();

   $_SESSION["user"]=$name1;
    //setcookie("login","1",time()+3600);

    if(isset($_POST['rememberme'])){
    setcookie('username',$_POST['name'],time()+3600*24*7);
    setcookie('password',$_POST['pwd'],time()+3600*24*7);
    }
   


    header('Location:index.php');

   }else {
      
       header('Location:loginpage.php');
   }

}

}
?>