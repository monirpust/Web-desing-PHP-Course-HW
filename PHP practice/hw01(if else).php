<!DOCTYPE html>
<html>
<body>
<?php
// 1. Write a program to check whether it is alphabet, digit or special character.
  
  $text = "/";
  $asciText = ord($text);
  //cheking alphabet using ascii value
  echo "Entered single character is:<br>";
  if( ($asciText >= 65 and $asciText <= 90) or ($asciText >= 97 and $asciText <= 122)){
     echo "Alphabet<br>";
  }
  
  //cheking alphabet comparing with ascii value
   elseif( $asciText >= 48 and $asciText <= 57){
   	echo "Digit<br>";
     
  } else{
     //cheking special character
     echo "Special Charater<br>";
   }

#2. Write a program to print all even numbers between 1 to 100.
  echo "Even Number between 0 to 100<br>";
  for($i = 1; $i < 100; $i++){
    if( $i % 2 == 0 ){
      echo "$i<br>";
    }
  }

#3. Write a C program to print all odd numbers between 1 to 100.
    echo "Odd Number between 0 to 100<br>";
  for($i = 1; $i < 100; $i++){
    if( $i % 2 != 0 ){
      echo "$i<br>";
    }
  }

// 4. Write a program to find the sum of all even numbers between 1 to n.
  echo "Sum of all even Number between 0 to n<br>";
  $n = 100;
  $sum = 0;
  for($i = 1; $i < $n; $i++){
    if( $i % 2 == 0 ){
      $sum += $i;
    }
  }
  echo "$sum<br>";

// 5. Write a program to find the sum of all odd numbers between 1 to n.
    echo "Sum of all odd Numbers between 0 to n<br>";
  $n = 100;
  $sum = 0;
  for($i = 1; $i < $n; $i++){
    if( $i % 2 != 0 ){
      $sum += $i;
    }
  }
  echo "$sum<br>";
  ?>

</body>
</html>