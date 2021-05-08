<?php include("header.php"); ?>

<?php include("navbar.php"); ?>


<section class="main">


<?php
include("config.php");
	$query = $_POST['find']; 
	
	
	$min_length = 3;
	
	
	if(strlen($query) >= $min_length){ 
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		// $query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection

		$query1="SELECT * FROM search
			WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%') OR (`actor` LIKE '%".$query."%')";


		$raw_results = mysqli_query($con,$query1);
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				//echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])

           echo " <div class='movies-box'>";
            
		   echo "<div class='movies-img'>";
		   echo "<div class='title'>".$results['title']."</div>";
		   echo "<a  href=".$results['img']."> <img src=".$results['img']."></a>";
		   echo "</div>";
             
		   echo "<a href=".$results['img']."><p>";
		   echo $results['text']."</p>";
		   echo "</a>";

           echo "</div>";



			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}



/*	if(isset($_POST['show'])){
		include("config.php");
		$tname=$_POST['tname'];
		
		$query="SELECT * FROM imgupload WHERE img='$tname' ";
		$qq=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($qq)){
		
		$img1=$row['img'];
		?>
		<img  src="<?php echo $img1; ?>" alt="uploaded image" width="100" height="100">
		
		<?php
		}
		}
*/



?>



</section>

<?php include("footer.php");?>