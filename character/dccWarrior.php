<!DOCTYPE html>
<html>
<head>
<title>Dungeon Crawl Classics Warrior Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Warrior Character Generator. Goodman Games.">
	<meta name="keywords" content="Dungeon Crawl Classics, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2020">
    
    <link rel="icon" href="../../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/warrior.css">
    
    
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/attackBonus.js"></script>
    <script type="text/javascript" src="./js/luckySign.js"></script>
    <script type="text/javascript" src="./js/adjustments.js"></script>
    <script type="text/javascript" src="./js/languages.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/diceRoll.php';
    include 'php/placeOrigin.php';
    include 'php/bensionsDooms.php';
    include 'php/abilityScoreMod.php';
    include 'php/message.php';
    include 'php/baseLanguage.php';
    include 'php/wealth.php';
    


        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
        
        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }
        
        if(isset($_POST["thePlaceOrigin"]))
        {
            $placeOriginVal = $_POST["thePlaceOrigin"];
        }

        $placeOfOrigin = placeOfOrigin($placeOriginVal);

        $modifiedOriginChoice = getModifiedChoice($placeOriginVal);

        $baseLanuage = getBaseLanguage ($modifiedOriginChoice);

        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 

        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 
        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        $abilityScoreArray = diceRollArray($abilityScoreGen);

        $dieRollMessage = dieRollMethodText($abilityScoreGen);
        
 
        if(isset($_POST["theOptimization"]))
        {
            $optimizeChoice = $_POST["theOptimization"];
        
        }

        $optimizeText = abilityScoreAssignmentText($optimizeChoice);

        if($optimizeChoice == "2")
        {
            rsort($abilityScoreArray);

            $strength = $abilityScoreArray[0];
            $agility = $abilityScoreArray[1];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[4];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[3];
        }
        else if($optimizeChoice == "3")
        {
            rsort($abilityScoreArray);

            $strength = $abilityScoreArray[0];
            $agility = $abilityScoreArray[2];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[4];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[3];
        }
        else if($optimizeChoice == "4")
        {
            rsort($abilityScoreArray);

            $strength = $abilityScoreArray[2];
            $agility = $abilityScoreArray[0];
            $stamina = $abilityScoreArray[1];
            $personality = $abilityScoreArray[4];
            $intelligence = $abilityScoreArray[5];
            $luck = $abilityScoreArray[3];
        }
        else if($optimizeChoice == "5")
        {
            rsort($abilityScoreArray);

            $strength = $abilityScoreArray[1];
            $agility = $abilityScoreArray[3];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[5];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[0];
        }
        else
        {
            $strength = $abilityScoreArray[0];
            $agility = $abilityScoreArray[1];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[3];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[5];

        }

        $strengthMod = abilityScoreModifier($strength);
        $agilityMod = abilityScoreModifier($agility);
        $staminaMod = abilityScoreModifier($stamina);
        $personalityMod = abilityScoreModifier($personality);
        $intelligenceMod = abilityScoreModifier($intelligence);
        $luckMod = abilityScoreModifier($luck);

        $bension = getBension($placeOriginVal, $luckMod);
        
        $doom = getDoom($placeOriginVal, $luckMod);
        
        if(isset($_POST["theWealth"]))
        {
            $wealth = $_POST["theWealth"];
        }

        $coinCollection = getWealth ($wealth);

        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }
    
        $armourName = getArmour($armour)[0];
        
        $armourACBonus = getArmour($armour)[1];
        $armourCheckPen = getArmour($armour)[2];
        $armourSpeedPen = getArmour($armour)[3];
        $armourFumbleDie = getArmour($armour)[4];

        if(isset($_POST['theCheckBoxShield']) && $_POST['theCheckBoxShield'] == 1) 
        {
            $shieldName = getArmour(10)[0];
            $shieldACBonus = getArmour(10)[1];
            $shieldCheckPen = getArmour(10)[2];
            $shieldSpeedPen = getArmour(10)[3];
            $shieldFumbleDie = getArmour(10)[4];
        }
        else
        {
            $shieldName = getArmour(11)[0];
            $shieldACBonus = getArmour(11)[1];
            $shieldCheckPen = getArmour(11)[2];
            $shieldSpeedPen = getArmour(11)[3];
            $shieldFumbleDie = getArmour(11)[4];
        } 

       $totalAcDefense = $armourACBonus + $shieldACBonus;
       $totalAcCheckPen = $armourCheckPen + $shieldCheckPen;
       $speedPenality = $armourSpeedPen;

       $speed = 30 - $armourSpeedPen;

       $reflexBase = savingThrowReflex($level);
       $fortBase = savingThrowFort($level);
       $willBase = savingThrowWill($level);

       $criticalDie = criticalDie($level);

       $deedDie = deedDie($level);

       $actionDice = actionDice($level);

       $threatRange = threatRange($level);


       
       if(isset($_POST["theLuckyWeapon"]))
       {
           $luckyWeapon = $_POST["theLuckyWeapon"];
       } 


         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
        $gearArray = array();
        $gearNames = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       
           
		<span id="strength"></span>
		<span id="agility"></span> 
		<span id="stamina"></span> 
		<span id="intelligence"></span>
		<span id="personality"></span>
       <span id="luck"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="agilityMod"></span> 
		<span id="staminaMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="personalityMod"></span>
       <span id="luckMod"></span>

       <span id="reflex"></span>
       <span id="fort"></span>
       <span id="will"></span>
		  
       
       <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>
       
       
       <span id="dieRollMethod"></span>

       
       <span id="class">Warrior</span>
       
       <span id="armourClass"></span>

       <span id="baseAC"></span>
       
       <span id="hitPoints"></span>

       <span id="languages"></span>
       

       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
         <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
        
        <span id="speed"></span>

              
         <span id="placeOfOrigin">
           <?php
                echo $placeOfOrigin;
           ?>
        </span>

        <span id="bension">
            <?php
                echo $bension;
           ?>
        </span>

        <span id="doom">
            <?php
                echo $doom;
        ?>
        </span>


              
       <span id="armourName">
           <?php
           if($armourName == "")
           {
               echo $shieldName;
           }
           else if($shieldName == "")
           {
                echo $armourName;
           }
           else
           {
            echo $armourName . " & " . $shieldName;
           }
           ?>
        </span>

        <span id="armourACBonus">
            <?php
                echo '+' . $totalAcDefense;
            ?>
        </span>

        
        <span id="armourACCheckPen">
            <?php
                echo $totalAcCheckPen;
            ?>
        </span>
        
        <span id="armourACSpeedPen">
            <?php
            if($speedPenality == 0)
            {
                echo "-";
            }
            else
            {
                echo "-" . $speedPenality;
            }
            ?>
        </span>

        <span id="fumbleDie">
            <?php
            if($armourName == "")
            {
                echo $shieldFumbleDie;
            }
            else
            {
                echo $armourFumbleDie;
            }
            ?>
        </span>

        <span id="criticalDieTable">
            <?php
                echo $criticalDie;
            ?>
        </span>
        
        <span id="deedDie">
            <?php
                echo $deedDie;
            ?>
        </span>

        <span id="initiative">
        </span>
        
        <span id="actionDice">
            <?php
                echo $actionDice;
            ?>
        </span>

        <span id="threatRange">
            <?php
                echo $threatRange;
            ?>
        </span>

        
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>

        <span id="luckyWeapon">
            <?php
                echo $luckyWeapon;
            ?>
        </span>
        
        <span id="melee"></span>
        <span id="range"></span>
        
        <span id="meleeDamage"></span>
        <span id="rangeDamage"></span>

       
       
       <span id="weaponsList">
           <?php
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           
           ?>  
        </span>

       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

       <span id="gearList">
           <?php

           $gearCount = count($gearNames);
           $counter = 1;
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;

              if($counter == $gearCount-1)
              {
                  echo " & ";
              }
              elseif($counter > $gearCount-1)
              {
                  echo ".";
              }
              else
              {
                  echo ", ";
              }

              ++$counter;
           }
           ?>
       </span>

        <span id="coinCollection">
            <?php
                echo $coinCollection;
            ?>
        </span>


       <span id="abilityScoreGeneration">
            <?php
            echo $dieRollMessage . $optimizeText;
           ?>
       </span>
       

       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Warrior Character Constructor
	*/
	function Character() {
        
        let strength = <?php echo $strength ?>;
        let	intelligence = <?php echo $intelligence ?>;
        let	personality = <?php echo $personality ?>;
        let agility = <?php echo $agility ?>;
        let stamina = <?php echo $stamina ?>;
        let	luck = <?php echo $luck ?>;
        
        let strengthMod = <?php echo $strengthMod ?>;
        let intelligenceMod = <?php echo $intelligenceMod ?>;
        let personalityMod = <?php echo $personalityMod ?>;
        let agilityMod = <?php echo $agilityMod ?>;
        let staminaMod = <?php echo $staminaMod ?>;
        let luckMod = <?php echo $luckMod ?>;
        let level = '<?php echo $level ?>';
        let gender = '<?php echo $gender ?>';
        let armour = '<?php echo $armourName ?>';
        let birthAugur = getLuckySign();
        let modLanguages = <?php echo $modifiedOriginChoice ?>;
        let bonusLanguages = getBonusLanguages(intelligenceMod, birthAugur, luckMod, modLanguages);
	    let baseAC = getBaseArmourClass(agilityMod) + adjustAC(birthAugur, luckMod);

		let warriorCharacter = {
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"intelligence": intelligence,
			"personality": personality,
			"luck": luck,
            "strengthModifer": addModifierSign(strengthMod),
            "intelligenceModifer": addModifierSign(intelligenceMod),
            "personalityModifer": addModifierSign(personalityMod),
            "agilityModifer": addModifierSign(agilityMod),
            "staminaModifer": addModifierSign(staminaMod),
            "luckModifer": addModifierSign(luckMod),
            "acBase": baseAC,
			"luckySign": birthAugur.luckySign,
            "luckyRoll": birthAugur.luckyRoll,
            "move": <?php echo $speed ?> + addLuckToSpeed (birthAugur, luckMod),
            "addLanguages": '<?php echo $baseLanuage  ?>' + bonusLanguages,
            "armourClass": <?php echo $totalAcDefense ?> + baseAC,
            "hp": getHitPoints (level, staminaMod) + hitPointAdjustPerLevel(birthAugur,  luckMod),
			"melee": strengthMod + meleeAdjust(birthAugur, luckMod),
			"range": agilityMod + rangeAdjust(birthAugur, luckMod),
			"meleeDamage": strengthMod + meleeDamageAdjust(birthAugur, luckMod),
			"rangeDamage": rangeDamageAdjust(birthAugur, luckMod),
            "reflex": <?php echo $reflexBase ?> + agilityMod + adjustRef(birthAugur, luckMod),
            "fort": <?php echo $fortBase ?> + staminaMod + adjustFort(birthAugur,luckMod),
            "will": <?php echo $willBase ?> + personalityMod + adjustWill(birthAugur, luckMod),
            "initiative": <?php echo $level ?> + agilityMod + adjustInit(birthAugur, luckMod)

		};
	    if(warriorCharacter.hitPoints <= 0 ){
			warriorCharacter.hitPoints = 1;
		}
		return warriorCharacter;
	  
	  }
	  


  
       let imgData = "images/warrior.png";
      
        $("#character_sheet").attr("src", imgData);
      

      let data = Character();
      
		 
      $("#strength").html(data.strength);
      
      $("#intelligence").html(data.intelligence);
      
      $("#personality").html(data.personality);
      
      $("#agility").html(data.agility);
      
      $("#stamina").html(data.stamina);
      
      $("#luck").html(data.luck);
      
      
		 
      $("#strengthMod").html(data.strengthModifer);
      
      $("#intelligenceMod").html(data.intelligenceModifer);
      
      $("#personalityMod").html(data.personalityModifer);
      
      $("#agilityMod").html(data.agilityModifer);
      
      $("#staminaMod").html(data.staminaModifer);
      
      $("#luckMod").html(data.luckModifer);
      
      
      
      $("#dieRollMethod").html(data.dieRollMethod);
            
      $("#hitPoints").html(data.hp);
      
      $("#armourClass").html(data.armourClass);
      
      $("#reflex").html(addModifierSign(data.reflex));
      $("#fort").html(addModifierSign(data.fort));
      $("#will").html(addModifierSign(data.will));
      
      $("#initiative").html(addModifierSign(data.initiative));
      
      $("#speed").html(data.move + "'");
      
      $("#luckySign").html(data.luckySign);
      $("#luckyRoll").html(data.luckyRoll);    
      $("#LuckySignBonus").html(data.luckModifer);

      $("#languages").html(data.addLanguages);
      $("#melee").html(addModifierSign(data.melee));
      $("#range").html(addModifierSign(data.range));
      $("#meleeDamage").html(addModifierSign(data.meleeDamage));
      $("#rangeDamage").html(addModifierSign(data.rangeDamage));

      
      $("#baseAC").html("(" + data.acBase + ")");
      

	 
  </script>
		
	
    
</body>
</html>