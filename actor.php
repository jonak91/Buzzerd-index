<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

<div id="blue">
	    <div class="container">
			<div class="row">
			    <?php
			    if(isset($_POST['submit'])){
			    $title=$_POST['title'];
				header( "Location: /results.php?result=$title");
				}
		        ?>
				<form method="post" name="search">
				<div>
				<label for="name">Search Movies:</label><input type="text" name="title" placeholder="Ex: Home Alone 2" />
				</div>
				<input type="submit" name="submit" value="Search" />
				</form>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div>
	
 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php 
	 		$aID = $_GET['aID'];
	 		$actor = get_actor($aID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">

		 		<h2>Name: <?php echo $actor['first_name'].' '.$actor['last_name']; ?></h2>
		 		<h2>DoB:<?php echo $actor['dob']; ?></h2>
		 		<h2>Bio:<?php echo $actor['bio']; ?></h2>
		 		<h2>List of movies in:</h2>
		 		<?php $moviesfromactor = get_moviesfromactor($aID);
		 		foreach ($moviesfromactor as $moviefromactor) {?>
		 		<h2><a href="movie.php?mID=<?php echo $moviefromactor['mID']; ?>"><?php echo $moviefromactor['title']; ?></a></h2>
		 		<?php } ?>
		 		
		 		<?php
		 		if($movie['won_oscar'] == "0"){
		 			$answer = "no";
		 		}else{
		 			$answer = "yes";
		 		}
		 		?>
		 		<tr><td><h2>Won Oscar?</h2></td><td><h2><?php echo $answer; ?></h2></td></tr>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
