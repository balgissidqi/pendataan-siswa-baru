<?php
$flag=0;
$bil=11;
for ($a=2;$a<100;$a++){
    if($bil%$a==0){
        $flag++;
    }
}
if($flag==1){
   echo'prima';
}
   else{
     echo 'bukan prima';
    }