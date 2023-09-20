


<?php
$first=0;
$second=1;
$result=$first.",".$second;



for($i=2;$i<=9;$i++){
    $third=$first+$second;
    if($third>100){
        break;
    }
    $result=$result.",".$third;
    $first=$second;
    $second=$third;





}
echo $result.'.';
?>




