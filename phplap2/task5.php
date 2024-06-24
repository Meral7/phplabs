<!-- Write a PHP script to sort the following associative array : 
  array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40)
  in a) ascending order sort by value 
  b) ascending order sort by Key 
  c) descending order sorting by Value 
  d) descending order sorting by key -->
  <?php
  echo "ascending order sort by value ";
  echo "<br>";
  echo "<br>";
     $arr = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
     asort($arr);
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
   echo "<br>";
   echo "<br>";
   echo "ascending order sort by Key ";
   echo "<br>";
   echo "<br>";
   ksort($arr);

foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
   echo "<br>";
   echo "<br>";
   echo "descending order sorting by Value  ";
   echo "<br>";
   arsort($arr);
   echo "<br>";
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }  echo "<br>";
   echo "<br>";
   echo "descending order sorting by key  ";
   echo "<br>";
   echo "<br>";
   krsort($arr);
   echo "<br>";

foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";

   }
   ?>