<?php

    /**
     * Getting Device Address Endpoint
     */

      $url = 'data.json'; 
      $json = file_get_contents($url);
      $convertToArrayObject = json_decode($json,true);
      echo $convertToArrayObject[0]["ipaddress"].":".$convertToArrayObject[0]["port"];


?>