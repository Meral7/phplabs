<!-- 4- Write a PHP script to get the sum and avg of an indexed array 
with value = 45 in index =1 
with value = 12 in index =0 
with value = 25
 in index =3 
 with value = 10 in index =2 
 after that sort it 
 in a reverse order (highest to lowest). 
 note: array sum avg sort reverse -->
 <?php
 $arr = array();
 $arr[1] = 45;
 $arr[0] = 12;
 $arr[3] = 25;
 $arr[2] = 10 ;
foreach($arr as $element)
echo ($element.'<br>');
echo ('sum of array is ') ;
$sum = array_sum($arr);
echo $sum;
echo "<br>";
$length = count($arr);
$avg = $sum / $length ;
echo ('avg is '.$avg);
echo "<br>";
echo "sort array";
echo "<br>";
sort($arr);
$arrlength = count($arr);
for($x = 0; $x < $arrlength; $x++) {
  echo $arr[$x];
  echo "<br>";}
  echo "reverse array";
  echo "<br>";
  rsort($arr);
$clength = count($arr);
for($k = 0; $k < $clength; $k++) {
  echo $arr[$k];
  echo "<br>";
}
 ?>