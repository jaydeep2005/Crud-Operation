<?php

   $con =mysqli_connect("localhost","root","","crud operation");

   if(!$con)
   {
     die('Connection Failed'.mysqli_connect_error());
   }

?>