<?php
require_once('database.php');

$host= '127.0.0.1';
$u= 'jonak91';
$p = '';
$d= 'movies';

global $db;
$db= new Database($d, $u, $p, $host);

function get_movies(){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT * FROM movies"); //updated
	return $db->resToArray($results);
}

function get_actors(){
	$db= $GLOBALS['db'];
	$results = $db->query("SELECT * FROM actors ORDER BY 'first_name'"); //updated
	return $db->resToArray($results);
}

function get_studios(){
	$db= $GLOBALS['db'];
	$results = $db->query("SELECT * FROM studio"); //updated
	return $db->resToArray($results);
}

function get_genres(){
	$db= $GLOBALS['db'];
	$results = $db->query("SELECT * FROM genre"); //updated
	return $db->resToArray($results);
}

function get_movie($mID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM movies WHERE mID = '$mID'"; //updated
	return $db->get_row($query);
}

function get_actor($aID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM actors WHERE aID = '$aID'"; //updated
	return $db->get_row($query);
}

function get_studio($sID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM studio WHERE sID = '$sID'"; //updated
	return $db->get_row($query);
}

function get_genre($gID){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM genre WHERE gID = '$gID'"; //updated
	return $db->get_row($query);
}

function get_moviesfromstudio($id){  //works
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM movies JOIN studio ON movies.studioID = studio.sID WHERE studio.sID = '$id'");
	return $db->resToArray($results);
}

function get_moviesfromactor($id){ //works
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM movies JOIN movie_actors ON movies.mID = movie_actors.movieID JOIN actors ON movie_actors.actorID = actors.aID WHERE actors.aID = '$id'");
	return $db->resToArray($results);
}

function get_moviesfromgenre($id){ //works 
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM movies JOIN movie_genre ON movies.mID = movie_genre.movieID JOIN genres ON movie_genre.genreID = genres.gID WHERE genres.gID = '$id'");
	return $db->resToArray($results);
}

function get_actorsfrommovies($id){  //works
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM actors JOIN movie_actors ON actors.aID = movie_actors.actorID JOIN movies ON movie_actors.movieID = movies.mID WHERE movies.mID = '$id'");
	return $db->resToArray($results);
}

function add_movie($info){
	$db= $GLOBALS['db'];
	extract($info);
	$submitted= $db->query("INSERT INTO movies VALUES('', '$title', '$year_released', '$synopsis', '$was_novel', '$studioID', CURRENT_TIMESTAMP)");
	
	if($submitted){ 
		print "<h3>$title submitted!</h3>"; 
	}
}

function add_actor($info){
	$db= $GLOBALS['db'];
	extract($info);
	$submitted= $db->query("INSERT INTO actors VALUES('', '$first_name', '$last_name', '$bio', '$dob', '$won_oscar', CURRENT_TIMESTAMP)");
	
	if($submitted){ 
		print "<h3>$first_name $last_name submitted!</h3>"; 
	}
}

function add_genre($info){
	$db= $GLOBALS['db'];
	extract($info);
	$submitted= $db->query("INSERT INTO genre VALUES('', '$name', CURRENT_TIMESTAMP)");
	
	if($submitted){ 
		print "<h3>$name submitted!</h3>"; 
	}
}

function add_studio($info){
	$db= $GLOBALS['db'];
	extract($info);
	$submitted= $db->query("INSERT INTO studio VALUES('', '$name', '$city', '$state', '$zip', CURRENT_TIMESTAMP)");
	
	if($submitted){ 
		print "<h3>$name submitted!</h3>"; 
	}
}

function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}
?>
