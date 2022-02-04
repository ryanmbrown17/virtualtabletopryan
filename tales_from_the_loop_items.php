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
            <h2 style="color:orange;text-align: center;"> Items </h2>
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(2).jpg" style="float: left;width:30%;margin:15px;">
            <p>Some Items can be useful to overcome Trouble. Items can give a bonus to the dice roll, from 1-3 extra dice to roll.<br> To get a bonus from an Item, it must be obvious how it is of use to you. A skateboard gives a bonus to move when you’re fleeing from a bully in the street, but not when climbing a tree. The Gamemaster should disallow unreasonable attempts to use Items. <br> Most objects that you encounter during the Mysteries are props, everyday things that are described to give atmosphere but that don’t affect dice rolls. This can be a stick in the woods, a Coke bottle or a notepad. The Gamemaster decides which objects are Items that give a bonus and which are just props. </p>
            <h3 style="color:orange;text-align: center;">Iconic Items</h3>
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(6).jpg" style="float: right;width:37%;margin:15px;">
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(5).jpg" style="float: left;width:37%;margin:15px;">
            <p>You start the game with one Iconic Item; it works just like other Items, but it also says something about who you are. This Item gives two bonus dice in a situation where it can be used to help you to overcome Trouble. The Iconic Item will not disappear or break whatever happens, unless you want it to. If it gets stolen or lost, you’ll find it before the end of the Mystery. The Iconic Item cannot be used by other Kids. </p>
            <h3 style="color:orange;text-align: center;">Gaining New Items</h3>
            <p>You may find or build things, or train Creatures, to get new Items during a Mystery. The Gamemaster gives the Item a bonus of +1 to +3, depending on how powerful it is deemed to be. Often, Items that can be encountered are described in the Mystery.</p>
            <h3 style="color:orange;text-align: center;">Losing Items</h3>
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(3).jpg" style="float: right;width:30%;margin:15px;">
            <p>Between Mysteries, all Items are lost except the Iconic Item. Inventions break, domesticated animals run away or die, the police collect a runaway robot. If you want to keep an Item, you may choose to replace your Iconic Item. The new Iconic Item gets a bonus value of +2 no matter what value it had previously. If you play a Mystery Landscape (Chapter 7), the Gamemaster decides if the Items are deleted at the end of every session or on special occasions that mark a transition from one part of the story to another. </p>
        </section>
    </body>
</html>