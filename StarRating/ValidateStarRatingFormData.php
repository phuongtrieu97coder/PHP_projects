<?php
session_start();

    $servername = 'localhost';
    $user = 'phuongcoderinfinity';
    $pass  = 'butcherfithack97';
    $dbname = 'thp_movie_streaming';
    

    try{
         $access = 'mysql:host='.$servername.';dbname='.$dbname;
         $conn = new PDO($access,$user,$pass);
         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

         $submitDataRule = $_POST['submitDataRule'];
         $rateDataValue = $_POST['rateDataValue'];



//first we need to find the name of a column to know which column
//we want users to add rating data into based on $rateDataValue
// and $submitDataRule
         
         $query1 = "SELECT :starColumn AS starRating   FROM contents_starrating
         WHERE Content_Title = :contentTitle";
         //output will be  the column name like 1star, 2stars, and so on

         $stmt = $conn->prepare($query1);

         $stmt->bindParam(':starColumn',$starColumn);
         $stmt->bindParam(':contentTitle',$contentTitle);

         $starColumn = $rateDataValue;
         $contentTitle  =  $_SESSION['movie_select'];


         $stmt->execute();


         
         $row = $stmt->rowCount();
         $select_value = $stmt->fetchAll(PDO::FETCH_ASSOC);


         $sv_result = "";
         
         if($row > 0 ){
           foreach($select_value as $val){
            $sv_result = $val['starRating'];
          
           }
         }





// Now we can update data through a specific column based on 
//column name result above

         if($submitDataRule == 'GetTotalRatingNumber'){
               $query2 = "SELECT $sv_result FROM contents_starrating
               WHERE Content_Title = :contentTitle2";


               $stmt2 = $conn->prepare($query2);

               $stmt2->bindParam(':contentTitle2',$contentTitle2);

               $contentTitle2  =  $_SESSION['movie_select'];


               $stmt2->execute();



               $row2 = $stmt2->rowCount();
               $select_value2 = $stmt2->fetch();


               
               if($row2 > 0 ){
               $i2 = 0;
               while($i2 < count($select_value2)){
               echo $select_value2[$i2];
               $i2++;
               if($i2==1){
                    break;
                    }
               }
               }
         }





         if($submitDataRule=='submitStarRating'){
          $query2  = "UPDATE contents_starrating
          SET $sv_result =
           (SELECT  $sv_result FROM contents_starrating
             WHERE Content_Title = :contentTitle)+1
             WHERE Content_Title = :contentTitle2";


              $stmt2 = $conn->prepare($query2);

             
              $stmt2->bindParam(':contentTitle',$contentTitle);
              $stmt2->bindParam(':contentTitle2',$contentTitle2);

              $contentTitle  =  $_SESSION['movie_select'];
              $contentTitle2  =  $_SESSION['movie_select'];


              $stmt2->execute();

              echo "THANK YOU FOR RATING THIS CONTENT!!!";
              



         }



    }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }

    $conn = null;

  ?>



      




