<?php

/*
Achroma = 0;
Gaea = 1;
Hale-E = 2;
Hexacoda = 3;
Mangala = 4;
ME10 = 5;
Tetraplex = 6;
Ukur = 7;
 */


function getPatronAI($input)
{
    $patronAI = "";

    switch ($input) 
    {
        case 0:
            $patronAI = "Achroma";
          break;
          
        case 1:
            $patronAI = "Gaea";
          break;
          
        case 2:
            $patronAI = "Hale-E";
          break;
          
        case 3:
            $patronAI = "Hexacoda";
          break;
          
        case 4:
            $patronAI = "Mangala";
          break;
          
        case 5:
            $patronAI = "ME10";
          break;
          
        case 6:
            $patronAI = "Tetraplex";
          break;
          
        case 7:
            $patronAI = "Ukur";
          break;

          default:
          $patronAI = "000000000";
        }

        return $patronAI;
}


/*Wetware Program Level 1*/
    
    function wetwareLevel1($patronAI)
    {
        $a00 =  array("1", "Security Override", "10 or Varies", "Varies", "1 round", "None", "209");
        $a01 =  array("1", "Elemental Shield", "Varies", "1 round/CL", "1 round", "None", "215");
        $a02 =  array("1", "Sightblinder", "Self or Varies", "Varies", "1 round", "None", "221");
        $a03 =  array("1", "Security Sweep", "Varies", "Varies", "1 round", "see page 229", "229");
        $a04 =  array("1", "Plasma Sword", "Self", "2 rounds/CL", "1 round", "None", "235");
        $a05 =  array("1", "Biological Ark", "20'", "Varies", "1 round", "None", "243");
        $a06 =  array("1", "Query", "Personal", "Varies", "1 round", "None", "249");
        $a07 =  array("1", "Nanogram", "Self", "1 turn or...", "1 round", "None", "255");


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07);
                
        return $array1[$patronAI];

    }
    


    function wetwareManifestLevel1($patronAI)
    {
        $level1WetwareManifest = "";
        
        if($patronAI == "0")
            {
                $archroma = array("Blue glow appears on the tip of the shaman’s forefinger accompanied by a high-pitched whine.", 
                                 "Green, strobing rectilinear scan pattern emanates from the shaman’s forehead which moves up and down over the barred portal.",
                                 "Concentric electromagnetic ripples in the air radiate from the shaman’s hands towards the barred portal.",
                                 "The shaman’s eyes glow a bright red as a booming metallic voice intones 'Security Override Activated'.");
            
                $random = rand(0,3);
            
                $level1WetwareManifest = $archroma[$random];
            }
        else if($patronAI == "1")
            {
                $level1WetwareManifest = "See page 215";
            }
        else if($patronAI == "2")
            {
                $halee = array("The shaman’s form blurs and shifts.", 
                                 "All ambient light is briefly dimmed as the shaman refracts the light.",
                                 "The shaman’s form momentarily pixelates before reforming in high definition.",
                                 "Rings of blue light pass up and down the shaman’s form as he/she transforms.");
            
                $random = rand(0,3);
            
                $level1WetwareManifest = $halee[$random];
            }
        else if($patronAI == "3")
            {
                $halee = array("The shaman’s eyes begin to glow a soft scanner green. Within the shaman’s field of vision, traps glow a similar hue.", 
                                 "A thin antenna rises out of the shaman’s head and a faint voice whispers information within the shaman’s hearing.",
                                 "The QR code on the shaman’s arm begins emitting a searchlight-like beam of light that homes in on and highlights traps.");
            
                $random = rand(0,2);
            
                $level1WetwareManifest = $halee[$random];
            }
        else if($patronAI == "4")
            {
                $level1WetwareManifest = "See page 235";
            }
        else if($patronAI == "5")
            {
                $level1WetwareManifest = "The shaman’s voice becomes increasingly shrill and pedantic as the evocation of the program continues.";
            }
        else if($patronAI == "6")
            {
                $tetraplex = array("The shaman’s eyes turn an opalescent white.", 
                                 "The shaman’s eyes and mouth seal shut for the duration of the casting.",
                                 "The strange hieroglyphs of the Ancients appear and scroll across the shaman’s skin, covering them with unintelligible wisdom of the ages.");
            
                $random = rand(0,2);
            
                $level1WetwareManifest = $tetraplex[$random];
            }
        else if($patronAI == "7")
            {
                $level1WetwareManifest = "See page 255";
            }
        
        return $level1WetwareManifest;
    }
           
      
/*Wetware Program Level 2*/
function wetwareLevel2($patronAI)
{
    $a00 =  array("2", "Artifical Intelligence Hack", "Line of sight", "Varies", "1 round", "Will save", "210");
    $a01 =  array("2", "Corrosion", "Line of sight", "Instantaneous", "1 round", "None", "216");
    $a02 =  array("2", "Polygons", "Line of sight", "Varies", "1 round", "None", "222");
    $a03 =  array("2", "Passkey", "Line of sight", "1 round", "1 round", "see page 230", "230");
    $a04 =  array("2", "Null Gun", "Line of sight", "2 rounds/CL", "1 round", "None", "236");
    $a05 =  array("2", "Light Amplication by Stim...", "Line of sight", "Instant", "1 round", "see page 244", "244");
    $a06 =  array("2", "Memory Worm", "Line of sight", "Varies", "1 round", "Will save", "250");
    $a07 =  array("2", "EM Spike", "Varies", "Varies", "1 round", "Varies", "256");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07);
            
    return $array1[$patronAI];

}


    function wetwareManifestLevel2($patronAI)
    {
        $level2WetwareManifest = "";
        
        if($patronAI == "0")
            {
                $archroma = array("Tiny electric sparks crawl across the shaman’s temples.", 
                                 "A bright, pencil-thin beam of pure white light emanates from the shaman’s forefinger and lances across to the target.",
                                 "As the shaman concentrates, a chorus of echoing, undecipherable whispers is heard by all.",
                                 "A squall of static sounds are heard by all as a whistling unearthly tone squeals up and down in amplitude.");
            
                $random = rand(0,3);
            
                $level2WetwareManifest = $archroma[$random];
            }
        else if($patronAI == "1")
            {
                $level2WetwareManifest = "See page 216";
            }
        else if($patronAI == "2")
            {
                $halee = array("The shaman’s hands and forearms become brightly-lit ultraviolet outlines instead of material matter.", 
                                 "The shaman’s form visibly pixelates as it first loses and then regains focus.",
                                 "The shaman’s body transforms into a shower of quickly descending luminescent green machine code.",
                                 "As she/he utters the wetware programs evocation, the shaman’s voice becomes audibly distorted into a mere 8-bits of sound.");
            
                $random = rand(0,3);
            
                $level2WetwareManifest = $halee[$random];
            }
        else if($patronAI == "3")
            {
                $level2WetwareManifest = "See page 230";
            }
        else if($patronAI == "4")
            {
                $level2WetwareManifest = "See page 236";
            }
        else if($patronAI == "5")
            {
                $level2WetwareManifest = "See page 244";
            }
        else if($patronAI == "6")
            {
                $tetraplex = array("The shaman’s eyes turn black, and strange bright blue symbols flash across their darkened sclera.", 
                                 "The hair on the shaman’s head (if any) unnaturally extends itself in the direction of the target.",
                                 "The shaman’s body briefly blinks out of existence, replaced by a column of streaming green numbers.");
            
                $random = rand(0,2);
            
                $level2WetwareManifest = $tetraplex[$random];
            }
        else if($patronAI == "7")
            {
                $ukur = array("All of the iron contained in the shaman’s body polarizes along magnetic lines of force, resulting in all hair standing on end and in looping arcs.", 
                                 "The irises of the shaman’s eyes take on a steely grey metallic hue.",
                                 "The shaman is engulfed by a by looping lines of magnetic force that arc about his body in concentric waves as the air shimmers around him.",
                                 "The air just above the shaman begins to writhe in a polychromatic display of borealis-like twisting snakes of light.");
            
                $random = rand(0,3);
            
                $level2WetwareManifest = $ukur[$random];
            }
        
        return $level2WetwareManifest;
    }


          
/*Wetware Program Level 3*/
function wetwareLevel3($patronAI)
{
    $a00 =  array("3", "EMP", "Varies", "Instantaneous", "1 round", "Fort save", "211");
    $a01 =  array("3", "Chain Lightning", "Varies", "Instantaneous", "1 round", "Ref save", "216");
    $a02 =  array("3", "Virtual Reality", "Varies", "2 rounds/CL", "1 round", "Will save", "223");
    $a03 =  array("3", "Code Red", "20'", "Varies", "1 round", "None", "230");
    $a04 =  array("3", "Powered Assault Armour", "Self", "2 rounds/CL", "1 round", "None", "237");
    $a05 =  array("3", "Restore Backup", "20'", "Varies", "1 round", "None", "244");
    $a06 =  array("3", "Attune with Artifact", "Touch", "Varies", "1 round", "None", "250");
    $a07 =  array("3", "Trans-Replication", "Varies", "Instant", "1 turn", "Fort save", "257");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07);
            
    return $array1[$patronAI];

}
    

    function wetwareManifestLevel3($patronAI)
    {
        $level3WetwareManifest = "";
        
        if($patronAI == "0")
            {
                $archroma = array("A brilliant bubble of blinding white light bursts outwards from the shaman and rolls off into the distance.", 
                                 "Concentric rings of blue-white electrical discharge radiate out from the shaman’s feet.",
                                 "A brief gust of wind rushes in towards the shaman followed immediately by an even stronger gust of wind bursting outwards in all directions.",
                                 "The shaman’s skull is briefly silhouetted from inside by a luminous burst of internal light.");
            
                $random = rand(0,3);
            
                $level3WetwareManifest = $archroma[$random];
            }
        else if($patronAI == "1")
            {
                $level3WetwareManifest = "See page 216";
            }
        else if($patronAI == "2")
            {
                $halee = array("The shaman’s eyes appear to glow and leave their sockets as they scan the entire area with a grid of bright green light.", 
                                 "The shaman’s clothes momentarily become virtual simulacrums of a neonpiped glowing white robes.",
                                 "The shaman is encased in a glowing and rotating column of rainbow striped light that comes to a point at his feet.");
            
                $random = rand(0,2);
            
                $level3WetwareManifest = $halee[$random];
            }
        else if($patronAI == "3")
            {
                $level3WetwareManifest = "Ambient light in the area of the shaman turns red and begins to flash. 3 uses transmat beams to deliver defensive forces into place; when their duration expires (or they are destroyed), they are...";
            }
        else if($patronAI == "4")
            {
                $level3WetwareManifest = "See page 237";
            }
        else if($patronAI == "5")
            {
                $level3WetwareManifest = "The genetic-prints are transmatted into place by the power of 5 and, when the duration expires (or they are destroyed) the replicants collapse into pools of pinkish orange sludge.";
            }
        else if($patronAI == "6")
            {
                $tetraplex = array("Shaman glows a brilliant blue for the duration of casting – regardless of the spell’s success or failure.", 
                                 "Shaman begins speaking in the tongue of the ancients, fully describing the item in detail, but understanding none of what is recited.",
                                 "The artifact of the Ancients is absorbed into the shaman’s body, slowly emerging again as the spell concludes.",
                                 "6 manifests before the shaman directly imprinting the knowledge of the artifact into the shaman’s mind.");
            
                $random = rand(0,3);
            
                $level3WetwareManifest = $tetraplex[$random];
            }
        else if($patronAI == "7")
            {
                $ukur = array("Shaman’s body shimmers in a silhouette of gently tumbling sparkles.", 
                                 "Parts of the shaman’s body begin vanishing and reappearing in random order until the program initiates.",
                                 "A thunderous boom echoes throughout the area every time the shaman appears during the course of the program.",
                                 "Shaman’s body vanishes in layers. Skin, muscle, bone and organ vanish in sequential order, reappearing in the same order.");
            
                $random = rand(0,3);
            
                $level3WetwareManifest = $ukur[$random];
            }
        
        return $level3WetwareManifest;
    }

    
function noWetwareProgram()
{
    $noWetware = array(" ", " ", " ", " ", " ", " ", " ", " ");

    return $noWetware;
}


function getWetwareLevel1($patronAI)
{
    $wetwareProgram = array();

    $wetwareProgram = wetwareLevel1($patronAI);

    $wetwareManifest = wetwareManifestLevel1($patronAI);

    array_push($wetwareProgram, $wetwareManifest);

    return $wetwareProgram;

}
    
function getWetwareLevel2($level, $patronAI)
{
    $wetwareProgram = array();

    if($level > 2)
    {
        $wetwareProgram = wetwareLevel2($patronAI);
    
        $wetwareManifest = wetwareManifestLevel2($patronAI);
    
        array_push($wetwareProgram, $wetwareManifest);

    }
    else
    {
        $wetwareProgram = noWetwareProgram();
    }

    return $wetwareProgram;

}
    

function getWetwareLevel3($level, $patronAI)
{
    $wetwareProgram = array();

    if($level > 4)
    {
        $wetwareProgram = wetwareLevel3($patronAI);
    
        $wetwareManifest = wetwareManifestLevel3($patronAI);
    
        array_push($wetwareProgram, $wetwareManifest);

    }
    else
    {
        $wetwareProgram = noWetwareProgram();
    }

    return $wetwareProgram;

}
    

?>