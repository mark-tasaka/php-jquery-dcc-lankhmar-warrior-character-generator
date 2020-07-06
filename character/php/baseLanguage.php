<?php
/*Base Language*/


function getModifiedChoice($choice)
{
    if($choice == "0")
    {
        return 0;
    }
    
    if($choice == "1")
    {
        return 1;
    }
    
    if($choice == "2")
    {
        return 2;
    }
    
    if($choice == "3")
    {
        $number = rand(0, 1);

        if($number == 0)
        {
            return 3;
        }
        else
        {
            return 4;
        }
    }
    
    if($choice == "4")
    {
        return 5;
    }
}
                
function getBaseLanguage ($choiceMod)
{
    $language = '';

    if($choiceMod == 0)
    {
        $language = 'Lankhmarese (High)';
    }

    if($choiceMod == 1)
    {
        $language = 'Kvarchish';
    }

    if($choiceMod == 2)
    {
        $language = 'Northspeak (Cold Tongue)';
    }

    if($choiceMod == 3)
    {
        $language = 'Horborixic';
    }

    if($choiceMod == 4)
    {
        $language = 'Desert-Talk';
    }

    if($choiceMod == 5)
    {
        $language = 'Mingol';
    }

    return $language;

}


?>