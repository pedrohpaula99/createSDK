
<?php

require 'vendor/autoload.php';
 
use GuzzleHttp\Client;
 
$client = new Client([
  'verify' => false
]);

$response = $client->request('GET', 'https://api.github.com/users/rafaelwendel');
//converts to php object
$github_user = json_decode($response->getBody());

//prints the "name" (Rafael Pinheiro)
echo $github_user->name;

//prints the "blog" (https://www.rafaelwendel.com)
echo $github_user->blog;

    //$res = $client->request('GET', 'https://api.github.com/user', [
      //  'auth' => ['user', 'pass']]);
    
    //echo $res->getStatusCode();

    //require("GetGoogle.php");
    //$call = new call();
    //$call->execute_get();
?>
