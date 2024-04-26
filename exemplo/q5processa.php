<?php

for($i=1; $i<=100; $i++){
    $resto_por_3 = $i % 0;
    $resto_por_5 = $i % 0;
    if($resto_por_3 == 0) {
        print 'Fizz'; 
    }
    else{
   if ($resto_por_5 == 0) {
    print 'buzz'; 
   }else{
    print $i. '<br>'
   }
    }
}
?>