<?php

    
$web_host = 'localhost';
$admin = 'youradminname';
$admin_database_pass = '*********';
$database_name = 'thp_movie_streaming';
    
    
$q1  = $_GET['content_query'];
    
    
 try{
   $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;
   $conn = new PDO($access_database_info,$admin,$admin_database_pass);
   $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
   if($q1 == 'trending'){
     $query1 = "SELECT movies_collection.Movie_Poster
     FROM tracking_users_watching
     INNER JOIN movies_collection ON tracking_users_watching.Watching = movies_collection.Title
     WHERE DateTimeWatching LIKE '2022-08%'
     GROUP BY Watching
     HAVING COUNT(Watching)>=1";


        
        $stmt = $conn->prepare($query1);
        
        $stmt ->execute();
        
        $select_result  = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        foreach($select_result as $val){
            echo "<div class='col'><img src='".$val['Movie_Poster']."' alt='TrendingContent_img'
             width='100%' height='400px'></div>";
        }
   }



   if($q1 == 'new'){
    $query2 = "SELECT Movie_Poster
    FROM movies_collection
    WHERE DateTimeAdding LIKE '2022-08%'";


       
       $stmt2 = $conn->prepare($query2);
       
       $stmt2 ->execute();
       
       $select_result2  = $stmt2->fetchAll(PDO::FETCH_ASSOC);

       foreach($select_result2 as $val){
        echo "<div class='col'><img src='".$val['Movie_Poster']."' alt='NewContent_img'
         width='100%' height='400px'></div>";
       }
  }

   
   
 
    
}catch(PDOException $e){
   echo 'ERROR: '.$e->getMessage();
}
    
 $conn = null;






?>
