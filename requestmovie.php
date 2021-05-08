<?php include("header.php"); ?>

<?php include("navbar.php"); ?>


<section class="main">
<div class="movies-heading">
    <h2>Request A Movie</h2>
</div>
<?php
include("config.php");
if(isset($_POST['submit'])){

$username1=$_POST['username'];
$email1=$_POST['email'];
$comment1=$_POST['comment'];



$query_insert="INSERT INTO comment (comment_name,comment_email,comment_content) VALUES ('$username1','$email1','$comment1')";
$result_insert=mysqli_query($con,$query_insert);
if($result_insert){
header('Location:requestmovie.php');
}else{
    echo"Sorry could not post your comment";
}

}
?>

<?php

include("config.php");

$query_fetch="SELECT * FROM comment";
$result_fetch=mysqli_query($con,$query_fetch);




echo"<br>";
echo"<div class=tdiv>";
echo "<table class=tnew border=1 style='table-layout: fixed' >"; 
echo "<tr><td style='word-wrap: break-word'>";
echo "<b>ID</b>";
echo "</td><td style='word-wrap: break-word'>";
echo "<b>NAME</b>";
echo "</td><td style='word-wrap: break-word'>";
echo "<b>EMAIL</b>";
echo "</td><td style='word-wrap: break-word'>";
echo "<b>DATE</b>";
echo "</td><td style='word-wrap: break-word'>";
echo "<b>REQUEST</b>";
echo "</td></tr>";

while($row=mysqli_fetch_array($result_fetch)){

    $id1=$row['id'];
    $username1=$row['comment_name'];
    $email1=$row['comment_email'];
    $date1=$row['comment_date'];
    $comment1=substr($row['comment_content'],0,100);


echo "<tr><td style='word-wrap: break-word'>";
echo $id1;
echo "</td><td style='word-wrap: break-word'>";
echo $username1;
echo "</td><td style='word-wrap: break-word'>";
echo $email1;
echo "</td><td style='word-wrap: break-word'>";
echo $date1;
echo "</td><td style='word-wrap: break-word'>";
echo $comment1;
echo "</td></tr>";


}
echo "</table>";
echo"</div>";
echo"<br>";
echo"<br>";
echo"<br>";

?>






<section class="back">

<h1 class="req">REQUEST</h1>
<form class="form" action="" method="POST">

<input class="user-input" type="text" name="username" placeholder="username"><br> 
<input class="user-input" type="text" name="email" placeholder="email"> <br>
<textarea  class="user-comment" rows="7" cols="43" name="comment" placeholder="comment">
</textarea><br>
<input class="user-submit" type="submit" value="Submit" name="submit">

</form>


</section>
</section>

<?php include("footer.php");?>
