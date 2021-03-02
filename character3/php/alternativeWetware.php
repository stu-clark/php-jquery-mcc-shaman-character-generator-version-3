<?php
//Alternative Wetware Programs

                            /*Level 1
                            0 = Anim Infa
                            1 = Close Access
                            2 =Decompile
                            3 = Dynamo
                            4 = Electric Shock
                            5 = Force Field
                            6 = Force Manipulation
                            7 = GLitch
                            8 = Memory implant
                            9 = Optic Overload
                            10 = Particle Burst
                            11 = Reflecting Screen
                            12 = Translate
                            */


function alternateWetwareLevel1($input)
{
    $a00 =  array("Level: 1", "Animate Infrastructure", "Range: 30 or more", "Duration: Varies", "Activation: 1 round", "Save: None", "Page: 17");
    $a01 =  array("Level: 1", "Close Access", "Range: 10'", "Duration: Varies", "Activation: 1 action", "Save: None", "Page: 18");
    $a02 =  array("Level: 1", "Decrypt/Decompile", "Range:5'", "Duration: Varies", "Activation: 1 round", "Save: None", "Page: 20");
    $a03 =  array("Level: 1", "Dynamo", "Range: Touch", "Duration: Varies", "Activation: 1 action", "Save: Will vs Program Check", "Page: 22");
    $a04 =  array("Level: 1", "Electric Shock", "Range: 15'", "Duration: Instantaneous", "Activation: 1 action", "Save: None", "Page: 23");
    $a05 =  array("Level: 1", "Force Field", "Range: Touch", "Duration: Varies", "Activation: 1 action", "Save: None", "Page: 24");
    $a06 =  array("Level: 1", "Force Manipulation", "Range: 25'", "Duration: Varies", "Activation: 1 action", "Save: None", "Page: 143 (DCC Rulebook)");
    $a07 =  array("Level: 1", "Glitch", "Range: 30' or more", "Duration: 1 round or more", "Activation: 1 action", "Save: Will vs program check", "Page: 26");
    $a08 =  array("Level: 1", "Memory Implant", "Range: Self or Touch", "Duration: Varies", "Activation: 1 round", "Save: None", "Page: 27");
    $a09 =  array("Level: 1", "Optic Overload", "Range: 100'", "Duration: Instantaneous", "Activation: 1 action", "Save: Will vs program check", "Page: 29");
    $a10 =  array("Level: 1", "Particle Burst", "Range: 150' or more", "Duration: Instantaneous", "Activation: 1 action", "Save: None", "Page: 30");
    $a11 =  array("Level: 1", "Reflecting Screen", "Range: 30' or more", "Duration: 1 round or more", "Activation: 1 action", "Save: Will vs program check", "Page: 32");
    $a12 =  array("Level: 1", "Translate", "Range: Self", "Duration: Varies", "Activation: 1 turn", "Save: None", "Page: 33");

    $array1 = array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12);

    return $array1[$input];
}


function alternateWetwareManifestLevel1($select)
{
    $level1WetwareManifest = "";
    
    if($select == "0")
        {
            $level1WetwareManifest = "Manifestation: See page 17";
        }
    else if($select == "1")
        {
            $manifest = array("Manifestation: Rapid clicking noises emanate from the secured door.", 
                             "Manifestation: A burst of white
                             light momentarily limns the portal edges.",
                             "Manifestation: Encrypted symbols flash across the face
                             of the door",
                             "Manifestation: A throbbing black light strikes the door and quickly disappears");
        
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "2")
        {
            $manifest = array("Manifestation: Letters and symbols flicker and change until the entire text is readable.", 
                             "Manifestation: Each letter changes one after the other until the entire text is readable.",
                             "Manifestation:  letters and
                             symbols flip through possibilities until the entire text is readable.",
                             "Manifestation: Letter and
                             symbols become fuzzy and move from one location to the another and refocus upon
                             completion.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "3")
        {
            $manifest = array("Manifestation: The user’s hands crackle with blue energy", 
                             "Manifestation: The user’s hair stands on
                             end",
                             "Manifestation: The user emits a strong odor of ozone",
                             "Manifestation: Electricity visibly arcs across the user’s entire body.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "4")
        {
            $manifest = array("Manifestation: Small bolts of purple lightning leap from the user’s outstretched
            fingertips", 
            "Manifestation: The user issues an arc of electricity from one hand that hit the targets and returns to his opposite hand",
            "Manifestation: All of the user’s hair raises on end moments
            before targets are struck with invisible electric force.",
            "Manifestation: The user’s hands crackle with
            blue electrical energy.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "5")
        {
                $manifest = array("Manifestation: An iridescent bubble encircles the subject", 
                "Manifestation: White squares of energy
                orbit the subject and deflect incoming threats.",
                "Manifestation: A green shield of energy
                automatically moves to oppose all harm to the subject.",
                "Manifestation: A crystalline box of energy
                surrounds the subject and distorts light passing through it.",
                "Manifestation: An invisible field envelops the subject and turns transparent yellow when actively preventing threats.",
                "Manifestation: Tiny drones encircle the subject and shoot incoming threats with disrupting energy.");
                
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "6")
        {
            $manifest = array("Manifestation: The caster's hands shimmer and the air hums with power.", 
                             "Manifestation: Cloud of scintillanting light motes takes the shapoe of the object created and then vanishes.",
                             "Manifestation: Blocks of blue energy descend from above to form the object or barrier and then disappear.",
                             "Manifestation: Caster traces the shape to be created in the air with a glowing finger tip.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level1WetwareManifest = $manifest[$random];
        }
    else if($select == "7")
        {
            $level1WetwareManifest = "Manifestation: See page 26";
        }
    else if($select == "8")
            {
                $manifest = array("Manifestation: Pictures, instructions, and words flood the user’s mind.", 
                                 "Manifestation: Eyes flutter,
                                 body jerks as neurons are trained.",
                                 "Manifestation: A burst of electrical impulses momentarily stagger the subject.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level1WetwareManifest = $manifest[$random];
            }
    else if($select == "9")
                {
                    $manifest = array("Manifestation: Multicolored laser light bursts forth from the user’s eyes.", 
                                     "Manifestation: Laser lights
                                     emanate from the user’s outstretched fingers.",
                                     "Manifestation: A light source or other such piece of equipment is reprogrammed into a laser array.
                                     ");
                
                    $random = rand(0, count($manifest) - 1);
                
                    $level1WetwareManifest = $manifest[$random];
                }
    else if($select == "10")
                    {
                        $manifest = array("Manifestation: Staccato bursts of red light.", 
                                         "Manifestation: A continuous green beam.",
                                         "Manifestation: Purple
                                         explosions erupt on the target.", "Manifestation: No visible effect.", 
                                         "Manifestation: Ear-splitting yellow beams.",
                                         "Manifestation: Dots of blue light.");
                    
                        $random = rand(0, count($manifest) - 1);
                    
                        $level1WetwareManifest = $manifest[$random];
                    }
    else if($select == "11")
                        {
            
                            $level1WetwareManifest = "Manifestation: See page 32";
                        }
     else if($select == "12")
        {
            $manifest = array("Manifestation: A pictogram of a globe pulses as words are spoken or read.", 
            "Manifestation: Words or sounds are transformed into the user’s language with no obvious effect.",
            "Manifestation: Text or sounds glow.",
            "Manifestation: An aura of golden light surrounds the user’s head.");
                            
        $random = rand(0, count($manifest) - 1);
                            
        $level1WetwareManifest = $manifest[$random];
        }


    return $level1WetwareManifest;
}
       
/*
0 = cloak
1 = crack
2 = create deck
3 = daemon
4 = exploit
5 = logic bomb
6 = mind scan
7 = molecular ex
8 = shatter (DCC)
9 = spectrum analysis
10 = sprite
*/


function alternateWetwareLevel2($input)
{
    $a00 =  array("Level: 2", "Cloak", "Range: Self or more", "Duration: Varies", "Activation: 1 action", "Save: Will vs program check", "Page: 35");
    $a01 =  array("Level: 2", "Crack", "Range: 30 or more", "Duration: Instantaneous", "Activation: 1 round", "Save: None", "Page: 36");
    $a02 =  array("Level: 2", "Create Deck", "Range: Self", "Duration: Permanent", "Activation: 1 week per level", "Save: None", "Page: 38");
    $a03 =  array("Level: 2", "Daemon", "Range: Varies", "Duration: Varies", "Activation: 1 turn", "Save: None", "Page: 42");
    $a04 =  array("Level: 2", "Exploit", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: See pg 44", "Page: 44");
    $a05 =  array("Level: 2", "Logic Bomb", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: None", "Page: 46");
    $a06 =  array("Level: 2", "Mind Scan", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: see page 47", "Page: 47");
    $a07 =  array("Level: 2", "Molecular Excitement", "Range: 80'", "Duration: Instantaneous", "Activation: 1 action", "Save: Ref partial (pg 50)", "Page: 50");
    $a08 =  array("Level: 2", "Shatter", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: None", "Page: 193 (DCC)");
    $a09 =  array("Level: 2", "Spectrum Analysis", "Range: 60 or more", "Duration: Varies", "Activation: 1 action", "Save: Will vs program check", "Page: 52");
    $a10 =  array("Level: 2", "Sprite", "Range: 100 or more", "Duration: 1 round or longer", "Activation: 1 round", "Save: Will vs program check", "Page: 53");

    $array1 = array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10);

    return $array1[$input];
}



       



function alternateWetwareManifestLevel2($select)
{
    $level2WetwareManifest = "";
    
    if($select == "0")
        {
            $manifest = array("Manifestation: A briefly visible shimmer ripples across the subject.", 
                             "Manifestation: A polygonal shape
                             enlarges over the subject.",
                             "Manifestation: Subject(s) immediately wink out of sight.",
                             "Manifestation: Subject(s)
                             pixelates and derezzes.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "1")
        {
            $manifest = array("Manifestation: Authorization accepted is intoned by the subject system.", 
                             "Manifestation: Security
                             measure indicates success.",
                             "Manifestation: security measure actuates itself (e.g., buttons push,
                             passwords appear in entry screens, etc).",
                             "Manifestation: Security measure shatters.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "2")
        {
            $level2WetwareManifest = "Manifestation: One programming interface to be crafted by the user such as a computer deck/
            console, AI interface, techno-artifact, etc.";
        }
    else if($select == "3")
        {
            $level2WetwareManifest = "Manifestation: See page 42";
        }
    else if($select == "4")
        {
            $level2WetwareManifest = "The user should articulate the manifestation as he encodes and deploys the malicious code. The manifestation can include minor physical changes on the part of the target.";
        }
    else if($select == "5")
        {
            $manifest = array("Manifestation: A pixelated box covered with flickering symbols appears and its top is open.", 
            "Manifestation: A collection of simple polygons swirls into a 3D shape.",
            "Manifestation: A sphere of glowing purple hexagonal planes.",
            "Manifestation:  An egg cracked in two, comprised of ridges and
            grooves not at all unlike a brain.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "6")
        {
            $manifest = array("Manifestation: Nothing visible.", 
            "Manifestation: An undetectable sound gives the user a feeling of vertigo.",
            "Manifestation: A slight shimmer hovers in the air around the target(s).",
            "Manifestation: A mesh grid momentarily appears over the target’s head.
            ");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "7")
        {
            $manifest = array("Manifestation: User points at a subject who begins to smolder.", 
            "Manifestation: Heat shimmer surrounds target.",
            "Manifestation: Visible distortion of the air from waves of electromagnetic energy.",
            "Manifestation: High-pitched whistling noise.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "8")
        {
            $manifest = array("Manifestation: Object simply shatters.", 
            "Manifestation: Blast as if an explosion.",
            "Manifestation: Flash of light.",
            "Manifestation: Bolt of lightning from the sky strikes the object.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "9")
        {
            $manifest = array("Manifestation: An augmented reality shows the user distortions and chemical readout
            overlays.", 
            "Manifestation: Invisible objects visually ping with light.", 
            "Manifestation:  invisible things are computer
            rendered with labels.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level2WetwareManifest = $manifest[$random];
        }
    else if($select == "10")
        {
            $level2WetwareManifest = "Manifestation: See page 53";
        }

        return $level2WetwareManifest;

    }

    /* Level 3
    0 = Animatter Explosion
    1 = Brainfry
    2 = Fleshjack
    3 = Log
    4 = Neural Feedsback
    5 = Lightning Bolt (DCC)
    6 = Overlock
    7 = Quarantine
    8 = Reverse Control 
     */

    function alternateWetwareLevel3($input)
    {
        $a00 =  array("Level: 3", "Antimatter Explosion", "Range: 3", "Duration: Instantaneous", "Activation: 1 action", "Save: Ref vs program check", "Page: 57");
        $a01 =  array("Level: 3", "Brainfry", "Range: Varies", "Duration: Varies", "Activation: 1 action", "Save: Fort vs program check", "Page: 58");
        $a02 =  array("Level: 3", "Fleshjack", "Range: 10' per level", "Duration: Varies", "Activation: 1 round", "Save: Will to negate
        ", "Page: 59");
        $a03 =  array("Level: 3", "Lag", "Range: 20’ + 10’/level", "Duration: Varies", "Activation: 1 round", "Save: Will (sometimes)", "Page: 61");
        $a04 =  array("Level: 3", "Neural Feedback Assault", "Range: 100'", "Duration: 1 round", "Activation: 1 action", "Save: See pg 62", "Page: 44");
        $a05 =  array("Level: 3", "Lightning Bolt", "Range: pg 222 (DCC)", "Duration: pg 222 (DCC)", "Activation: 1 round", "Save: Ref vs Spell check", "Page: 222 (DCC Rulebook)");
        $a06 =  array("Level: 3", "Overclock", "Range: User or 20'", "Duration: 1d4 rounds or more", "Activation: 2 rounds", "Save: none", "Page: 64");
        $a07 =  array("Level: 3", "Quarantine", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: see pg 65", "Page: 65");
        $a08 =  array("Level: 3", "Reversion Control", "Range: Touch", "Duration: Instantaneous", "Activation: 1 round", "Save: Sometimes (Will vs program check)", "Page: 67");
    
        $array1 = array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08);
    
        return $array1[$input];
    }

    function alternateWetwareManifestLevel3($select)
    {
        $level3WetwareManifest = "";
        
        if($select == "0")
            {
                $manifest = array("Manifestation: A momentary flash of light.", 
                "Manifestation: A singularity appears at a point in space
                then explodes.",
                "Manifestation:  a black smudge darkens the air, grows unstable, and explodes.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "1")
            {
                $manifest = array("Manifestation: The target’s head starts to smoke.", "Manifestation: A nimbus of blacklight forms around the target’s head.", "Manifestation: A telephonic aural signal invades the target’s head.", "Manifestation: Crackling energy surrounds the target’s head.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "2")
            {
                $manifest = array("Manifestation: A visible stream of 1s and 0s leap from the user and strike the target.", "Manifestation: Thousands of packets of data bombard the target until its mental defenses collapse.", "Manifestation: A circle of light opens on the target’s forehead.", "Manifestation: A red dot of light appears on the target and widens in aperture until the user can step inside the target.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "3")
            {
                $manifest = array("Manifestation: Target becomes pixelated and moves in a blocky manner.", "Manifestation: Target
                moves in a jerky, stuttering manner.", "Manifestation: Target becomes out of focus.", "Manifestation: Target freezes for a moment then jumps to their next location and freezes again.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "4")
            {
                $manifest = array("Manifestation: A digital snake streams from the user’s hand.", "Manifestation: Target’s temples grow warm and start smoking.", "Manifestation: A black, pixelated halo forms around the user and targets.", "Manifestation: White coruscating energy flows from the user’s hands and envelops the target’s head.
                ");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "5")
            {
                $level3WetwareManifest = "Manifestation: See page 222 (DCC Rulebook)";
            }
        else if($select == "6")
            {
                $manifest = array("Manifestation: Light streams from their silhouette, and contrails of light follow the user
                as they move.", "Manifestation: No manifestation when target stands still, but its movements are
                lightning-fast.", "Manifestation: The user is surrounded by a blurry haze.", "Manifestation: At rest, the user appears
                to jitter ever so slightly, and his movements are staccato bursts of activity.
                ");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "7")
            {
                $manifest = array("Manifestation: Yellow pixelated dots with a pie shaped mouth stream from the user’s
                hands and begin eating the virus program.", "Manifestation: A cage of energy forms around the
                subject then shrinks into subject until the exploit is contained.", "Manifestation: A progress meter
                springs into being and reports time until finished and file actions until the exploit is contained.", "Manifestation: Lines of computer code swirl around the target and infected portions are highlighted and re-written.");
            
                $random = rand(0, count($manifest) - 1);
            
                $level3WetwareManifest = $manifest[$random];
            }
        else if($select == "8")
            {
                $level3WetwareManifest = "Manifestation: Varies, see pages 67-68";
            }

            return $level3WetwareManifest;
        }

/*Level 4
0 = ICE Breaker
1 = NetOps
2 = Surveil
3 = Technorangic
4 = Uplink
 */
function alternateWetwareLevel4($input)
{
    $a00 =  array("Level: 4", "ICE Breaker", "Range:  100’ + 10’ per PL", "Duration: Varies", "Activation: 1 action", "Save: Will & Fort vs. program check ", "Page: 70");
    $a01 =  array("Level: 4", "NetOps Fortress/Degrade", "Range: 20’ square area per PL", "Duration: Varies", "Activation: 1 turn", "Save: page 72", "Page: 72");
    $a02 =  array("Level: 4", "Surveil", "Range: Varies", "Duration: Varies", "Activation: 1 turn", "Save: Will (sometimes)", "Page: 73");
    $a03 =  array("Level: 4", "Technorganic Virus", "Range: 50’ + 10’ per PL", "Duration: Varies", "Activation: 1 action", "Save:Fort vs. program check", "Page: 75");
    $a04 =  array("Level: 4", "Uplink", "Range: 60' or more", "Duration: 1 round/level", "Activation: 1 action", "Save: none", "Page: 76");

    $array1 = array($a00, $a01, $a02, $a03, $a04);

    return $array1[$input];
}

function alternateWetwareManifestLevel4($select)
{
    $level4WetwareManifest = "";
    
    if($select == "0")
        {
            $manifest = array("Manifestation: An auger-like construct drills into the ICE program.", "Manifestation: Aprism of force
            wedges itself into the ICE program holding it in place.", "Manifestation: A pyramid of magenta light
            ensnares the ICE and bombards it with destructive pink rays.", "Manifestation: A storm of ice picks
            rain down upon the ICE slowly chipping it away.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level4WetwareManifest = $manifest[$random];
        }
    else if($select == "1")
        {
        
            $level4WetwareManifest = "A physical location is converted into a secure computer operations lab for the duration of the program.";
        }
    else if($select == "2")
        {
            $manifest = array("Manifestation: Dozens of tiny, rectangular video feeds float near the user’s head
            showing the location under surveillance.", "Manifestation: The program renders a bird’s eye map of
            the location .", "Manifestation: The program creates a real-time virtual reality of the location for the
            user to observe.", "Manifestation: The user’s features glaze over as they peer into nothingness.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level4WetwareManifest = $manifest[$random];
        }
    else if($select == "3")
        {
            $manifest = array("Manifestation: White pixels fly through the air and strike the targets.", "Manifestation: Targets begin
            coughing which worsens until they are coughing up what appears to be iron filings.", "Manifestation: Black and gold circuit boards attach themselves to the victims and exponentially
            grow and cover the victims’ bodies.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level4WetwareManifest = $manifest[$random];
        }
    else if($select == "4")
        {
            $manifest = array("Manifestation: Green letters, numbers and symbols are superimposed over everything
            exposing secrets.", "Manifestation: The user interacts with a digital assistant no one else can see.", "Manifestation: The user’s ears buzz with information and images fill their mind.", "Manifestation: User’s eyes roll
            into the back of their head, a signal beam strikes the user from the heavens.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level4WetwareManifest = $manifest[$random];
        }

        return $level4WetwareManifest;
    }

/*Level 5
0 = Firewall
1 = Format
2 = Hellhound
 */
function alternateWetwareLevel5($input)
{
    $a00 =  array("Level: 5", "Firewall", "Range:  10’ radius", "Duration: 1 turn per PL", "Activation: 1 round", "Save: none", "Page: 79");
    $a01 =  array("Level: 5", "Format", "Range: 20’ + 10' level", "Duration: Varies", "Activation: 1 round", "Save: Will vs. program check", "Page: 80");
    $a02 =  array("Level: 5", "Hellhound", "Range: Varies", "Duration: Varies", "Activation: 1 turn", "Save: none", "Page: 82");

    $array1 = array($a00, $a01, $a02);

    return $array1[$input];
}

function alternateWetwareManifestLevel5($select)
{
    $level5WetwareManifest = "";
    
    if($select == "0")
        {
            $manifest = array("Manifestation: Pixels swirl around the user and consume other program.", "Manifestation: Program effects slow and de-res as they hit the firewall.", "Manifestation: 8-bit flaming wall encircles the user.", "Manifestation: Squat, anthropomorphic process daemons travel with the user preventing programmatic attack.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level5WetwareManifest = $manifest[$random];
        }
    else if($select == "1")
        {
            $manifest = array("Manifestation: Target spews smoke from nose, ears, and mouth.", "Manifestation: Whirring and clicking noises emanate from the target.", "Manifestation: Electric arcs pulsate from the user’s hands and strike the target’s brain.", "Manifestation: A stream of ‘0’s dance around the subject and enter its body.", "Manifestation: A pixelated worm or snake appears and enters the victim.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level5WetwareManifest = $manifest[$random];
        }
    else if($select == "2")
        {
            $manifest = array("Manifestation: The hologram shimmers into existence from thin air.", "Manifestation: Bursts of laser light form into the hellhound instance.", "Manifestation: The hologram is formed one pixel at a time in seconds.", "Manifestation: Light from nearby sources dim and are drawn forth into the hellhound’s form.");
        
            $random = rand(0, count($manifest) - 1);
        
            $level5WetwareManifest = $manifest[$random];
        }


        return $level5WetwareManifest;
    }

    function alternatePatronBond($input)
    {
        $a00 =  array("Level: 1", "Invoke Patron", "Range: Self", "Duration: Varies", "Activation: 1 round", "Save: none", "Page: 144 (DCC Rulebook)", "Manifestation: Varies, see page 144 (DCC Rulebook)");
        $a01 =  array("Level: 1", "Patron Bond", "Range: Self", "Duration: Lifetime", "Activation: 1 week", "Save: none", "Page: 148 (DCC Rulebook)", "Manifestation: Varies, see page 148 (DCC Rulebook)");
    
        $array1 = array($a00, $a01);
    
        return $array1[$input];
    }
    

?>