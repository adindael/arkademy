<?php
for ($i=1; $i<=7; $i++){
      for ($j=$i; $j=0; $j--){
          echo "&nbsp;&nbsp";
      }
      for ($k=1; $k <=$i ; $k++) { 
      	echo "$k , ";
      }
      echo "<br>";
}
?>