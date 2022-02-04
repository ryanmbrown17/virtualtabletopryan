<?php 
  $header=<<<_END
  <h1>
	Ryan's Virtual Tabletop
</h1>
<div class="navbar">
  <a href="/index.php">Home</a>
  <a href="#session">Session</a>
  <div class="dropdown">
    <button class="dropbtn">D&D 
      <i class="fa fa-caret-down"></i>
    </button>
   		 <div class="dropdown-content">
     		 <a href="dnd_5etools.php">5e Tools</a>
     		 <a href="dnd_kurth">World of Kurth</a>
     		 <a href="dnd_wildshapes.php">Wild Shapes</a>
     		 <a href="dnd_sea_rules.php">Seafaring Rules</a>
    	</div>
	</div> 
	<div class="dropdown">
    <button class="dropbtn">Tales from the Loop 
      <i class="fa fa-caret-down"></i>
    </button>
   		 <div class="dropdown-content">
     		 <a href="tales_from_the_loop_general.php">Basic Info</a>
     		 <a href="tales_from_the_loop_character_creation.php">Character Creation</a>
     		 <a href="tales_from_the_loop_character_types.php">Character Types</a>
     		 <a href="tales_from_the_loop_skills.php">Attributes and Skills</a>
     		 <a href="tales_from_the_loop_items.php">Items</a>
     		 <a href="tales_from_the_loop_problems_drives_and_prides.php">Problems, Drives, and Prides</a>
     		 <a href="tales_from_the_loop_relationships_and_anchors.php">Relationships and Anchors</a>
     		  <a href="tales_from_the_loop_bouldercitymap.php">Boulder City, NV Map</a>
     		  <a href="tales_from_the_loop_us_loop.php">US Loop Information</a>
    	</div>
	</div> 
	<div class="dropdown">
    <button class="dropbtn">Starfinder 
      <i class="fa fa-caret-down"></i>
    </button>
   		 <div class="dropdown-content">
     		 <a href="starfinder_character_creation.php">Character Creation</a>
     		 <a href="starfinder_races.php">Races</a>
     		 <a href="starfinder_themes.php">Themes</a>
     		 <a href="starfinder_classes.php">Classes</a>
     		 <a href="starfinder_rules.php">Rules</a>
     		 <a href="starfinder_feats.php">Feats</a>
     		  <a href="starfinder_equipment.php">Equipment
     		  <a href="starfinder_spells.php">Spells</a>
    	</div>
	</div> 
	<a href="tts.php">Tabletop Simulator</a>
	<a href="_downloads.php">Downloads</a>
  <div class="dropdown">
    <button class="dropbtn">Sign in 
      <i class="fa fa-caret-down"></i>
    </button>
       <div class="dropdown-content">
          <a href="#Downloads">Under Construction</a>
      </div>
  </div> 
</div> 
_END;
//<a href="sign_in.php">Sign in</a>
//functions
 function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
function sanitizeMySQL($connection, $var)
{
    $var = $connection->real_escape_string($var);
    $var = sanitizeString($var);
    return $var;
}

function downloads($dir)
{
  $a = scandir($dir);
                    for($d=2;$a[$d] != null;$d+=2){
                        echo "<a href=\"";
                        echo $dir, $a[$d + 1];
                        echo "\"><img src=\"";
                        echo $dir;
                        echo $a[$d];
                        echo "\" style=\"width:200px;height: 260px;margin: 5px;\"></a>";
}}
?>