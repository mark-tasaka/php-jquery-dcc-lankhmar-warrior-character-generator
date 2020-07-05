<?php
/*Die Roll */

function dieRoll()
{
    $ability = rand(1,6) + rand(1,6) + rand(1,6);

    return $ability;
}


function dieRollArray()
{
    $abilityScores = array();

    for($i = 0; $i < 6; ++$i)
    {
        $stat = dieRoll();

        array_push($abilityScores, $stat);
    }

    return $abilityScores;
}


?>