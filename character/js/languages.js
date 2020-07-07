/*
addBonusLanguages() - returns Randomly selected WARRIOR Bonus Languages
*/
function addBonusLanguages() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Horborixic"},
		{"language": "Desert-Talk"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}
	

/*Lankhmar*/
function addBonusLanguagesLankhmar() {
	var bonusLanguages = [
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Horborixic"},
		{"language": "Desert-Talk"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

/*Land of the Eight Cities*/ 
function addBonusLanguagesEightCities() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Horborixic"},
		{"language": "Desert-Talk"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

/*Cold Waste */ 
function addBonusLanguagesColdWaste() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Horborixic"},
		{"language": "Desert-Talk"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

/*Eastern Lands 1*/
function addBonusLanguagesEasternLands1() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Desert-Talk"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

/*Eastern Lands 2 */
function addBonusLanguagesEasternLands2() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Mingol"},
		{"language": "Horborixic"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

/*Mingol Steppes*/
function addBonusLanguagesMingol() {
	var bonusLanguages = [
		{"language": "Lankhmarese (High)"},
		{"language": "Ilthmarish"},
		{"language": "Horborixic"},
		{"language": "Desert-Talk"},
		{"language": "Northspeak (Cold Tongue)"},
		{"language": "Kvarchish"},
		{"language": "Quarmallian"},
		{"language": "Kleshic"},
		{"language": "Old Ghoulish"},
		{"language": "Kiraayan"},
		{"language": "Eevamarensee"},
		{"language": "Simorgyan"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}
		
	  
/*
getBonusLanguages() returns the bonus languages that a character may have due to high intelligence or the Lucky Sign of Bird Song.  A for loop is used to prevent duplicates of languages.
*/
function getBonusLanguages (intelligenceModifier, luckySign, luckModifier, modChoice) {
	var bonusLanguages = 0;
	var result = "";
	if(bonusLanguages  != undefined && typeof bonusLanguages === 'number') {
		bonusLanguages = intelligenceModifier;
	}
	else {
		return "";
	}
	
	if(luckySign != undefined && luckySign.luckySign === "Birdsong") {
		bonusLanguages += luckModifier;
	}
	
	if(bonusLanguages <=0) {
		return "";
	}

	if(modChoice == "0")
	{
		result = ", " + addBonusLanguagesLankhmar().language;
		

		// loop
		for(var i = 1; i < bonusLanguages; i++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesLankhmar().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				i--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}
	

	if(modChoice == "1")
	{
		
		result = ", " + addBonusLanguagesEightCities().language;

		// loop
		for(var j = 1; j < bonusLanguages; j++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesEightCities().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				j--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}
	
	if(modChoice == "2")
	{
		
		result = ", " + addBonusLanguagesColdWaste().language;

		// loop
		for(var k = 1; k < bonusLanguages; k++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesColdWaste().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				k--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}
	
	if(modChoice == "3")
	{
		
		result = ", " + addBonusLanguagesEasternLands1().language;

		// loop
		for(var l = 1; l < bonusLanguages; l++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesEasternLands1().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				l--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}
	
	if(modChoice == "4")
	{
		
		result = ", " + addBonusLanguagesEasternLands2().language;

		// loop
		for(var m = 1; m < bonusLanguages; m++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesEasternLands2().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				m--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}
	
	if(modChoice == "5")
	{
		
		result = ", " + addBonusLanguagesMingol().language;

		// loop
		for(var n = 1; n < bonusLanguages; n++)
		{
			// 1) get a random lang
			newLanguage = addBonusLanguagesMingol().language;
			// 2) check the new lang is not repeative
			if(result.indexOf(newLanguage) != -1)
			{
				n--;
				// if yes continue;
				continue;
			} else
			{
				// if not, add the new lang into the result
				result += ", " + newLanguage;
			}

		}
	}

	return result;
}