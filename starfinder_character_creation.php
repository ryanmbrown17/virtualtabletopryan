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
            <h2 style="text-align: center;"> Character Creation </h2>
            <h3 class="large_link"><a href="Tales from the Loop - Character Sheet (Fillable).pdf">Download Character Sheet</a></h3>
            <img src="starfinder_img/Core(1).jpg" style="width: 20%;padding: 10px;margin: 20px;float:left;">
            <img src="starfinder_img/Core(2).jpg" style="width: 20%;float:right;padding: 10px;margin: 20px;">
            <p class="letter" style="width:40%;margin-left: auto;margin-right: auto;"> The following instructions assume you’re building a 1st level character. These steps are presented in a suggested order, but feel free to complete them in the order you prefer. Many of the steps below instruct you to fill out fields on your character sheet , but note that the character sheet is arranged for ease of use in gameplay rather than character creation—for instance, several fields listed at the top of the character sheet are finishing details you’ll determine at the end of the character creation process. </p>
            <div style="clear: both;"></div>
            <h2>1. Create a Character</h2>
            <img src="starfinder_img/Core(3).jpg" style="width: 35%;padding: 10px;margin: 20px;float:left;">
            <p class=letter style="width:40%;margin-left: auto;">What sort of science fantasy hero do you want to play? A good way to start character creation is to decide the general thrust of your character’s personality, sketching out a few details about her past and thinking about how and why she adventures. During this step, you’ll likely want to peruse Starfinder’s available races, themes, and classes, so that you have an idea of the options available. Race refers to your species—from bug-like shirrens and reptilian vesk to humans and elves. Themes represent an element of your background, whether it’s from your upbringing, training, or destiny; it can be related to your class but doesn’t need to be. Classes represent the primary focus of your character’s abilities in battle and while adventuring—a technomancer manipulates technology and casts spells, an envoy issues commands and inspires her allies to feats of heroism, and so on. <br><br>Once you’ve considered your options, come up with a brief description of your character, focusing on what sorts of things you want her to be good at (shooting guns, flying starships, and so on). Then consider how best you could model that using this book’s rules components. Do you want to play a hulking lizardcreature with an enormous laser rifle? Then a vesk soldier with the mercenary theme is a perfect choice. If a scrappy bipedal rat who likes to burgle is more your style, a ysoki operative with the outlaw theme could be the way to go. </p>
            <div style="clear: both;"></div>
            <h2> 2. Choose a Race</h2>
            <img src="starfinder_img/Core(4).jpg" style="width: 35%;padding: 10px;margin: 20px;float:right;">
            <p class=letter style="width:40%;margin-right: auto;">Your character’s race, or species, is one of her most important characteristics. Your character’s race grants her abilities and languages and determines a portion of the Hit Points (HP) she has when you begin play (HP represents how badly she can be hurt before she falls unconscious or dies). Her class will also impact her starting HP total, as described in Step 6.<br><br>Your character’s race also modifies her ability scores. These are important values that affect many of your character’s statistics, but you won’t finalize them until Step 5.  </p>
            <div style="clear: both;"></div>
            <h2>3. Choose a Theme</h2>
            <img src="starfinder_img/Core(5).jpg" style="width: 35%;padding: 10px;margin: 20px;float:left;">
            <p class="letter" style="width:40%;margin-left: auto;"> Next, you can choose a theme for your character, which represents a core aspect of her background and motivations. A theme can help express your character’s approach to adventuring—whether she’s a bounty hunter, a scholar, or the embodiment of another classic adventuring trope. In addition to reflecting a certain background, a theme provides benefits to an appropriate skill or skills at 1st level and also grants 1 extra point to a specific ability score—you’ll finalize your ability scores during Step 5.<br><br><br> </p>
            <h2>4. Choose a Class</h2>
            <img src="starfinder_img/Core(6).jpg" style="width: 20%;padding: 10px;margin: 20px;float:left;">
            <img src="starfinder_img/Core(7).jpg" style="width: 20%;padding: 10px;margin: 20px;float:right;">
            <p class=letter style="width:40%;margin-right: auto;margin-left: auto;">At this point, you’re almost ready to finalize your character’s ability scores, which are key values you’ll need to calculate many of her statistics. First, though, you need to choose your character’s class. This affords her access to a suite of heroic abilities, determines how well she can attack, and governs how easily she can shake off or avoid certain harmful effects.<br><br>You don’t yet need to note all of your character’s class features. You simply need to know which class you want to play, which will tell you the ability scores that will be the most important to you. Each class notes its key ability scores, as well as other particularly helpful ability scores.  </p>
            <div style="clear: both;"></div>
            <h2>5. Finalize Ability Scores</h2>
            <img src="starfinder_img/Core(8).jpg" style="width: 35%;padding: 10px;margin: 20px;float:right;">
            <p class=letter style="width:40%;margin-right: auto;"> Now that you’ve made the most important decisions about your character, it’s time to fill in her statistics. Your character’s ability scores determine a wide array of her capabilities and consist of six values: Strength, Dexterity, Constitution, Intelligence, Wisdom, and Charisma. That section will also tell you how to determine your ability score modifiers, which affect the calculation of many of the values described on your character sheet and later in this section.  </p>
            <div style="clear: both;"></div>
            <h2>6. Apply your class</h2>
            <img src="starfinder_img/Core(9).jpg" style="width: 35%;padding: 10px;margin: 20px;float:left;">
            <p class=letter style="width:40%;margin-left: auto;">Now, determine the powers, special abilities (called class features), and other key statistics your character gains from being 1st level in her class. The table at the beginning of each class section includes your character’s base attack bonus, which helps determine how good she is at attacking. You’ll add this base value to her melee and ranged attacks. That table also indicates your character’s base bonuses for her Fortitude, Reflex, and Will saving throws. See Step 9 for more information on saving throws.<br><br>Additionally, your character’s class affects her total Stamina Points (SP). Stamina Points measure how much punishment she can absorb before it begins to really hurt her and reduce her Hit Points. At 1st level, you gain the number of Stamina Points listed in your class + your Constitution modifier. At 1st level, you also add the number of Hit Points indicated in your class to the number of Hit Points you gain from your race. <br><br>Finally, your character’s class influences how many skill ranks she can assign per level (see Step 7), and determines her armor and weapon proficiencies (see Step 8).  </p>
            <div style="clear: both;"></div>
            <h2>7. Assign Skill Ranks and Choose Feats</h2>
            <img src="starfinder_img/Core(10).jpg" style="width: 35%;padding: 10px;margin: 20px;float:right;">
            <p class=letter style="width:40%;margin-right: auto;"> Next, figure out what skills you want your character to be good at, whether it’s using technology or surviving in the wilderness. At each level, she gains skill ranks, representing her growing know-how and training. The number of ranks she gains at each level equals her Intelligence modifier + an amount determined by her class (but she always gains at least 1), and you can allocate the ranks to any skills you want. Some skills are called out as class skills in your class entry—these are skills tied to your class, and you automatically get a +3 bonus if you put a skill rank into them. (You can still put ranks into skills that aren’t class skills; you just don’t get the special +3 bonus when you do.)<br><br>Once you’ve assigned your character’s skill ranks, choose her feats. Most characters begin play with one feat, though humans gain a racial bonus feat. Feats are a good way to boost an element of your character that might be lacking. For example, Toughness grants extra Stamina Points, while Bodyguard lets you protect nearby allies from attacks. </p>
            <div style="clear: both;"></div>
            <h2>8. Buy Equitment</h2>
            <img src="starfinder_img/Core(11).jpg" style="width: 35%;padding: 10px;margin: 20px;float:left;">
            <p class=letter style="width:40%;margin-left: auto;"> At 1st level, your character has 1,000 credits to spend on armor, weapons, and other supplies (though your GM may give you alternative instructions for how to choose your gear). Armor and weapons are often the most important—keep in mind that your character’s class determines the types of weapons and armor that she is proficient with. Your character’s weapon determines the damage she can deal in combat, while armor affects her Energy Armor Class (EAC) and Kinetic Armor Class (KAC)—see Step 9 for more on Armor Class.</p>
            <div style="clear: both;"></div>
            <h2>9. Fill in the finishing details</h2>
            <img src="starfinder_img/Core(12).jpg" style="width: 20%;padding: 10px;margin: 20px;float:left;">
            <img src="starfinder_img/Core(13).jpg" style="width: 20%;padding: 10px;margin: 20px;float:right;">
            
            <p class=letter style="width:40%;margin-right: auto;margin-left: auto;"> Alignment:<br>Note your character’s alignment, which plays a role in her personality.<br><br>Armor Class:<br>Energy Armor Class (EAC) and Kinetic Armor Class (KAC) represent how difficult your character is to hit in combat. Energy Armor Class represents her ability to avoid injury when hit with energy attacks, such as lasers. Kinetic Armor Class represents her ability to avoid injury when hit with physical attacks, such as bullets. (See page 240 for more information.) <br>The values for EAC and KAC each begin at 10. Add your character’s Dexterity modifier to each value. Then add the EAC bonus and KAC bonus that her armor provides to the respective values. You’ll also want to note your character’s Armor Class against combat maneuvers, which is her KAC + 8.<br><br>Attack Bonuses:<br> You noted your character’s base attack bonus in Step 6, but you still need to calculate her total attack bonuses with melee, ranged, and thrown weapons. To do so, add her Strength modifier to her melee and thrown attacks, and add her Dexterity modifier to her other ranged attacks. Then add any miscellaneous modifiers from feats or class features to the appropriate attacks.<br><br>Carrying Capacity:<br>This is how much bulk your character can carry based on her Strength score. She is encumbered when carrying an amount of bulk greater than half her Strength score, and overburdened when carrying an amount of bulk greater than her total Strength score.<br><br>Description:<br>If you haven’t already, write a short description of your character.<br><br>Home World:<br>This is where your character was raised, whether it’s a planet, a space station, or even an asteroid.<br><br>Initiative:<br>Your character’s initiative modifier is added to her initiative checks to determine the order in which she acts in combat. It’s equal to her Dexterity modifier plus modifiers from feats or other abilities that affect initiative.<br><br>Languages:<br>Your character begins play speaking and reading Common, her racialtongue (if any), and the language of her home world (if any). If she has a positive Intelligence modifier, she knows a number of additional languages equal to that value.<br><br>Resolve Points:<br>Your character can use Resolve Points for many important purposes, including replenishing her Stamina Points and powering some class features and other abilities. At 1st level, your character has a number of Resolve Points equal to 1 + the ability score modifier for her class’s key ability score.<br><br>Saving Throws:<br>From time to time, your character will need to determine whether she can avoid or shake off an effect or spell. When this happens, the GM will call for a Fortitude, Reflex, or Will saving throw, depending on the situation.<br> A saving throw is a d20 roll to which you add your character’s base saving throw bonus of the appropriate type and other applicable modifiers. Your character’s class determines her base bonus to each type of saving throw. Additionally, you apply her Constitution modifier to her Fortitude saving throws, her Dexterity modifier to her Reflex saving throws, and her Wisdom modifier to her Will saving throws—and you must do so even if a relevant ability score modifier is negative. Finally, you apply any additional modifiers to specific saving throws as appropriate, such as bonuses from feats or other abilities.<br><br>Speed:<br>Your character’s land speed at the beginning of play is 30 feet, unless she has an ability that modifies it (or penalties from armor or encumbrance).</p>
            <div style="clear: both;"></div>
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