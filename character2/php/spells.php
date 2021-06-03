<?php

function level1Spells ($level)
{
    $spells = "-";
    
    if($level == 1)
    {
        $spells = "1";
    }
    else if($level >= 2 && $level <= 5)
    {
        $spells = "2";
    }
    else if($level >= 6 && $level <= 9)
    {
        $spells = "3";
    }
    else if($level >= 10 && $level <= 14)
    {
        $spells = "4";
    }
    else if($level >= 15 && $level <= 17)
    {
        $spells = "5";
    }
    else if($level >= 18)
    {
        $spells = "6";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level2Spells ($level)
{
    $spells = "-";
    
    if($level == 3)
    {
        $spells = "1";
    }
    else if($level >= 4 && $level <= 7)
    {
        $spells = "2";
    }
    else if($level >= 8 && $level <= 10)
    {
        $spells = "3";
    }
    else if($level >= 11 && $level <= 15)
    {
        $spells = "4";
    }
    else if($level >= 16)
    {
        $spells = "5";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level3Spells ($level)
{
    $spells = "-";
    
    if($level == 5)
    {
        $spells = "1";
    }
    else if($level >= 6 && $level <= 9)
    {
        $spells = "2";
    }
    else if($level >= 10 && $level <= 12)
    {
        $spells = "3";
    }
    else if($level >= 13 && $level <= 18)
    {
        $spells = "4";
    }
    else if($level >= 19)
    {
        $spells = "5";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level4Spells ($level)
{
    $spells = "-";
    
    if($level == 7)
    {
        $spells = "1";
    }
    else if($level >= 8 && $level <= 11)
    {
        $spells = "2";
    }
    else if($level >= 12 && $level <= 16)
    {
        $spells = "3";
    }
    else if($level >= 17)
    {
        $spells = "4";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level5Spells ($level)
{
    $spells = "-";
    
    if($level == 9)
    {
        $spells = "1";
    }
    else if($level >= 10 && $level <= 13)
    {
        $spells = "2";
    }
    else if($level >= 14 && $level <= 19)
    {
        $spells = "3";
    }
    else if($level >= 20)
    {
        $spells = "4";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}


function level6Spells ($level)
{
    $spells = "-";
    
    if($level == 11)
    {
        $spells = "1";
    }
    else if($level >= 12 && $level <= 16)
    {
        $spells = "2";
    }
    else if($level >= 17)
    {
        $spells = "3";
    }
    else
    {
        $spells = "-";
    }
    
    return $spells;
    
}




?>