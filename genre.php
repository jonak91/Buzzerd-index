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
	 		$gID = $_GET['gID'];
	 		$genre = get_genre($gID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
					
					<table style="width:100%">
						
					<tr><td><h2>Name: <?php echo $genre['name']; ?></h2></td> <td><h2>Movies in the genre:</h2></td></tr>
					<?php $moviesfromgenre = get_moviesfromgenre($gID);
		 		foreach ($moviesfromgenre as $moviefromgenre) {?>
		 			<tr>
		 			<td></td><td colspan="2"><h2><a href="movie.php?mID=<?php echo $moviefromgenre['mID']; ?>"><?php echo $moviefromgenre['title']; ?></a></h2></td>
		 			</tr>
		 		<?php } ?>

					
					</table>

			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
