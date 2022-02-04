<!DOCTYPE php>
<html lang="en">
    <head>
        <title>Wildshapes | Ryan's Virtual Tabletop</title>
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
            <h2 style="text-align:center;">Wildshapes</h2>
            <p class=letter>The following table is to help you determine whether your character has seen a beast or not.  The table is broken down as follows: <br> &bull; Common, everyone pretty much has seen one. <br> &bull; Uncommon, anyone living in the same enviroment(s) is likely to have seen one. <br>  &bull; Rare, older people living in the enviroment may have seen one. <br> &bull; Very rare, It would be the talk of the town for at least a week if seen by a person. <br> &bull; Legendary, barely anyone has seen one ever. </p>
        </section>
        <table id=wild class=display>
            <thead>
                  <tr>
                    <th>Name</th>
                    <th>CR</th>
                    <th>Swimming Speed</th>
                    <th>Flying Speed</th>
                    <th>Enviroment</th>
                    <th>Rarity</th>
                </tr>  
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>CR</th>
                    <th>Swimming Speed</th>
                    <th>Flying Speed</th>
                    <th>Enviroment</th>
                    <th>Rarity</th>
                </tr>  
            </tfoot>
        </table>
    </body>
    <script>
           $(document).ready(function () {

                   var wild = $('#wild').DataTable({

                         "ajax": "json/dnd/wildshapes.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "CR" },
                                { "data": "Swimming Speed" },
                                { "data": "Flying Speed" },
                                { "data": "Enviroment" },
                                { "data": "Rarity" }
                                ]});})
    </script>
</html>