<?php
  $interactions = array(
    "Vavrecka" => array(                   "Roztocil" => 4.0, "Nosek" => 3.0, "Subrt" => 2.0, "Machart" =>  1.0, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 0.5, "Decker" => 0.5, "Brabec" => 2.0),
    "Roztocil" => array("Vavrecka" => 4.0,                    "Nosek" => 2.5, "Subrt" => 2.5, "Machart" =>  1.0, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 0.5, "Decker" => 0.5, "Brabec" => 1.0),
    "Nosek"    => array("Vavrecka" => 3.0, "Roztocil" => 1.0,                 "Subrt" => 5.0, "Machart" =>  1.0, "Pavlik" => 1.0, "Skvor" => 1.0, "Valder" => 1.0, "Decker" => 2.0, "Brabec" => 2.0),
    "Subrt"    => array("Vavrecka" => 3.5, "Roztocil" => 1.0, "Nosek" => 5.0,                 "Machart" =>  1.0, "Pavlik" => 1.0, "Skvor" => 1.0, "Valder" => 0.5, "Decker" => 1.5, "Brabec" => 2.0),
    "Machart"  => array("Vavrecka" => 1.8, "Roztocil" => 1.8, "Nosek" => 2.0, "Subrt" => 1.8                   , "Pavlik" => 2.0, "Skvor" => 0.3, "Valder" => 2.0, "Decker" => 0.2, "Brabec" => 1.0),
    "Pavlik"   => array("Vavrecka" => 0.5, "Roztocil" => 0.5, "Nosek" => 0.5, "Subrt" => 0.5, "Machart" =>  2.0                                 , "Valder" => 2.0, "Decker" => 0.5, "Brabec" => 1.0),
    "Skvor"    => array("Vavrecka" => 2.0, "Roztocil" => 2.0, "Nosek" => 1.0, "Subrt" => 1.0                                                    , "Valder" => 3.0, "Decker" => 2.0, "Brabec" => 1.0),
    "Valder"   => array("Vavrecka" => 1.0, "Roztocil" => 1.0, "Nosek" => 1.0, "Subrt" => 1.0, "Machart" =>  4.0, "Pavlik" => 1.0, "Skvor" => 4.0                 , "Decker" => 4.0, "Brabec" => 4.0),
    "Decker"   => array("Vavrecka" => 0.5, "Roztocil" => 0.5, "Nosek" => 2.0, "Subrt" => 1.0, "Machart" =>  0.5, "Pavlik" => 0.5, "Skvor" => 2.0, "Valder" => 2.0                 , "Brabec" => 2.0),
    "Brabec"   => array("Vavrecka" => 2.0, "Roztocil" => 1.0, "Nosek" => 3.0                , "Machart" =>  1.0, "Pavlik" => 1.0                , "Valder" => 3.0, "Decker" => 2.0                 )
  );
  
  $names = array();
  
  $seats = array(
    "1-1" => array("1-2" => "n", "1-3" => "v", "2-1" => "o", "2-2" => "sd", "2-3" => "ld", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl"),
    "1-2" => array("1-3" => "n", "2-1" => "sd", "2-2" => "o", "2-3" => "sd", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl"),
    "1-3" => array("2-1" => "ld", "2-2" => "sd", "2-3" => "o", "3-1" => "rs", "3-2" => "rs", "3-3" => "rs", "4-1" => "rl"),
    "2-1" => array("2-2" => "n", "2-3" => "v", "3-1" => "bo", "3-2" => "bsd", "3-3" => "bld", "4-1" => "rs"),
    "2-2" => array("2-3" => "n", "3-1" => "bsd", "3-2" => "bo", "3-3" => "bsd", "4-1" => "rs"),
    "2-3" => array("3-1" => "bld", "3-2" => "bsd", "3-3" => "bo", "4-1" => "rs"),
    "3-1" => array("3-2" => "n", "3-3" => "v", "4-1" => "o"),
    "3-2" => array("3-3" => "n", "4-1" => "sd"),
    "3-3" => array("4-1" => "ld")
  );

  $seatsCoordinates = array();
  
  $distances = array(
    "n" => 1,
    "v" => 4,
    "o" => 3,
    "sd" => 2.5,
    "ld" => 3.5,
    "bo" => 2,
    "bsd" => 1.8,
    "bld" => 2.2,
    "rs" => 5,
    "rl" => 6
  );
  
  $debug = false;
  $deepSearchSteps = 0;
  
  
  
  
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
      
      if($GLOBALS["deepSearchSteps"] >= 1000)
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