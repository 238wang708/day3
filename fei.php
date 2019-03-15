<?php
echo fei(1);
   function fei($a){

      if ($a<=2) {
          return 1;
      }else{
        return fei($a-1)+fei($a-2);
      }
   }

echo "<br>";

//非递归
$a=10;

for ($i=1; $i<$a ; $i++) { 
  if ($i<=2) {
     echo 1;$c=$b=1;
  }else{
      $d=$c+$b; echo $d;
     $c=$b;$b=$d;
  }
 
}

?>

