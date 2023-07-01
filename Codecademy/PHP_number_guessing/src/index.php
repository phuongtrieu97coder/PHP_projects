<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){

  global $play_count,$correct_guesses,$guess_high,$guess_low;

  $play_count++;

  $random_num = rand(1,10);

  echo "\n\nMake your guess...\n\n";

  $user_response = readline(">>");

  $guess = intval($user_response);

  echo "Round: $play_count\nMy Number: $random_num\nYour guess: $guess\n\n";

  if($guess === $random_num){
    $correct_guesses++;
  }elseif($guess > $random_num){
    $guess_high++;
  }elseif($guess < $random_num){
    $guess_low++;
  }else{
    echo "";
  }

  $percent_correct = $correct_guesses/$play_count * 100;

  echo "\n\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n\n";

  if ($guess_high > $guess_low){
      echo "When you guessed wrong, you tended to guess high\n";
  } else if ($guess_high < $guess_low) {
      echo "When you guessed wrong, you tended to guess low\n";
  }else{
      echo "";
  }


}

guessNumber();
guessNumber();
guessNumber();
//I don't want to guess 10 times so I write the program to guess 3 times

?>
