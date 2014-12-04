{"filter":false,"title":"add_genre.php","tooltip":"/add_genre.php","undoManager":{"mark":44,"position":44,"stack":[[{"group":"doc","deltas":[{"start":{"row":15,"column":14},"end":{"row":15,"column":19},"action":"remove","lines":["movie"]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["r"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":46,"column":6},"end":{"row":80,"column":30},"action":"remove","lines":["<h2>Add actor</h2>","\t\t\t\t\t\t<form method=\"post\" name=\"add_movie\">","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t\t<label for=\"title\">Movie Title:</label> <input type=\"text\" name=\"title\" placeholder=\"Ex: Ocean's Eleven\" />","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t\t<label for=\"year_released\">Table Description:</label> <input type=\"text\" name=\"year_released\" placeholder=\"Ex: 1991\" />","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t\t<label for=\"synopsis\">Table Description:</label> <textarea name=\"synopsis\" rows=\"5\" cols=\"100\"></textarea>","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t<label for=\"was_novel\"> Was novel before movie?</label>","\t\t\t\t\t\t\t\t\t<select name=\"was_novel\">","\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>","\t\t\t\t\t\t\t\t\t</select>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t<label for=\"studioID\"> Made by which studio?</label>","\t\t\t\t\t\t\t\t\t<select name=\"studioID\">","\t\t\t\t\t\t\t\t\t\t<?php ","\t\t\t\t\t\t\t\t\t\t$studios = get_studios();","\t\t\t\t\t\t\t\t\t\tforeach($studios as $studio){ ?>","\t\t\t\t\t\t\t\t\t\t<option value=\"<?php echo $studio['sID']; ?>\"><?php echo $studio['name']; ?></option>","\t\t\t\t\t\t\t\t\t\t<?php } ?>","\t\t\t\t\t\t\t\t\t</select>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Add Movie\" />","\t\t\t\t\t\t</form>","\t\t\t\t\t\t<h2>Add studio</h2>","\t\t\t\t\t\t<h2>Add genre</h2>","\t\t\t\t\t\t<h2>assign actor to movie</h2>","\t\t\t\t\t\t<h2>assign genre to movie</h2>","\t\t\t\t\t\t<h2>recently added:</h2>"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":8},"end":{"row":33,"column":12},"action":"remove","lines":["<div>","\t\t\t\t\t\t\t\t\t<label for=\"year_released\">Table Description:</label> <input type=\"text\" name=\"year_released\" placeholder=\"Ex: 1991\" />","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t\t<label for=\"synopsis\">Table Description:</label> <textarea name=\"synopsis\" rows=\"5\" cols=\"100\"></textarea>","\t\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t\t<div>","\t\t\t\t\t\t\t\t<label for=\"was_novel\"> Was novel before movie?</label>","\t\t\t\t\t\t\t\t\t<select name=\"was_novel\">","\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>","\t\t\t\t\t\t\t\t\t</select>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div>"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":21},"end":{"row":18,"column":26},"action":"remove","lines":["title"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":27},"end":{"row":18,"column":38},"action":"remove","lines":["Movie Title"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["g"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["r"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":72},"end":{"row":18,"column":77},"action":"remove","lines":["title"]},{"start":{"row":18,"column":72},"end":{"row":18,"column":73},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":73},"end":{"row":18,"column":74},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":95},"end":{"row":18,"column":109},"action":"remove","lines":["Ocean's Eleven"]},{"start":{"row":18,"column":95},"end":{"row":18,"column":96},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":96},"end":{"row":18,"column":97},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":97},"end":{"row":18,"column":98},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":98},"end":{"row":18,"column":99},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":99},"end":{"row":18,"column":100},"action":"insert","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":18,"column":100},"end":{"row":18,"column":101},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":14},"end":{"row":20,"column":8},"action":"remove","lines":["","\t\t\t\t\t\t\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":7},"end":{"row":28,"column":13},"action":"remove","lines":["<label for=\"studioID\"> Made by which studio?</label>","\t\t\t\t\t\t\t\t\t<select name=\"studioID\">","\t\t\t\t\t\t\t\t\t\t<?php ","\t\t\t\t\t\t\t\t\t\t$studios = get_studios();","\t\t\t\t\t\t\t\t\t\tforeach($studios as $studio){ ?>","\t\t\t\t\t\t\t\t\t\t<option value=\"<?php echo $studio['sID']; ?>\"><?php echo $studio['name']; ?></option>","\t\t\t\t\t\t\t\t\t\t<?php } ?>","\t\t\t\t\t\t\t\t\t</select>","\t\t\t\t\t\t\t</div>"]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":14},"end":{"row":20,"column":7},"action":"remove","lines":["","\t\t\t\t\t\t\t"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":36},"end":{"row":16,"column":41},"action":"remove","lines":["movie"]},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":53},"end":{"row":20,"column":58},"action":"remove","lines":["Movie"]},{"start":{"row":20,"column":53},"end":{"row":20,"column":54},"action":"insert","lines":["G"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":54},"end":{"row":20,"column":55},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":55},"end":{"row":20,"column":56},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":56},"end":{"row":20,"column":57},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":20,"column":57},"end":{"row":20,"column":58},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["G"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":9},"end":{"row":8,"column":14},"action":"remove","lines":["movie"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":8,"column":10},"end":{"row":8,"column":14},"action":"insert","lines":["enre"]}]}]]},"ace":{"folds":[],"scrolltop":32.5,"scrollleft":0,"selection":{"start":{"row":15,"column":24},"end":{"row":15,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php"}},"timestamp":1417651154803,"hash":"7c71b09a0acc2fa33b294202ed872af0828e0fca"}