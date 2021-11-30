<?php

// process client request - request will be via URL

header("Content-Type: application/json");
include ("functions.php");

if (!empty($_GET['name'])){

$name = $_GET['name'];
$price = get_price($name);

if (empty($price))

// book not found message

deliver_response(200, "Book not found!", NULL);
else
//respond with book Price 
deliver_response (200,"Book found!",$price);
}
else
{
//throw invalid request message
deliver_response(400,"Invalid request!",NULL);
}
function deliver_response($status, $status_message,$data){
header("HTTP/1.1 $status $status_message");

$response['Status Code']=$status;

$response['Status Message']=$status_message;

$response['Price']=$data;

$json_response = json_encode($response);

echo $json_response;
}
?>