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
            .description
            {
                font-style: italic;
                background-color: lightgrey;
                border: 1px navy solid;
                border-radius: 15px;
                padding: 15px;
            }
            p
            {
                margin: 10px;
            }
            img
            {
                margin: 10px;
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
            <h2 style="color:orange;text-align: center;"> Character Types </h2>
            <div class="navbar" style="max-width: 927px;">
                 <a href="#book_worm">Book Worm</a>
                 <a href="#computer_geek">Computer Geek</a>
                 <a href="#hick">Hick</a>
                 <a href="#jock">Jock</a>
                 <a href="#popular_kidp">Popular Kid</a>
                 <a href="#rocker">Rocker</a>
                 <a href="#troublemaker">Troublemaker</a>
                 <a href="#weirdo">Weirdo</a>
            </div>
        </section>
        <div>
            <h3 style="color:orange;text-align:center;" id="book_worm">Book Worm</h3>
            <p class="description">When you read, you travel thousands of miles to foreign countries. You speak with mad poets and discuss the meaning of life with philosophers who died hundreds of years ago. You have secret rendezvous at Alpine peaks and shootouts with Russian agents. In real life, you wish that your pimples would not show as much as they do, and you long for the day you will leave this place, so that your real life can truly begin.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(1).jpg" style="float:left;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Calculate, Investigate, Comprehend</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Dog Named Tiny<br>&bull; Encyclodepedia<br>&bull; Magnifying glass<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; Nobody tells me how my dad died.<br>&bull; My sister is really sick.<br>&bull; This weird man is following me.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; I want to find answers to the big questions in life.<br>&bull; I need something to brag about.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; I'm the smarest kid in school.<br>&bull; Nothing scares me.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; He/she is my competitor<br>&bull; I will make him/her love me.<br>&bull; We are siblings and friends.<br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; Mary, the school librarian, was my friend until she diseappeared.  I am sure that the school janitor, Jeffrey, knows more than he's saying.<br>&bull; Gary in my class was attacked by animals while riding his bike home from training.  I can't believe that everyone at school thinks he was attacked by werewolves.<br>&bull; When Diane Petersen was fired from the Loop, I heard her vow to take revenge on all who live here.<br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Mom/dad<br>&bull; Teacher<br>&bull; Local author<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Elizabeth, Erin, Rachel, Susan<br>&bull; Boys names: Aaron, Darren, Joshua, Thomas<br>&bull; Nicknames: Frodo, Professor, Wart, Owl<br><br>
             </p>
        </div>
        <div style="clear:both;">
        <hr width=100%>
    </div>
        <div>
            <h3 id="computer_geek" style="color:orange;text-align:center;">Computer Geek</h3>
            <p class="description">You know exactly what is important in life – to break the record in Super Mario Bros, to build revolutionary programs on your computer, to understand how a robot works, or to cast just the right spell to save the party during roleplaying nights. Who cares what all the others think?</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(2).jpg" style="float:right;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Calculate, Program, Comprehend</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Computer<br>&bull; Pocket Calculator<br>&bull; Toy lightsaber<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; The tough guys hit me.<br>&bull; My parents are always arguing.<br>&bull; She/he doesn't even know I exist.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull;I love puzzles.<br>&bull; Peer pressure makes me do it.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; When the shit hits the fan, I don't back down.<br>&bull; I'm the smarest kid in school.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; We are best friends. <br>&bull; We are different but still friends.<br>&bull; He/she treats me badly but I won't sink to the same level<br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; My friend Leeanne told me that strange creatures have moved into the Cooling Towers.  She thinks they are aliens.<br>&bull; Everyone seems to be having nightmares about that horrible teenager Peter<br>&bull; My friend Elisabeth has built a computer program that cracks codes, and we used it to listen to a scambled radio communication.  Some guys, who called each other fish names, talked about her mother as "one of the targets"<br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Mother/father<br>&bull; Science teacher<br>&bull; The guy who owns the comic shop<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Shannon, Patricia, Karen, Julie<br>&bull; Boys names: Andrew, Eric, Daniel, Timothy<br>&bull; Nicknames: Turtle, Lazer, Data, Ducky<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
         <div>
            <h3 id="hick" style="color:orange;text-align:center;">Hick</h3>
            <p class="description">Your classmates smile at you because of your tan, your pronunciation and your jokes, but what does it matter when you get to go out in the fields and the woods every day? The smell of corn and the grateful sounds that the cows make at morning milking have been a part of your life since you were born. You know how to build and repair an engine, how to drive a tractor, and how to hunt and slaughter animals.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(3).jpg" style="float:left;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Forge, Move, Tinker</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; German Shepard<br>&bull; Crowbar<br>&bull; Tractor<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; Someone is poisoning our animals.<br>&bull; Mom/dad doesn't want to accept that she/he is sick.<br>&bull; I seriously hurt someone by mistake.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull;There is more to this world than what meets the eye.<br>&bull; They need me.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; My machines will one day conquer the world.<br>&bull; I help other people.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; He/she wouldn't surrive one day in the woods. <br>&bull; How can I show her/him how I really feel?<br>&bull; A reliable friend.<br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull;The school janitor seems so lonely since Mary, the school librarian, disapeared.  I wish I could help him. <br>&bull; The Polic officer Karen Richards asked me if I could help her out on her boat this weekend.<br>&bull; I have seen that stranger, the former rock singer Mikey Hayes, sneaking around in the forest near the company NAI. <br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Dad/mom<br>&bull; Fellow hunter<br>&bull; Riding instructor<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Mary, Lee-Anne, Laura, Dawn<br>&bull; Boys names: Benjamin, Jeremy, Ronald, Todd<br>&bull; Nicknames: Diesel, Scratch, Banjo, Buzz<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
         <h3 id="jock" style="color:orange;text-align:center;">Jock</h3>
            <p class="description">You feel at home in sweaty locker rooms and at lit training fields in the autumn darkness. Nothing beats the feeling of a perfect shot, the aching muscles after training, and the companionship with teammates. You wish everything in life was as easy.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(4).jpg" style="float:right;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Force, Move, Contact</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Baseball Bat<br>&bull; Hockey Stick<br>&bull; BMX bike<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; My brother refuses to go out of his room since the accident.<br>&bull; My teacher hates me.<br>&bull; I cannot read very well, and they want to move me to a special class.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; I'm in it for the thrill.<br>&bull; It's the right thing to do.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; My father is a firefighter<br>&bull; No one calls me chicken!<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; I wonder if we can count on her/him? <br>&bull; He/she knows everything!<br>&bull; Annoying little sister/brother<br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; That new police officer Karen Richards, has rented a boat to investigate something in the lake, but she hassn't told anyone what it is. <br>&bull; Several of my teammates are having strange dreams.<br>&bull; A scientist named Olivia Martinez came to our training session and asked the coach if we wanted to take part in some kind of medical experiment, but I could tell she was lying about something. <br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Father/mother <br>&bull; Coach for the team<br>&bull; Brother/sister<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: April, Heather, Kimberly, Tammy<br>&bull; Boys names: Chad, Brock, Brad, Billy<br>&bull; Nicknames: Iceman, Butch, Scooter, Sneak<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
            <h3 id="popular_kid"style="color:orange;text-align:center;">Popular Kid</h3>
            <p class="description"> It is you who decide what is lame and what’s cool in school, and you know who’s in love with who and who did what at the kiosk on Saturday night. Others listen when you talk, and you’re used to being liked. It doesn’t matter why they love you, just that they do.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(5).jpg" style="float:left;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Contact, Charm, Lead</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Pack of Chewing Gum<br>&bull; Diary with juicy secrets<br>&bull; Hairspray bottle<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; My aunt lives in our basement and she is crazy.<br>&bull; Mom/dad is having a secret love affair.<br>&bull; Your rival knows what you are trying to hide.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; It's a relief to get away from the burden of popularity<br>&bull; I hate secrets.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; Everybody likes me.<br>&bull; I know everything about everyone.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; I know she/he loves me. <br>&bull; She/he is freaky but I like it. <br>&bull; He/she is useful. <br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; That new teen Lisa and her friends from the Wildlife Club are scary. I wonder what they are up to? <br>&bull; The school janitor, Jeffery, seems to hate me, but I know he is hiding something. <br>&bull; Nobody knows it, but the former rock star Mikey Hayes lives in a cottage at Hemenway Park.  I talked to him and he said something horrible is happening near Lake Mead.<br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Older sibling. <br>&bull; Mom/dad.<br>&bull; Famous friend of family.<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Shannon, Kelly, Melissa, Tiffany<br>&bull; Boys names: John, Jason, Ryan, Sean<br>&bull; Nicknames: Baby, The King/Queen, Blue-eyes, Sunny<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
          <h3 id="rocker" style="color:orange;text-align:center;">Rocker</h3>
            <p class="description"> It was a worn cassette tape that changed your life. When that song had finished playing, you had found a home. You are an insane hard rocker who is high on life and play music so loud that the windows crack. In any case, you wish it would be like that. But you’ve just learned to play a C on your electric guitar and soon you will form a band down at the recreation center.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(6).jpg" style="float:right;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Move, Charm, Empathize</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Boombox<br>&bull; Electric Guitar<br>&bull; Leather jacket<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; My parents are about to divorce.<br>&bull; I steal money.<br>&bull; Unrequited love.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; I'm doing it for love.<br>&bull; Hunger for everything in life.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; I play the guitar.<br>&bull; I stood up for my friend.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; I love him/her <br>&bull; We don't like each other but he/she is part of the band. <br>&bull; He/she rocks! <br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; My mom thinks that she is being followed because she’s a scientist, but dad thinks she´s going crazy. <br>&bull; My older sister has joined the Wildlife Club; now she’s stopped talking to me, and she sneaks out in the middle of the night. <br>&bull; The strange scientist, Diane Petersen, is my aunt, but that doesn't mean I like her.<br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Music Teacher <br>&bull; Older brother/sister <br>&bull; The guy at the music Store<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Lori, Amanda, Crystal, Jamie <br>&bull; Boys names: Justin, Gary, Kevin, Mark<br>&bull; Nicknames: Tommey-Lee, Spike, Ozzy, Fuzz<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
     <h3 id="troublemaker" style="color:orange;text-align:center;">Troublemaker</h3>
            <p class="description"> You’re a tough guy or girl who never holds back. Your classmates are afraid of you or look up to you, the teachers hate you, and everybody is nagging you to change. But they don’t understand that you don’t live in the same world as they do. When life turns on you, humiliates you, and hurts you, there is only one thing to do. Fight back..</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(7).jpg" style="float:left;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Force, Sneak, Lead</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Lighter and Cigarettes<br>&bull; Knife<br>&bull; Skateboard<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull;My parents say that I’m good for nothing.<br>&bull; My mother/father drinks a lot.<br>&bull; We are short of money.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; I’ll do anything to get away from home.<br>&bull; My friends and what we do is the only thing not broken in my life.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; I helped a bird with a broken wing.<br>&bull; I stood up to the teacher.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; She/he thinks she/he is better than the rest of us! <br>&bull; I’ll do anything for him/ her. <br>&bull; She/he knows what I’m going through. <br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; I wonder why the Priest at St Christopher’s bought explosives, and why his clothes are so filthy? <br>&bull; They think I meet with Mikey at Hemenway Park because he was famous or beause I'm buying drugs, but I would never do drugs and I don't care about fame.  I actually like him, though he keeps talking about how the owner of the company NAI destroyed his life and the lives of many others.<br>&bull; My teacher Neil is the only teacher I have ever liked, and now he is in the hospital and won't wake up from whatever nightmare he is having. <br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Janitor at school <br>&bull; School psychologist <br>&bull; Gradma<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Marylee, Jenna, Stacey. Charlene <br>&bull; Boys names: Ray, Jerry, Troy, Steve<br>&bull; Nicknames: Knuckles, Ninja, Sharky, Bird-killer<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
           <h3 style="color:orange;text-align:center;" id="weirdo">Weirdo</h3>
            <p class="description"> They make fun of you for your clothes, your interests, your choice of words and call you “weirdo”, but you don´t care. They know nothing about your thoughts and feelings, or what you’ve been through. You want the world to see that you are different. One day you will outshine them all.</p>
            <img src="tales_from_the_loop_img/charactertypestalesfromtheloop(8).jpg" style="float:right;width:15%;">
            <p style="text-align:center"><b style="color:orange;">Key Skills:</b> Sneak, Investigate, Empathize</p>


            <p style="float:left;width:35%;text-align:center;"><b style="color:orange;">Iconic Item</b><br>Choose one or make up one on your own: <br>&bull; Razorblade<br>&bull; Drawing pad<br>&bull; Pet rat<br><br>

                <b style="color:orange;">Problem</b>
                <br>Choose one or make up one on your own: <br>&bull; My father is a communist. <br>&bull; My brother is doing weird things in his room.<br>&bull; I get bullied at school.<br><br>

                <b style="color:orange;">Drive</b>
                <br>Choose one or make up one on your own: <br>&bull; They say I’m the most curious person alive.<br>&bull; Drawn to anything different or strange.<br><br>

                <b style="color:orange;">Pride</b>
                <br>Choose one or make up one on your own: <br>&bull; I’m not heterosexual.<br>&bull; Mom says that I am beautiful.<br><br>

                 <b style="color:orange;">Relationships to Other Kids</b>
                <br>Choose one for each other Kid or make up one on your own: <br>&bull; He/she doesn’t know that I love him/her. <br>&bull; Her/his parents let me live with them. <br>&bull; He/she doesn´t like me, but I will prove him/her wrong. <br><br>
            </p>
             <p style="float:right;width:35%;text-align:center;"><b style="color:orange;">Relationships to NPCs</b><br>Choose two or make up two on your own:<br>&bull; The Priest at St Christopher’s, Joseph, is the only adult whom I trust. Now he has disappeared <br>&bull; That kid Bryan told me that his friend, Peter, who works at the Dream Shop, is about to do something bad<br>&bull; She wants me to call her Stacey, and she’s older than me, and lives by herself in a house in outside Hemenway. She hates all grownups. <br><br>

            <b style="color:orange;">Anchor</b><br>Choose one or make up one on your own: <br>&bull; Grandmother <br>&bull; Another Kid's mom/dad <br>&bull; Neighbor<br><br>

            <b style="color:orange;">Typical Names</b><br>Choose one or make up one on your own: <br>&bull; Girls names: Sandra, Amy, Michele, Christina <br>&bull; Boys names: Jeffrey, Charles. Edward, Peter<br>&bull; Nicknames: Freaky, Commie, Ghost, Rat<br><br>
             </p>
        </div>
         <div style="clear:both;">
            <hr width=100%>
         </div>
    </body>
</html>
