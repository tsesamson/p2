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

  function getXkcdPassword($numOfWords=4, $delimiter='-', $addSpecialChar='', $addNum=false, $addSym=false, $isProperCase=false){
    $result = ''; //Define varibale for password result
    $dic = getDict();
    $maxLength = 7;
    
    //Check to see if this is a form submit request
    if (!empty($_GET))
    {
      //Grab the options
      
      //Assign the value from the form if it is an integer
      if(isset($_GET['numOfWords']) && is_numeric($_GET['numOfWords'])) {
        $numOfWords = $_GET['numOfWords'];
      }
      
      //Assign the value for demlimiter and make sure char is the length of 1
      if(isset($_GET['delimiter']) && strlen($_GET['delimiter'])>=1) {
        $delimiter = substr($_GET['delimiter'], 0, 1);
      }
      
      //Assign the value for addSpecialChar and make sure char is the length of 1
      if(isset($_GET['addSpecialChar']) && strlen($_GET['addSpecialChar'])>=1) {
        $addSpecialChar = substr($_GET['addSpecialChar'], 0, 1);
      }
    }
    
    //Do not allow the number of words to go over maxlength
    if($numOfWords > $maxLength) {
      $numOfWords = $maxLength;
    }
    
    //For loop to generate the password
    for($i = 0; $i <$numOfWords; $i++) {
        $randNum = rand(0, count($dic));
        
        //Determine if proper case option is selected then add random word to result
        if(isset($_GET['isProperCase']) || $isProperCase) {
          $result .= ucwords($dic[$randNum]);
        } else {
          $result .= $dic[$randNum];
        }
        
        //Don't add delimiter if it is the last word
        if($i < $numOfWords -1) {
          $result .= $delimiter;
        }
    }
    
    //Inject a special char into the password if it is defined
    if(strlen($addSpecialChar) == 1) {
      $result = addSpecialChar($result, $addSpecialChar);
    }
    
    //Add a random number if that option is selected
    if(isset($_GET['addNum']) || $addNum) {
      $result = addNum($result);
    }
    
    return $result;
  }

  //Function used to add special char in a random spot of the result string
  function addSpecialChar($inputString, $specialChar) {
    $randSpot = rand(0, strlen($inputString));
    
    return substr($inputString, 0, $randSpot) . $specialChar . substr($inputString, $randSpot, strlen($inputString));
  }
  
  //Function to randomly select a number from 0-9 then add it to a random spot in the result string
  function addNum($inputString) {
    $randNum = rand(0, 9);
    $randSpot = rand(0, strlen($inputString));
    
    return substr($inputString, 0, $randSpot) . $randNum . substr($inputString, $randSpot, strlen($inputString));
  }

?>
