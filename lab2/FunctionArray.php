<?php
 //array_push()
 $array = [1, 2, 3];
 print_r(array_push($array, 4, 5));

 //array_pop()
 $value = array_pop($array);
echo  "<br>".$value;
 //array_shift()
 $value = array_shift($array);
 echo  "<br>".$value;

 //array_unshift()
 print_r(array_unshift($array, 0));

// array_merge()
 $array1 = [1, 2];
 $array2 = [3, 4];
 $result = array_merge($array1, $array2);
 print_r($result);
 echo"<br>";
 //array_slice()
 $subset = array_slice($array, 1, 2);
  print_r($subset);
  echo"<br>";
 //array_map()
 $squared = array_map(function($n) { return $n * $n; }, $array);
 print_r($squared);
 echo"<br>";
 //array_filter()
 $filtered = array_filter($array, function($n) { return $n > 2; });
 print_r($filtered);
 echo"<br>";
 //array_keys()
 $keys = array_keys($array);
 print_r($keys);
 echo"<br>";
 //array_values()
 $values = array_values($array);
 print_r($values);
 echo"<br>";
 //in_array()
 $exists = in_array(2, $array);
 echo  "<br>".$exists;
//count()
 $count = count($array); 
 echo  "<br>".$count;
?>