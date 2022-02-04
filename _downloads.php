<!DOCTYPE php>
<html lang="en">
    <head>
        <title>5e Tools | Ryan's Virtual Tabletop</title>
        <link rel="icon" href="reference/d20s/d-20-03.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="reference/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="reference/js/datatables.min.js"></script>  
        <link rel="stylesheet" type="text/css" href="reference/js/datatables.min.css">  
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Marck+Script&amp;display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Marck Script";
                background-color: #855e42;
            }
              h1{
                font-family: Lobster;
            }
        </style>
    </head>
    <body>
        <section>
            <img src="reference/d20s/d-20-03.png" class=logo />
            <?php
                require_once 'reference/reference.php';
                echo $header;
            ?>
            </div>
        </section>
        <section>
            <h2 style="text-align: center;"> Download Types </h2>
            <div class="navbar" style="max-width: 479px;">
                 <a href="#sheets">Character Sheets</a>
                 <a href="#dnd5e">D&D 5e</a>
                 <a href="#tftl">Tales from the Loop</a>
                 <a href="#starfinder">Starfinder</a>
            </div>
        </section>
        <section>
             <h1 id="sheets">Character Sheets</h1>
                 <div style="text-align: center;">
                <?php 
                    $dir = "downloads/sheets/";
                    downloads($dir);
                   
                ?>
            </div>
            <hr>
            <h1 id="dnd5e">D&D 5e</h1>
                 <div style="text-align: center;" >
                <?php 
                    $dir = "downloads/dnd/official/";
                    downloads($dir);
                   
                ?>
            </div>
            <hr>
            <h1 id=tftl>Tales from the Loop</h1>
            <div style="text-align: center;">
                 <?php 
                    $dir = "downloads/tftl/";
                    downloads($dir);
                   
                ?>
            </div>

            <hr>
            <h1 id=starfinder>Starfinder</h1>
            <div style="text-align: center;">
                 <?php 
                    $dir = "downloads/starfinder/";
                    downloads($dir);
                   
                ?>
            </div>
            <hr>
        </section>
    </body>
</html>