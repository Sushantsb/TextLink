<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
$data;
if($_GET['code']=="sugar_crystal")
 {
  if($_GET['id']=="hoffmen")
   {
    if($_GET['req']=="fetch")
     {
      $data=fopen("customer.txt","r");
      $info=fread($data,filesize("customer.txt"));
      echo $info;
     }
    else if($_GET['req']=="throw")
     {
      $data=fopen("vendor.txt","w");
      fwrite($data,$_GET['cry']);
     }
   }
  else if($_GET['id']=="heisenberg")
   {
    if($_GET['req']=="fetch")
     {
      $data=fopen("vendor.txt","r");
      $info=fread($data,filesize("vendor.txt"));
      echo $info;
     }
    else if($_GET['req']=="throw")
     {
      $data=fopen("customer.txt","w");
      fwrite($data,$_GET['cry']);
     }
   }
 fclose($data);
}
?>