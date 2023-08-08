<?php

    /**
     * IP Address Endpoint for Magic Mirror Device
     */

    if($_POST["ipaddress"] != "") {
      echo $_POST["ipaddress"];
      echo "</br>";
      echo $_POST["port"];
      $final_data=fileCreateWrite();

      if(file_put_contents('data.json', $final_data))
      {
         $message = "<label class='text-success'>Data added Success fully</p>";
      }

   } else {
      echo "nothing";
   }


   function fileWriteAppend() {
      $current_data = file_get_contents('data.json');
      $array_data = json_decode($current_data, true);
      $extra = array(
          'ipaddress' => $_POST['ipaddress'],
          'port' => $_POST['port'],
      );
      $array_data[] = $extra;
      $final_data = json_encode($array_data);
      return $final_data;
   }


   function fileCreateWrite(){
		$file=fopen("data.json","w");
		$array_data=array();
		$extra = array(
			 'ipaddress'  =>     $_POST['ipaddress'],
			 'port'       =>     $_POST["port"],
		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		fclose($file);
		return $final_data;
   }


?>