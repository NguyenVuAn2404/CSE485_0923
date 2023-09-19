<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    
    $longestString = '';
    $shortestString = '';

foreach ($arrs as $string) {
    if ($longestString == '' || strlen($string) > strlen($longestString)) {
        $longestString = $string;
    }

    if ($shortestString == '' || strlen($string) < strlen($shortestString)) {
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất: " . $longestString . "<br>";
echo "Chuỗi nhỏ nhất: " . $shortestString . "<br>";

?>