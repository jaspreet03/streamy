
<?php 

include("config.php");
if(isset($_POST['submit'])){


if($nameErr==""&&$emailErr==""&&$pwdErr==""){

$name1=$_POST['name'];
$email1=$_POST['email'];
$pwd1=$_POST['pwd'];

$query="INSERT INTO login (username,email,password) VALUES ('$name1','$email1','$pwd1')";
$qq=mysqli_query($con,$query);
if($qq){
    
    header('Location:index.php');

}else{
    header('Location:loginpage.php');
}
}
}
?>