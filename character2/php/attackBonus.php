<?php


function attackBonus ($level)
{
    $toHit = 1;
    
    if($level >= 4 && $level <= 5)
    {
        $toHit = 2;
    }
    else if($level >= 6 && $level <= 8)
    {
        $toHit = 3;
    }
    else if($level >= 9 && $level <= 12)
    {
        $toHit = 4;
    }
    else if($level >= 13 && $level <= 15)
    {
        $toHit = 5;
    }
    else if($level >= 16 && $level <= 18)
    {
        $toHit = 6;
    }
    else if($level >= 19 && $level <= 20)
    {
        $toHit = 7;
    }
    
    return $toHit;
}


?>