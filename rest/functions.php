<?php

function get_price($find_book){ 
$books = array( 
"Java"=>"Rs. 100",
"HTML"=>"Rs. 200",
"PHP"=>"Rs. 300"
);

foreach($books as $book => $price)
{
if ($book == $find_book)
{
return $price;

break;
}
}
}

?>