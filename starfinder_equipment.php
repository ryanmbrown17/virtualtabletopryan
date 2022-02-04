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
            select
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
            <h2 style="text-align: center;"> Equipment </h2>
             <h2 style="text-align: center;"> Jump To </h2>
            <div class="navbar" style="max-width: 1083px;">
                 <a href="#melee_weapons">Melee Weapons</a>
                 <a href="#short">Short Arms</a>
                 <a href="#long">Long Arms</a>
                 <a href="#heavy_weapons">Heavy Weapons</a>
                 <a href="#snipe">Sniper Weapons</a>
                 <a href="#spec">Special Weapons</a>
                 <a href="#ammu">Ammunition</a>
                 <a href="#boom">Grenade</a>
                 <a href="#fus">Weapon Fusions</a>
                 <a href="#mall">Weapon Accessories</a>
                 <a href="#solar">Solarian Crystals</a>
                 <a href="#armor">Armor</a>
                <a href="#lha">Light and Heavy Armor</a>
                 <a href="#protect">Shields</a>
                   <a href="#powarm">Power Armor</a>
                     <a href="#aupgrade">Armor Upgrades</a>
                <a href="#aug">Augmentations</a>
                 <a href="#cyberbio">Cybernetics, Biotech, and Magitech</a>
                 <a href="#necro">Personal Upgrades and Necrograts</a>
                 <a href="#material">Special Materials</a>

            </div>
           <h1 style="text-align:center;"> Weapons</h1>
        <h2 style="text-align:center;" id=melee_weapons>  Melee Weapons</h2>
        <p class=letter><b>Basic Melee Weapons </b><br>Any handheld weapon that must touch a target to deal damage is considered a melee weapon. Basic melee weapons can be easily used by almost anyone and generally require no special training. While basic melee weapons deal less damage than more sophisticated weapons of the same item level, they have the advantage of not usually requiring power sources and operating under almost any conditions. Basic melee weapons are divided into one-handed and two-handed weapons. </p>
        <p class=letter> <b>Advanced Melee Weapons</b><br>Any handheld weapon that must touch a target to damage it is considered a melee weapon. Advanced melee weapons require a degree of training and skill to use properly. Advanced melee weapons are divided into one-handed and two-handed weapons.</p>
        <table id="melee" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Critical</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Critical</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>
        <h2 style="text-align:center;" id=small>Small Arms</h2>
        <p class=letter><b>Small Arams</b> <br>Small arms are handheld ranged weapons that can be held and operated with one hand. Various pistols are the most common type, though many types of small arms exist. Small arms require a battery or ammunition of the proper size and type to function.</p>
        <table id="small_arms" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>

        <h2 style="text-align:center;" id=long>Long Arms</h2>
        <p class=letter><b>Long Arms</b> <br>Longarms are handheld, long-ranged weapons that must be held and operated with two hands. Various rifles are the most common type, though many types of longarms exist. Some longarms support automatic fire as well. Longarms require a battery or ammunition of the proper size and type to function.</p>
        <table id="long_arms" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>

        <h2 style="text-align:center;" id=heavy_weapons>Heavy Weapons</h2>
         <p class=letter><b>Heavy Weapons</b> <br>Heavy weapons are military-grade, high-damage weapons that require specialized training to use. Heavy weapons are difficult to hold steadily and aim accurately, and they thus require a minimum Strength score to use to their full potential. Heavy weapons must be held and operated with two hands, and they require a battery or ammunition of the proper size and type to function. <br>&emsp;<b>Minimum Strength</b> The minimum Strength score is 12 for 1st- through 10th-level heavy weapons and 14 for 11th level and higher heavy weapons. A character using a heavy weapon without the appropriate minimum Strength takes a –2 penalty to attack rolls with that weapon.  </p>
        <table id="heavy" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoor>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoor>
        </table>

        <h2 style="text-align:center;" id=snipe>Sniper Weapons</h2>
        <p class=letter><b>Sniper Weapons</b><br>Sniper weapons are handheld, long-ranged weapons that must be held and operated with two hands. They are similar to long arms, but they are designed to emphasize range and accuracy, even if this requires some sacrifice in damage potential. Sniper weapons require a battery or ammunition of the proper size and type to function.</p>
        <table id="sniper" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>

         <h2 style="text-align:center;" id=spec>Special Weapons</h2>
        <p class=letter><b>Special Weapons</b><br>Special weapons resist classification into any other category. Some adventurers favor special weapons for the abilities they offer or for their unique beauty.</p>
        <table id="special" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Damage Type</th>
                <th>Range</th>
                <th>Critical</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>
         <h2 style="text-align:center;" id=ammu>Ammunition</h2>
         <p class=letter><b>Ammunition</b><br>Ammunition includes standard items (such as batteries that can replenish charged weapons), small arm and longarm rounds, and special units such as grenade arrows and missiles.</p>
        <table id="ammo" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Charges / Cartridges</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Charges / Cartridges</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>

        <h2 style="text-align:center;" id=boom>Grenades</h2>
        <p class=letter><b>Grenades</b><br>Grenades are a special type of thrown weapon that can deal a variety of types of damage as well as create special hindering effects</p>
        <table id="grenades" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Range</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Range</th>
                <th>Bulk</th>
                <th>Properties</th>
            </tfoot>
        </table>

         <h2 style="text-align:center;" id=fus>Weapon Fusions</h2>
        <p class=letter><b>Weapon Fusions</b><br>A weapon fusion is a small, prepackaged add-on that can be attached to any weapon to infuse it with magic. Adventurers use weapon fusions to customize their weapons for a specific enemy or to increase a weapon’s overall effectiveness. Weapon fusions are magic unless stated otherwise. While this causes the weapons they are installed in to be considered hybrid items, in truth the weapon and the fusion still operate separately. An ability that affects a magic item could affect the fusion installed in a weapon, but that would not prevent the weapon’s core function from operating normally unless the weapon was also independently a magic device. The hybridized fusion (see page 194) is an exception to this rule, as noted in its description. Weapons with fusions are considered magic for the purpose of overcoming damage reduction.<br><b>Installing and Transfering</b>A fusion can be installed in a chosen weapon (including a grenade) or piece of ammunition when it’s purchased or at any point afterward. It’s also possible, though difficult and fairly expensive, to transfer fusions from one weapon to another. Any character trained in Mysticism can transfer a fusion; this costs half as much as it would to initially purchase the fusion, using the level of the new weapon to determine the price. Characters trained in Engineering or Mysticism can also install fusions, if necessary (for instance, if the PCs find an unused fusion as part of a treasure cache, or in the case of a character who used Mysticism to craft a fusion; see page 235 for more about crafting items). In either case, installing or transferring a fusion takes about 10 minutes of uninterrupted tinkering.<br><b>Fusion Seals</b>It is also possible to place a weapon fusion into a physical object, called a fusion seal, which can then be affixed to a specific weapon and even moved among different weapons. A fusion seal affects only weapons of a given level or less, as noted in parentheses after the name of the fusion seal. For example, a holy fusion seal that could be applied to any weapon of 10th level or lower would be written holy fusion seal (10th). Any decisions that must be made when a fusion is added to a weapon are made when a fusion seal is created, and they can’t be changed. A fusion seal’s cost is based on the highest-level weapon the fusion seal can affect, and it is equal to 110% of the price of a weapon fusion for a weapon of that level. Removing a fusion seal and transferring it to a new weapon takes only 1 minute and does not require any specific skill training, but the fusion doesn’t function until the seal has been in place on a weapon for 24 hours. A fusion seal can’t be added to a weapon if doing so would cause the weapon’s total level of fusions (including the level of the fusion seal) to exceed its item level or if the weapon is not a legitimate choice for the fusion within the fusion seal. Grenades, ammunition, and other consumable items can benefit from fusion seals, but the fusion seal is destroyed when the item is used. A fusion seal can take the form of nearly any medallion or symbol, and when affixed to a weapon, it can even alter the aesthetics of that weapon. A thundering fusion seal might cause a weapon to be etched with storm clouds,runes of weather, or possibly even symbols of a god ofstorms if affixed by a worshiper of such a god. However, these alterations of appearance are not enough to conceal a weapon’s basic function or type (a heavy reaction cannon with a vorpal fusion seal is still clearly a heavy reaction cannon, even if its appearance is altered to feature skulls and symbols of the Devourer). Fusion seals that alter weapons to feature a specific group’s iconography are often used by organizations as a way of unifying the appearance of their members’ weaponry.<br> <b>Item Level</b>Each weapon fusion has an item level, and a fusion can’t be placed on a weapon that has a lower level than the fusion’s item level. Once it is attached to a weapon, a weapon fusion uses the weapon’s item level for any of the weapon fusion’s level-based effects.<br><b>Multiple Fusions and Multiple Targets</b>You can place multiple fusions on the same weapon, but only if the weapon’s item level is equal to or greater than the combined total of all the fusions’ item levels. A weapon cannot hold or benefit from additional fusions beyond this limit. A fusion that applies an effect to attacks applies it to all targets for spread weapons, automatic fire, explode weapons, and other effects with multiple targets.<br><b>Cost</b> The price of a weapon fusion depends on the item level of the weapon into which it’s being installed. Installing a fusion into a 7th-level weapon costs more than applying the same fusion into a 6th-level weapon, for instance. Installing a fusion into a grenade or a piece of ammunition costs half the normal price of a weapon fusion for a weapon of the same level.</p>
        <table style="background-color:lightblue;text-align:center;margin-left:auto;margin-right:auto;border:5px solid gray;border-collapse:collapse;">
            <tr>
                <th style="background-color:blue;border-right: 3px solid gray">Weapon's Item Level</th>
                <td  style="border-right: 3px solid gray"> 1</td>
                 <td style="border-right: 3px solid gray"> 2</td>
                 <td style="border-right: 3px solid gray"> 3</td>
                 <td style="border-right: 3px solid gray"> 4</td>
                 <td style="border-right: 3px solid gray"> 5</td>
                 <td style="border-right: 3px solid gray"> 6</td>
                 <td style="border-right: 3px solid gray"> 7</td>
                 <td style="border-right: 3px solid gray"> 8</td>
                 <td style="border-right: 3px solid gray">9</td>
                 <td style="border-right: 3px solid gray">10</td>
                 <td style="border-right: 3px solid gray"> 11</td>
                 <td style="border-right: 3px solid gray"> 12</td>
                 <td style="border-right: 3px solid gray"> 13</td>
                 <td style="border-right: 3px solid gray"> 14</td>
                 <td style="border-right: 3px solid gray"> 15</td>
                 <td style="border-right: 3px solid gray"> 16</td>
                 <td style="border-right: 3px solid gray"> 17</td>
                 <td style="border-right: 3px solid gray"> 18</td>
                 <td style="border-right: 3px solid gray"> 19</td>
                 <td style="border-right: 3px solid gray"> 20</td>
            </tr>
            <tr style="border-top:1px solid gray">
                <th style="background-color:blue;border-right: 3px solid gray;" >Cost</th>
                <td style="border-right: 3px solid gray"> 120</td>
                 <td style="border-right: 3px solid gray"> 360</td>
                 <td style="border-right: 3px solid gray"> 440</td>
                 <td  style="border-right: 3px solid gray"> 680</td>
                 <td style="border-right: 3px solid gray"> 720</td>
                 <td style="border-right: 3px solid gray"> 1,040</td>
                 <td style="border-right: 3px solid gray"> 1,560</td>
                 <td  style="border-right: 3px solid gray"> 2,300</td>
                 <td style="border-right: 3px solid gray">2,600</td>
                 <td style="border-right: 3px solid gray">3,580</td>
                 <td style="border-right: 3px solid gray"> 4,880</td>
                 <td style="border-right: 3px solid gray"> 6,920</td>
                 <td style="border-right: 3px solid gray"> 9,760</td>
                 <td style="border-right: 3px solid gray"> 11,700</td>
                 <td style="border-right: 3px solid gray"> 17,800</td>
                 <td style="border-right: 3px solid gray"> 27,000</td>
                 <td style="border-right: 3px solid gray"> 40,500</td>
                 <td style="border-right: 3px solid gray"> 60,300</td>
                 <td style="border-right: 3px solid gray"> 90,000</td>
                 <td> 135,000</td>
            </tr>
        </table>
        <table id="fusions" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
            </tfoot>
        </table>

         <h2 style="text-align:center;" id=mall>Weapon Accessories</h2>
        <p class=letter><b>Weapon Accessories</b><br>The galaxy’s weapons dealers offer a dizzying array of options, but sometimes the perfect weapon for a specialized job just isn’t available as a base model. Luckily, weapon accessories can provide additional utility with just a little tinkering, which you can do yourself or pay a professional to handle. Weapon accessories modify existing weapons to provide certain benefits to the weapon’s user. Experienced operators keep a variety of accessories on hand, swapping them out as needed. <br><b>Railed Weapons</b><br>Railed weapons are longarms, heavy weapons, and sniper weapons, all of which have rails along or near the weapon’s barrel that allow you to easily add accessories to the weapon. A railed weapon has four rails to which accessories can be added: one on top, one on the bottom, and one on either side. Only one weapon accessory can be added to each rail. Some accessories must be attached to a specific rail, such as the top or bottom, as detailed in the accessory’s description.<br><b>Adding Accessories</b><br>Weapon accessories must normally be added to a weapon to function. Most accessories can be added either by being attached to a weapon or by being integrated into the weapon, though some accessories must be added in a certain way, as indicated in the accessory’s description. In either case, add the bulk of the weapon accessory to the weapon’s bulk to determine the final accessorized weapon’s bulk. When adding multiple items of light bulk together, treat 2–10 light bulk items as 1 bulk when combined.<br>&emsp;Attachment: An attached weapon accessory is affixed to a weapon but is not really part of it. Anyone can attach or detach an accessory as a full action, and most weapons dealers will attach an accessory bought from them at no extra charge.<br>&emsp;Integration: An integrated weapon accessory is built into the weapon, becoming part of it. Integrated accessories are usually purchased already integrated into the weapon at the combined price of the weapon and the accessory. If the weapon and accessory are purchased separately, a weapons dealer can integrate the accessory into the weapon for a fee of 10% of the accessory’s purchase price. You can integrate an accessory into a weapon (or remove an integrated accessory) if you have a number of ranks in Engineering (or both Engineering and Mysticism, for hybrid accessories) equal to the item level of the weapon or accessory, whichever is higher. It takes 1 hour to integrate an accessory or remove an integrated accessory from a weapon.</p>
        <table id="accessories" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Weapon Type(s)</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Capacity</th>
                <th>Usage</th>
                <th>Bulk</th>
                <th>Weapon Type(s)</th>
            </tfoot>
        </table>s

        <h2 style="text-align:center;" id=solar>Solarian Crystals</h2>
        <p class=letter><b>Solarian Weapon Crystals</b><br>A solarian weapon crystal adds damage to a solarian’s solar weapon. The solarian can place the crystal inside his mote as a standard action. While within a mote, a crystal applies its effects any time that mote is in a solar weapon form. A crystal within a mote can’t be interacted with in any way other than via abilities that specifically target a mote. The solarian can remove the crystal from his mote as a standard action, and the crystal falls loose if the mote is deactivated in any way. A solarian can’t have more than one crystal in his mote at a given time.<br>A solarian weapon crystal doesn’t give a solarian the option to create a solar weapon if he did not choose that option for his solar manifestation. Most weapon crystals increase the amount of damage attacks with the solar weapon deal. This increased damage is normally the same type of damage the solarian weapon deals (typically bludgeoning, piercing, or slashing). If a solarian crystal’s damage entry lists an abbreviation after the damage, however, the additional damage the solar weapon deals is of the indicated type.<br>Even if a solarian weapon crystal’s extra damage is a type of energy damage, attacks with the solar weapon still target KAC, not EAC. If a solarian crystal lists a critical effect, that critical effect applies to any critical hit the solar weapon makes while the solarian crystal is within the solarian’s mote.<br>A solarian weapon crystal is a hybrid item that blends magic and technology. When a weapon crystal is within a mote and the solarian uses the mote in solar weapon form, the solar weapon is considered magic for the purpose of overcoming damage reduction.<br><b>Broken Solarian Crystals</b><br>If a solarian weapon crystal with the broken condition is inside a solarian’s solar mote, the solarian takes a –2 penalty to attack and damage rolls with the solar weapon, and the solar weapon can’t deal extra critical effects. Both effects last until the crystal is repaired. As hybrid items, solarian crystals can be repaired using the make whole or mending spells, or with the Engineering or Mysticism skills, as described in the Skills chapter.</p>
        <table id="crystal" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Critical</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Damage</th>
                <th>Critical Damage</th>
                <th>Properties</th>
            </tfoot>
        </table>
         <h1 style="text-align:center;" id=armor>Armor</h1>          <p class=letter> Armor is listed in the following tables.  The first two blocks of text are some rules regarding armor. </p>

     <h2 style="text-align:center;">Wearing Armor</h2><p class=letter> <b>Armor Proficiency:</b>If you are wearing armor with which you are not proficient, you take a –4 penalty to both EAC and KAC (see page 240). A character who is proficient only with light armor can wear heavier armor effectively by selecting the Heavy Armor Proficiency feat.<br><b>Donning Armor:</b>The time required to don or remove armor depends on its type. Light armor requires 4 rounds to don or remove, while heavy armor requires 16 rounds to don or remove. Armor that is at least 8th level but less than 16th level takes half the normal time to don or remove. Armor of 16th level or higher takes one-quarter the normal time to don or remove, to a minimum of one full action.Modern suits of armor are designed so that you can don or remove armor without assistance.<br><b>Don Hastily</b> You can hastily don armor in half the normal time, to a minimum of one full action. The armor check penalty, maximum Dexterity bonus, and armor bonus for hastily donned armor are each 1 worse than normal.<br><b>Adjusting Armor</b>If you get secondhand armor that wasn’t tailored for you, you can have it adjusted, which requires a successful Engineering check (DC = 10 + 2 × the armor’s level). Alternatively, you can spend 10% of the armor’s purchase price to have it adjusted by a professional—typically an armorsmith or anyone with multiple ranks in Engineering<br><br></p>
        <h2 style="text-align:center;"> Enviromental Protections</h2><p class=letter> Space can be an inhospitable place, with countless dangerous worlds within it. Unless otherwise specified, all armors protect you from a range of hazards to ensure that you can survive for at least a few days if you must make emergency repairs to the hull of a starship, explore an alien world, or endure exposure to an environmental breach in a space station. Some armors do this through an environmental field (a minor energy field specially attuned to pressure and temperature that does not reduce damage from attacks), while others can be closed with helmets and airtight seals. The most common environmental dangers are detailed in Environment beginning on page 394.<br><b>Activation and Duration:</b>A suit of armor’s environmental protections last for a number of days equal to its item level. Activating or deactivating these environmental protections takes a standard action if you are wearing the suit (assuming the armor was properly donned). If you have access to a suit that is unattended or worn by a helpless creature, you can turn on its environmental protection as a full action, but turning it off requires a Computers check to hack the system, treating the suit as a computer with a tier equal to half the suit’s item level (the base DC to hack a computer is equal to 13 + 4 per tier). <br>The duration of a suit’s environmental protections does not need to be expended all at once, but it must be expended in 1-hour increments. Recharging this duration requires access to a functioning starship or an environment recharging station (publicly available in most technologically advanced or average settlements) and takes 1 minute per day recharged. Most of the recharging stations that replenish devices, such as batteries and power cells (see page 234), also recharge armor’s environmental protections, and using them to recharge suits is typically free of price. All other functions on a suit of armor with no duration remaining still work normally. <br><b>Breathing and Pressure:</b>All armor can facilitate self-contained breathing, protecting you against vacuums, smoke, and thick, thin, and toxic atmospheres (including any airborne poison or disease). Self-contained breathing functions underwater and in similar liquid environments. This protection allows you to breathe in a corrosive atmosphere (see page 395) to prevent suffocation, but it isn’t strong enough to prevent a corrosive atmosphere from dealing acid damage to both you and your armor. A suit of armor with an upgrade that grants acid resistance reduces any acid damage taken from a corrosive atmosphere normally. Any vision impairment from the environment (such as smoke or water) still applies.<br><b>Radiation</b>Armor protects you against low levels of radiation (see page 403) and grants a +4 circumstance bonus to saving throws against higher levels of radiation. Armor of 7th level and higher grants immunity to medium radiation levels and provides a +6 circumstance bonus to saving throws against higher levels of radiation. No armor’s bonuses apply to saves against radiation sickness, regardless of the level of radiation exposure that caused you to contract it.<br><b>Temperature</b>Armor’s environmental protections reasonably protect you against both cold (temperatures as low as –20° F) and heat (temperatures as high as 140° F). This prevents you from having to attempt most Fortitude saving throws to avoid damage from the environment, and it prevents you from taking damage from breathing in most environments. This does not protect against cold or fire damage from other sources or against environments that deal damage without allowing a Fortitude saving throw or breathing the atmosphere (such as lava).</p>
    <h2 style="text-align:center;" id=lha>Light and Heavy Armor</h2>
         <p class=letter> Each Entry on the armor table descirbes a single suit of armor with statistics.  The collumns are self evident but there are descriptions if you want them.  Items are available at 1 above your player level in most shops and 2 above at large comercial centers.</p>
         <br>
           <table id="lharmor" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>EAC Bonus</th>
                <th>KAC Bonus</th>
                <th>Maximum Dex Bonus</th>
                <th>Armor Check Penalty</th>
                <th>Speed Adjustment</th>
                <th>Upgrade Slots</th>
                <th>Bulk</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>EAC Bonus</th>
                <th>KAC Bonus</th>
                <th>Maximum Dex Bonus</th>
                <th>Armor Check Penalty</th>
                <th>Speed Adjustment</th>
                 <th>Upgrade Slots</th>
                <th>Bulk</th>
            </tfoot>
        </table>
         <h2 style="text-align:center;" id=protect>Shields</h2>
         <p class=letter> Shields are a category of equitment that provide multiple defensive options. Shields are not considered technological items for effects that work only on powered or technological objects. You must use one hand to wield a shield and gain its benefits. You can’t use a hand that’s wielding a shield to hold or wield any other equipment unless otherwise stated. You can draw or put away a shield using the draw or sheathe a weapon move action (Starfinder Core Rulebook 247).</p>
        <h2 style="text-align:center;">Shield Rules</h2>
    <p class=letter><b>Shield Proficiency</b> A character is proficient with shields if they have the Shield Proficiency feat (page 118). Some classes from the Starfinder Core Rulebook automatically gain shield proficiency, as noted in the feat. If you wield a shield without being proficient, you don’t gain its shield bonus.<br><br><b>Shield Bonus</b>A shield bonus is a new bonus type added to those bonuses that have already been defined (Core Rulebook 266–267). A shield bonus represents having a mobile physical barrier between you and an attack. Shield bonuses don’t stack with one another, and they don’t stack with bonuses gained from cover. Having a shield also doesn’t increase the level of cover you gain from other objects. For example, a character with partial cover and a basic riot shield is not considered to have cover rather than partial cover. Shields provide two shield bonuses: one you gain when wielding the shield, and one you gain when you align the shield against a specific enemy (see below). <br><b>Aligning Shields:</b> As a move action when wielding a shield, you can align a shield against a specific enemy you are observing (Core Rulebook 260). This grants you the second shield bonus listed for that shield (see Reading Shield Tables below) against attacks from that enemy until the end of your next turn, and it can have other benefits.<br><br><b>Other Shield Rules</b>A shield can be targeted by a sunder combat maneuver, and its hardness and HP is calculated the same way as for armor (Core Rulebook 409). Shields that allow you to use them to make unarmed strikes can have weapon fusions added to them, treating their item level as their weapon item level, and can be made of any special materials that can also be used to make melee weapons. The effects of these modifications are applied to unarmed strikes made with the shield. Armor upgrades added to shields are technological items and can be affected by abilities as such, unless they say otherwise. <br>All shields are considered to be designed to work with the phase shield armor upgrade (Core Rulebook 207), and you can use the arm wielding a shield to also activate a phase shield. Phase shields don’t grant a shield bonus.<br> <br> <b>Shield Bonus</b> This lists the shield bonus to AC granted by the shield. The first number represents the bonus gained when the Shield is wielded, and the second represents the bonus you gain when aligning the shield to protect against a specific foe<br><br>If you are wearing armor with a maximum Dexterity bonus while wielding a shield with a maximum, you use the lower of the two values as your maximum.<br><br><b>Shield Upgrades</b> This is the number of armor upgrades that can be placed in the shield. Not all armor upgrades can be placed in shields, and those that do may work differently. The following armor upgrades can be placed in a shield’s armor upgrade slot (if it has one): adaptive energy shield*, backup generator, brightlight projector, electrostatic field*, fortified plates, light projector, quick-release sheath, spell reflector*, tensile reinforcement, thermal capacitor*. Upgrades marked with with an asterisk (*) provide their benefit only against attacks from a target the shield has been aligned against. (For example, a shield with an electrostatic field provides electricity resistance only against attacks from a target it has been aligned against, and deals electricity damage only if that target makes a melee attack against you.) Armor upgrades used as shield peripherals do not stack with armor upgrades that grant the same benefits (such as DR, energy resistance, or bonuses to saving throws).</p>

     <table id="shields" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Shield Bonus</th>
                <th>Max Dex</th>
                <th>Armor Check Penalty</th>
                <th>Bulk</th>
                <th>Upgrades</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Shield Bonus</th>
                <th>Max Dex</th>
                <th>Armor Check Penalty</th>
                <th>Bulk</th>
                <th>Upgrades</th>
            </tfoot>
        </table>


       <h2 style="text-align:center;" id=powarm>Power Armor</h2>
         <p class=letter> Each Entry on the table decsribes a single suit of power armor.  The collumns are self evident but there are descriptions if you want them.  Items are available at 1 above your player level in most shops and 2 above at large comercial centers.<br><br><b>Capacity and Usage</b>Powered armor requires a great deal of electricity to function,
and it has a battery capacity and usage value.
<br>A suit of powered armor’s battery capacity indicates the
number of charges its battery holds. This battery can be
recharged as normal using a generator or a recharging station
(see page 234), or it can be replaced with a new battery (see
Table 7–9: Ammunition). You can put a battery with a smaller
charge capacity into powered armor, but you can’t recharge one
to hold more than its maximum number of charges.
<br>Powered armor’s usage indicates how long a single battery
charge runs the armor. For example, a character in a battle
harness with a fully charged battery can use that powered armor
for 20 hours before its battery needs to be replaced or recharged.
Once you have entered a suit of powered armor, you can tell how
many battery charges it has remaining, if any. You can turn a suit
of powered armor on or off as a standard action, and you do not need to use all charges for a suit of powered armor consecutively,
but you must use them in 1-charge increments.
<br>If you’re in armor that’s out of power, you are flat-footed and
off-target, you don’t benefit from the armor’s Strength or damage,
and you can’t attack with it or cause it to move. None of its
mounted weapons (see below) or upgrades (see Armor Upgrades
below) function, even if they have their own power sources. You
can’t attempt any Strength- or Dexterity-based skill checks, and
the armor’s maximum Dexterity bonus is +0 (or the armor’s regular
maximum Dexterity bonus, if lower). You can still exit the armor<br><br><b>Speed/Strength</b>Your effective speed/strength while using power armor is the one's listed below.  <br><br><b>Weapons</b> Unarmed Melee weapon damage is listed in the chart, however ranged weapons equaling the number of slots can be installed onto the power armor suit.  This installation/removal process takes a full action per weapon.<br><br><b>Bulk</b> The bulk only counts toward weight when one is carrying the suit as cargo, otherwise it is just the weight of the suit.  Your new carry capacity is based on the suit's strength while the suit is in use.</p>
         <br>
       <table id="pa" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>EAC</th>
                <th>KAC</th>
                <th>Max Dex</th>
                <th>Armor Check Penalty</th>
                <th>Speed</th>
                <th>Strength</th>
                <th>Damage</th>
                <th>Weapon Slots</th>
                <th>Upgrade Slots</th>
                <th>Capcity</th>
                <th>Usage</th>
                <th>Size</th>
                <th>Bulk</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>EAC</th>
                <th>KAC</th>
                <th>Max Dex</th>
                <th>Armor Check Penalty</th>
                <th>Speed</th>
                <th>Strength</th>
                <th>Damage</th>
                <th>Weapon Slots</th>
                <th>Upgrade Slots</th>
                <th>Capcity</th>
                <th>Usage</th>
                <th>Size</th>
                <th>Bulk</th>
            </tfoot>
        </table>
        <h2 style="text-align:center;" id=aupgrade>Armor Upgrades</h2>
         <p class=letter> Each Entry on the table decsribes a single armor upgrade.  The collumns are self evident but there are descriptions if you want them.  Items are available at 1 above your player level in most shops and 2 above at large comercial centers.A creature can personalize armor by purchasing and installing armor upgrades, described below, which add bonuses or customized abilities to armor. Some individuals keep a collection of upgrades at hand, swapping them out as needed (requiring 10 minutes to replace the unit and resecure all connections). </p>
         <br>
           <table id="upgrades" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Slots</th>
                <th>Armor Types</th>
                <th>Bulk</th>
            </tr>
            </thead>
            <tfoot>
                 <th>Name</th>
                <th>Level</th>
                <th>Price</th>
                <th>Slot(s)</th>
                <th>Armor Type(s)</th>
                <th>Bulk</th>
            </tfoot>
        </table>
             <h1 style="text-align:center;" id=aug>Augmentations</h1>          <p class=letter> Augmentations are split into two tables, one is Biotech, Magitech, and Cybernetics while the other is Necrografts and Personal Upgrades. They are all further described below.  <br> Many explorers and mercenaries modify their own bodies with technological or biological gear called augmentations. These are modifications to your body that give you special abilities and bonuses. Once installed, they become a part of your body and generally can’t be affected by abilities that destroy or disable objects or target technological items or creatures. As far as attacks and abilities are concerned, a cybernetic or vat-grown arm is no more (or less) vulnerable than your original biological limb</p>
     <h1 style="text-align:center;">Rules</h1>          <p class=letter> <b> System: </b>All augmentations have a system entry indicating the part of
the body into which it must be installed. You can’t have more
than one augmentation on the same part of your body.
<br>In some cases, such as with augmentations installed
in limbs, you can install an augmentation into a
single general type of body part, such as
any single one of your feet or hands.
In these cases, the augmentation
lists the acceptable body parts
into which the augmentation can
be installed. You can install a single
augmentation on each limb of which
you have multiples. For example, if you’re a kasatha, you could
install a separate augmentation on each of your four hands, as
long as each of those augmentations requires only a single hand.
<br>If an augmentation requires multiple limbs for installation—
such as climbing suckers, which require all feet, or a speed
suspension, which requires all legs—the augmentation’s systems
entry indicates that requirement. The augmentation’s description
will also indicate whether a limb-based upgrade requires the
replacement of a limb or the augmentation of an existing limb.
In the case of augmentations that specifically replace a lost
limb, such as a polyhand or a prosthetic limb, you cannot attach
such an augmentation to an existing limb, due to the way these
upgrades are manufactured <br><br><b>Implantation: </b>Getting an augmentation installed requires the services of
a professional cybernetic surgeon or someone with ranks in
Medicine equal to the level of the augmentation. A session
with a cybernetic surgeon usually takes 1 hour per level of the
augmentation. The price of such implantation procedures is
included in the prices listed for each augmentation.<br><br><b>Removing Augmentations: </b>You might want to have an augmentation removed, usually
because you want to install a different one in the same
system of your body. This removal usually occurs during surgery to install new cybernetics. Biotech usually kills off
the old augmentation while it’s integrating with your body,
allowing you to purge the dead biotech naturally. Because
augmentations are coded to your body, it’s
not possible to resell an old augmentation,
nor can you reimplant one into a
different person. The price of a new
augmentation includes the price and
time to remove the old augmentation.<br><br><b>Activation: </b>Most augmentations work continuously. Those
requiring some degree of control are plugged into
your nervous system, and you can turn them on or
off as a standard action unless otherwise noted. For
example, you could activate or deactivate cybernetics
in your eyes to observe different visual phenomena </p>


    <h2 style="text-align:center;" id=cyberbio>Cybernetics, Biotech, and Magitech</h2>
    <p class=letter> <b>Cybernetics: </b>Cybernetic augmentations use machines and circuitry integrated
with the flesh and bone of the recipient. In most cases, cybernetics
must be installed into the body by a trained surgeon—a process
that takes 1 hour per level of the augmentation and the price of
which is covered in the price of the cybernetic. Cybernetics are
more than just machine implants: they are complex meldings of
technology and the living host’s own organs. This allows them
to be hardened against assaults that affect other technologies
in ways robots and other entirely technological creatures can’t.
Cybernetics are not subject to any effect or attack that targets
        technology unless it specifies that it affects cybernetics.<br><br><b>Biotech: </b>Functioning similarly to cybernetics, biotech items include
modifications to your DNA combined with implants of
biological origin that integrate into your physiology. Biotech
mostly operates by the same rules as cybernetics and uses the
same implantation slots.<br><br><b>Magitech: </b> Requiring both surgical skill and arcane mastery to create
and install, magitech augmentations are a combination of
cybernetic and magical components. These augmentations
usually contain elements such as mystically charged crystals,
starmetal alloys, and rune-covered microchips and are highly
sought after by those who wish increase their magical might,
such as technomancers. However, any spacefarer can benefit
from even the most basic magitech augmentations.<br>Magitech augmentations follow much the same rules
as all other augmentations in regards to implantation,
activation, and removal (see page 208 of the Core Rulebook).
Though they can be detected and crafted as if they were hybrid
items, once they are installed, they become a part of your
body and generally can’t be affected by abilities that disable or
destroy hybrid items.</p>
         <br>
           <table id="augmentations" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Body Part</th>
                <th>Price</th>
                <th>Level</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Type</th>
                <th>Body Part</th>
                <th>Price</th>
                <th>Level</th>
            </tfoot>
        </table>


     <h2 style="text-align:center;" id=necro>Personal Upgrades and Necrografts</h2>
    <p class=letter> <b>Personal Upgrades: </b>Personal upgrades are a special class of
augmentation that do not follow the
normal system-limitation rules. Instead,
these are broad upgrades that make
changes across your entire body, while
still allowing for other augmentations.
Put more simply, buying a personal
upgrade is the easiest way to increase
your ability scores.
<br>Personal upgrades may be cybernetics,
biotech upgrades, mystical crystals, nanite
enhancements, or various other forms
of enhancement, and each permanently
grants you additional ability score points.
Using any of these sorts of items counts
as a personal upgrade.
<br>You can gain a total of three personal upgrades, regardless of
the source. Each personal upgrade item has a model number: mk 1,
mk 2, or mk 3. A mk 1 personal upgrade grants you +2 points to a
single ability score, a mk 2 personal upgrade grants +4 points to
a single ability score, and a mk 3 personal upgrade grants you +6
points to a single ability score. Each of your personal upgrades must
be a different model number (for example, you cannot have three
mk 1 upgrades, but you can have a mk 1, a mk 2, and a mk 3) and
each must be applied to a different ability score. You can boost an
existing personal upgrade by paying the difference in price between
the current model and the next higher model. For example, if you
have a mk 1 synaptic accelerator granting you +2 points of Strength,
you could increase that to a mk 2 synaptic accelerator granting you
a total +4 points of Strength by paying 5,100 credits (the difference
in price between the mk 1 and mk 2 models). Be sure to keep track
of what upgrades you have applied to which ability scores.


    <br><br><b>Necrografts: </b>  Necrografts are augmentations utilizing undead organs and
necromantic rituals rather than technology. They were invented
on Eox, and they are most commonly available in Orphys and at
the Necroforge within Eox’s Lifeline. Most other Pact Worlds
outlaw the creation and installation of necrografts (though
not their possession), but they can still be found in some less
reputable back-alley augmentation clinics on multiple worlds
throughout the system and beyond.<br>ecrografts follow the existing rules for augmentations
(Core Rulebook 208), but they use different components
than biotech and cybernetics. Any biotech or cybernetic
augmentation can be created as a necrograft and installed
for only 90% of the augmentation’s normal cost, but doing
so causes the recipient to gain the necrograft subtype (see
below). Necrografts have the same system restrictions that all
augmentations share<br>For those low on funds, some bone sages and corporations
on Eox are willing to defer the cost of travel to Eox and
augmentation for any client who signs a corpse-lease
agreement. Necrograft versions of standard prosthetic limbs
(Core Rulebook 210) and necrograft ears, eyes, or tongues
(which use the same mechanics as prosthetic limbs but serve
as sensory organs and occupy the corresponding system) can
even be implanted with no up-front cost. However, the corpselease agreement states that if the recipient dies before paying
off all the costs associated with the travel and augmentation,
the leasing Eoxian group owns the patient’s body, which it
then uses in creating undead servitors or more necrografts.
More advanced necrografts aren’t generally available without
payment in full (though complimentary travel is likely to still be
offered to customers within the Pact Worlds).<br><br><b>Necrograft Subtype: </b> Adding even a single necrograft to a living body causes the
recipient creature to gain the necrograft subtype. Abilities,
items, and spells that detect or identify undead reveal
necrografts (identifying only the augmentations as undead,
rather than the recipient creature as a whole).<br>Creatures with this subtype are also damaged by spells that
damage undead and can be subjected to other undead-specific
effects. If a spell or ability that does something other than
deal damage would not normally affect such a creature but
does affect undead, it can affect a creature with the necrograft
subtype, but that creature gains a bonus to its AC and saving
throw against the effect equal to 4 – the number of necrografts
it has (to a minimum bonus of +0). <br><br><b>Necrograft Description</b>In addition to necrograft versions of typical biotech and
cybernetics, there are many unique necrografts that can be
created using only necromancy. These necrografts come in five possible models (mk 1 through mk 5) and vary in price by model
as detailed on Table 1–22: Necrografts below. If a necrograft’s
effect requires a saving throw, the save DC equals 10 + half
the necrograft’s item level + the recipient’s key ability score
modifier. In addition, this section presents an additional system
that some augmentations must be installed in: the body’s
endocrine system. The endocrine system uses all of the same
rules for augmentation systems as explained on page 208 of
the Core Rulebook. </p>
    <br> <h2 style="float:left;width:50%;text-align: center">Personal Upgrade Costs </h2><h2 style="float:left;width:50%;text-align: center">Necrograft Costs </h2>
    <div style="margin-left:auto;margin-rigt:auto">
    <table style="float:left;width:50%"><tr><th>Model</th><th>Level</th><th>Price</th><th>Ability</th></tr><tr class=letter><td>Mk1</td><td>3</td><td>1,400</td><td>+2</td></tr><tr class=letter><td>Mk2</td><td>7</td><td>6,500</td><td>+4</td></tr><tr class=letter><td>Mk3</td><td>14</td><td>75,000</td><td>+6</td></tr></table>
    <table style="float:left;width:50%"><tr><th>Model</th><th>Level</th><th>Price</th></tr>
    <tr class=letter><td>Mk1</td><td>1</td><td>200</td>
     <tr class=letter><td>Mk2</td><td>6</td><td>4,000</td>
    <tr class=letter><td>Mk3</td><td>12</td><td>30,000</td>
    <tr class=letter><td>Mk4</td><td>18</td><td>350,000</td>
    <tr class=letter><td>Mk5</td><td>20</td><td>775,000</td>
    </table>
    </div>
          <table id="pu_n" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
            </tr>
            </thead>
            <tfoot>
                <th>Name</th>
                <th>Type</th>
            </tfoot>
        </table>
         <h1 style="text-align:center;" id=material>Special Materials</h1>
        <p class=letter><b>Special Materials </b><br>Each special material has specific properties and effects. Normally weapons and ammunition without metal parts can’t be made from most of these materials, a weapon that deals only energy damage doesn’t usually benefit from being made of such a material, and any device can only benefit from a single special material. The table below shows the additional costs incurred for making items that incorporate a given special material. The table also includes the price of 1 bulk of starmetals in raw form; these raw materials are trade goods. If there is no price listed then it is unavailable for that type of good</p>
        <table id="materials" class=display>
            <thead>
            <tr>
                <th>Name</th>
                <th>Ammunition (1 piece)</th>
                <th>Armor</th>
                <th>Weapon</th>
                <th>Item</th>
                <th>Raw Material (1 bulk)</th>
            </tr>
            </thead>
            <tfoot>
                 <th>Name</th>
                <th>Ammunition (1 piece)</th>
                <th>Armor</th>
                <th>Weapon</th>
                <th>Item</th>
                <th>Raw Material (1 bulk)</th>
            </tfoot>
        </table>




        <script>
             /* Formatting function for row details - modify as you need */
                   function format ( d ) {
    // `d` is the original data object for the row
                    var to_return = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                        '<tr>'+
                            '<td>Full name:</td>'+
                            '<td>'+d.Name+'</td>'+
                        '</tr>';
                    if(d.Type!=null) 
                        {
                            to_return +='<tr><td>Type:</td><td>';
                            to_return += d.Type;
                            to_return += '</td></tr>';
                        }
                    if(d.Category != null)
                    {
                        to_return +='<tr><td>Category:</td><td>';
                        to_return += d.Category;
                        to_return += '</td></tr>';
                    }
                    to_return+='<tr><td>Description:</td><td>';
                    to_return += d.Description;
                    to_return += '</td></tr>';
                    if(d.Critical_Description != null)
                    {
                        to_return +='<tr><td>Critical Description:</td><td>';
                        to_return += d.Critical_Description;
                        to_return += '</td></tr>';
                    }
                    if(d.Properties_Description != null)
                    {
                        to_return +='<tr><td>Properties Description:</td><td>';
                        to_return += d.Properties_Description;
                        to_return += '</td></tr>';
                    }
                    to_return+='</table>';
                    return to_return;
}
               $(document).ready(function () {

                   var melee = $('#melee').DataTable({
                         "ajax": "json/starfinder/melee_weapons.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Type" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Critical" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#melee tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = melee.row( tr );

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
                   var small_arms = $('#small_arms').DataTable({
                         "ajax": "json/starfinder/small_arms.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Range" },
                                { "data": "Critical" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#small_arms tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = small_arms.row( tr );

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
                   var long_arms = $('#long_arms').DataTable({
                         "ajax": "json/starfinder/long_arms.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Range" },
                                { "data": "Critical" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#long_arms tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = long_arms.row( tr );

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
                   var heavy = $('#heavy').DataTable({
                         "ajax": "json/starfinder/heavy_weapons.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Range" },
                                { "data": "Critical" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#heavy tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = heavy.row( tr );

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
                   var sniper = $('#sniper').DataTable({
                         "ajax": "json/starfinder/sniper_weapons.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Range" },
                                { "data": "Critical" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#sniper tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = sniper.row( tr );

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
                   var special = $('#special').DataTable({
                         "ajax": "json/starfinder/special_weapons.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Damage_Type" },
                                { "data": "Range" },
                                { "data": "Critical" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#special tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = special.row( tr );

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
                   var ammo = $('#ammo').DataTable({
                         "ajax": "json/starfinder/ammunition.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Category" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Amount" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   var grenades = $('#grenades').DataTable({
                         "ajax": "json/starfinder/grenades.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Range" },
                                { "data": "Bulk" },
                                { "data": "Properties" }
                                ]});
                   $('#grenades tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = grenades.row( tr );

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
                    var crystal = $('#crystal').DataTable({
                         "ajax": "json/starfinder/solarian_crystals.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Damage" },
                                { "data": "Critical" },
                                { "data": "Properties" }
                                ]});
                   $('#crystal tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = crystal.row( tr );

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
                    var accessories = $('#accessories').DataTable({
                         "ajax": "json/starfinder/weapon_accessories.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Bulk" },
                                { "data": "Weapon Type" }
                                ]});
                   $('#accessories tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = accessories.row( tr );

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
                      var fusions = $('#fusions').DataTable({
                         "ajax": "json/starfinder/weapon_fusions.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                ]});
                     $('#fusions tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = fusions.row( tr );

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

                   var armor = $('#lharmor').DataTable({

                         "ajax": "json/starfinder/lh_armor.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "EAC Bonus" },
                                { "data": "KAC Bonus" },
                                { "data": "Maximum Dex Bonus" },
                                { "data": "Armor Check Penalty" },
                                { "data": "Speed Adjustment" },
                                { "data": "Upgrade Slots" },
                                { "data": "Bulk" }
                                ]});
                       $('#lharmor tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = armor.row( tr );

                        if ( row.child.isShown() ) {
                            row.child.hide();
                            tr.removeClass('shown');
                        }
                        else {
                            row.child( format(row.data()) ).show();
                            tr.addClass('shown');
                        }
                        } );


                       var upgrades = $('#upgrades').DataTable({

                         "ajax": "json/starfinder/armor_upgrades.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Slots" },
                                { "data": "Armor Type" },
                                { "data": "Bulk" }
                                ]});
                       $('#upgrades tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = upgrades.row( tr );

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
                    var shields = $('#shields').DataTable({
                         "ajax": "json/starfinder/shields.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "Shield Bonus" },
                                { "data": "Max Dex" },
                                { "data": "Armor Check Penalty" },
                                { "data": "Bulk" },
                                { "data": "Upgrades" }
                                ]});
                       $('#shields tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = shields.row( tr );

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
                     var pa = $('#pa').DataTable({

                         "ajax": "json/starfinder/pa.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Level" },
                                { "data": "Price" },
                                { "data": "EAC" },
                                { "data": "KAC" },
                                { "data": "Max Dex" },
                                { "data": "Armor Check Penalty" },
                                { "data": "Speed" },
                                { "data": "Strength" },
                                { "data": "Damage" },
                                { "data": "Weapon Slots" },
                                { "data": "Upgrade Slots" },
                                { "data": "Capacity" },
                                { "data": "Usage" },
                                { "data": "Size" },
                                {"data":"Bulk"}
                                ]});
                       $('#pa tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = pa.row( tr );

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
                       $(document).ready(function () {

                   var augmentations = $('#augmentations').DataTable({

                         "ajax": "json/starfinder/augmentations.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Type" },
                                { "data": "Body Parts" },
                                { "data": "Price" },
                                { "data": "Level" }
                                ]});
                       $('#augmentations tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = augmentations.row( tr );

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
                    var pu_n = $('#pu_n').DataTable({

                         "ajax": "json/starfinder/pu_n.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Type" }
                                ]});
                       $('#pu_n tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = pu_n.row( tr );

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
                       var materials = $('#materials').DataTable({
                         "ajax": "json/starfinder/special_materials.json",
                                "columns": [
                                { "data": "Name" },
                                { "data": "Ammunition " },
                                { "data": "Armor" },
                                { "data": "Weapon" },
                                { "data": "Item" },
                                { "data": "Raw Material (1 bulk)" }
                                ]});
                       $('#materials tbody').on('click', 'td', function () {
                        var tr = $(this).closest('tr');
                        var row = materials.row( tr );

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



})}
   );

        </script>
           
    </body>
</html>