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
        </style>
    </head>
    <body>
        <section>
            <img src="reference/d20s/d-20-010.png" class=logo />
            <?php
                require_once 'reference/reference.php';
                echo $header;
            ?>
            </div>
        </section>
        <section>
            <h2 style="color:orange;text-align: center;"> Attributes</h2>
            <p>Your Kid is defined by four attributes that tell you what you are good at and how you can cope with Trouble. The attributes are: body, tech, heart and mind. The attribute scores range from 1 to 5, and correspond to the number of dice that you roll when you try to overcome Trouble.</p>
             
          <table><tbody><tr style="border:5px ridge gray;"><td style="border:5px ridge gray;">Body</td><td style="border:5px ridge gray;"> is the ability to jump high, run fast, fight, sneak, and climb.</td></tr>
            <tr style="border:5px ridge gray;"><td style="border:5px ridge gray;">Tech</td><td style="border:5px ridge gray;">is the ability to understand machines and robots, program technological things, open locked doors, and build things.</td></tr>
            <tr class="skill" style="border:5px ridge gray;"><td style="border:5px ridge gray;">Heart</td><td style="border:5px ridge gray;"> is the ability to make friends, lie, know the right people, create a good atmosphere, and persuade others.</td></tr>
              <tr class="skill" style="border:5px ridge gray;"> <td style="border:5px ridge gray;">Mind</td><td style="border:5px ridge gray;"> is the ability to find weak points, understand people, situations and creatures, solve riddles, understand clues, and have the right knowledge at theright time.</td></tr>
          </tbody></table>
        </section>
         <img src="tales_from_the_loop_img/talesfromthelooprpg_rulebook(1).jpg" style="display: block;height:50%;margin-left:auto;margin-right:auto;">
        <h2 style="color:orange;text-align: center;"> Skills</h2>
        <p>If you roll more successes than you need, leftover success can sometimes be used to “buy” beneficial bonus effects. Such effects are described for each skill. The same effect can be bought several times. The Gamemaster decides which effects, if any, are suitable in any given situation. If there isn’t any risk of collateral damage, you can’t choose “You avoid any collateral damage.” You shouldn’t need to buy Effects to achieve what you set out to do. They are a means of getting more than you asked for. </p>
        <table id=skills class=display>
            <thead>
                  <tr>
                    <th>Skill</th>
                    <th>Subskill</th>
                    <th>Attributre</th>
                </tr>  
            </thead>
            <tfoot>
                <tr>
                    <th>Skill</th>
                    <th>Subskill</th>
                    <th>Attributre</th>
                </tr>  
            </tfoot>
        </table>
    </body>
    <script>
        function format ( d ) {
            var to_return = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                      '<tr>'+
                            '<td>Skill:</td>'+
                            '<td>'+d.Skill+'</td></tr>';
                            if(d.Subskill!="")
                            {
                                to_return+='<tr><td>Subskill:</td><td>';
                                to_return+=d.Subskill;
                                to_return+='</td></tr>';
                            }
                            to_return+='<tr><td>Attributre:</td><td>';
                            to_return+=d.Attributre;
                            to_return+='</td></tr>';
                             to_return+='<tr><td>Description:<w/td><td>';
                            to_return+=d.Description;
                            to_return+='</td></tr>';
                             if(d.Bonus_effect_1!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 1:</td><td>';
                                to_return+=d.Bonus_effect_1;
                                to_return+='</td></tr>';
                            }
                            if(d.Bonus_effect_2!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 2:</td><td>';
                                to_return+=d.Bonus_effect_2;
                                to_return+='</td></tr>';
                            }
                            if(d.Bonus_effect_3!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 3:</td><td>';
                                to_return+=d.Bonus_effect_3;
                                to_return+='</td></tr>';
                            }
                            if(d.Bonus_effect_4!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 4:</td><td>';
                                to_return+=d.Bonus_effect_4;
                                to_return+='</td></tr>';
                            }
                            if(d.Bonus_effect_5!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 5:</td><td>';
                                to_return+=d.Bonus_effect_5;
                                to_return+='</td></tr>';
                            }
                            if(d.Bonus_effect_6!= null)
                            {
                                to_return+='<tr><td>Bonus Effect 6:</td><td>';
                                to_return+=d.Bonus_effect_6;
                                to_return+='</td></tr>';
                            }
                    to_return += '</table>';
                    return to_return
                }
           $(document).ready(function () {
                   var skills = $('#skills').DataTable({

                         "ajax": "json/tftl/skills.json",
                                "columns": [
                                { "data": "Skill" },
                                { "data": "Subskill" },
                                { "data": "Attributre" }]});
                    $('#skills tbody').on('click', 'td', function () {
                        var tr = $(this).closest('td');
                        var row = skills.row( tr );

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
                        } );});
    </script>
</html>