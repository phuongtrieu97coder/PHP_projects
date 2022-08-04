      <?php
       
       $web_host = 'localhost';
       $admin = 'phuongcoderinfinity';
       $admin_database_pass='butcherfithack97';
       $database_name = 'movies_collection';

       $get_query = $_GET['query'];

       try{
         $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;
         $conn = new PDO($access_database_info,$admin,$admin_database_pass);
         $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         $query1 = 'SELECT Title FROM action_adventure WHERE Title = :seek_title';
      
       $stmt = $conn->prepare($query1);
      
        $stmt->bindParam(':seek_title',$seek_title);
      
        $seek_title = $get_query;
       
        $stmt ->execute();
      
        $select_result = $stmt->fetch(); 
        $i = 0;
      
      
          while($i<count($select_result)){
              echo "<option value='".$select_result[$i]."'>".$select_result[$i].'</option>';
              $i++;
              if($i>1){ 
                 break;
              }
      
           }
        
  
      }catch(PDOException $e){
         echo 'ERROR: '.$e->getMessage();
      } 
      
       $conn = null;
      ?>

