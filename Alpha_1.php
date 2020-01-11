<?php
    print("<br><br>");
    $letters = [];
    $n = 'A';
    for($i=1; $i<=26; $i++)
    {
        array_push($letters, $n++);
    }

rsort($letters);
foreach($letters as $letter)
    print($letter.' ');
?>