<?php 
//递归
// echo  fei(6);
// function fei($n){
//     if($n<=2){
//         return 1;exit;
//     }else{
//         return fei($n-1)+fei($n-2);
//     }
// }



$a = 10;
   for ($i=1; $i<=$a ; $i++) { 
      if ($i<=2) {
          echo 1;$c=$b=1;
      }else{
        echo $d=$c+$b;
         $b=$d;$c=$b;
        


      }
   }
?>