<?php 
//echo 'hello my name is alkali';
//$name ="alkali";
//define('NAME','EMIR ');
  $me = ['aminu','alkali','saidu'];
  $me1 = ['aminu5','alkali5','saidu5'];
//print_r($me) ;
$me2=array_merge($me,$me1);
print_r($me2);
$me1[0]='emmir';
$me1[3]='shugaba';
$ages = [
  ['emir','alkali',5],
  ['emir1','alkali1',15],
  ['emir2','alkali2',25],
  ['emir3','alkali3',35]
];
$ages1 = [
  ['emir'=>'emi','alkali'=>5],
  ['emir'=>'emi','alkali'=>6],
  ['emir'=>'emi','alkali'=>7]
];
foreach($ages1 as $age){
 // echo $age['emir'].'-'.
//$age['alkali'];
//echo '<br />'; 
} 
//echo $ages1[0]['alkali'];
$arr=['name','age','school'];
//for($i=0;$i<count($arr);$i++){
 // echo $arr[$i] . '<br />';
 foreach($arr as $arrr){

 // echo $arrr . '<br />';  
 
}
$i=0;
while($i< count($ages1)){
 // echo $ages1[$i]['emir']. '-'. $ages1[$i]['alkali'];
  //echo '<br />'; 
  $i++;
}
//echo 5>=5;
//echo 'emir'> 'Elkali';
//echo 'am'=='am';
//echo 5=='5';
//echo 5==='5';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
      <ul>
      <h2><?php// foreach($ages1 as $age){ ?> </h2>
     
      <h3><?php //echo $age['emir'];  ?> 
      <p>
      <?php //echo $age['alkali']; ?> 
      </p>
      <?php //} ?>
      </ul>
    </li>
   
</body>
</html>