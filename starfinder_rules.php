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
        </style>
    </head>
    <body>
        <section>
            <img src="reference/d20s/d-20-015.png" class=logo />
            <?php
                require_once 'reference/reference.php';
                echo $header;
            ?>
            <h2 style="text-align: center;"> Rules </h2>
            <p class=letter>Page in progress, please download books in downloads to get information!</p>
           
    </body>
</html>