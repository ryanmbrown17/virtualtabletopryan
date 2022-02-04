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
            <h2 style="color:orange;text-align: center;"> Problem </h2>
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(4).jpg" style="float: left;width:35%;margin:15px;">
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(7).jpg" style="float: right;width:35%;margin:15px;">
            <p>All Kids have a Problem. You may have kept yours to yourself or told the other Kids. The Problem is a part of Everyday Life, something that worries you. During the game, the Gamemaster will use the Problem to put you in Trouble. If you solve the Problem, then you must pick a new one before the next Mystery.<br> You should choose a Problem that you want to explore during the Mysteries. It’s a signal from you to the Gamemaster: put my Kid in this kind of Trouble!  </p>
            <h2 style="color:orange;text-align: center;"> Drive </h2>
            <p> Your Drive is the reason why you expose yourself to dangerous and difficult situations to solve Mysteries with your friends. It helps you to understand your Kid, and makes it easy to start a new Mystery; whatever happens, the Kids will want to figure it out. You may change your Drive between Mysteries. </p>
            <h2 style="color:orange;text-align: center;"> Pride </h2>
            <p>Every Kid has a Pride, something that makes you feel strong, important, and valuable. Pride may be well known to the group, or a secret. The Gamemaster should use the Pride to put you in Trouble by setting up scenes that highlight or threaten the Pride. A classmate turns out to be as good or better than you at school. Dad is losing his job at the fire station. An animal is tormented.<br> Pride is also a tool for you to understand and play your Kid. Problem and Pride may interact, and Pride can even become a Problem, but it may also be two separate things. You can change your Pride between Mysteries.<br> Once per Mystery, you may check your Pride to get one automatic success in a dice roll. You can check your Pride after a failed roll, or even after a successful roll in order to get an extra success (page 66). You must explain how your Pride helps you. If the Mystery takes several sessions to play, or if the group plays the Mystery Landscape, Pride may be checked once every session. </p>
        </section>
    </body>
</html>