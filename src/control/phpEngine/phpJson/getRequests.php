<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/model/statusIds.php";
require($path);

function getPackByPackCode($packCode)
{
$apiPackCode = $packCode;

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => 'http://localhost:8080/api/tracking/whereis/'.$apiPackCode,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: f2cb011f-b441-4fc3-9a1d-c4f5760f5317",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$resStr = json_decode($response, true);

if ($err) {
  echo "cURL Error #:" . $err;
} 
 
if (empty($resStr)){
  throw new \Exception ("The package wasn't found in the database");
}

  global $statusId, $customerId, $warehouseId, $lastUpdate, $location, $postDate;
    
    getDetailOfStatusCode($resStr[0]['statusId']);

    $statusId;
    $customerId = $resStr[0]['customerId'];
    $warehouseId = $resStr[0]['warehouseId'];

    $lastUpdate = date_create($resStr[0]['lastUpdate']);
    $lastUpdate = date_format($lastUpdate, "d/m/Y - H:i:s");
    
    $postDate = date_create($resStr[0]['postDate']);
    $postDate = date_format($postDate, "d/m/Y - H:i:s");
    
    $location = $resStr[0]['location'][0];    


}

?>