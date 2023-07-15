<?php
class StringUtils{
   public static function secondCase($string){
      $string = strtolower($string);
      if (strlen($string) >= 2) {
          $string[1] = strtoupper($string[1]);
      }
      return $string;
   }
}
echo StringUtils::secondCase("MCDONALD"); 
echo "\n";
echo StringUtils::secondCase("baldwin");
echo "\n";
echo StringUtils::secondCase("Q");


class Pajamas {
   private $owner, $fit, $color;
   function __construct($owner='HP',$fit='Great',$color='green'){
     $this->owner = StringUtils::secondCase($owner);
     $this->fit = $fit;
     $this->color = $color;
   }
   public function describe(){
     return "Owner: ".$this->owner.". Fit: ".$this->fit.". Color: ".$this->color.".";
   }

   public function setFit($new_fit){
     $this->fit = $new_fit;
   }
}

$chicken_PJs = new Pajamas('CHICKEN','Excellent','Blue');
echo "\n...they wash their PJs many times....";
$chicken_PJs->setFit("a little tight");
echo "\n";
echo $chicken_PJs->describe();

class ButtonablePajamas extends Pajamas{
    private $button_state = 'unbuttoned';
    public function describe(){
     return parent::describe(). " They also have buttons which are currently $this->button_state";
   }
    public function toggleButtons(){
        if ($this->button_state === "unbuttoned") {
            $this->button_state = "buttoned";
          } else {
            $this->button_state = "unbuttoned";
          }
    }
}

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo "\n";
$moose_PJs->toggleButtons();
echo "\n";
echo $moose_PJs->describe();