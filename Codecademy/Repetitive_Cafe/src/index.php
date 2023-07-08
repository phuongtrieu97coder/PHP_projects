<?php
$drinks = [
  "Latte" => 3.99,
  "Coffee" => 2.00,
  "Tea" => 2.50,
  "Mocha" => 4.50
];

$pastries = [
  "Croissant",
  "Muffin",
  "Slice of Pie",
  "Slice of Cake",
  "Cupcake",
  "Brownie"
];

foreach($drinks as $keys => $values):
?>
<li><?=$keys.": $".$values?></li>
<?php endforeach;?>
<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>

</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for($i=0;$i<count($pastries);$i++):?>
<li><?=$pastries[$i]."<br>"?></li>
<?php endfor;?>
</ul>
