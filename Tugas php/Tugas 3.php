<?php
function bilanganprima($n){
  
  for($a=1;$a<=$n;$a++){  
          
          $counter = 0; 
          for($b=1;$b<=$a;$b++){ 
              
         
                if($a % $b==0){ 
                    
                      $counter++;
                }
          }
        
        if($counter==2){
             
               print $a." adalah bilangan prima <br/>";
        }
 }
} 

bilanganprima(40)
?>