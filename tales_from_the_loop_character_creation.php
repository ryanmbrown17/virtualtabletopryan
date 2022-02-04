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
            <h2 style="color:orange;text-align: center;"> Character Creation </h2>
            <h3 class="large_link"><a href="downloads/sheets/Starfinder Auto Fill Sheet.pdf">Download Character Sheet</a></h3>
            <p style="margin:50px;border:5px solid black;">Each player creates a Kid. The process is shown stepby-step and then explained more thoroughly on different pages.<br><br>  1. Choose your <a class="small_link2" href="tales_from_the_loop_character_types.php" target="_blank"> type.</a> <br> 2. Decide your age, from 10 to 15 years.<br>    3. Distribute a number of points equal to your age in the four <a class="small_link2" href="tales_from_the_loop_skills.php" target="_blank"> Problem.</a>, 1 to 5 points in each.<br>    4. Determine your number of Luck Points, equal to 15 minus your age.<br>    5. Distribute 10 points in skills. You may take up to level 3 in the three key skills of your Type. For other skills, a starting skill level of 1 is the maximum.<br>    6. Pick an Iconic Item (description in type)<br>     7. Pick a <a class="small_link2" href="tales_from_the_loop_problems_drives_and_prides.php" target="_blank"> Problem.</a><br>     8. Pick a <a class="small_link2" href="tales_from_the_loop_problems_drives_and_prides.php" target="_blank"> Drive.</a><br>     9. Pick a <a class="small_link2" href="tales_from_the_loop_problems_drives_and_prides.php" target="_blank"> Pride.</a><br>     10. Define your <a class="small_link2" href="tales_from_the_loop_relationships_and_anchors.php.php" target="_blank"> Relationship.</a>to the other Kids and to the NPCs.<br>     11. Select an anchor.<br>    12. Name your Kid.<br>    13. Write a short description. <br>    14. Choose your favorite song (from eighties).<br><br><br> Then with your group: <br>    15. Define the group’s Hideout.<br>    16. Answer the Gamemaster’s questions. </p>
        </section>
    </body>
</html>