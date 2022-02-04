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
            th
            {
                color: white;
            }
            #feats_filter
            {
                color: white;
            }
            input
            {
                color: white;
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
            <h2 style="text-align: center;"> Feats </h2>
            <p class=letter> Feats are listed in the following table.  Extra feats may also have been presented as apart of your race, however if not these are the only feats. To filter by combat feat merely search '*' in the table.  Each collumn sorts as well</p>
         <br>
           <table id="feats" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Prerequisites</th>
                <th>Short Description</th>
                <th>Combat Feat</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Prerequisites</th>
                <th>Short Description</th>
                <th>Combat Feat</th>
            </tfoot>
        </table>

        <script>
             /* Formatting function for row details - modify as you need */
                   function format ( d ) {
    // `d` is the original data object for the row
                    var to_return = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                      '<tr>'+
                            '<td>Full Name:</td>'+
                            '<td>'+d.Name+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td>Prerequisites:</td>'+
                            '<td>'+d.Prerequisites+'</td>'+
                        '</tr>';
                    if(d.Normal != undefined)
                       {
                            to_return +=  "<tr><td>Normal:</td><td>";
                            to_return +=  d.Normal;
                            to_return += '</tr>';
                       }
                  if(d.Special != undefined)
                      {
                            to_return += "<tr><td>Special:</td><td>";
                            to_return +=  d.Special;
                            to_return += '</tr>';
                      }
                    to_return += "<tr><td>Benefit:</td><td>";
                    to_return += d.Benefit;
                    to_return += '</tr></table>';
                    return to_return
}
               $(document).ready(function () {

                   var feats = $('#feats').DataTable({

                         "ajax": "json/starfinder/feats.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Prerequisites" },
                                { "data": "Short Description" },
                                { "data": "Combat Feat" },
                                ],
                       paging: false
                   });
                       $('#feats tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = feats.row( tr );

                        if ( row.child.isShown() ) {
                            // This row is already open - close it
                            row.child.hide();
                            tr.removeClass('shown');
                        }
                        else {
                            // Open this row
                            row.child( format(row.data()) ).show();
                            tr.addClass('shown');
                        }
                        } );
}
   );

        </script>
           
    </body>
</html>