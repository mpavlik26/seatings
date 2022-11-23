<?php
  $interactions = array(
    "Vavrecka" => array("Vavrecka" => 6.0, "Roztocil" => 4.0, "Nosek" => 3.0, "Subrt" => 2.0, "Machart" =>  1.0),
    "Roztocil" => array("Vavrecka" => 4.0, "Roztocil" => 8.5, "Nosek" => 2.5, "Subrt" => 2.5, "Machart" =>  1.0),
    "Nosek"    => array("Vavrecka" => 3.0, "Roztocil" => 1.0, "Nosek" => 6.0, "Subrt" => 5.0, "Machart" =>  1.0),
    "Subrt"    => array("Vavrecka" => 3.5, "Roztocil" => 1.0, "Nosek" => 5.0, "Subrt" => 6.5, "Machart" =>  1.0),
    "Machart"  => array("Vavrecka" => 1.8, "Roztocil" => 1.8, "Nosek" => 2.0, "Subrt" => 1.8, "Machart" => 10.0)
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
  
  
  function computePeopleOnSpecificSeatsWeight($seats){
    $weitght = 0;
    
    foreach($GLOBALS["interactions"] as $personInteractions){
      foreach($personInteractions as $partyName => $partyHours){
        $weight += 0;
      }
    }
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
  
  print_r(allPermutations($seatsCoordinates));
  
?>