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
      }
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
  
  
  
  function computePeopleOnSpecificSeatsWeight($namesPermutation){
    $weight = 0;
    $personsSeating = wherePersonSits($namesPermutation);
    
    foreach($GLOBALS["interactions"] as $name => $nameInteractions){
      $nameSeat = $personsSeating[$name];
      
      foreach($nameInteractions as $nameInteraction => $hoursInteraction)
        $weight += $hoursInteraction * $GLOBALS["distances"][$GLOBALS["seats"][$nameSeat][$personsSeating[$nameInteraction]]];
    }
    
    return $weight;
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
  
  foreach(allPermutations($names) as $permutation){
    print_r($permutation);
    
    $weight = computePeopleOnSpecificSeatsWeight($permutation);
    echo "weight: " . $weight . "\n\n";
    
    $bestSeatings->addSeatingsIfItHasBestWeight($permutation, $weight);
  }
  
  print_r(allPermutations($names));
  
  echo "----------------------------\n----------------------------\n";
  
  print_r($bestSeatings);
  
  
?>