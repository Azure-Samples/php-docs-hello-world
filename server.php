<?php

include('functions.php');

function serverRequest($data, $requestUrl, $type) {


  $user = "pez.dashboard";   
  $password = "pez.kr";

  // $serverBaseUrl = "https://tickets.fotboltagogn.com/";
  // $user = "stubbur.app";   
  // $password = "EcImyQNM8bNrEosO7uxM";
  
  $serverBaseUrl = "https://tickets.fotboltagogn.com/";

  $data_string = json_encode($data);                                                    
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $serverBaseUrl.$requestUrl);    
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);  
  curl_setopt($ch, CURLOPT_POST, true);              
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
  curl_setopt($ch, CURLOPT_USERPWD, $user.':'.$password);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(   
    'Accept: application/json',
    'Content-Type: application/json',
    'Charset: utf-8')                                                           
);

  $errors = curl_error($ch);                                                                                                          
  $serverResult = curl_exec($ch);
  $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);  

  // return $result;

  return json_decode($serverResult, true);

}

?>