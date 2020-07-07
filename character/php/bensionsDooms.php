<?php
/*Bension and Dooms*/

function lankhmarBension ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $bension = array(
        'Well-Heeled',
        'Trusted Contact',
        'Knows a Secret',
        'Stored Goods',
        'Gambler',
        'Immigrant Upbringing',
        'Minor Ally',
        'Noble Birth',
        'Good Reputation in Certain Circles',
        'Major Ally',
        'Urban Affinity',
        'Magic Scroll',
        'Gifted',
        'Split Soul Hero',
        'Two-Weapon Fighter',
        'Agent of a Supernatural Entity',
        'Accepted Freelance Thief',
        'Former Wizard’s Pupil',
        'Martial Training',
        'Skilled in the Criminal Arts'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $bension[$roll];

}


function eightCitiesBension ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $bension = array(
        'Well-Heeled',
        'Trusted Contact',
        'Knows a Secret',
        'Stored Goods',
        'Healer',
        'Owns a Ship',
        'Sea-Crafty',
        'Minor Ally',
        'Good Reputation in Certain Circles',
        'Forest Fighter',
        'Major Ally',
        'Excellent Outdoorsman',
        'Tough',
        'Former Gladiator',
        'Split Soul Hero',
        'Agent of a Supernatural Entity',
        'Two-Weapon Fighter',
        'Martial Training',
        'Skilled in the Criminal Arts',
        'Former Wizard’s Pupil'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $bension[$roll];

}


function coldWasteBension ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $bension = array(
        'Well-Heeled',
        'Knows a Secret',
        'Direction Wise',
        'Healer',
        'Mountaineer',
        'Pirate Raid Veteran',
        'Owns a Ship',
        'Tough',
        'Major Ally',
        'Berserker',
        'Excellent Outdoorsman',
        'Roaring Skald',
        'Singing Skald',
        'Split Soul Hero',
        'Two-Weapon Fighter',
        'Agent of a Supernatural Entity',
        'Premonitions',
        'Martial Training',
        'Former Wizard’s Pupil',
        'Skilled in the Criminal Arts'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $bension[$roll];

}


function easternLandsBension ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $bension = array(
        'Well-Heeled',
        'Trusted Contact',
        'Stored Goods',
        'Good Reputation in Certain Circles',
        'Knows a Secret',
        'Artificer’s Gift',
        'Minor Ally',
        'Healer',
        'Storyteller',
        'Immigrant Upbringing',
        'Major Ally',
        'Tough',
        'Magic Scroll',
        'Agent of a Supernatural Entity',
        'Split Soul Hero',
        'Fire Magician',
        'Two-Weapon Fighter',
        'Former Wizard’s Pupil',
        'Skilled in the Criminal Arts',
        'Martial Training'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $bension[$roll];

}



function mingolSteppesBension ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $bension = array(
        'Direction Wise',
        'Stored Goods',
        'Fearless',
        'Mingol Bow',
        'Owns a Horse',
        'Sea-Crafty',
        'Kin to Horses',
        'Tough',
        'Survivor',
        'Senses the Supernatural*',
        'Excellent Outdoorsman',
        'Major Ally',
        'Premonitions',
        'Two-Weapon Fighter',
        'Glorious Doom',
        'Agent of a Supernatural Entity',
        'Split Soul Hero',
        'Martial Training',
        'Former Wizard’s Pupil',
        'Skilled in the Criminal Arts'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $bension[$roll];

}


function getBension($choice, $luckMod)
{
    $bension = '';

    if($choice == '0')
    {
        $bension = lankhmarBension ($luckMod);
    }

    if($choice == '1')
    {
        $bension = eightCitiesBension ($luckMod);
    }

    if($choice == '2')
    {
        $bension = coldWasteBension ($luckMod);
    }

    if($choice == '3')
    {
        $bension = easternLandsBension ($luckMod);
    }

    if($choice == '4')
    {
        $bension = mingolSteppesBension ($luckMod);
    }

    return $bension;
}


function lankhmarDooms ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $doom = array(
        'Distinctive Appearance',
        'Poverty-Stricken',
        'Owes a Minor Favour',
        'Illiterate',
        'Dependent ',
        'Minor Foe',
        'In Debt',
        'Blackmailed ',
        'Bad Reputation in Certain Circles',
        'Owes a Major Favour',
        'Major Foe',
        'Outcast',
        'Inept',
        'Magically Corrupted',
        'Hindered',
        'Enmity of the Slayers’ Brotherhood',
        'Cursed',
        'Geased ',
        'Hatred of a Supernatural Entity',
        'Wanted by the Thieves’ Guild'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $doom[$roll];

}


function eightCitiesDooms ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $doom = array(
        'Illiterate',
        'Distinctive Appearance',
        'Poverty-Stricken',
        'Owes a Minor Favour',
        'Dependent',
        'In Debt',
        'Blackmailed',
        'Minor Foe',
        'Bad Reputation in Certain Circles',
        'Inept',
        'Outcast',
        'Owes a Major Favour',
        'Major Foe',
        'Hindered',
        'Magically Corrupted',
        'Geased',
        'Tainted Bloodline',
        'Cursed',
        'Hatred of a Supernatural Entity',
        'Escaped Gladiator'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $doom[$roll];

}


function coldWasteDooms ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $doom = array(
        'Distinctive Appearance',
        'Poverty-Stricken',
        'Illiterate',
        'Prone to Seasickness',
        'Dependent ',
        'Minor Foe',
        'Owes a Minor Favour',
        'Blackmailed ',
        'Bad Reputation in Certain Circles',
        'Superstitious',
        'Outcast',
        'Owes a Major Favour',
        'Inept',
        'Major Foe',
        'Hindered',
        'Uncivilized',
        'Magically Corrupted',
        'Geased ',
        'Cursed',
        'Hatred of a Supernatural Entity'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $doom[$roll];

}



function easternLandsDooms ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $doom = array(
        'Distinctive Appearance',
        'Poverty-Stricken',
        'Illiterate',
        'Dependent ',
        'Owes a Minor Favour',
        'Minor Foe',
        'Blackmailed ',
        'Bad Reputation in Certain Circles',
        'In Debt',
        'Outcast',
        'Inept',
        'Owes a Major Favour',
        'Major Foe',
        'Magically Corrupted',
        'Hindered',
        'Eunuch',
        'Cursed',
        'Hatred of a Supernatural Entity',
        'Geased ',
        'Blood Price on PC’s Head'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $doom[$roll];

}



function mingolSteppesDooms ($luckMod)
{
    $roll = ( rand(0, 19) ) + $luckMod;

    $doom = array(
        'Distinctive Appearance',
        'Illiterate',
        'Poor Rider',
        'Poverty-Stricken',
        'Superstitious',
        'Bad Reputation in Certain Circles',
        'Owes a Minor Favour',
        'In Debt',
        'Minor Foe',
        'Inept',
        'Owes a Major Favour',
        'Outcast',
        'Major Foe',
        'Hindered',
        'Magically Corrupted',
        'Uncivilized',
        'Cursed',
        'Hatred of a Supernatural Entity',
        'Tainted Bloodline',
        'Inglorious Doom'
    );

    if($roll < 0)
    {
        $roll = 0;
    }

    if($roll > 19)
    {
        $roll = 19;
    }

    return $doom[$roll];

}


function getDoom($choice, $luckMod)
{
    $doom = '';

    if($choice == '0')
    {
        $doom = lankhmarDooms ($luckMod);
    }

    if($choice == '1')
    {
        $doom = eightCitiesDooms ($luckMod);
    }

    if($choice == '2')
    {
        $doom = coldWasteDooms ($luckMod);
    }

    if($choice == '3')
    {
        $doom = easternLandsDooms ($luckMod);
    }

    if($choice == '4')
    {
        $doom = mingolSteppesDooms ($luckMod);
    }

    return $doom;
}


?>