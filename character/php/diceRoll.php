<?php
/*Die Roll */

function diceRollOldSchool()
{
    $ability = rand(1,6) + rand(1,6) + rand(1,6);

    return $ability;
}

function diceRoll4D6()
{
    $abilityArray = array();

    for($i = 0; $i < 4; ++$i)
    {
        $die = rand(1, 6);

        array_push($abilityArray, $die);
    }

    sort($abilityArray);

    $abilityScore = $abilityArray[1] + $abilityArray[2] + $abilityArray[3];
    
    return $abilityScore;
}


function diceRollArray($choice)
{
    $abilityScores = array();

    if($choice == '1')
    {
        for($i = 0; $i < 6; ++$i)
        {
            $stat = diceRollOldSchool();

            array_push($abilityScores, $stat);
        }
    }

    if($choice == '2')
    {
        for($i = 0; $i < 6; ++$i)
        {
            $stat = diceRoll4D6();

            array_push($abilityScores, $stat);
        }
    }

    return $abilityScores;
}


?>