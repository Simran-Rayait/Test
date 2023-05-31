<?php
 
// testseing
function wrp($choc,$wrpr){

if($choc<$wrpr){
    return 0;
}
$choc1=($choc/$wrpr);
echo $choc1."<br>";

 $choc= ($choc1+wrp($choc1,$wrpr));
 return $choc;

}
function totalCh($money,$price,$wrpr){
    if($money%$price==0){
$choc=$money/$price;
    }
    else{
        $choc=($money/$price)-0.5;
        
    }

$total=ceil($choc+wrp($choc,$wrpr));


echo ceil($total);


}

$money=10;
$price=2;
$w=2;

 totalCh($money,$price,$w);

?>
