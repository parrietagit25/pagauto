<?php

function get_country(){
  // La URL de la API

  $curl = curl_init();

  $urlip = "http://ip-api.com/json/" . urlencode($_SERVER['REMOTE_ADDR']);
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => $urlip,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ));
  
  $response = curl_exec($curl);
  
  if ($response === false) {
      curl_close($curl);
      die('Error en la solicitud cURL: ' . curl_error($curl));
  }
  
  curl_close($curl);
  
  $data = json_decode($response, true);
  
  $country = $data['country'];
  
  return $country;

}

?>
