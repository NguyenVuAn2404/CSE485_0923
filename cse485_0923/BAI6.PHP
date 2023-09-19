<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
   );
   $values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
   );
$kethop=array();
foreach($keys as $key => $value) {
    $valueKey = $value.'value';
    if(isset($values[$valueKey])){
        $kethop[$value]=$values[$valueKey];
    }
}  
print_r($kethop);
?>