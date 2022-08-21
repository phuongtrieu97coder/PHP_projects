<?php

$web_host = 'localhost';
$admin = 'phuongcoderinfinity';
$admin_database_pass='butcherfithack97';
$database_name = 'movies_collection';


try{
  $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;
  $conn = new PDO($access_database_info,$admin,$admin_database_pass);
  $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $query1 = "SELECT Movie_Poster,Title FROM action_adventure 
  WHERE Title LIKE '%".strtoupper($_GET['query'])."%'";

$stmt = $conn->prepare($query1);


 $stmt ->execute();

 $select_result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
 
foreach($select_result as $val){
       echo "
       <div class='w3-hover-green w3-hover-text-white'
        onclick='GetHintValue(this)' title='".$val['Title']."'>
           <img src=".$val['Movie_Poster']." alt='movie_poster'
           width='40px' height='40px'> <span>".$val['Title']."</span>
       </div>
       ";
}



}catch(PDOException $e){
  echo 'ERROR: '.$e->getMessage();
} 

$conn = null;
?>

