<?php

    $server = "sql105.epizy.com";
    $user = "epiz_31720665";
    $pass = "zFLwDjPU8yUUf";
    $bd = "epiz_31720665_sistemaCss";

   if( $conn = mysqli_connect($server,$user,$pass,$bd) ){
     //  echo "Conectado";
   }else{
      
   }

   function msg($texto, $tipo){
       echo "<div class='alert alert-$tipo' role='alert'>
               $texto;
             </div>";
   }

?>