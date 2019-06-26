<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require($path .= "/control/phpEngine/phpMailer/mailer.php");



function postNewPack($pcode, $statusId, $location, $customerId, $warehouseId)
{
      global $suss;
      $curl = curl_init();
      
    curl_setopt_array($curl, array(
      CURLOPT_PORT => "8080",
      CURLOPT_URL => "http://localhost:8080/api/tracking/new",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\n\t\"_id\": \"$pcode\",\n\t\"statusId\":$statusId,\n\t\"location\": \"$location\",\n\t\"customerId\":$customerId,\n\t\"warehouseId\":$warehouseId\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Postman-Token: 1eeba28e-56aa-4a02-a059-11a7f7091614",
        "cache-control: no-cache"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $suss = $response;
      
      mailNewPack($pcode, $statusId, $location, $customerId);
    }
}


function updatePackByCode($pcode, $statusId, $location, $warehouseId)
{
      global $suss;
      $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_PORT => "8080",
      CURLOPT_URL => "http://localhost:8080/api/tracking/update",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "PUT",
      CURLOPT_POSTFIELDS => "{\n\t\"_id\": \"$pcode\",\n\t\"statusId\":$statusId,\n\t\"location\": \"$location\",\n\t\"warehouseId\": $warehouseId\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Postman-Token: aa406163-245b-492c-b1e8-20a10d03bc4f",
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    

    if ($err) {
      echo "cURL Error #:" . $err;
      curl_close($curl);
    } else {
      curl_close($curl);
      
      $suss = $response;
      mailUpdatePack($pcode, $statusId, $location);
    }

    
}
?>

