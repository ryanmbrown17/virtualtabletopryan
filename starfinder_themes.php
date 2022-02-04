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
            .theme
            {
                background-color: lightblue;
            }
            .theme:hover
            {
                background-color: pink;
            }
            .theme_pic
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
            <h2 style="text-align: center;"> Themes </h2>
            <section style="background-color: #333;width:inherit;height: 100%;float: left;width: 150px;">
                <?php 
                    $a = scandir("starfinder/themes");
                    for($d=2;$a[$d] != null;$d+=2){
                        $string=$a[$d+1];
                        $file = "starfinder/themes/".$string;
                        $json_data = file_get_contents($file);
                        $json=json_decode($json_data);
                        echo "<button style=\"width:150px\" class=theme id=\"";
                        echo substr($string, 0,-5);
                        echo "_theme\" >";
                        echo $json->theme_name;
                        echo "|";
                        echo ucfirst($json->bonus);
                        echo "+1";
                        echo "</button>";
                        echo "<br>";
                    }
                ?>
            </section>
            <section style="float: right;width: calc(100vw - 190px);background-color: #404040;">
                <?php
            for($d=2;$a[$d] != null;$d+=2){
                $string=$a[$d+1];
                $file = "starfinder/themes/".$string;
                $json_data = file_get_contents($file);
                $json=json_decode($json_data);
                echo "<section class=\"display\" id=\"";
                echo substr($string, 0,-5);
                echo "\">";
                echo "<h2>";
                echo $json->theme_name;
                echo "</h2>";
                echo "<h3>";
                echo ucfirst($json->bonus);
                echo " +1</h3>";
                echo "<img style=\"width:200px;display:block;margin-left:auto;margin-right:auto;\"src=\"starfinder/themes/";
                echo $a[$d];
                echo "\">";
                echo "<p class=\"letter\">";
                echo $json->description;
                echo "</p>";
                echo "<table class=\"table\"><tr><th>Bennefit Name</th><th> Level</th><th>Description</th></tr><tr><td>";
                echo $json->one_name;
                echo "</td><td>1</td><td>";
                echo $json->one_description;
                echo "</td></tr><tr><td>";
                echo $json->six_name;
                echo "</td><td>6</td><td>";
                echo $json->six_description;
                  echo "</td></tr><tr><td>";
                echo $json->twelve_name;
                echo "</td><td>12</td><td>";
                echo $json->twelve_description;
                  echo "</td></tr><tr><td>";
                echo $json->eighteen_name;
                echo "</td><td>18</td><td>";
                echo $json->eighteen_description;
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
                        echo "_theme\").click(function(){\n";
                        echo "$(\".display\").hide();\n";
                        echo "$(\"#";
                        echo substr($string, 0,-5);
                        echo "\").show()});";


                     }
                ?>
            </script>
    </body>
</html>