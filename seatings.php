<?php
  $interactions = array(
    "Vavrecka" => array(                   "Roztocil" => 4.0, "Nosek" => 3.0, "Subrt" => 2.0, "Machart" =>  1.0),
    "Roztocil" => array("Vavrecka" => 4.0,                    "Nosek" => 2.5, "Subrt" => 2.5, "Machart" =>  1.0),
    "Nosek"    => array("Vavrecka" => 3.0, "Roztocil" => 1.0,                 "Subrt" => 5.0, "Machart" =>  1.0),
    "Subrt"    => array("Vavrecka" => 3.5, "Roztocil" => 1.0, "Nosek" => 5.0,                 "Machart" =>  1.0),
    "Machart"  => array("Vavrecka" => 1.8, "Roztocil" => 1.8, "Nosek" => 2.0, "Subrt" => 1.8                   ),
    "X1"       => array()
  );
  
  $names = array();
  
  $seats = array(
    "1-1" => array("1-2" => "n", "1-3" => "v", "2-1" => "o", "2-2" => "sd", "2-3" => "ld"),
    "1-2" => array("1-3" => "n", "2-1" => "sd", "2-2" => "o", "2-3" => "sd"),
    "1-3" => array("2-1" => "ld", "2-2" => "sd", "2-3" => "o"),
    "2-1" => array("2-2" => "n", "2-3" => "v"),
    "2-2" => array("2-3" => "n")
  );

  $seatsCoordinates = array();
  
  $distances = array(
    "n" => 1,
    "v" => 4,
    "o" => 3,
    "sd" => 2.5,
    "ld" => 3.5
  );
  
  $deepSearchSteps = 0;
  
  
  class BestSeating{
    protected $namesPermutation;
    
    function __construct($namesPermutation){
      $this->namesPermutation = $namesPermutation; 
    }
  }
  
  
  class BestSeatings{
    protected $weight;
    protected $bestSeatings;
    
    function __construct(){
      $this->weight = 1000000000;
      $this->bestSeatings = array(); 
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
  
  
  function deepSearch($namesPermutation){
    $currentWeight = computeWeight4PeopleOnSpecificSeats($namesPermutation);
    if($GLOBALS["bestSeatings"]->addSeatingsIfItHasBestWeight($namesPermutation, $currentWeight)){
      debug("deepSearchSteps", $GLOBALS["deepSearchSteps"]);
      debug("currentWeight", $currentWeight);
      debug("namesPermutation", $namesPermutation);
      
      $GLOBALS["deepSearchSteps"]++;
 
      $switches = generateSwitches($namesPermutation);
      
      foreach($switches as $switchedPermutation)
        deepSearch($switchedPermutation);
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
  
  
  function debug($name, $value){
    echo $name . ": ";
    print_r($value);
    echo "\n";
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
  
  $bestSeatings = new Bestseatings();
  
  /*
  foreach(allPermutations($names) as $permutation){
    $weight = computeWeight4PeopleOnSpecificSeats($permutation);
    $bestSeatings->addSeatingsIfItHasBestWeight($permutation, $weight);
  }
  */
  
  deepSearch($names);
  
  echo "----------------------------\n----------------------------\n";
  debug("deepSearchSteps", $deepSearchSteps);
  
  print_r($bestSeatings);
 
  
?>