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
            <p class="letter">5e Tools is an amazing tool to reference basically everything in D&D. This is my local version of the site, which may include additional homebrews in the future.  As of right now it is not different from the main site.</p>
            <iframe src="5eTools.1.134.0/5etools.html" class=full_screen></iframe>
        </section>
    </body>
</html>