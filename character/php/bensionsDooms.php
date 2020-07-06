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


?>