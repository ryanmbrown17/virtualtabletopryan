<!DOCTYPE php>
<html lang="en">
    <head>
        <title>Tales from the Loop | Ryan's Virtual Tabletop</title>
        <link rel="icon" href="reference/d20s/d-20-010.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="reference/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="reference/js/datatables.min.js"></script>  
        <link rel="stylesheet" type="text/css" href="reference/js/datatables.min.css">  
        <link rel="stylesheet" type="text/css" href="main.css">
       <link href="https://fonts.googleapis.com/css2?family=Audiowide&amp;display=swap" rel="stylesheet">
        <style>
            body
            {
                background-color: gray;
                font-family: Audiowide;
            }
            .navbar
            {
                max-width: 1008px;
            }
            .large_link
            {
                text-decoration: none;
                background-color: #333;
                border-radius: 5px;
                width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
            a
            {
                text-decoration: none;
                color: orange;
                text-align: center;
            }
            .large_link:hover
            {
                background-color: red;
            }
        </style>
    </head>
    <body>
         <section>
            <img src="reference/d20s/d-20-010.png" class=logo />
            <?php
                require_once 'reference/reference.php';
                echo $header;
            ?>
        </section>
        <section>
            <h2 style="text-align: center;color:orange;">Map of Boulder City, NV</h2>
            <img src="reference/Map Of Boulder City.png" style="display: block;width:75%;margin-right: auto;margin-left: auto;">
        </section>
    </body>
</html>