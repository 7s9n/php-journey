<?php
  $url = 'https://jsonplaceholder.typicode.com/posts';

  //Sample example to get data
  #Initialize a cURL session
  $resource = curl_init($url); # returns A cURL handle.
  #Set an option for a cURL transfer
  curl_setopt($resource , CURLOPT_RETURNTRANSFER , true); #Return Page contents.
  $result = curl_exec($resource);#Perform a cURL session
  $info = curl_getinfo($resource); #Get information regarding a specific transfer
  curl_close($resource);
  // echo '<pre>';
  // var_dump($info);
  // echo '</pre>';
  echo '<pre>';
  var_dump(json_decode($result));
  echo '</pre>';
  $json_array = json_decode($result)[0]->id;
  //echo $result;
?>
