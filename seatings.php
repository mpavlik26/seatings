<?php
  $interactions = array(
    "Pondelik"         => array(                   "Vavrecka" => 1.0, "Roztocil" => 1.0, "Nosek" => 1.0, "Subrt" => 1.0, "Machart" =>  1.0, "Pavlik" => 1.0                , "Valder" => 2.0, "Decker" => 1.0, "Brabec" => 1.0, "Krpata" => 1.0, "Bruk" => 1.0, "Kostelecky" => 1.0, "Wisla" => 1.0, "Baranyk" => 1.0, "Bartonicek" => 1.0),
    "Vavrecka"         => array("Pondelik" => 1.0, "Roztocil" => 4.0, "Nosek" => 3.0, "Subrt" => 2.0, "Machart" =>  1.0, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 0.5, "Decker" => 0.5, "Brabec" => 2.0                                , "Kostelecky" => 1.0, "Wisla" => 1.0, "Baranyk" => 1.0, "Bartonicek" => 0.5                      , "NewUXResearcher" => 0.5, "NewCROSpecialist" => 1.0, "NewUXDesigner" => 1.0),
    "Roztocil"         => array("Pondelik" => 1.0, "Vavrecka" => 4.0,                    "Nosek" => 2.5, "Subrt" => 2.5, "Machart" =>  1.0, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 0.5, "Decker" => 0.5, "Brabec" => 1.0                                , "Kostelecky" => 1.0, "Wisla" => 0.5, "Baranyk" => 1.0                     , "Javorkova" => 0.25                           , "NewCROSpecialist" => 0.5, "NewUXDesigner" => 1.0),
    "Nosek"            => array("Pondelik" => 1.0, "Vavrecka" => 3.0, "Roztocil" => 1.0,                 "Subrt" => 5.0, "Machart" =>  1.0, "Pavlik" => 1.0, "Skvor" => 1.0, "Valder" => 1.0, "Decker" => 2.0, "Brabec" => 2.0                                , "Kostelecky" => 1.0, "Wisla" => 1.0, "Baranyk" => 1.0                                           , "NewUXResearcher" => 0.5, "NewCROSpecialist" => 0.5, "NewUXDesigner" => 2.0),
    "Subrt"            => array("Pondelik" => 1.0, "Vavrecka" => 3.5, "Roztocil" => 1.0, "Nosek" => 5.0,                 "Machart" =>  1.0, "Pavlik" => 1.0, "Skvor" => 1.0, "Valder" => 0.5, "Decker" => 1.5, "Brabec" => 2.0                                , "Kostelecky" => 1.0, "Wisla" => 0.5, "Baranyk" => 1.0                                           , "NewUXResearcher" => 0.5, "NewCROSpecialist" => 1.0, "NewUXDesigner" => 2.0),
    "Machart"          => array("Pondelik" => 1.0, "Vavrecka" => 1.8, "Roztocil" => 1.8, "Nosek" => 2.0, "Subrt" => 1.8                   , "Pavlik" => 2.0, "Skvor" => 0.3, "Valder" => 2.0, "Decker" => 0.2, "Brabec" => 1.0, "Krpata" => 0.2, "Bruk" => 0.2, "Kostelecky" => 1.0, "Wisla" => 1.0, "Baranyk" => 1.0, "Bartonicek" => 0.2, "Javorkova" => 0.05 , "NewUXResearcher" => 0.2, "NewCROSpecialist" => 0.2, "NewUXDesigner" => 0.2),
    "Pavlik"           => array("Pondelik" => 1.0, "Vavrecka" => 0.5, "Roztocil" => 0.5, "Nosek" => 0.5, "Subrt" => 0.5, "Machart" =>  2.0                                 , "Valder" => 2.0, "Decker" => 0.5, "Brabec" => 1.0                 , "Bruk" => 0.5, "Kostelecky" => 1.0, "Wisla" => 0.5, "Baranyk" => 0.5, "Bartonicek" => 0.5),
    "Skvor"            => array(                   "Vavrecka" => 2.0, "Roztocil" => 2.0, "Nosek" => 1.0, "Subrt" => 1.0                                                    , "Valder" => 3.0, "Decker" => 2.0, "Brabec" => 1.0                                , "Kostelecky" => 1.0                , "Baranyk" => 0.5                     , "Javorkova" => 0.125, "NewUXResearcher" => 0.5, "NewCROSpecialist" => 0.5, "NewUXDesigner" => 5.0),
    "Valder"           => array("Pondelik" => 2.0, "Vavrecka" => 1.0, "Roztocil" => 1.0, "Nosek" => 1.0, "Subrt" => 1.0, "Machart" =>  4.0, "Pavlik" => 1.0, "Skvor" => 4.0                 , "Decker" => 4.0, "Brabec" => 4.0                                , "Kostelecky" => 2.0                , "Baranyk" => 2.0, "Bartonicek" => 2.0, "Javorkova" => 0.5  , "NewUXResearcher" => 2.0, "NewCROSpecialist" => 2.0, "NewUXDesigner" => 2.0),
    "Decker"           => array("Pondelik" => 1.0, "Vavrecka" => 0.5, "Roztocil" => 0.5, "Nosek" => 2.0, "Subrt" => 1.0, "Machart" =>  0.5, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 2.0                 , "Brabec" => 2.0                                , "Kostelecky" => 0.5                , "Baranyk" => 1.5, "Bartonicek" => 1.0, "Javorkova" => 0.5  , "NewUXResearcher" => 0.5                           , "NewUXDesigner" => 2.0),
    "Brabec"           => array("Pondelik" => 1.0, "Vavrecka" => 2.0, "Roztocil" => 1.0, "Nosek" => 3.0                , "Machart" =>  1.0, "Pavlik" => 1.0                , "Valder" => 3.0, "Decker" => 2.0                                                                                      , "Baranyk" => 0.5, "Bartonicek" => 2.0                      , "NewUXResearcher" => 4.0, "NewCROSpecialist" => 4.0),
    "Krpata"           => array("Pondelik" => 1.0, "Vavrecka" => 0.5                   , "Nosek" => 0.5, "Subrt" => 0.5, "Machart" =>  0.5                 , "Skvor" => 0.5                                  , "Brabec" => 0.5                 , "Bruk" => 3.0, "Kostelecky" => 3.0                , "Baranyk" => 1.0, "Bartonicek" => 0.5),
    "Bruk"             => array("Pondelik" => 1.0,                                                                       "Machart" =>  1.0                 , "Skvor" => 0.5, "Valder" => 1.0                 , "Brabec" => 1.0, "Krpata" => 3.0               , "Kostelecky" => 3.0, "Wisla" => 1.0, "Baranyk" => 1.0, "Bartonicek" => 1.0),
    "Kostelecky"       => array("Pondelik" => 1.0, "Vavrecka" => 1.5, "Roztocil" => 0.5, "Nosek" => 1.5, "Subrt" => 1.5, "Machart" =>  0.5, "Pavlik" => 0.5, "Skvor" => 1.5, "Valder" => 1.0, "Decker" => 0.5, "Brabec" => 0.5, "Krpata" => 3.0, "Bruk" => 3.0                     , "Wisla" => 1.5, "Baranyk" => 1.0, "Bartonicek" => 0.5                      , "NewUXResearcher" => 0.5, "NewCROSpecialist" => 0.5, "NewUXDesigner" => 1.0),
    "Wisla"            => array("Pondelik" => 1.0, "Vavrecka" => 1.0                   , "Nosek" => 1.0, "Subrt" => 1.0, "Machart" =>  1.0, "Pavlik" => 0.5                , "Valder" => 0.5                 , "Brabec" => 0.5, "Krpata" => 1.0, "Bruk" => 2.0, "Kostelecky" => 2.0                , "Baranyk" => 0.5                     ),
    "Baranyk"          => array("Pondelik" => 1.0, "Vavrecka" => 2.0, "Roztocil" => 1.0, "Nosek" => 2.5, "Subrt" => 1.5, "Machart" =>  1.0                 , "Skvor" => 1.0, "Valder" => 2.0, "Decker" => 2.0, "Brabec" => 2.0                 , "Bruk" => 1.0, "Kostelecky" => 3.0, "Wisla" => 1.0                  , "Bartonicek" => 2.0                                                , "NewCROSpecialist" => 0.5),
    "Bartonicek"       => array("Pondelik" => 1.0, "Vavrecka" => 0.5                   , "Nosek" => 0.5, "Subrt" => 0.5                   , "Pavlik" => 0.5                , "Valder" => 1.0, "Decker" => 1.0, "Brabec" => 1.0                                                                     , "Baranyk" => 1.0                                                                                                , "NewUXDesigner" => 1.0),
    //
    "Javorkova"        => array(                                      "Roztocil" => 0.075, "Nosek" => 0.025                                                , "Skvor" => 0.15                , "Decker" => 0.25                                                                                                                                                                                                       , "NewUXDesigner" => 1.5),
    //
    "NewUXResearcher"  => array(                   "Vavrecka" => 0.5                   , "Nosek" => 0.5                                                    , "Skvor" => 0.5, "Valder" => 0.5, "Decker" => 0.5, "Brabec" => 4.0                                , "Kostelecky" => 0.5                                                       ),//entered by Dean Brabec
    "NewCROSpecialist" => array(                   "Vavrecka" => 1.0, "Roztocil" => 0.5, "Nosek" => 0.5, "Subrt" => 0.5                                    , "Skvor" => 0.5                                  , "Brabec" => 4.0                                , "Kostelecky" => 0.5                , "Baranyk" => 0.5                     ),//entered by Dean Brabec 
    "NewUXDesigner"    => array(                   "Vavrecka" => 1.0, "Roztocil" => 1.0, "Nosek" => 2.0, "Subrt" => 2.0, "Machart" =>  1.0                 , "Skvor" => 5.0, "Valder" => 2.0, "Decker" => 2.0, "Brabec" => 5.0                                , "Kostelecky" => 1.0                                  , "Bartonicek" => 1.0, "Javorkova" => 1.5),//entered by JD
    "Free1"            => array(),
    "Free2"            => array(),
    "Free3"            => array()
  );
  
  $names = array();
  
  $seats = array(
    "1-1" => array("1-2" => "n", "1-3" => "v", "2-1" => "o", "2-2" => "sd", "2-3" => "ld", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl", "4-2" => "rl", "4-3" => "rl", "5-1" => "nr6", "5-2" => "nr5", "5-3" => "nr4", "6-1" => "nr7", "6-2" => "nr6", "6-3" => "nr5", "7-1" => "nr8", "7-2" => "nr7", "7-3" => "nr6", "8-1" => "nr9", "8-2" => "nr8", "8-3" => "nr7"),
    "1-2" => array("1-3" => "n", "2-1" => "sd", "2-2" => "o", "2-3" => "sd", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl", "4-2" => "rl", "4-3" => "rl", "5-1" => "nr5", "5-2" => "nr4", "5-3" => "nr3", "6-1" => "nr6", "6-2" => "nr5", "6-3" => "nr4", "7-1" => "nr7", "7-2" => "nr6", "7-3" => "nr5", "8-1" => "nr8", "8-2" => "nr7", "8-3" => "nr6"),
    "1-3" => array("2-1" => "ld", "2-2" => "sd", "2-3" => "o", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl", "4-2" => "rl", "4-3" => "rl", "5-1" => "nr4", "5-2" => "nr3", "5-3" => "nr2", "6-1" => "nr5", "6-2" => "nr4", "6-3" => "nr3", "7-1" => "nr6", "7-2" => "nr5", "7-3" => "nr4", "8-1" => "nr7", "8-2" => "nr6", "8-3" => "nr5"),
    "2-1" => array("2-2" => "n", "2-3" => "v", "3-1" => "bo", "3-2" => "bsd", "3-3" => "bld", "4-1" => "rs", "4-2" => "rs", "4-3" => "rs", "5-1" => "nr5", "5-2" => "nr4", "5-3" => "nr3", "6-1" => "nr6", "6-2" => "nr5", "6-3" => "nr4", "7-1" => "nr7", "7-2" => "nr6", "7-3" => "nr5", "8-1" => "nr8", "8-2" => "nr7", "8-3" => "nr6"),
    "2-2" => array("2-3" => "n", "3-1" => "bsd", "3-2" => "bo", "3-3" => "bsd", "4-1" => "rs", "4-2" => "rs", "4-3" => "rs", "5-1" => "nr4", "5-2" => "nr3", "5-3" => "nr2", "6-1" => "nr5", "6-2" => "nr4", "6-3" => "nr3", "7-1" => "nr6", "7-2" => "nr5", "7-3" => "nr4", "8-1" => "nr7", "8-2" => "nr6", "8-3" => "nr5"),
    "2-3" => array("3-1" => "bld", "3-2" => "bsd", "3-3" => "bo", "4-1" => "rs", "4-2" => "rs", "4-3" => "rs", "5-1" => "nr3", "5-2" => "nr2", "5-3" => "nr1", "6-1" => "nr4", "6-2" => "nr3", "6-3" => "nr2", "7-1" => "nr5", "7-2" => "nr4", "7-3" => "nr3", "8-1" => "nr6", "8-2" => "nr5", "8-3" => "nr4"),
    "3-1" => array("3-2" => "n", "3-3" => "v", "4-1" => "o", "4-2" => "sd", "4-3" => "ld", "5-1" => "nr6", "5-2" => "nr5", "5-3" => "nr4", "6-1" => "nr7", "6-2" => "nr6", "6-3" => "nr5", "7-1" => "nr8", "7-2" => "nr7", "7-3" => "nr6", "8-1" => "nr9", "8-2" => "nr8", "8-3" => "nr7"),
    "3-2" => array("3-3" => "n", "4-1" => "sd", "4-2" => "o", "4-3" => "sd", "5-1" => "nr5", "5-2" => "nr4", "5-3" => "nr3", "6-1" => "nr6", "6-2" => "nr5", "6-3" => "nr4", "7-1" => "nr7", "7-2" => "nr6", "7-3" => "nr5", "8-1" => "nr8", "8-2" => "nr7", "8-3" => "nr6"),
    "3-3" => array("4-1" => "ld", "4-2" => "sd", "4-3" => "o", "5-1" => "nr4", "5-2" => "nr3", "5-3" => "nr2", "6-1" => "nr5", "6-2" => "nr4", "6-3" => "nr3", "7-1" => "nr6", "7-2" => "nr5", "7-3" => "nr4", "8-1" => "nr7", "8-2" => "nr6", "8-3" => "nr5"),
    "4-1" => array("4-2" => "n", "4-3" => "v", "5-1" => "nr7", "5-2" => "nr6", "5-3" => "nr5", "6-1" => "nr8", "6-2" => "nr7", "6-3" => "nr6", "7-1" => "nr9", "7-2" => "nr8", "7-3" => "nr7", "8-1" => "nr10", "8-2" => "nr9", "8-3" => "nr8"),
    "4-2" => array("4-3" => "n", "5-1" => "nr6", "5-2" => "nr5", "5-3" => "nr4", "6-1" => "nr7", "6-2" => "nr6", "6-3" => "nr5", "7-1" => "nr8", "7-2" => "nr7", "7-3" => "nr6", "8-1" => "nr9", "8-2" => "nr8", "8-3" => "nr7"),
    "4-3" => array("5-1" => "nr5", "5-2" => "nr4", "5-3" => "nr3", "6-1" => "nr6", "6-2" => "nr5", "6-3" => "nr4", "7-1" => "nr7", "7-2" => "nr6", "7-3" => "nr6", "8-1" => "nr9", "8-2" => "nr8", "8-3" => "nr7"),
    "5-1" => array("5-2" => "n", "5-3" => "v", "6-1" => "o", "6-2" => "sd", "6-3" => "ld", "7-1" => "rs", "7-2" => "rs", "7-3" => "rs", "8-1" => "rl", "8-2" => "rl", "8-3" => "rl"),
    "5-2" => array("5-3" => "n", "6-1" => "sd", "6-2" => "o", "6-3" => "sd", "7-1" => "rs", "7-2" => "rs", "7-3" => "rs", "8-1" => "rl", "8-2" => "rl", "8-3" => "rl"),
    "5-3" => array("6-1" => "ld", "6-2" => "sd", "6-3" => "o", "7-1" => "rs", "7-2" => "rs", "7-3" => "rs", "8-1" => "rl", "8-2" => "rl", "8-3" => "rl"),
    "6-1" => array("6-2" => "n", "6-3" => "v", "7-1" => "bo", "7-2" => "bsd", "7-3" => "bld", "8-1" => "rs", "8-2" => "rs", "8-3" => "rs"),
    "6-2" => array("6-3" => "n", "7-1" => "bsd", "7-2" => "bo", "7-3" => "bsd", "8-1" => "rs", "8-2" => "rs", "8-3" => "rs"),
    "6-3" => array("7-1" => "bld", "7-2" => "bsd", "7-3" => "bo", "8-1" => "rs", "8-2" => "rs", "8-3" => "rs"),
    "7-1" => array("7-2" => "n", "7-3" => "v", "8-1" => "o", "8-2" => "sd", "8-3" => "ld"),
    "7-2" => array("7-3" => "n", "8-1" => "sd", "8-2" => "o", "8-3" => "sd"),
    "7-3" => array("8-1" => "ld", "8-2" => "sd", "8-3" => "o"),
    "8-1" => array("8-2" => "n", "8-3" => "o"),
    "8-2" => array("8-3" => "n")
  );

  $seatsCoordinates = array();
  
  $distances = array(
    "n" => 1, //neighbor
    "v" => 4, //via
    "o" => 3, //opposite
    "sd" => 2.5, //short-diagonale
    "ld" => 3.5, //long-diagonale
    "bo" => 2, //back-opposite
    "bsd" => 1.8, //back-short-diagonale
    "bld" => 2.2, //back-long-diagonale
    "rs" => 5, //room-short
    "rl" => 6, //room-long
    "nr1" => 7, //next-room-1
    "nr2" => 7.5, //next-room-2
    "nr3" => 8, //next-room-3
    "nr4" => 8.5, //next-room-4
    "nr5" => 9, //next-room-5
    "nr6" => 9.5, //next-room-6
    "nr7" => 10, //next-room-7
    "nr8" => 10.5, //next-room-8
    "nr9" => 11, //next-room-9
    "nr10" => 11.5 //next-room-10
  );
  
  $debug = false;
  $deepSearchSteps = 0;
  $deepSearchStepsLimit = 5000;
  
  
  class BestSeating{
    public $namesPermutation;
    
    function __construct($namesPermutation){
      $this->namesPermutation = $namesPermutation; 
    }
  }
  
  
  class BestSeatings{
    public $weight;
    public $bestSeatings;
    
    function __construct(){
      $this->init();
    }

    
    function addSeatingsIfItHasBestWeight($namesPermutation, $weight){
      if($weight <= $this->weight){
        if($weight < $this->weight){
          $this->weight = $weight;
          $this->bestSeatings = array();
        }
  
        $this->bestSeatings[] = new BestSeating($namesPermutation);
        return true;
      }
      return false;
    }
    
    
    function copy($bestSeatings){
      $this->init();
      
      $this->weight = $bestSeatings->weight;
      
      foreach($bestSeatings->bestSeatings as $bestSeating)
        $this->bestSeatings[] = new BestSeating($bestSeating->namesPermutation);
    }
    
    
    function init(){
      $this->weight = 1000000000;
      $this->bestSeatings = array(); 
    }
  }
  
  
  class PermutationsRegister{
    public $permutations;
    
    
    function __construct(){
      $this->init();
    }
    
    
    function init(){
      $this->permutations = array(); 
    }
    
    
    function registerPermutation($permutation){
      $this->permutations[implode("-", $permutation)] = true;
    }
    
    
    function isPermutationRegistered($permutation){
      return (array_key_exists(implode("-", $permutation), $this->permutations));
    }
  }
  
  
  
  function fillReverseSeats(){
    foreach($GLOBALS["seats"] as $seatKey => $seatValue){
      foreach($seatValue as $seatPairKey => $setPairValue){
        $GLOBALS["seats"][$seatPairKey][$seatKey] = $setPairValue;
      }
    }
  }
  
  
  function generateArrayOfKeys($inputArray){
    $ret = array();
    
    foreach($inputArray as $key => $value)
      array_push($ret, $key);
    
    return $ret;
  }
  
  
  function wherePersonSits($namesPermutation){
    $ret = array();
    $i = 0;
    
    foreach($namesPermutation as $name){
      $ret[$name] = $GLOBALS["seatsCoordinates"][$i];
      $i++;
    }
    
    return $ret;
  }
  
  
  
  function computeWeight4PeopleOnSpecificSeats($namesPermutation){
    $weight = 0;
    $personsSeating = wherePersonSits($namesPermutation);
    
    foreach($GLOBALS["interactions"] as $name => $nameInteractions){
      $nameSeat = $personsSeating[$name];
      
      foreach($nameInteractions as $nameInteraction => $hoursInteraction)
        $weight += $hoursInteraction * $GLOBALS["distances"][$GLOBALS["seats"][$nameSeat][$personsSeating[$nameInteraction]]];
    }
    
    return $weight;
  }
  
  
  function deepSearch($namesPermutation, $parentWeight){
    if($GLOBALS["permutationsRegister"]->isPermutationRegistered($namesPermutation))
      return;
    
    $GLOBALS["permutationsRegister"]->registerPermutation($namesPermutation);
    
    debug("parentWeight", $parentWeight);
    $currentWeight = computeWeight4PeopleOnSpecificSeats($namesPermutation);
    
    if($currentWeight <= $parentWeight){
      $GLOBALS["bestSeatings"]->addSeatingsIfItHasBestWeight($namesPermutation, $currentWeight);
      debug("deepSearchSteps", $GLOBALS["deepSearchSteps"]);
      debug("currentWeight", $currentWeight);
      debug("namesPermutation", $namesPermutation);
      
      $GLOBALS["deepSearchSteps"]++;
      
      if($GLOBALS["deepSearchSteps"] >= $GLOBALS["deepSearchStepsLimit"])
        return;
        
      $switches = generateSwitches($namesPermutation);
      
      foreach($switches as $switchedPermutation){
        deepSearch($switchedPermutation, $currentWeight);
      }
    }    
  }
  
  
  function switchValues(&$a, &$b){
     $c = $a;
     $a = $b;
     $b = $c;
  }
  
  
  function generateSwitches($namesPermutation){
    $ret = array();
    
    for($i = 0; $i < count($namesPermutation); $i++){
      for($j = $i + 1; $j < count($namesPermutation); $j++){
        $switchedPermutation = $namesPermutation;
      
        switchValues($switchedPermutation[$i], $switchedPermutation[$j]);
        
        $ret[] = $switchedPermutation;
      }
    }
    
    return $ret;
  }
  
  
  
  function allPermutations($arr){
    $ret = array();
    
    if(count($arr) == 1){
      $ret = array($arr);
    }
    else{
      foreach($arr as $itemKey => $itemValue){
        $arrCopy = $arr;
        unset($arrCopy[$itemKey]);
        $permutations = allPermutations($arrCopy);
        
        foreach($permutations as $permutation){
          $ret[] =  array_merge(array($itemValue), $permutation);
        }
      }
    }
    
    return $ret;
  }
  
  
  function debug($name, $value, $allways = false){
    if($GLOBALS["debug"] || $allways){
      echo $name . ": ";
      print_r($value);
      echo "\n";
    }
  }
  
  
  
  //initial configuration - BEGIN
  fillReverseSeats();
  $seatsCoordinates = generateArrayOfKeys($seats);
  
  $names = generateArrayOfKeys($interactions);
  //initial configuration - END
  
  //print configuration
  print_r($interactions);

  print_r($seats);
  
  print_r($names);

  print_r($seatsCoordinates);
  
  $permutationsRegister = new PermutationsRegister();
  
  $bestSeatings = new Bestseatings();
  
  /*
  foreach(allPermutations($names) as $permutation){
    $weight = computeWeight4PeopleOnSpecificSeats($permutation);
    $bestSeatings->addSeatingsIfItHasBestWeight($permutation, $weight);
  }
  */
  
  //
  deepSearch($names, $bestSeatings->weight);
  //
  
  echo "----------------------------\n----------------------------\n";
  
  //
  debug("deepSearchSteps", $deepSearchSteps, true);
  debug("permutationsRegister->permutations", count($permutationsRegister->permutations), true);
  //
  
  print_r($bestSeatings);
 
  
?>