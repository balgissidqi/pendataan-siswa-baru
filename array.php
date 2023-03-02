<?php
$nama = ['bagus','balgis','sahid','bisma','bagas'];
echo $nama [1],"<br>" ;
$nama = array ('bagus','balgis','sahid','bisma','bagas');
echo $nama [4],'<br>' ;
$bilangan = [1,7,8,5,9];
$pertambahan = array_sum($bilangan);
echo $pertambahan, '<br>';
$bilangan = [1,7,8,5,9];
$jumlah = count($bilangan);
$sum=0;
for ($a=1; $a<$jumlah;$a++){ 
$sum = $sum + $bilangan[$a];
}
echo $sum,'<br>';
$a=0;
$sum=0;
$bilangan = [1,3,5,9,7,11,13,15,17];
while($a<count($bilangan)){
    $sum = $sum + $bilangan[$a];
}
echo $sum,'<br>';
$sum=0;
    foreach($bilangan as $key){
    $sum=$sum+$key;
    echo $key;
    }
    echo $sum,'<br>';