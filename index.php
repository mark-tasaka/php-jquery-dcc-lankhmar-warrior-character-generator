<!DOCTYPE html>
<html>
<head>
<title>Launch Page: DCC Lankhmar Warrior Character Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2020">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="DCC Lankhmar Warrior Character Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Dungeon Crawl Classics Lanhkmar Warrior Character Generator is designed primarily with PHP and jQuery/JavaScript. The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet. When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet. Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>    

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling. In this way, this program replicates Object-Oriented design. JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.</p>

        <br/>
        <br/>
            
  

            
		<form action="" id ="WarriorForm"  target="_blank" method="post">
    
    <div class="content9">

 



                
  
            <span class="formIputDescriptionLankhmar">Character's Name:</span>
            <span id="characterName"> <input type="text" name="theCharacterName" value="" class="nameBox"></span>
           
           <br/>
           <br/>

                  
           <div class="formIputDescriptionLankhmar">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomName" value="1" name="theCheckBoxRandomName">Use Randomly Generated Name</span>
           </div>

           <br/>
                  
                           
        <span class="formIputDescriptionLankhmar">Gender:</span>	
			  <select id="gender" name="theGender" class="alignmentBox">	
				<option value="Male" selected>Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>
                           
                         
                           
        <span class="formIputDescriptionLankhmar">Place of Origin:</span>	
			  <select id="placeOrigin" name="thePlaceOrigin" class="alignmentBox">	
				<option value="0" selected>Lankhmar</option>
				<option value="1">The Eight Cities</option>
				<option value="2">The Cold Waste</option>
				<option value="3">The Eastern Lands</option>
				<option value="4">The Mingol Steppes</option>
        </select>
        
        <br/>
        <br/>
            
                            
            <span class="formIputDescriptionLankhmar">Character Level:</span>	
			  <select id="level" name="theLevel" class="alignmentBox">	
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
			  </select>
            
            <br/>
            <br/>
                
                    

                
            
            <span class="formIputDescriptionLankhmar">Alignment:</span>	
			  <select id="alignment" name="theAlignment" class="alignmentBox">			
                <option value="" selected>No Alignment</option>
				<option value="Lawful">Lawful</option>
				<option value="Neutral">Neutral</option>
				<option value="Chaotic">Chaotic</option>
			  </select>
            
            <br/>
            <br/>
                            
                <span class="formIputDescriptionLankhmar">Ability Scores:</span>	
			  <select id="abilityScores" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
				<option value="3">2d6 + 6</option>
				<option value="4">1d5 + 1d6 + 1d7</option>
				<option value="5">5d6, use the 3 highest</option>
			  </select>
            
                
            <br/>
            <br/>
                            
                            
            <span class="formIputDescriptionLankhmar">Optimize Ability Scores:</span>        
            <select id="optimization" name="theOptimization" class="alignmentBox">	
            <option value="1" selected>Random Assignment</option>
            <option value="2">Order of STR, AGI, STA, LUCK, PER, INT</option>
            <option value="3">Order of STR, STA, AGI, LUCK, PER, INT</option>
            <option value="4">Order of AGI, STA, STR, LUCK, PER, INT</option>
            <option value="5">Order of LUCK, STR, STA, AGI, INT, PER</option>
            </select>
                        
                            
            <br/>
            <br/>
                
                            

                            
            <span class="formIputDescriptionLankhmar">Armour:</span>	
			  <select id="armour" name="theArmour" class="alignmentBox">			
                <option value="0" selected>No Armour</option>
				<option value="1">Padded armour</option>
				<option value="2">Leather armour</option>
				<option value="3">Studded leather armour</option>
				<option value="4">Hide armour</option>
				<option value="5">Scale mail armour</option>
				<option value="6">Chainmail armour</option>
				<option value="7">Banded mail armour</option>
				<option value="8">Half-plate armour</option>
				<option value="9">Full plate armour</option>
			  </select>

        <br/>
        <br/>
        
                  
        <div class="formIputDescriptionLankhmar">
           <span class="footnote3"><input type="checkbox" id="checkBoxShield" value="1" name="theCheckBoxShield">Add Shield</span>
           </div>

           

           <br/>
                
           
            <span class="formIputDescriptionLankhmar">Lucky Weapon:</span>	
			  <select id="luckyWeapon" name="theLuckyWeapon" class="alignmentBox">			
				<option value="Battleaxe" selected>Battleaxe</option>
				<option value="Crossbow">Crossbow</option>
				<option value="Flail">Flail</option>
				<option value="Handaxe">Handaxe</option>
				<option value="Javelin">Javelin</option>
				<option value="Lance">Lance</option>
				<option value="Longbow">Longbow</option>
				<option value="Longsword">Longsword</option>
				<option value="Mace">Mace</option>
				<option value="Polearm">Polearm</option>
				<option value="Shortbow">Shortbow</option>
				<option value="Short sword">Short sword</option>
				<option value="Sling">Sling</option>
				<option value="Spear">Spear</option>
				<option value="Staff">Staff</option>
				<option value="Two-handed sword">Two-handed sword</option>
				<option value="Warhammer">Warhammer</option>
			  </select>
            

            
        <br/>
        <br/>
                           
        <span class="formIputDescriptionLankhmar">Wealth:</span>	
			  <select id="wealth" name="theWealth" class="alignmentBox">	
				<option value="0" selected>Modest (4d8 ss, 3d8 cp & 3d6 ba)</option>
				<option value="1">Poor (4d8 ba & 3d20 it)</option>
				<option value="2">Comfortable (2d6 gr, 3d6 ss & 4d6 cp)</option>
				<option value="3">Well-to-do (3d20 gr, 4d8 ss & 4d6 cp)</option>
				<option value="4">Prosperous (1 dg, 3d20 gr & 4d8 ss)</option>
        </select>
            
            <br/>
            <br/>
        
                

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupings">
                <input type="checkbox" name="theWeapons[]" value="0"> Battleaxe<br/>
                <input type="checkbox" name="theWeapons[]" value="1"> Blackjack<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Blowgun<br/>  
                <input type="checkbox" name="theWeapons[]" value="3"> Club<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Crossbow<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Dart<br/> 
                <input type="checkbox" name="theWeapons[]" value="7"> Flail<br/>  
                <input type="checkbox" name="theWeapons[]" value="8"> Garrote<br/> 
                <input type="checkbox" name="theWeapons[]" value="9"> Handaxe<br/> 
                <input type="checkbox" name="theWeapons[]" value="10"> Javelin<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Lance<br/> 
                <input type="checkbox" name="theWeapons[]" value="12"> Longbow<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Longsword<br/> 
                <input type="checkbox" name="theWeapons[]" value="14"> Mace<br/> 
                <input type="checkbox" name="theWeapons[]" value="15"> Polearm<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Shortbow<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Short sword<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Sling<br/> 
                <input type="checkbox" name="theWeapons[]" value="19"> Spear<br/> 
                <input type="checkbox" name="theWeapons[]" value="20"> Staff<br/> 
                <input type="checkbox" name="theWeapons[]" value="21"> Two-handed sword<br/> 
                <input type="checkbox" name="theWeapons[]" value="22"> Warhammer<br/> 
                
                
                </div>
                <br/>
                <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupings">
                <span class="weaponSubHead">Equipment:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="0"> Backpack<br/>
                <input type="checkbox" name="theGear[]" value="1"> Candle<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Chain, 10'<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Chalk, 12 pieces<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Chest, empty<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Crowbar<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Flask, empty<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Flint & steel<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Grappling hook<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Hammer, small<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Holy symbol<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Holy water, 1 vial<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Iron spikes, dozen<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Mirror, hand-sized<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Oil, 1 flask<br/>
                <input type="checkbox" name="theGear[]" value="16"> Pole, 10-foot<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Rations, 5 days<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Rope, 50'<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Sack, large<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Sack, small<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Thieves' tools<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Torches, 12<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Waterskin<br/> 
                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="24"> Arrows, 20<br/>  
                <input type="checkbox" name="theGear[]" value="25"> Silver arrows, 5<br/>   
                <input type="checkbox" name="theGear[]" value="26"> Quarrels, 20<br/>   
                <input type="checkbox" name="theGear[]" value="27"> Sling stones, 30<br/>  
                </div>
                
                <br/>
                <br/>

            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>

            <br/>
            <br/>
            <br/>
            <br/>
            

            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#WarriorForm").attr('action', "character/dccWarrior.php");
    
                    });
                    
                </script>
        
                
                
      
                
 
                
    </section>


</body>
</html>