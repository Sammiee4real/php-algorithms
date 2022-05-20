<?php

$arr = [
    '25',
    'apple',
    [
        'banana','strw','apple',25
    ]

    ];

$count= 0;
$item ="apple";
for($i = 0 ; $i < count($arr); $i++) {
    if( (is_array($arr[$i]) === true)  && in_array($item,$arr[$i])   ){
        $count++;
    }else{
        if($item == $arr[$i]){
            $count++;
        }
    }
}
echo $count;
// print_r($ass);

?>