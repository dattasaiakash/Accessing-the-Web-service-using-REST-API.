<!DOCTYPE HTML>
<html> 
<body>

<form method="post">
Book Name: <input type="text" name="name">
<input type="submit" name="submit" value="Get Price"> <br><br>
</form>

<?php

//Simple GET Request 
if(isset($_POST['submit'])){

$name = $_POST['name'];

//Address of the resource

$url = "http://localhost:8012/phplessons/rest/?name=$name";

//Send request to the resource 
$client = cURL_init($url);

//Get response from resource 
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = cURL_exec($client);

//echo $response;

//Decode the response
$result = json_decode($response);

echo $result -> Price;
}

?>

</body>

</html>