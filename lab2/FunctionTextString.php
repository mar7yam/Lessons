
<?php
 //strlen()
   $length = strlen("Hello, World!");
   echo $length; // 13
echo"<br>";

//strpos()

   $position = strpos("Hello, World!", "World");
   echo $position; // 7
   echo"<br>";

//str_replace()
   
   $new_string = str_replace("World", "PHP", "Hello, World!");
   echo $new_string; // Hello, PHP!
  echo"<br>";

//substr()

   $substring = substr("Hello, World!", 7, 5);
   echo $substring; // World
   echo"<br>";

### دوال التحقق والمقاstrcmp()rcmp()**

   $comparison = strcmp("Hello", "hello");
   echo $comparison; // الفرق في الشيفرة ASCII
  echo"<br>";

//strcasecmp()

   $comparison = strcasecmp("Hello", "hello");
   echo $comparison; // 0 (تعني تساوي السلسلتين)
   echo"<br>";

//str_contains()

   $contains = str_contains("Hello, World!", "World");
   echo $contains ? "نعم" : "لا"; // نعم
  echo"<br>";


### دوال تحويل الأحرف

//strtoupper()
   
   $upper = strtoupper("Hello, World!");
   echo $upper; // HELLO, WORLD!
   echo"<br>";

//strtolower()

   $lower = strtolower("Hello, World!");
   echo $lower;
  echo"<br>";


//ucfirst()

   $capitalized = ucfirst("hello, world!");
   echo $capitalized; // Hello, world!
   echo"<br>";

//ucwords()

   $title = ucwords("hello, world!");
   echo $title; // Hello, World!
  echo"<br>";


### دوال القص والتجزئة

//trim()
 
   $trimmed = trim("  Hello, World!  ");
   echo $trimmed; // "Hello, World!"
   echo"<br>";

//ltrim()

   $left_trimmed = ltrim("  Hello, World!  ");
   echo $left_trimmed;
  echo"<br>";

//rtrim()

   $right_trimmed = rtrim("  Hello, World!  ");
   echo $right_trimmed; // "  Hello, World!"
   echo"<br>";
//explode()

   $array = explode(", ", "Hello, World, PHP");
   print_r($array); // Array ( [0] =>implode() World [2] => PHP )
   echo"<br>";

//implode()

   $string = implode(", ", ["Hello", "World", "PHP"]);
   echo $string; // Hello, World, PHP
   echo"<br>";
### دوال التنسيق

//number_format()

   $formatted_number = number_format(123456789.1234, 2);
   echo $formatted_number; // 123,456,789.12
   echo"<br>";

//sprintf()
 
   $formatted_string = sprintf("The price is $%.2f", 99.99);
   echo $formatted_string; // The price is $99.99
   echo"<br>";
//nl2br()

   $text = "Hello,\nWorld!";
   $formatted_text = nl2br($text);
   echo $formatted_text; // Helmd5()rld!
   echo"<br>";

### دوال التشفير والتحويل

//md5()
   
   $hash = md5("password");
   echo $hash; // 5f4dcc3b5aa765d61d8327deb882cf99
   echo"<br>";

//sha1()

   $hash = sha1("password");
   echo $hash;//f0682250b6cf8331b7ee68fd8
  echo"<br>";

//base64_encode()

   $encoded = base64_encode("Hello, World!");
   echo $encoded; // SGVsbG8sIFdvcmxkIQ==
   echo"<br>";
//base64_decode()
 
   $decoded = base64_decode($encoded);
   echo $decoded; // Hello, World!
   echo"<br>";
   ?>