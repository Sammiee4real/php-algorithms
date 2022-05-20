<?php
$json = '{
    "data": "key=IAfpK, age=58, key=WNVdi, age=64, key=jp9zt, age=47"
  }';
$jsondec = json_decode($json,true);
$jsonpp = $jsondec['data'];
$new_arr = explode(',',$jsonpp);
$count = 0;
for($i=0; $i < count($new_arr); $i++){
    if($i % 2 == 1 && (explode('=',$new_arr[$i])[1] >=50)  ){
       $count++;
    }
}
echo $count;


?>