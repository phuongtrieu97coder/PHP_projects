<style>
          [id='table1']{
            width:600px;
          }
          [id='table1'] tr, [id='table1'] th, [id='table1'] td{
            border:5px double green;
            padding:20px;
            font-size:30px;
            text-align:center;
          }
        </style>


    </head>



    <body>

      <?php
       
       $web_host = 'localhost';
       $admin = 'phuongcoderinfinity';
       $admin_database_pass='butcherfithack97';
       $database_name = 'car_information';

       $get_query = $_GET['query'];

       try{
         $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;
         $conn = new PDO($access_database_info,$admin,$admin_database_pass);
         $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         $query1 = 'SELECT Customer_id,Name,Age,Gender FROM customers WHERE Name = :seek_username';
      
       $stmt = $conn->prepare($query1);
      
        $stmt->bindParam(':seek_username',$seek_username);
      
        $seek_username = $get_query;
      
        $stmt ->execute();
      
        $select_result = $stmt->fetch(); 
        $i = 0;
      
          echo "<table id='table1'>";
          echo '<tr>';
          echo '   <th>Name</th>';
          echo  '  <th>Username</th> ';
          echo '   <th>Age</th>';
          echo  '  <th>Gender</th> ';
          echo '</tr>';
          echo '<tr>';
      
          while($i<count($select_result)){
              echo '<td>'.$select_result[$i].'</td>';
              $i++;
              if($i>3){ 
                 break;
              }
      
           }
           echo '</tr>';
           echo '</table>';
  
      }catch(PDOException $e){
         echo 'ERROR: '.$e->getMessage();
      } 
      
       $conn = null;
      ?>
