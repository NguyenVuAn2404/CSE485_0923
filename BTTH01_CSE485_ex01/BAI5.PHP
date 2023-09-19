<?php
$a = [
    'a' => [
    'b' => 0,
    'c' => 1
    ],
    'b' => [
    'e' => 2,
    'o' => [
    'b' => 3
    ]
    ]
   ];
$valueB=$a['b']['o']['b'];
$valueC=$a['a']['c'];
$infoA=$a['a'];
echo'giá trị của "b"là:'.$valueB.'<br/>';
echo'giá trị của "b"là:'.$valueC.'<br/>';
echo'giá trị của "b"là:<pre>'.print_r($infoA,true).'<br>';
?>