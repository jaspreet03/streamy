<?php include("header.php"); ?>

<?php 



//if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
if(!isset($_SESSION['user'])){
	header("location:loginpage.php"); 
}
?>




<?php include("navbar.php"); ?>  





    <section class="main">
<h1 class="showcase-heading">Showcase</h1>
<ul id="autoWidth" class="cs-hidden">
    <!--  box1  ------------>
    <li class="item-a">
        <!-- showcase-box ---------------->
        <div class="showcase-box"><img src="img/godzillavskong2.jpg" alt=""></div>
    </li>
<!--  box2  ------------>
<li class="item-b">
    <!-- showcase-box ---------------->
    <div class="showcase-box"><img src="img/badboys.jpg" alt=""></div>
</li>
<!--  box3  ------------>
<li class="item-c">
    <!-- showcase-box ---------------->
    <div class="showcase-box"><img src="img/beautybeast.jpg" alt=""></div>
</li>
<!--  box4 ------------>
<li class="item-d">
    <!-- showcase-box ---------------->
    <div class="showcase-box"><img src="img/blackpanther.jpg" alt=""></div>
</li>
<!--  box5 ------------>
<li class="item-e">
    <!-- showcase-box ---------------->
    <div class="showcase-box"><img src="img/justiceleague.jpg" alt=""></div>
</li>

    
  </ul>

    </section>

    <!--- latest-movies-------->
<section id="latest"> 
    <h1 class="latest-heading">Latest Movies</h1>
<!----  slider -->
<ul id="autoWidth2" class="cs-hidden">
    <!---slider-box1------>
    <li class="item-a">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/withoutremorse.png" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Without Remorse </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
     <!---slider-box2------>
    <li class="item-b">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/300.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>300 </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
     <!---slider-box3------>
    <li class="item-c">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/avengers.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Avengers-Endgame </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
     <!---slider-box4------>
    <li class="item-d">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/Falcon.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Falcon </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
    
     <!---slider-box5------>
     <li class="item-e">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/venom.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Venom </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
     <!---slider-box6------>
    <li class="item-f">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/blackwidow.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Black-Widow </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
     <!---slider-box7------>
     <li class="item-g">
        <div class="latest-box">
            <!--- img ----->
            <div class="latest-b-img">
                <img src="img/Spiderman-Homecoming.jpg" alt="withoutremorse">
            </div>
            <!--- img ----->
            <div class="latest-b-text">
                <strong>Spiderman-Homecoming </strong>
                <p>Action Movie</p>
            </div>

        </div>
    </li>
<!---slider-box8------>
<li class="item-h">
    <div class="latest-box">
        <!--- img ----->
        <div class="latest-b-img">
            <img src="img/Captain-Marvel.jpg" alt="withoutremorse">
        </div>
        <!--- text ----->
        <div class="latest-b-text">
            <strong>Captain-Marvel </strong>
            <p>Action Movie</p>
        </div>

    </div>
</li>


  </ul>

</section>

<!--- movies ------->
<div class="movies-heading">
    <h2>Movies</h2>
</div>

<section id="movies-list">
    <!----box-1-------->
    <div class="movies-box">
            <!--- img----->
            <div class="movies-img">
                <div class="title">Ava</div>
                <a  href="img/ava.jpg"></ > <img src="img/ava.jpg"></a>
            </div>
            <!--  text -------->
            <a href="img/joker.jpg" ><p>
                Ava (2021) Full Movie [In English] With English Subtitles</p>
            </a>

    </div>
     <!----box-2-------->
     <div class="movies-box">
        <!--- img----->
        <div class="movies-img">
            <div class="title">300</div>
            <a  href="img/300.jpg" >     <img src="img/300.jpg"></a>
        </div>
        <!--  text -------->
        <a href="img/300.jpg"><p>
            300 (2006) Full Movie [In English] With English Subtitles</p>
        </a>

     </div>
      <!----box-3-------->
    <div class="movies-box">
        <!--- img----->
        <div class="movies-img">
            <div class="title">Avengers Endgame</div>
            <a  href="img/avengers.jpg" >     <img src="img/avengers.jpg"></a>
        </div>
        <!--  text -------->
        <a href="img/avengers.jpg"><p>
            Avengers (2019) Full Movie [In English] With English Subtitles</p>
        </a>

</div>
 <!----box-4-------->
 <div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title"> Falcon </div>
        <a  href="img/Falcon.jpg" > <img src="img/Falcon.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/Falcon.jpg"><p>
        Falcon (2021) Full Movie [In English] With English Subtitles</p>
    </a>

</div>
 <!----box-5-------->
 <div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title"> Venom</div>
        <a  href="img/venom.jpg" >  <img src="img/venom.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/venom.jpg"><p>
        Venom(2018) Full Movie [In English] With English Subtitles</p>
    </a>

</div>
 <!----box-6-------->
 <div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title">Black Widow </div>

        <a  href="img/blackwidow.jpg" >  <img src="img/blackwidow.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/blackwidow.jpg"><p>
     Black Widow (2021) Full Movie [In English] With English Subtitles</p>
    </a>

</div>
<!----box-7-------->
<div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title">Spiderman-Homecoming</div>
        <a  href="img/Spiderman-Homecoming.jpg" > <img src="img/Spiderman-Homecoming.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/Spiderman-Homecoming.jpg"><p>
    Spiderman-Homecoming(2021) Full Movie [In English] With English Subtitles</p>
    </a>

</div>
<!----box-8-------->
<div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title"> Captain-Marvel </div>
        <a  href="img/Captain-Marvel.jpg" >   <img src="img/Captain-Marvel.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/Captain-Marvel.jpg"><p>
     Captain-Marvel (2021) Full Movie [In English] With English Subtitles</p>
    </a>

</div>
<!----box-9-------->
<div class="movies-box">
    <!--- img----->
    <div class="movies-img">
        <div class="title">Batman</div>
        <a  href="img/batman.jpg" >   <img src="img/batman.jpg"></a>
    </div>
    <!--  text -------->
    <a href="img/batman.jpg"><p>
     Batman (2008) Full Movie [In English] With English Subtitles</p>
    </a>

</div>


</section>

<!-----btns------->
<div class="btns">
    <a href="#">Previous</a>
    <a href="#">Next</a>
</div>
<?php include("footer.php");?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!---- slider script------------>
<?php include("js/sliderscript.js");?>








    