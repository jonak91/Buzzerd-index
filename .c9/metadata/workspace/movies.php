{"filter":false,"title":"movies.php","tooltip":"/movies.php","undoManager":{"mark":67,"position":67,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":7,"column":15},"action":"insert","lines":["<?php","\t\t \t\t$movies = get_movies();","\t\t \t\tprint_r(get_movies());","\t\t \t\t","\t\t \t\tforeach ($movies as $movie) { ?>","\t\t \t\t<h2>Title: <?php echo $movie['title']; ?></h2>","\t\t \t\t<h2>Year: <?php echo $movie['year_released']; ?></h2>","\t\t \t\t<?php } ?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":8,"column":24},"action":"insert","lines":["<?php require_once( 'incl/functions.php' ); ?>","<?php require_once( 'incl/header.php' ); ?>",""," <div class=\"container mtb\">","\t \t<div class=\"row\">","\t \t","\t \t\t<! -- MAIN CONTENAT AREA -->","\t \t\t<div class=\"col-lg-8\">","\t \t\t\t<h1>All actors</h1>"]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":15},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":20,"column":5},"action":"insert","lines":["\t\t \t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":5},"action":"insert","lines":["\t\t \t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":3},"end":{"row":21,"column":4},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":2},"end":{"row":21,"column":3},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["</div><! --/ MAIN CONTENT AREA -->","\t \t\t","\t </div><! --/row -->","\t </div><! --/container -->","","<?php require_once( 'incl/footer.php' ); ?>",""]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":13},"end":{"row":8,"column":19},"action":"remove","lines":["actors"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":0},"end":{"row":15,"column":5},"action":"remove","lines":["\t\t \t\tprint_r(get_movies());","\t\t \t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":8},"end":{"row":12,"column":12},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":12},"end":{"row":12,"column":16},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":24},"end":{"row":12,"column":16},"action":"remove","lines":["","","","","                "]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":24},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":5},"action":"insert","lines":["\t \t\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":28},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":37},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":5},"action":"insert","lines":["\t\t \t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":5},"end":{"row":12,"column":32},"action":"insert","lines":["<a href=\"url\">link text</a>"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":19},"end":{"row":12,"column":28},"action":"remove","lines":["link text"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":49},"action":"insert","lines":["<?php echo $movie['title']; ?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":15},"end":{"row":12,"column":17},"action":"remove","lines":["rl"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"remove","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":21},"end":{"row":12,"column":22},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"insert","lines":["D"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":["="]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"remove","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":28},"end":{"row":12,"column":58},"action":"insert","lines":["<?php echo $movie['title']; ?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":47},"end":{"row":12,"column":52},"action":"remove","lines":["title"]},{"start":{"row":12,"column":47},"end":{"row":12,"column":48},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":48},"end":{"row":12,"column":49},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":49},"end":{"row":12,"column":50},"action":"insert","lines":["D"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":16},"end":{"row":13,"column":46},"action":"remove","lines":["<?php echo $movie['title']; ?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":13,"column":16},"end":{"row":13,"column":103},"action":"insert","lines":["<a href=\"movie.php?mID=<?php echo $movie['mID']; ?>\"><?php echo $movie['title']; ?></a>"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":5},"end":{"row":12,"column":92},"action":"remove","lines":["<a href=\"movie.php?mID=<?php echo $movie['mID']; ?>\"><?php echo $movie['title']; ?></a>"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":["\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":37},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":5},"end":{"row":12,"column":108},"action":"remove","lines":["<h2>Title: <a href=\"movie.php?mID=<?php echo $movie['mID']; ?>\"><?php echo $movie['title']; ?></a></h2>"]},{"start":{"row":14,"column":15},"end":{"row":14,"column":118},"action":"insert","lines":["<h2>Title: <a href=\"movie.php?mID=<?php echo $movie['mID']; ?>\"><?php echo $movie['title']; ?></a></h2>"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":16},"end":{"row":10,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":30,"mode":"ace/mode/php"}},"timestamp":1417573692723,"hash":"0b2e31172637908f2916ea66818fe5041365ff6b"}