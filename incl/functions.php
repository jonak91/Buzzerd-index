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
	$results = $db->query("SELECT * FROM movies");
	return $db->resToArray($results);
}

function get_actors(){
	$db= $GLOBALS['db'];
	$results = $db->query("SELECT * FROM actors ORDER BY 'first_name'"); //updated
	return $db->resToArray($results);
}

function get_genre(){
	$db= $GLOBALS['db'];
	$query= ("SELECT movie.title, genre.name FROM movies, genre, movie_genres WHERE movies.mID = movie_genres.movieID AND genre.ID = movie_genres.genre.ID;");
	return $db->resToArray($query);
}

function get_movie(){
	$db= $GLOBALS['db'];
	$query= ("SELECT movies.mID, movies.title, movies.year_released, movie_actors.movieID, movie_actors.actorID, actors.aID
            FROM movies, movie_actors, actors
            WHERE movie_actors.actorID = 2
            AND actors.aID = movie_actors.actorID
            AND movies.mID = movie_actors.movieID
            ORDER BY movies.title;");
	return $db->resToArray($query);
}

function get_studios(){
	$db= $GLOBALS['db'];
	$query= ("SELECT * FROM studio");
	return $db->resToArray($query);
}

function get_actor(){
	$db= $GLOBALS['db'];
	$query= ("SELECT actors.aID, actors.first_name, actors.last_name, movies.title,
			FROM actors, movies,
			join movie_actors
			where actors.aID=movie_actors.actorID
			and
			movie_actors.movieID=movies.mID");
	return $db->resToArray($query);
}
	
function get_actor2(){
	$db= $GLOBALS['db'];
	$query= ("SELECT actors.actorID, actors.first_name, actors.last_name, actors.DoB, actors.bio
            FROM movies.actors
            WHERE movie_actors.actorID = 2
            AND actors.aID = movie_actors.actorID
            AND movies.mID = movie_actors.movieID
            ORDER BY movies.title;");
	return $db->resToArray($query);
}


function add_movie($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movies VALUES('', '$mID', '$title', '$year_released', '$synopsis', '$was_novel', '$studioID', '$timestamp')");
	echo "<h3>$name submitted!</h3>";
}

function add_actor($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movie_actors VALUES('', '$maID', '$movieID', '$actorID', '$timestamp')");
	echo "<h3>$name submitted!</h3>";
}

function add_genre($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movie_genre VALUES('', '$mgID', '$movieID', '$genreID', '$timestamp')");
	echo "<h3>$name submitted!</h3>";
}

function add_studio($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO studio VALUES('', '$sID', '$name', '$city', '$state', '$zip', '$timestamp')");
	echo "<h3>$name submitted!</h3>";
}

function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}
?>
