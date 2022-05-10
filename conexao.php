<?php

    $server = "localhost";
    $user = "root";
    $pass = "19019407eric@";
    $bd = "sistemacc";

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