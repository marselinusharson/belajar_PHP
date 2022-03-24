<?php
$counter =1;

while(true){
    echo "while loop ke-{$counter}".PHP_EOL;
    $counter++;
    if($counter>10){
        break;
    }
}
for($counter =1;$counter <=20;$counter++){
    
    if($counter % 2 == 1 ){
        continue;
    }
    echo "for loop ke-{$counter}".PHP_EOL;
}