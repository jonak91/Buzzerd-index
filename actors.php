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
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All actors</h1>
	 			
	 			
		 		<h2>Actors:</h2>
		 		<?php
		 		$actors = get_actors();
		 		foreach ($actors as $actor) { 
		 		$count = 0;
		 		
		 		$moviesfromactor = get_moviesfromactor($actor['aID']);
		 		foreach ($moviesfromactor as $moviefromactor) {
					$count++;
		 		} 
		 		?>
		 		<h2><a href="actor.php?aID=<?php echo $actor['aID']; ?>"><?php echo $actor['first_name'].' '.$actor['last_name'].' ('.$count.')'; ?></a></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 </div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
