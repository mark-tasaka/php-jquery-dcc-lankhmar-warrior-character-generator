# php-jquery-dcc-lankhmar-warrior-character-generator
The Dungeon Crawl Classics Lanhkmar Warrior Character Generator is designed primarily with PHP and jQuery/JavaScript. The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet. When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet. Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible. 

Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling. In this way, this program replicates Object-Oriented design. JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.


Update 1.02 (2020-07-04):  A new file, diceRoll.php, added.  Code updated.

Update 1.01 (2020-07-03):  A 'work-in progress' working iteration of the DCC Lankhmar Warrior Character Generator has been added.

Initial Commit (2020-07-03):  The responsitory has been created.  File containing code will be added shortly.
