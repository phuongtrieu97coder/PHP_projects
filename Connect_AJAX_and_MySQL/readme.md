#   ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)  ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5)  ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) ![image](https://img.shields.io/badge/SASS-white?style=for-the-badge&logo=sass) ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) 



<br>
<br>


# Connect AJAX And MySQL


# 1.Purpose:

- I make this project to learn how to connect AJAX, PHP with MySQL database to get data from database and display it to PHP site without reload the whole page 



# 2.How it work:

>  *You can connect PHP syntaxes and JavaScript AJAX syntaxes to work with data from different file*

![image](https://user-images.githubusercontent.com/82598726/182896481-26fd547e-79f5-4643-9df4-bd5e6f692f71.png)

![image](https://user-images.githubusercontent.com/82598726/182897644-06e6a09d-6a57-4ff6-b031-9cf39b0b0352.png)

![image](https://user-images.githubusercontent.com/82598726/182897847-dd10da7c-5dd1-49e4-b38b-562aea5d7f3c.png)



# 3.Technologies:

### a.Programming languages:

> (any programming languages)

> ![image](https://img.shields.io/badge/PHP-PHP-blueviolet) ![image](https://img.shields.io/badge/HTML-HTML5-orange) ![image](https://img.shields.io/badge/CSS-CSS3-blue) ![image](https://img.shields.io/badge/SASS-SASS-ff69b4) ![image](https://img.shields.io/badge/B-Bootstrap-blueviolet) ![image](https://img.shields.io/badge/W3CSS-W3CSS-green) ![image](https://img.shields.io/badge/JS-JavaScript-yellow)  ![image](https://img.shields.io/badge/SQL-SQL-blue)   

### b.Algorithms, Data structures, Syntaxes, and Methods concepts:

> HTML Form, Select input, Table,...

> CSS border, background-color,color,font-size,padding,...

> JavaScript AJAX,Function,If..else if..else condition...

> PHP connect and select data from MySQL database, Validate form data...

### c.IDE,Software:

> (any IDE, Software)

![image](https://user-images.githubusercontent.com/82598726/181828247-0a180433-7628-45d0-91fc-c653225c57aa.png) ![image](https://user-images.githubusercontent.com/82598726/181828341-f2d35c6d-863e-4f1c-af84-a9ebc1e33d58.png) ![image](https://user-images.githubusercontent.com/82598726/181830045-2769b49a-2b5a-43ad-b519-5ae02d5b736a.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) 

### d.Database, Cloud Service:

> (any database, cloud service)

![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png)  ![image](https://user-images.githubusercontent.com/82598726/181830075-a40dcdfe-519c-4a5d-90cd-c3eb308f8cce.png)


### e. Syntaxes:

- 1)	The way to help users see data from database display as a table when user select any option

> Syntax test1.php 

```html 
<form id='form1' name='form1' title='form1'
                     action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>'
                     method='post' target='_self' enctype='multipart/form-data'
                     style='width:800px;border:2px solid green;padding:20px;font-size:25px'
                     data-form1='form1_data' >
       
       
                             <div class='w3-center'>
                                    
                                     <b style='font-size:35px'>Account</b>
                             </div>
       
       

                           
       
                                 <select id='account_select' name='account_select1' title='account_selection' 
                                 data-account-select='account_selection_data' 
                                 style='width:100%;' onchange="Display_user_options(this.value)">
                                     <option disabled selected>---Account Selection---</option>
                                     
                                         <option value='HP'>HP</option>
                                         <option value='TP'>TP</option>
                                         <option value='TH'>TH</option>
                                         <option value='VM'>VM</option>
                                    
       
       
                             </select><br><br>
       
                             <div id='display_user'></div>

                             
                     </form>
       
 
  <script>

     

      function Display_user_options(val){
          if(val == ""){
              document.getElementById('display_user').innerHTML = "";
          }else{
              const xml = new XMLHttpRequest();
              xml.onreadystatechange = function(){
                     if(this.readyState == 4 && this.status == 200){
                     document.getElementById('display_user').innerHTML = this.responseText;
                     }
              }
              xml.open('GET','test2.php?query='+val,true);
              xml.send();
          }
         
      }

     
  </script>


```


> Syntax test2.php

```html

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



```


- 2)	The way to type something to the input and get suggestions

> Syntax test1.php

```html
                     <form id='form1' name='form1' title='form1'
                     action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>'
                     method='post' target='_self' enctype='multipart/form-data'
                     style='width:400px;border:2px solid green;padding:20px;font-size:25px'
                     data-form1='form1_data'>
       
       
                             <div class='w3-center'>
                                    
                                     <b style='font-size:35px'>Movies</b>
                             </div>
       
       

                              <input id='movies_input' list="movies_list" name='movies' type='text'
                              onkeyup="Display_movies_options(this.value)" 
                              placeholder='Enter movies...'
                              style='width:100%'>
       
                                 <datalist id='movies_list'  
                                 style='width:100%;'>
                                   
                                  </datalist><br><br>
       
                             

                     </form>
       
 
    

  
    
        
 
 
     
   
  <script>

     

      function Display_movies_options(val){
          if(val == ""){
              document.getElementById('movies_list').innerHTML = "";
          }else{
              const xml = new XMLHttpRequest();
              xml.onreadystatechange = function(){
                     if(this.readyState == 4 && this.status == 200){
                     document.getElementById('movies_list').innerHTML = this.responseText;
                     }
              }
              xml.open('GET','test2.php?query='+val,true);
              xml.send();
          }
         
      }

     
  </script>

```

> Syntax test2.php

```html
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

```

# 4.Files|Folders are being used:

- test1.php, test2.php, XAMPP PhpMyAdmin



# 5. Running | Output:

![image](https://user-images.githubusercontent.com/82598726/182898912-b03d577e-b510-4a5a-8094-fa4576391a5b.png)

![image](https://user-images.githubusercontent.com/82598726/182898958-5f978886-6c76-4793-8a04-e74c1d4385c6.png)

![image](https://user-images.githubusercontent.com/82598726/182899026-5c77795a-48ca-4a8f-9b14-f7f4b1465d3f.png)

![image](https://user-images.githubusercontent.com/82598726/182899095-c8a68caf-f484-46b8-91f9-3cdfc359fd15.png)

![image](https://user-images.githubusercontent.com/82598726/182899171-73d5a849-48b7-4246-8b5b-5fa94864e32b.png)



# 6. Things to notice:

> Using the method 2 above can help you see hint of movies only when you type in the correct movie title. If you want the program display the hint when you just type in the input field from one to two characters, then you need to get data from JSON file or PHP file that have existing datas about ‘movies title’ because you need syntaxes to help the program search data through each character the users input to display the exactly movie title hints. Select syntax from SQL can’t help you with this.

> =>If you decide to make a project with this feature, please consider writing syntaxes to help the program auto created JSON file and write movie titles data into it each time you upload new movies into your website and database, then you can use Ajax to request data through it based on each character any user types in the movie title input field. 
*Please go to JavaScript AJAX folder to find out more information about this kind of project*



# 7. Sources:

> OneDrive 'Computer Programming/PHP/AJAX' file document
> W3schools.com -> PHP -> AJAX

