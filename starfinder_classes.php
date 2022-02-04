<!DOCTYPE php>
<html lang="en">
    <head>
        <title>Starfinder | Ryan's Virtual Tabletop</title>
        <link rel="icon" href="reference/d20s/d-20-015.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="reference/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="reference/js/datatables.min.js"></script>  
        <link rel="stylesheet" type="text/css" href="reference/js/datatables.min.css">  
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Roboto+Slab&display=swap" rel="stylesheet">
        <style>
           body{
            font-family: Roboto Slab;
            background-color:Black;
            }
        
            h1,h2,h3,h4,h5{
                font-family: "Electrolize";
                color: white;
                text-align: center;
            }
              .navbar
            {
                max-width: 900px;
            }
            .large_link
            {
                text-decoration: none;
                background-color: #333;
                border-radius: 5px;
                width: 240px;
                margin-left: auto;
                margin-right: auto;
            }
            .large_link:hover
            {
                background-color: red;
            }
            a
            {
                text-decoration: none;
                color: white;
                text-align: center;
            }
            .letter
            {
                background-color: lightblue;
            }
            .class
            {
                background-color: lightblue;
            }
            .class:hover
            {
                background-color: pink;
            }
            .class_pic
            {
               display: block;
               margin-left: auto;
               margin-right: auto;
            }
            td, h4
            {
                color: #333;
            }
            .table
            {
                margin-right: auto;
                margin-left: auto;
                background-color: lightblue;
                border: 1px solid #333;
                border-collapse: collapse;
                margin: 5%;
            }
            th,td
            {
                border: 1px solid #333;
            }
        </style>
    </head>
    <body>
        <section>
            <img src="reference/d20s/d-20-015.png" class=logo />
            <?php
                require_once 'reference/reference.php';
                echo $header;
            ?>
            <h2 style="text-align: center;"> Classes </h2>
            <section style="background-color: #333;width:inherit;height: 100%;float: left;width: 150px;">
                <?php 
                    $a = scandir("starfinder/classes");
                    for($d=2;$a[$d] != null;$d+=2){
                        $string=$a[$d+1];
                        $file = "starfinder/classes/".$string;
                        $json_data = file_get_contents($file);
                        $json=json_decode($json_data);
                        echo "<button style=\"width:150px\" class=class id=\"";
                        echo substr($string, 0,-5);
                        echo "_class\" >";
                        echo $json->class_name;
                        echo "</button>";
                        echo "<br>";
                    }
                ?>
            </section>
            <section style="float: right;width: calc(100vw - 190px);background-color: #404040;">
                <?php
                $skills = array(
                    "Acrobatics",
                    "Athletics",
                    "Bluff",
                    "Computers",
                    "Culture",
                    "Diplomacy",
                    "Disguise",
                    "Engineering",
                    "Intimidate",
                    "Life Science",
                    "Medicine",
                    "Mysticism",
                    "Perception",
                    "Physical Science",
                    "Piloting",
                    "Profession1",
                    "Profession2",
                    "Profession3",
                    "Sense Motive",
                    "Sleight of Hand",
                    "Stealth",
                    "Survival"
                );
                $Armor = array (
                    "Light Armor",
                    "Heavy Armor",
                    "Powered Armor",
                    "Shields"
                );
                $Weapon = array(
                    "Basic Melee",
                    "Advanced Melee",
                    "Grenades",
                    "Small Arms",
                    "Long Arms",
                    "Heavy Weapons",
                    "Sniper Weapons"
                );
            for($d=2;$a[$d] != null;$d+=2){
                $string=$a[$d+1];
                $file = "starfinder/classes/".$string;
                $json_data = file_get_contents($file);
                $json=json_decode($json_data);
                echo "<section class=\"display\" id=\"";
                echo substr($string, 0,-5);
                echo "\">";
                echo "<h2>";
                echo $json->class_name;
                echo "</h2>";
                echo "<img style=\"width:200px;display:block;margin-left:auto;margin-right:auto;\"src=\"starfinder/classes/";
                echo $a[$d];
                echo "\">";
                echo "<p class=\"letter\">";
                echo $json->description;
                echo "</p>";
                echo "<table class=\"table\"><tr><td>Stamina Points per Level</td><td>";
                echo $json->stamina_points;
                echo " + Constitution Modifer</td></tr><tr><td>Health Points per Level</td><td>";
                echo $json->health_points;
                echo "</td></tr><tr><td>Key Ability Score</td><td>";
                echo ucfirst($json->key_ability);
                echo "</td></tr><tr><td colspan=2>";
                echo $json->key_ability_description;
                echo "</td></tr><tr><td>Skill Ranks per Level</td><td>";
                echo $json->skill_ranks;
                echo " + Intelligence Modifier</td></tr><tr><td>Class Proficiencies</td><td>";
                for($i=0;$i<21;$i++)
                {
                    if((($json->class_skills)>>$i)%2==1)
                    {
                        echo $skills[$i];
                        if((($json->class_skills)>>$i)>1) echo ", ";
                    }
                }
                echo "</td></tr><tr><td>Armor Proficiencies</td><td>";
                for($i=0;$i<4;$i++)
                {
                    if((($json->armor_prof)>>$i)%2==1)
                    {
                        echo $Armor[$i];
                        if((($json->armor_prof)>>$i)>1) echo ", ";
                    }
                }
                echo "</table>";
                echo "<table class=\"table\"><tr><th>Class Feature Name</th><th> Level</th><th>Description</th></tr><tr><td>";
                
                echo "</table>";
                echo "</section>";
                 }
            ?>
            </section>
        </section>
            <script type="text/javascript">
                $(document).ready(function() {
                      $('.display').hide();
                });
                <?php
                     for($d=2;$a[$d] != null;$d+=2){
                        $string=$a[$d+1];
                        echo "$(\"#";
                        echo substr($string, 0,-5);
                        echo "_class\").click(function(){\n";
                        echo "$(\".display\").hide();\n";
                        echo "$(\"#";
                        echo substr($string, 0,-5);
                        echo "\").show()});";


                     }
                ?>
            </script>
    </body>
</html>