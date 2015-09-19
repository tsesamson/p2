<?php

  //Function used to load the dictionary
  function getDict() {
    try {
      $dic = file('corncob_lowercase.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } catch (Exception $e) {
      echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    
    return $dic;
  }

  function getXkcdPassword($numOfWords=4, $delimiter='-', $numOfSpecialChar=0, $addNum=false, $addSym=false, $isCamelCase=false, $isProperCase=false){
    $result = ''; //Define varibale for password result
    $dic = getDict();
    $maxLength = 9;
    
    if($numOfWords > $maxLength) {
      $numOfWords = $maxLength;
    }
    
    //For loop to generate the password
    for($i = 0; $i <$numOfWords; $i++) {
        $randNum = rand(0, count($dic));
        $result .= $dic[$randNum];
        
        //Don't add delimiter if it is the last word
        if($i < $numOfWords -1) {
          $result .= $delimiter;
        }
    }
    
    return $result;
  }

?>
