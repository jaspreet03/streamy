
<?php include("header.php"); ?>
<body>

<!----------navigation-------------->
<nav class="navbar">
        <!--- logo -------->
        <a href="index.php" class="logo"> <img src="img/streamyfinal.png" alt="logo"></a>
       <!---------menu-btn   --------->
       <input type="checkbox" class="menu-btn" id="menu-btn">
       <label class="menu-icon" for="menu-btn">
           <span class="nav-icon"></span>
       </label>
       
       
        <!--- menu ------------>
        <ul class="nav-list">
        
         <li><a href="index.php">HOME</a></li>
         <li><a href="movies.php">MOVIES</a></li>
         <li><a href="tvshows.php">TV SHOWS</a></li>
         <li><a href="requestmovie.php">Request Movie</a></li>
         <li><a href="genres.php">GENRES</a></li>
        </ul>
         <div class="rightnav">
         <form class="nform" action="search.php" method="POST">
             <input type="text" name="find" id="find" placeholder="Find Your Favourite Movies">
             <input style="width:25%" type="submit">
        </form>
        </div>
     
        <!--if(isset($_COOKIE["username"])) -->
        
        <!--echo "<p>Hello".$_COOKIE["username"]."</p>"; -->
        <div class="dropdown">
        <button class="dropbtn">Hello <?php echo $_SESSION['user'] ?><i class="fa fa-angle-down" aria-hidden="true"></i> </button>
        <div class="dropdown-content">
          <a href="logout.php">Logout</a>
        </div>
      </div>

         

       
    </nav>