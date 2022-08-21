#   ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)  ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5)  ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) ![image](https://img.shields.io/badge/SASS-white?style=for-the-badge&logo=sass) ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) 



<br>
<br>


# Connect AJAX + PHP + MySQL to search something


# 1.Purpose + How it work:

- In this document, we are going to try to connect AJAX with PHP and MySQL database to help users search movie title based on each keyword they put into input field. Users will see hints about each movies title display below the input field through each keyword

# 2.Technologies:

### a.Programming languages:

> (any programming languages)

> ![image](https://img.shields.io/badge/PHP-PHP-blueviolet) ![image](https://img.shields.io/badge/HTML-HTML5-orange) ![image](https://img.shields.io/badge/CSS-CSS3-blue) ![image](https://img.shields.io/badge/SASS-SASS-ff69b4) ![image](https://img.shields.io/badge/B-Bootstrap-blueviolet) ![image](https://img.shields.io/badge/W3CSS-W3CSS-green) ![image](https://img.shields.io/badge/JS-JavaScript-yellow)  ![image](https://img.shields.io/badge/SQL-SQL-blue)   

### b.Algorithms, Data structures, Syntaxes, and Methods concepts:

> HTML \<form\>, \<input\> field, \<div\>,\<img\>,\<span\>...

> CSS border, background-color,color,font-size,padding,...

> JavaScript AJAX,Function,for loop...

> PHP connect and select data from MySQL database, Validate form data,foreach loop...

> W3CSS  w3-hover-green, w3-hover-text-white

> SQL SELECT, WHERE, LIKE

### c.IDE,Software:

> (any IDE, Software)

![image](https://user-images.githubusercontent.com/82598726/181828247-0a180433-7628-45d0-91fc-c653225c57aa.png) ![image](https://user-images.githubusercontent.com/82598726/181828341-f2d35c6d-863e-4f1c-af84-a9ebc1e33d58.png) ![image](https://user-images.githubusercontent.com/82598726/181830045-2769b49a-2b5a-43ad-b519-5ae02d5b736a.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) 

### d.Database, Cloud Service:

> (any database, cloud service)

![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png)  ![image](https://user-images.githubusercontent.com/82598726/181830075-a40dcdfe-519c-4a5d-90cd-c3eb308f8cce.png)


### e. Syntaxes:

 
Syntax test1.php

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
       
                                 <div id='movies_list_hints'  
                                 style='width:100%;'>
                                   
                                  </div>
       
                             

                     </form>
       
 
    
                     <script>
                           function Display_movies_options(val){
                                   if(val==""){
                                          document.getElementById('movies_list_hints').innerHTML = '';
                                   }else{
                                          var xml = new XMLHttpRequest();
                                          xml.onreadystatechange = function(){
                                                 if(this.readyState == 4 && this.status == 200){
                                                 document.getElementById('movies_list_hints').innerHTML =
                                                 this.responseText;

                                                 /* 
                                                 for loop below make sure that the hint blocks are going to appear
                                                 after an user click a specific movie title hint block to
                                                 display the title into the input field
                                                 */
                                                 let getMoviesListHintsChildDiv =
                                                       document.querySelectorAll("[id='movies_list_hints']>div");
                                                        for(let i = 0; i< getMoviesListHintsChildDiv.length;i++){
                                                               getMoviesListHintsChildDiv[i].style.display='block';
                                                        }
                                                 }
                                          }
                                          xml.open('GET','test2.php?query='+val,true);
                                          xml.send();
                                   }
                            }

                            /* 
                            The function below is for displaying movie titles into input field
                            after an user click a specific movie title hint block. 
                            After that, the other unnecessary movie title hints blocks are going to disappear 
                            */
                           

                            function GetHintValue(data1){
                                   document.getElementById('movies_input').value = data1.title;
                                   let getMoviesListHintsChildDiv = document.querySelectorAll("[id='movies_list_hints']>div");
                                   for(let i = 0; i< getMoviesListHintsChildDiv.length;i++){
                                          getMoviesListHintsChildDiv[i].style.display='none';
                                   }
                                   
                            }
                                   
                                   
                     </script>
```

Syntax test2.php

```php
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
```

# 3. Files in image folder:
![image](https://user-images.githubusercontent.com/82598726/185804518-dde8e6d3-257f-499a-b640-a3ce55e535ef.png)


# 4. Database in MySQL
 ![image](https://user-images.githubusercontent.com/82598726/185804087-8a2cd251-7abb-4984-babd-6836f82b1d6f.png)


# 5. Running | Output:

 ![image](https://user-images.githubusercontent.com/82598726/185804090-115afaa1-1b78-44e8-9325-b5e77f8e4bfb.png)

 ![image](https://user-images.githubusercontent.com/82598726/185804098-20af292f-f1a0-40d6-b970-7b72db21858f.png)

 
 ![image](https://user-images.githubusercontent.com/82598726/185804101-1ba5c41d-dc5a-461f-bb06-d7a81c12a36c.png)
 
 ![image](https://user-images.githubusercontent.com/82598726/185804106-bd2f6a48-fb6f-4348-b762-badf31c770fa.png)


After you click AQUAMAN=>
  
![image](https://user-images.githubusercontent.com/82598726/185804110-fd5944b7-09ae-4cc8-8817-63d62e169f12.png)

![image](https://user-images.githubusercontent.com/82598726/185804113-0c50863e-36b6-406a-8e89-9c57bdd935c3.png)

# 6. Sources:

> OneDrive 'Computer Programming/PHP/ConnectAJAX_PHP_MySQL_to_search_something' file document


> W3schools.com -> PHP -> AJAX
