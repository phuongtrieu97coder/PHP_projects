<?php
$count = 1;
while($count <= 100){
  if($count % 15 == 0){
      echo "FizzBuzz \n";
      break;
  }elseif($count % 5 == 0){
      echo "Buzz \n";
  }elseif($count % 3 == 0){
      echo "Fizz \n";
  }else{

    echo $count."\n";
  }
  $count++;
}

echo "\n\n";

$output = [];

for($i = 1; $i <= 100; $i++){
   if($i % 15 == 0){
      array_push($output, "FizzBuzz");
      break;
  }elseif($i % 5 == 0){
      array_push($output,"Buzz");
  }elseif($i % 3 == 0){
       array_push($output,"Fizz");
  }else{
    array_push($output, $i);
  }
}
echo "\n\n";

foreach($output as $value){
  echo $value ."\n";
}

echo "\n\n";

foreach($output as $value2){
  if($value2 === "Fizz"){
     continue;
  }elseif($value2 === "FizzBuzz"){
     echo $value2;
     break;
  }else{
     echo $value2 ."\n";
  }
}