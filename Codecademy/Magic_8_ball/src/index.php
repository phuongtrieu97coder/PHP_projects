<?php

function magic8Ball(){
  echo "Do you already have experience in playing magic 8 Ball? \n";
  $answer = readline("My answer >>");

  echo "User's experience: $answer \n\n";

  $random_int = "";

  if($answer == "yes" || $answer == "Yes" || $answer == "YES"){
    echo "We will generate a random number between 0 and 19 for you in a sec...\n\n";

    $random_int = rand(0,19); 

    echo "Your number is: $random_int\n\n";

  }elseif($answer == "no" || $answer == "No" || $answer == "NO"){
     echo "We will generate a random number between 0 and 19 for you in a sec...\n\n";

    $random_int = rand(0,19); 

    echo "Your number is: $random_int\n\n";

  }else{
    echo "\n\n";
  }
  
  switch ($random_int){
    case 0:
       echo "It is certain.\n";
       break;
    case 1:
       echo "It is decidedly so.\n";
       break;
    case 2:
       echo "Without a doubt.";
       break;
    case 3:
       echo "Yes - definitely.\n";
       break;
    case 4:
       echo "You may rely on it.\n";
       break;
    case 5:
       echo "As I see it, yes.\n";
       break;
    case 6:
       echo "Most likely.\n";
       break;
    case 7:
       echo "Great number.\n";
       break;
    case 8:
       echo "I like this number.\n";
       break;
    default:
       echo "Great number!!!\n";
       break;
  }

}

echo magic8Ball();

?>
