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
            <h2 style="color:orange;text-align: center;"> Relationships </h2>
            <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(8).jpg" style="float: right;width:25%;margin:15px;">
            <p>You should define your Relationships to the other Kids in the group. This is best done together with the other players. If one Kid has the Relationship “Older sister” to another Kid, the players need to agree that their Kids are, in fact, siblings. None of the Kids should be enemies, but it’s fun to have some tension in the group; love, envy or mistrust. The Relationships can be changed between Mysteries as the Kids are affected by what happens.<br> You should also choose two Relationships to NPCs. The NPCs that are mentioned in the Type descriptions are part of the Mystery Landscape (Chapter 7). If you want to write your own Relationships and NPCs, you need to do it together with the Gamemaster, so that those NPCs can easily be connected to the Locations in the Mystery Landscape. The NPC Relationships are meant to be a connection between the Kids and the strange things that will start happening as the game is played.<br> If the group has decided to play only pre-written Mysteries and not use the Mystery Landscape, the Gamemaster can let the players create NPC Relationships that are part of Everyday Life and not connected to Locations. These Relationships are used to set scenes from Everyday Life. It’s also possible to let the Kids have two NPC Relationships with connections to Locations and one or two NPC Relationships from Everyday Life. </p>
            <h2 style="color:orange;text-align: center;"> Anchor </h2>
            <p> All Kids have an Anchor, a person that you can go to for support, comfort and care. It can be a friend, a parent, a teacher or a neighbor. It cannot be another Kid. <br> If you suffer from one or more Conditions (below), you can spend a scene with your Anchor and heal all Conditions. You must allow the Anchor to take care of you, and there must be a physical or mental closeness between you. The Gamemaster is not allowed to put you in Trouble in this scene. If you put yourself in Trouble, you don’t heal any Conditions.  </p>
        </section>
    </body>
</html>