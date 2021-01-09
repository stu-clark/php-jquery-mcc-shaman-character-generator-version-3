<?php

/*Shaman*/

function getAttackBonus($level)
{
  $attacBonus = 0;
  
  if($level >= 2 && $level <= 4)
  {
      $attacBonus = 1;
  }
  
  if($level >= 5 && $level <= 6)
  {
      $attacBonus = 2;
  }
  
  if($level >= 7 && $level <= 8)
  {
      $attacBonus = 3;
  }

  if($level >= 9 && $level <= 10)
  {
      $attacBonus = 4;
  }

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

  $fort = 1;

  
  if($level >= 6 && $level <= 8)
  {
      $fort = 2;
  }

  if($level >= 9 && $level <= 10)
  {
      $fort = 3;
  }

  return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }

    if($level == 5)
    {
        $will = 3;
    }


    if($level >= 6 && $level <= 7)
    {
        $will = 4;
    }

    
    if($level >= 8 && $level <= 9)
    {
        $will = 5;
    }

    if($level == 10)
    {
        $will = 6;
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

    if($level >= 7 && $level >= 9)
    {
        $actionDice = "1d20 (x2)";
    }

    if($level == 10)
    {
        $actionDice = "1d20 (x3)";
    }



    return $actionDice;
}



function criticalDie($level)
{
    $critical = "";

    switch ($level)
    {
            case 1:
                $critical = "1d6/I";
                break;

            case 2:
                $critical = "1d6/I";
                break;
      
            case 3:
            $critical = "1d8/I";
            break;

            case 4:
                $critical = "1d8/I";
                break;
      
            case 5:
                $critical = "1d10/I";
                break;

            case 6:
                $critical = "1d10/I";
                break;
      
            case 7:
            $critical = "1d12/I";
            break;
            
            case 8:
                $critical = "1d12/I";
                break;
      
            case 9:
            $critical = "1d14/I";
            break;
            
            case 10:
                $critical = "1d14/I";
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
            $title = "Acolyte";
        }
        else if($level == 2)
        {
            $title = "Adept";
        }
        else if($level == 3)
        {
            $title = "Shaman";
        }
        else if($level == 4)
        {
            $title = "Seer-Shaman";
        }
        else if($level == 5)
        {
            $title = "High-Shaman";
        }
        else
        {
            $title = "Shaman Supreme";
        }

return $title;

}

function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = 3;
          break;
          
        case 2:
            $bonus = 4;
          break;
          
        case 3:
            $bonus = 5;
          break;

        case 4:
            $bonus = 6;
          break;
          
        case 5:
            $bonus = 7;
          break;
          
        case 6:
            $bonus = 8;
          break;

          case 7:
            $bonus = 9;
          break;
          
        case 8:
            $bonus = 10;
          break;
          
        case 9:
            $bonus = 11;
          break;
          
        case 10:
            $bonus = 12;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}


function getMaxWetwareLevel($level)
{
    $bonus = '';

    switch ($level) 
    {
        case 1:
            $bonus = '1';
          break;
          
        case 2:
            $bonus = '1';
          break;
          
        case 3:
            $bonus = '2';
          break;

        case 4:
            $bonus = '2';
          break;
          
        case 5:
            $bonus = '3';
          break;
          
        case 6:
            $bonus = '3';
          break;

          case 7:
            $bonus = '4';
          break;
          
        case 8:
            $bonus = '4';
          break;
          
        case 9:
            $bonus = '5';
          break;
          
        case 10:
            $bonus = '5';
          break;
          
        default:
            $bonus = '000';
      } 

    return $bonus;
}


?>