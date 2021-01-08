<?php

/*Rover*/

function getMeleeAttackBonus($level)
{
  $attacBonus = 0;
  
  if($level == 2)
  {
      $attacBonus = 1;
  }
  
  if($level >= 3 && $level <= 4)
  {
      $attacBonus = 2;
  }
  
  if($level == 5)
  {
      $attacBonus = 3;
  }
  
  if($level == 6)
  {
      $attacBonus = 4;
  }

  if($level >= 7 && $level <= 8)
  {
      $attacBonus = 5;
  }

  if($level == 9)
  {
      $attacBonus = 6;
  }
  
  if($level == 10)
  {
      $attacBonus = 7;
  }


  return $attacBonus;
}


function getMissileAttackBonus($level)
{
  $attacBonus = $level;

  return $attacBonus;
}


function savingThrowReflex($level)
{
    $reflex = 1;

    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level == 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{

  $fort = $level;

  return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }

    if($level >= 5 && $level <= 6)
    {
        $will = 3;
    }

    
    if($level >= 7 && $level <= 9)
    {
        $will = 4;
    }

    if($level == 10)
    {
        $will = 5;
    }

    return $will;

}



function actionDice($level)
{
    $actionDice = "";

    if($level <= 4)
    {
        $actionDice = "1d20";
    }

    if($level == 5)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 7)
    {
        $actionDice = "1d20 (x2)";
    }


    return $actionDice;
}



function criticalDie($level)
{
    $critical = "";

    switch ($level)
    {
            case 1:
                $critical = "1d10/II";
                break;

            case 2:
                $critical = "1d12/II";
                break;
      
            case 3:
            $critical = "1d14/II";
            break;

            case 4:
                $critical = "1d16/II";
                break;
      
            case 5:
                $critical = "1d20/II";
                break;

            case 6:
                $critical = "1d24/II";
                break;
      
            case 7:
            $critical = "1d30/II";
            break;
            
            case 8:
                $critical = "1d30+2/II";
                break;
      
            case 9:
            $critical = "1d30+4/II";
            break;
            
            case 10:
                $critical = "1d30+6/II";
                break;
      
            default:
            $critical = "99999";
    }

    return $critical;

}

function title($level)
{

        if($level == 1)
        {
            $title = "Tenderfoot";
        }
        else if($level == 2)
        {
            $title = "Trailwalker";
        }
        else if($level == 3)
        {
            $title = "Pathfinder";
        }
        else if($level == 4)
        {
            $title = "Explorer";
        }
        else if($level == 5)
        {
            $title = "Rover";
        }
        else
        {
            $title = "Alpha-Rover";
        }

return $title;

}

function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = 2;
          break;
          
        case 2:
            $bonus = 3;
          break;
          
        case 3:
            $bonus = 4;
          break;

        case 4:
            $bonus = 5;
          break;
          
        case 5:
            $bonus = 5;
          break;
          
        case 6:
            $bonus = 6;
          break;

          case 7:
            $bonus = 7;
          break;
          
        case 8:
            $bonus = 8;
          break;
          
        case 9:
            $bonus = 9;
          break;
          
        case 10:
            $bonus = 10;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}


function getRoverSpecialAbility($level)
{
    $bonus = '';

    switch ($level) 
    {
        case 1:
            $bonus = '+1';
          break;
          
        case 2:
            $bonus = '+3';
          break;
          
        case 3:
            $bonus = '+5';
          break;

        case 4:
            $bonus = '+7';
          break;
          
        case 5:
            $bonus = '+8';
          break;
          
        case 6:
            $bonus = '+9';
          break;

          case 7:
            $bonus = '+10';
          break;
          
        case 8:
            $bonus = '+11';
          break;
          
        case 9:
            $bonus = '+12';
          break;
          
        case 10:
            $bonus = '+13';
          break;
          
        default:
            $bonus = '000';
      } 

    return $bonus;
}


?>