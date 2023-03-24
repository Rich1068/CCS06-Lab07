<?php
for($x=4; $x<=2024; $x+=4){
    if($x%400==0 && $x%100==0){
    } else if($x%100==0){
        continue;
    }
    echo $x . "<br>";
    }
?>
