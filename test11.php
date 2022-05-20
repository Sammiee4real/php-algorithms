<?php

$ass = '[
      { "name":"eggs", "price":1 },
      { "name":"coffee", "price":9.99 },
      { "name":"rice", "price":4.04 }
    ]
';
$assd = json_decode($ass,true);

foreach($assd as $s){
    echo $s['name'];
}

// print_r($ass);

?>