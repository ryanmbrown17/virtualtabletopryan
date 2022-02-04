<!DOCTYPE php>
<html lang="en">
    <head>
        <title>Ryan's Virtual Tabletop</title>
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
                font-family: "Marck Script"
            }
              h1{
                font-family: Lobster;
            }
            body{
    background-color:#855e42;
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
        </section>
        <section>
            <p class="letter">Hail and Well Met!<br><br>Welcome to my website for tabletop gaming.  This website is here to serve as a reference for games, helping you play!  Please use the navbar above to navigate to any potenial page you may need.  To join the live session click the button above!  This site is updated and new features are always in the work!<br>Regards,<br>Ryan </p>

           <a href="https://discord.com/invite/dxcWzZ2" target="_blank" style="width:50%;display: block;margin-left: auto;margin-right: auto;"> <img src="reference/discord.jpg" style="width: 100%;"> </a>
        </section>
    </body>
    <?php 
      /* require_once 'login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die("Fatal Error");

        $username = sanitizeMySQL($conn, $_POST['username']);
        $password = sanitizeMySQL($conn, $_POST['password']);

        if(password_verify('uml2022', '$2y$10$D85qwrcvcBW7q/kvIigwqeQucVZ1uC92afs8au/BSrE7sYilz8Owi')) echo "verified";*/
    ?>


</html>