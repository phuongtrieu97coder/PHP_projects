<?php
function generateStory($singular_noun,$verb,$color,$distance_unit){
  $story = "\nThe $singular_noun are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd miles to go before I $verb.\n";
  return $story;
}

echo generateStory("mountain","rest","White","5 miles");
echo generateStory("view","eat","darkblue","2 miles");
echo generateStory("car","drive","White","3 miles");
