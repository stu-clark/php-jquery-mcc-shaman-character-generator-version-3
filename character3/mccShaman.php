<!DOCTYPE html>
<html>
<head>
<title>Mutant Crawl Classics Shaman Character Generator Version 3</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Mutant Crawl Classics shaman Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Mutant Crawl Classics, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/favicon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/shaman.css">
    
    
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/luckySign.js"></script>
    <script type="text/javascript" src="./js/adjustments.js"></script>
    <script type="text/javascript" src="./js/languages.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/xp.php';
    include 'php/artifacts.php';
    include 'php/profession.php';
    include 'php/wetwareProgram.php';
    include 'php/alternativeWetware.php';
    

        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }

        
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
    
        }
        
        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }


        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 

        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 

        $xpNextLevel = getXPNextLevel ($level);
        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        if(isset($_POST['theChecklternativeWetware']) && $_POST['theChecklternativeWetware'] == 1) 
        {
            $characterSheet = "images/shamanA.png";
            $alternativeCheck = 1;

            $patronBondRandom = rand(0, 2);

            $level1WetwareRandArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
            shuffle($level1WetwareRandArray);

            
            if($patronBondRandom == 0)
            {
                
                $wetwareProgramLevelA1Patron = array();
                
                $wetwareProgramLevelA1Patron = alternatePatronBond(0);

                $programNameA1Patron = $wetwareProgramLevelA1Patron[1];
                $programLevelA1Patron = $wetwareProgramLevelA1Patron[0];
                $programRangeA1Patron = $wetwareProgramLevelA1Patron[2];
                $programDurationA1Patron = $wetwareProgramLevelA1Patron[3];
                $programActivationA1Patron = $wetwareProgramLevelA1Patron[4];
                $programSaveA1Patron = $wetwareProgramLevelA1Patron[5];
                $programPageA1Patron = $wetwareProgramLevelA1Patron[6];
                $programManifestA1Patron = $wetwareProgramLevelA1Patron[7];

                $wetwareProgramLevelA1Patron2 = array();
    
                $wetwareProgramLevelA1Patron2 = alternatePatronBond(1);
            
                $programNameA1Patron2 = $wetwareProgramLevelA1Patron2[1];
                $programLevelA1Patron2 = $wetwareProgramLevelA1Patron2[0];
                $programRangeA1Patron2 = $wetwareProgramLevelA1Patron2[2];
                $programDurationA1Patron2 = $wetwareProgramLevelA1Patron2[3];
                $programActivationA1Patron2 = $wetwareProgramLevelA1Patron2[4];
                $programSaveA1Patron2 = $wetwareProgramLevelA1Patron2[5];
                $programPageA1Patron2 = $wetwareProgramLevelA1Patron2[6];
                $programManifestA1Patron2 = $wetwareProgramLevelA1Patron2[7];

            }
            else
            {
                $wetwareProgramLevelA1 = array();
    
                $wetwareProgramLevelA1 = alternateWetwareLevel1($level1WetwareRandArray[0]);
    
                $programNameA1 = $wetwareProgramLevelA1[1];
                $programLevelA1 = $wetwareProgramLevelA1[0];
                $programRangeA1 = $wetwareProgramLevelA1[2];
                $programDurationA1 = $wetwareProgramLevelA1[3];
                $programActivationA1 = $wetwareProgramLevelA1[4];
                $programSaveA1 = $wetwareProgramLevelA1[5];
                $programPageA1 = $wetwareProgramLevelA1[6];
    
                $programManifestA1 = alternateWetwareManifestLevel1($level1WetwareRandArray[0]);
                
            }



            if($level >= 2)
            {
                $wetwareProgramLevelA1b = array();
    
                $wetwareProgramLevelA1b = alternateWetwareLevel1($level1WetwareRandArray[1]);
    
                $programNameA1b = $wetwareProgramLevelA1b[1];
                $programLevelA1b = $wetwareProgramLevelA1b[0];
                $programRangeA1b = $wetwareProgramLevelA1b[2];
                $programDurationA1b = $wetwareProgramLevelA1b[3];
                $programActivationA1b = $wetwareProgramLevelA1b[4];
                $programSaveA1b = $wetwareProgramLevelA1b[5];
                $programPageA1b = $wetwareProgramLevelA1b[6];
    
                $programManifestA1b = alternateWetwareManifestLevel1($level1WetwareRandArray[1]);
                
            }

            
            $level2WetwareRandArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            shuffle($level2WetwareRandArray);

            if($level >= 3)
            {
                $wetwareProgramLevelA2 = alternateWetwareLevel2($level2WetwareRandArray[0]);

                $programNameA2 = $wetwareProgramLevelA2[1];
                $programLevelA2 = $wetwareProgramLevelA2[0];
                $programRangeA2 = $wetwareProgramLevelA2[2];
                $programDurationA2 = $wetwareProgramLevelA2[3];
                $programActivationA2 = $wetwareProgramLevelA2[4];
                $programSaveA2 = $wetwareProgramLevelA2[5];
                $programPageA2 = $wetwareProgramLevelA2[6];
    
                $programManifestA2 = alternateWetwareManifestLevel2($level2WetwareRandArray[0]);
            }


            if($level >= 4)
            {
                $wetwareProgramLevelA2b = alternateWetwareLevel2($level2WetwareRandArray[1]);

                $programNameA2b = $wetwareProgramLevelA2b[1];
                $programLevelA2b = $wetwareProgramLevelA2b[0];
                $programRangeA2b = $wetwareProgramLevelA2b[2];
                $programDurationA2b = $wetwareProgramLevelA2b[3];
                $programActivationA2b = $wetwareProgramLevelA2b[4];
                $programSaveA2b = $wetwareProgramLevelA2b[5];
                $programPageA2b = $wetwareProgramLevelA2b[6];
    
                $programManifestA2b = alternateWetwareManifestLevel2($level2WetwareRandArray[1]);
                
            }

            $level3WetwareRandArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
            shuffle($level3WetwareRandArray);

            if($level >= 5)
            {
                $wetwareProgramLevelA3 = alternateWetwareLevel3($level3WetwareRandArray[0]);

                $programNameA3 = $wetwareProgramLevelA3[1];
                $programLevelA3 = $wetwareProgramLevelA3[0];
                $programRangeA3 = $wetwareProgramLevelA3[2];
                $programDurationA3 = $wetwareProgramLevelA3[3];
                $programActivationA3 = $wetwareProgramLevelA3[4];
                $programSaveA3 = $wetwareProgramLevelA3[5];
                $programPageA3 = $wetwareProgramLevelA3[6];
    
                $programManifestA3 = alternateWetwareManifestLevel3($level3WetwareRandArray[0]);
            }


            if($level >= 6)
            {
                $wetwareProgramLevelA3b = alternateWetwareLevel3($level3WetwareRandArray[1]);

                $programNameA3b = $wetwareProgramLevelA3b[1];
                $programLevelA3b = $wetwareProgramLevelA3b[0];
                $programRangeA3b = $wetwareProgramLevelA3b[2];
                $programDurationA3b = $wetwareProgramLevelA3b[3];
                $programActivationA3b = $wetwareProgramLevelA3b[4];
                $programSaveA3b = $wetwareProgramLevelA3b[5];
                $programPageA3b = $wetwareProgramLevelA3b[6];
    
                $programManifestA3b = alternateWetwareManifestLevel3($level3WetwareRandArray[1]);
                
            }

            $level4WetwareRandArray = array(0, 1, 2, 3, 4);
            shuffle($level4WetwareRandArray);

            if($level >= 7)
            {
                $wetwareProgramLevelA4 = alternateWetwareLevel4($level4WetwareRandArray[0]);

                $programNameA4 = $wetwareProgramLevelA4[1];
                $programLevelA4 = $wetwareProgramLevelA4[0];
                $programRangeA4 = $wetwareProgramLevelA4[2];
                $programDurationA4 = $wetwareProgramLevelA4[3];
                $programActivationA4 = $wetwareProgramLevelA4[4];
                $programSaveA4 = $wetwareProgramLevelA4[5];
                $programPageA4 = $wetwareProgramLevelA4[6];
    
                $programManifestA4 = alternateWetwareManifestLevel4($level4WetwareRandArray[0]);
            }


            if($level >= 8)
            {
                $wetwareProgramLevelA4b = alternateWetwareLevel4($level4WetwareRandArray[1]);

                $programNameA4b = $wetwareProgramLevelA4b[1];
                $programLevelA4b = $wetwareProgramLevelA4b[0];
                $programRangeA4b = $wetwareProgramLevelA4b[2];
                $programDurationA4b = $wetwareProgramLevelA4b[3];
                $programActivationA4b = $wetwareProgramLevelA4b[4];
                $programSaveA4b = $wetwareProgramLevelA4b[5];
                $programPageA4b = $wetwareProgramLevelA4b[6];
    
                $programManifestA4b = alternateWetwareManifestLevel4($level4WetwareRandArray[1]);
                
            }

            $level5WetwareRandArray = array(0, 1, 2);
            shuffle($level5WetwareRandArray);

            if($level >= 9)
            {
                $wetwareProgramLevelA5 = alternateWetwareLevel5($level5WetwareRandArray[0]);

                $programNameA5 = $wetwareProgramLevelA5[1];
                $programLevelA5 = $wetwareProgramLevelA5[0];
                $programRangeA5 = $wetwareProgramLevelA5[2];
                $programDurationA5 = $wetwareProgramLevelA5[3];
                $programActivationA5 = $wetwareProgramLevelA5[4];
                $programSaveA5 = $wetwareProgramLevelA5[5];
                $programPageA5 = $wetwareProgramLevelA5[6];
    
                $programManifestA5 = alternateWetwareManifestLevel5($level5WetwareRandArray[0]);
            }


            if($level >= 10)
            {
                $wetwareProgramLevelA5b = alternateWetwareLevel5($level5WetwareRandArray[1]);

                $programNameA5b = $wetwareProgramLevelA5b[1];
                $programLevelA5b = $wetwareProgramLevelA5b[0];
                $programRangeA5b = $wetwareProgramLevelA5b[2];
                $programDurationA5b = $wetwareProgramLevelA5b[3];
                $programActivationA5b = $wetwareProgramLevelA5b[4];
                $programSaveA5b = $wetwareProgramLevelA5b[5];
                $programPageA5b = $wetwareProgramLevelA5b[6];
    
                $programManifestA5b = alternateWetwareManifestLevel5($level5WetwareRandArray[1]);
                
            }




        }
        else
        {
            $characterSheet = "images/shaman.png";
            $alternativeCheck = 0;
        } 



        if(isset($_POST['theCheckRandomPatronAIBox']) && $_POST['theCheckRandomPatronAIBox'] == 1) 
        {
            $patronAiNumber = rand(0, 7);

        }
        else
        {
            $patronAiNumberString = $_POST["thePatronAI"];
            $patronAiNumber = (int)$patronAiNumberString;

        } 

        $patronAI = getPatronAI($patronAiNumber);

        
        if(isset($_POST["theArtifact1V3"]))
        {
            $artifact1 = $_POST["theArtifact1V3"];
        }
    
        /*Bonus to AC value*/
        $acBonusFromArtifact = 0;
            
    
    

        $artifactName1 = getArtifact1($artifact1)[0];
        $artifactCheck1 = getArtifact1($artifact1)[1];
        $artifactEffect1 = getArtifact1($artifact1)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact1 = artifactAcBonus ($artifactName1);
    
    
    
        if(isset($_POST["theArtifact2V3"]))
        {
            $artifact2 = $_POST["theArtifact2V3"];
        }

        $artifactName2 = getArtifact1($artifact2)[0];
        $artifactCheck2 = getArtifact1($artifact2)[1];
        $artifactEffect2 = getArtifact1($artifact2)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact2 = artifactAcBonus ($artifactName2);
    
    
    
        if(isset($_POST["theArtifact3V3"]))
        {
            $artifact3 = $_POST["theArtifact3V3"];
        }

        $artifactName3 = getArtifact1($artifact3)[0];
        $artifactCheck3 = getArtifact1($artifact3)[1];
        $artifactEffect3 = getArtifact1($artifact3)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact3 = artifactAcBonus ($artifactName3);
    
        $totalArtifactAC = $acBonusFromArtifact1 + $acBonusFromArtifact2 + $acBonusFromArtifact3;
    
    
        
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }

        $armourArtifactNumber = getArmourArtifactNumber($armour);

            $artifactName4 = getArtifact1($armourArtifactNumber)[0];
            $artifactCheck4 = getArtifact1($armourArtifactNumber)[1];
            $artifactEffect4 = getArtifact1($armourArtifactNumber)[2];


        $strengthBonusFromArtifact = artifactstrengthbonus ($artifactName4);

        
        $abilityScoreArray = array();
        

        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray, $abilityScore);

        }

        if(isset($_POST['theOptimizeAbilityScore']) && $_POST['theOptimizeAbilityScore'] == 1) 
        {
            rsort($abilityScoreArray);

            $strengthBase = $abilityScoreArray[4];
            $agility = $abilityScoreArray[5];
            $stamina = $abilityScoreArray[3];
            $personality = $abilityScoreArray[1];
            $intelligence = $abilityScoreArray[0];
            $luck = $abilityScoreArray[2];

            $optimizeAbilityScoreMessage = "Ability Scores optimized in the order of Int, Per, Luck, Sta, Str, Agi";
        }
        else
        {
            $strengthBase = $abilityScoreArray[0];
            $agility = $abilityScoreArray[1];
            $stamina = $abilityScoreArray[2];
            $personality = $abilityScoreArray[3];
            $intelligence = $abilityScoreArray[4];
            $luck = $abilityScoreArray[5];
            
            $optimizeAbilityScoreMessage = "";
        } 

        $strength = $strengthBonusFromArtifact + $strengthBase;

        $strengthMod = getStrengthModifier($strength);
        $agilityMod = getAbilityModifier($agility);
        $staminaMod = getAbilityModifier($stamina);
        $personalityMod = getAbilityModifier($personality);
        $intelligenceMod = getAbilityModifier($intelligence);
        $luckMod = getAbilityModifier($luck);
    
        $generationMessage = generationMesssage ($abilityScoreGen);
    
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }

        $armourName = getArmour($armour)[0];
        
        $armourACBonus = getArmour($armour)[1];
        $armourFumbleDie = getArmour($armour)[2];

        if(isset($_POST['theCheckBoxShield']) && $_POST['theCheckBoxShield'] == 1) 
        {
            $shieldName = getArmour(7)[0];
            $shieldACBonus = getArmour(7)[1];
            $shieldFumbleDie = getArmour(7)[2];
        }
        else
        {
            $shieldName = getArmour(8)[0];
            $shieldACBonus = getArmour(8)[1];
            $shieldFumbleDie = getArmour(8)[2];
        } 

       $totalAcDefense = $armourACBonus + $shieldACBonus + $totalArtifactAC;

       $speed = 30;

       $reflexBase = savingThrowReflex($level);
       $fortBase = savingThrowFort($level);
       $willBase = savingThrowWill($level);

       $criticalDie = criticalDie($level);


       $actionDice = actionDice($level);


       $title = title($level);

         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();


    //For Random Select gear
    if(isset($_POST['thecheckBoxRandomWeaponsV3']) && $_POST['thecheckBoxRandomWeaponsV3'] == 1) 
    {
        $weaponArray = getRandomWeapons();

    }
    else
    {
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    }

    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
        $gearArray = array();
        $gearNames = array();



    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();

        $weaponCount = count($weaponArray);
        $hasSling = false;
        $hasSlingStaff = false;

        for($i = 0; $i < $weaponCount; ++$i)
        {
            if($weaponArray[$i] == "18" && $hasSlingStaff == false)
            {
                array_push($gearArray, 25);
                
                $hasSling = true;
            }

            if($weaponArray[$i] == "19" && $hasSling == false)
            {
                array_push($gearArray, 25);

                $hasSlingStaff = true;
            }

            if($weaponArray[$i] == "12")
            {
                array_push($gearArray, 24);
            }


        }

    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGear"]))
            {
                foreach($_POST["theGear"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }


    $artifactCheckBonus = getArtifactCheckBonus($level);

    $artifactCheckBonusPlusInt = $artifactCheckBonus + $intelligenceMod;



    $profession = getProfession();

    $attackBonus = getAttackBonus($level);

    $maxWetwareLevel = getMaxWetwareLevel($level);

    
    $wetwareProgramLevel1 = array();

    $wetwareProgramLevel1 = getWetwareLevel1($patronAiNumber);

    $programName1 = $wetwareProgramLevel1[1];
    $programLevel1 = $wetwareProgramLevel1[0];
    $programRange1 = $wetwareProgramLevel1[2];
    $programDuration1 = $wetwareProgramLevel1[3];
    $programActivation1 = $wetwareProgramLevel1[4];
    $programSave1 = $wetwareProgramLevel1[5];
    $programPage1 = $wetwareProgramLevel1[6];
    $programManifest1 = $wetwareProgramLevel1[7];

    $wetwareProgramLevel2 = array();

    $wetwareProgramLevel2 = getWetwareLevel2($level, $patronAiNumber);

    $programName2 = $wetwareProgramLevel2[1];
    $programLevel2 = $wetwareProgramLevel2[0];
    $programRange2 = $wetwareProgramLevel2[2];
    $programDuration2 = $wetwareProgramLevel2[3];
    $programActivation2 = $wetwareProgramLevel2[4];
    $programSave2 = $wetwareProgramLevel2[5];
    $programPage2 = $wetwareProgramLevel2[6];
    $programManifest2 = $wetwareProgramLevel2[7];

    $wetwareProgramLevel3 = array();

    $wetwareProgramLevel3 = getWetwareLevel3($level, $patronAiNumber);

    $programName3 = $wetwareProgramLevel3[1];
    $programLevel3 = $wetwareProgramLevel3[0];
    $programRange3 = $wetwareProgramLevel3[2];
    $programDuration3 = $wetwareProgramLevel3[3];
    $programActivation3 = $wetwareProgramLevel3[4];
    $programSave3 = $wetwareProgramLevel3[5];
    $programPage3 = $wetwareProgramLevel3[6];
    $programManifest3 = $wetwareProgramLevel3[7];


    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       
           
		<span id="strength"></span>
		<span id="agility"></span> 
		<span id="stamina"></span> 
		<span id="intelligence"></span>
		<span id="personality"></span>
       <span id="luck"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="agilityMod"></span> 
		<span id="staminaMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="personalityMod"></span>
       <span id="luckMod"></span>

       <span id="reflex"></span>
       <span id="fort"></span>
       <span id="will"></span>
		  
       
       <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>
       
       
       <span id="artifactCheck">
           <?php
                if($artifactCheckBonusPlusInt == 0)
                {
                    echo 'd20';
                }
                else if($artifactCheckBonusPlusInt < 0)
                {
                    echo 'd20-1';
                }
                else
                {
                    echo 'd20+' . $artifactCheckBonusPlusInt;
                }
           ?>
       </span>



        <span id="maxTech"></span>

       
       <span id="class">Shaman</span>
       
       <span id="armourClass"></span>

       <span id="baseAC"></span>
       
       <span id="hitPoints"></span>

       <span id="languages"></span>
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="xpNextLevel">
           <?php
                echo $xpNextLevel;
           ?>
        </span>

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>

        
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
       
       
              
         <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
        
        <span id="speed"></span>


       	                 
        <span id="artifactName1">
           <?php
                echo $artifactName1;
           ?>
        </span>
              
       <span id="artifactCheck1">
           <?php
                echo $artifactCheck1;
           ?>
        </span>
              
       <span id="artifactEffect1">
           <?php
                echo $artifactEffect1;
           ?>
        </span>
      
              	                 
       <span id="artifactName2">
           <?php
                echo $artifactName2;
           ?>
        </span>
              
       <span id="artifactCheck2">
           <?php
                echo $artifactCheck2;
           ?>
        </span>
              
       <span id="artifactEffect2">
           <?php
                echo $artifactEffect2;
           ?>
        </span>
      
                     	                 
       <span id="artifactName3">
           <?php
                echo $artifactName3;
           ?>
        </span>
              
       <span id="artifactCheck3">
           <?php
                echo $artifactCheck3;
           ?>
        </span>
              
       <span id="artifactEffect3">
           <?php
                echo $artifactEffect3;
           ?>
        </span>

        <span id="artifactName4">
           <?php
                echo $artifactName4;
           ?>
        </span>
              
       <span id="artifactCheck4">
           <?php
                echo $artifactCheck4;
           ?>
        </span>
              
       <span id="artifactEffect4">
           <?php
                echo $artifactEffect4;
           ?>
        </span>

        
       <span id="patronAI">
           <?php
                echo $patronAI;
           ?>
        </span>

              
       <span id="armourName">
           <?php
           if($armourName == "")
           {
               echo $shieldName;
           }
           else if($shieldName == "")
           {
                echo $armourName;
           }
           else
           {
            echo $armourName . " & " . $shieldName;
           }
           ?>
        </span>

        <span id="armourACBonus">
            <?php
                echo '+' . $totalAcDefense;
            ?>
        </span>


        <span id="fumbleDie">
            <?php
            if($armourName == "")
            {
                echo $shieldFumbleDie;
            }
            else
            {
                echo $armourFumbleDie;
            }
            ?>
        </span>

        <span id="criticalDieTable">
            <?php
                echo $criticalDie;
            ?>
        </span>
        
        <span id="initiative">
        </span>
        
        <span id="actionDice">
            <?php
                echo $actionDice;
            ?>
        </span>

        
        <span id="title">
            <?php
                echo $title;
            ?>
        </span>

        
        
        <span id="maxWetwareLevel">
            <?php
                echo $maxWetwareLevel;
            ?>
        </span>

        
        <span id="wetwarePrograms">
            <?php

            if($alternativeCheck == 0)
            {
                echo '<span class="wetwareName">' . $programName1 . '</span>' . '<br/><br/>' . $programLevel1 . '<span class="wetwareRange">' . $programRange1 . '</span>' . '<br/>' . $programDuration1 . '<span class="wetwarePage"> ' . $programPage1 . '</span><br/>' . $programActivation1 . '<span class="wetwareActivation">' . $programSave1 . '</span><br/><br/>' . $programManifest1;

                echo '<br/><br/><span class="wetwareName">' . $programName2 . '</span>' . '<br/><br/>' . $programLevel2 . '<span class="wetwareRange">' . $programRange2 . '</span>' . '<br/>' . $programDuration2 . '<span class="wetwarePage">' . $programPage2 . '</span><br/>' . $programActivation2 . '<span class="wetwareActivation">' . $programSave2 . '</span><br/><br/>' . $programManifest2;

                echo '<br/><br/><span class="wetwareName">' . $programName3 . '</span>' . '<br/><br/>' . $programLevel3 . '<span class="wetwareRange">' . $programRange3 . '</span>' . '<br/>' . $programDuration3 . '<span class="wetwarePage">' . $programPage3 . '</span><br/>' . $programActivation3 . '<span class="wetwareActivation">' . $programSave3 . '</span><br/><br/>' . $programManifest3;

            }
            else
            {
                echo "";
            }
            ?>
        </span>

        
        <span id="wetwarePrograms2">
            <?php

            if($alternativeCheck == 1)
            {

                if($patronBondRandom == 0)
                {
                    echo '<span class="wetwareName2">' . $programNameA1Patron . '</span>' . '<br/><br/>' . $programLevelA1Patron . '<span class="wetwareRange2">' . $programRangeA1Patron . '</span>' . '<br/>' . $programDurationA1Patron . '<span class="wetwarePage2"> ' . $programPageA1Patron . '</span><br/>' . $programActivationA1Patron . '<span class="wetwareActivation2">' . $programSaveA1Patron . '</span><br/><br/>' . $programManifestA1Patron;

                    echo '<br/><br/><span class="wetwareName2">' . $programNameA1Patron2 . '</span>' . '<br/><br/>' . $programLevelA1Patron2 . '<span class="wetwareRange2">' . $programRangeA1Patron2 . '</span>' . '<br/>' . $programDurationA1Patron2 . '<span class="wetwarePage2"> ' . $programPageA1Patron2 . '</span><br/>' . $programActivationA1Patron2 . '<span class="wetwareActivation2">' . $programSaveA1Patron2 . '</span><br/><br/>' . $programManifestA1Patron2;

                }
                else
                {
                    echo '<span class="wetwareName2">' . $programNameA1 . '</span>' . '<br/><br/>' . $programLevelA1 . '<span class="wetwareRange2">' . $programRangeA1 . '</span>' . '<br/>' . $programDurationA1 . '<span class="wetwarePage2"> ' . $programPageA1 . '</span><br/>' . $programActivationA1 . '<span class="wetwareActivation2">' . $programSaveA1 . '</span><br/><br/>' . $programManifestA1;

                }
                
                if($level >= 2)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA1b . '</span>' . '<br/><br/>' . $programLevelA1b . '<span class="wetwareRange2">' . $programRangeA1b . '</span>' . '<br/>' . $programDurationA1b . '<span class="wetwarePage2"> ' . $programPageA1b . '</span><br/>' . $programActivationA1b . '<span class="wetwareActivation2">' . $programSaveA1b . '</span><br/><br/>' . $programManifestA1b;

                }

                if($level >= 3)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA2 . '</span>' . '<br/><br/>' . $programLevelA2 . '<span class="wetwareRange2">' . $programRangeA2 . '</span>' . '<br/>' . $programDurationA2 . '<span class="wetwarePage2"> ' . $programPageA2 . '</span><br/>' . $programActivationA2 . '<span class="wetwareActivation2">' . $programSaveA2 . '</span><br/><br/>' . $programManifestA2;

                }


                if($level >= 4)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA2b . '</span>' . '<br/><br/>' . $programLevelA2b . '<span class="wetwareRange2">' . $programRangeA2b . '</span>' . '<br/>' . $programDurationA2b . '<span class="wetwarePage2"> ' . $programPageA2b . '</span><br/>' . $programActivationA2b . '<span class="wetwareActivation2">' . $programSaveA2b . '</span><br/><br/>' . $programManifestA2b;
                }

                if($level >= 5)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA3 . '</span>' . '<br/><br/>' . $programLevelA3 . '<span class="wetwareRange2">' . $programRangeA3 . '</span>' . '<br/>' . $programDurationA3 . '<span class="wetwarePage2"> ' . $programPageA3 . '</span><br/>' . $programActivationA3 . '<span class="wetwareActivation2">' . $programSaveA3 . '</span><br/><br/>' . $programManifestA3;

                }


                if($level >= 6)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA3b . '</span>' . '<br/><br/>' . $programLevelA3b . '<span class="wetwareRange2">' . $programRangeA3b . '</span>' . '<br/>' . $programDurationA3b . '<span class="wetwarePage2"> ' . $programPageA3b . '</span><br/>' . $programActivationA3b . '<span class="wetwareActivation2">' . $programSaveA3b . '</span><br/><br/>' . $programManifestA3b;
                }

                

            }
            else
            {
                echo "";

            }

            ?>
        </span>

        <span id="wetwarePrograms2b">
            <?php

            if($alternativeCheck == 1)
            {
                if($level >= 7)
                {
                    echo '<span class="wetwareName2">' . $programNameA4 . '</span>' . '<br/><br/>' . $programLevelA4 . '<span class="wetwareRange2">' . $programRangeA4 . '</span>' . '<br/>' . $programDurationA4 . '<span class="wetwarePage2"> ' . $programPageA4 . '</span><br/>' . $programActivationA4 . '<span class="wetwareActivation2">' . $programSaveA4 . '</span><br/><br/>' . $programManifestA4;

                }


                if($level >= 8)
                {
                    echo '<br/><br/><span class="wetwareName2">' . $programNameA4b . '</span>' . '<br/><br/>' . $programLevelA4b . '<span class="wetwareRange2">' . $programRangeA4b . '</span>' . '<br/>' . $programDurationA4b . '<span class="wetwarePage2"> ' . $programPageA4b . '</span><br/>' . $programActivationA4b . '<span class="wetwareActivation2">' . $programSaveA4b . '</span><br/><br/>' . $programManifestA4b;
                }

                    
                if($level >= 9)
                {
                        echo '<br/><br/><span class="wetwareName2">' . $programNameA5 . '</span>' . '<br/><br/>' . $programLevelA5 . '<span class="wetwareRange2">' . $programRangeA5 . '</span>' . '<br/>' . $programDurationA5 . '<span class="wetwarePage2"> ' . $programPageA5 . '</span><br/>' . $programActivationA5 . '<span class="wetwareActivation2">' . $programSaveA5 . '</span><br/><br/>' . $programManifestA5;
    
                }
    
    
                if($level >= 10)
                {
                        echo '<br/><br/><span class="wetwareName2">' . $programNameA5b . '</span>' . '<br/><br/>' . $programLevelA5b . '<span class="wetwareRange2">' . $programRangeA5b . '</span>' . '<br/>' . $programDurationA5b . '<span class="wetwarePage2"> ' . $programPageA5b . '</span><br/>' . $programActivationA5b . '<span class="wetwareActivation2">' . $programSaveA5b . '</span><br/><br/>' . $programManifestA5b;
                }
    

            }
            else
            {
                echo "";

            }

            ?>
        </span>

        
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>

        
        <span id="melee"></span>
        <span id="range"></span>
        
        <span id="meleeDamage"></span>
        <span id="rangeDamage"></span>

       
       
       <span id="weaponsList">
           <?php
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           
           ?>  
        </span>

       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

       <span id="gearList">
           <?php

           $gearCount = count($gearNames);
           $counter = 1;
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;

              if($counter == $gearCount-1)
              {
                  echo " and ";
              }
              elseif($counter > $gearCount-1)
              {
                  echo ".";
              }
              else
              {
                  echo ", ";
              }

              ++$counter;
           }
           ?>
       </span>


       <span id="abilityScoreGeneration">
            <?php
           echo $generationMessage . '<br/>' . $optimizeAbilityScoreMessage;
           ?>
       </span>

       <span id="profession">
            <?php
           echo $profession;;
           ?>
       </span>
       

       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - shaman Character Constructor
	*/
	function Character() {
        
        let strength = <?php echo $strength ?>;
        let	intelligence = <?php echo $intelligence ?>;
        let	personality = <?php echo $personality ?>;
        let agility = <?php echo $agility ?>;
        let stamina = <?php echo $stamina ?>;
        let	luck = <?php echo $luck ?>;
        let strengthMod = <?php echo $strengthMod ?>;
        let intelligenceMod = <?php echo $intelligenceMod ?>;
        let personalityMod = <?php echo $personalityMod ?>;
        let agilityMod = <?php echo $agilityMod ?>;
        let staminaMod = <?php echo $staminaMod ?>;
        let luckMod = <?php echo $luckMod ?>;
        let level = '<?php echo $level ?>';
        let gender = '<?php echo $gender ?>';
        let armour = '<?php echo $armourName ?>';
	    let birthAugur = getLuckySign();
        let maxTechLevel = getMaxTechLevel(intelligence);
        let bonusLanguages = fnAddLanguages(intelligenceMod, birthAugur, luckMod);
	    let baseAC = getBaseArmourClass(agilityMod) + adjustAC(birthAugur, luckMod);

		let shamanCharacter = {
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"intelligence": intelligence,
			"personality": personality,
			"luck": luck,
            "strengthModifer": addModifierSign(strengthMod),
            "intelligenceModifer": addModifierSign(intelligenceMod),
            "personalityModifer": addModifierSign(personalityMod),
            "agilityModifer": addModifierSign(agilityMod),
            "staminaModifer": addModifierSign(staminaMod),
            "luckModifer": addModifierSign(luckMod),
            "acBase": baseAC,
			"luckySign": birthAugur.luckySign,
            "luckyRoll": birthAugur.luckyRoll,
            "move": <?php echo $speed ?> + addLuckToSpeed (birthAugur, luckMod),
            "addLanguages": "Nu-Speak " + bonusLanguages,
            "armourClass": <?php echo $totalAcDefense ?> + baseAC,
            "hp": getHitPoints (level, staminaMod) + hitPointAdjustPerLevel(birthAugur,  luckMod),
			"melee": strengthMod + <?php echo $attackBonus ?> + meleeAdjust(birthAugur, luckMod),
			"range": agilityMod +  <?php echo $attackBonus ?> + rangeAdjust(birthAugur, luckMod),
			"meleeDamage": strengthMod + adjustMeleeDamage(birthAugur, luckMod),
            "rangeDamage": adjustRangeDamage(birthAugur, luckMod),
            "techLevel": maxTechLevel,
            "reflex": <?php echo $reflexBase ?> + agilityMod + adjustRef(birthAugur, luckMod),
            "fort": <?php echo $fortBase ?> + staminaMod + adjustFort(birthAugur,luckMod),
            "will": <?php echo $willBase ?> + personalityMod + adjustWill(birthAugur, luckMod),
            "initiative": agilityMod + adjustInit(birthAugur, luckMod)

		};
	    if(shamanCharacter.hitPoints <= 0 ){
			shamanCharacter.hitPoints = 1;
		}
		return shamanCharacter;
	  
	  }
	  


  
      // let imgData = "images/shaman.png";
      let imgData = '<?php echo $characterSheet ?>';
      
        $("#character_sheet").attr("src", imgData);
      

      let data = Character();
      
		 
      $("#strength").html(data.strength);
      
      $("#intelligence").html(data.intelligence);
      
      $("#personality").html(data.personality);
      
      $("#agility").html(data.agility);
      
      $("#stamina").html(data.stamina);
      
      $("#luck").html(data.luck);
      
      
		 
      $("#strengthMod").html(data.strengthModifer);
      
      $("#intelligenceMod").html(data.intelligenceModifer);
      
      $("#personalityMod").html(data.personalityModifer);
      
      $("#agilityMod").html(data.agilityModifer);
      
      $("#staminaMod").html(data.staminaModifer);
      
      $("#luckMod").html(data.luckModifer);
      
      
      
            
      $("#hitPoints").html(data.hp);
      
      $("#armourClass").html(data.armourClass);
      
      $("#reflex").html(addModifierSign(data.reflex));
      $("#fort").html(addModifierSign(data.fort));
      $("#will").html(addModifierSign(data.will));
      
      $("#initiative").html(addModifierSign(data.initiative));
      
      $("#speed").html(data.move + "'");
      
      $("#luckySign").html(data.luckySign);
      $("#luckyRoll").html(data.luckyRoll);    
      $("#LuckySignBonus").html(data.luckModifer);

      $("#languages").html(data.addLanguages);
      $("#melee").html(addModifierSign(data.melee));
      $("#range").html(addModifierSign(data.range));
      $("#meleeDamage").html(addModifierSign(data.meleeDamage));
      $("#rangeDamage").html(addModifierSign(data.rangeDamage));

      
      $("#baseAC").html("(" + data.acBase + ")");
      $("#maxTech").html(data.techLevel);
      

	 
  </script>
		
	
    
</body>
</html>