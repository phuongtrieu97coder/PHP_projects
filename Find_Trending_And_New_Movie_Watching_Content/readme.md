# ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)


<br>
<br>

# Find Trending And New Movie Watching Contents


# 1.Purpose:

- This project is a small part of THP_Movie_Streaming_PHP Web App that is used to find trending and new movie contents from this webpage.

- This project can be used to learn how to connect AJAX + PHP + MySQL to select and get specific data based on specific conditions.

- This project helps developers know how to get trending contents data based on the total watching times of each movies according to each user's watching content in a specific month.

- It also helps developers know how to get new contents data based on the contents that were added in a specific month or week.

# 2.How it work:

> When users visit the page, they can see two buttons as 'TRENDING' and 'NEW ON THPSM'. TRENDING button is activated and it opens the block that contains all the trending movies. In addition, this button has bottom white bar to show users that it is activated.

> When Trending button is activated, it connects to AJAX, AJAX connects to PHP, and PHP connects to MySQL to get specific data, then display it on the page.

> If users click 'NEW ON THPSM', the contents block is going to get new movie contents data based on different PHP and SQL algorithm. 

> The contents block shows user 6 movies first, and divided by 3 columns with 2 rows. If the result shows more than 6 movies, then users can scroll down the block to see more movies.

# 3.Technologies:

### a.Programming languages:

> (any programming languages)

> ![image](https://img.shields.io/badge/PHP-PHP-blueviolet) ![image](https://img.shields.io/badge/HTML-HTML5-orange) ![image](https://img.shields.io/badge/CSS-CSS3-blue)  ![image](https://img.shields.io/badge/B-Bootstrap-blueviolet) ![image](https://img.shields.io/badge/W3CSS-W3CSS-green) ![image](https://img.shields.io/badge/JS-JavaScript-yellow) ![image](https://img.shields.io/badge/SQL-SQL-blue)  

### b.Algorithms, Data structures, Syntaxes, and Methods concepts:

> HTML5 \<div\>,\<nav\>,\<button\>,button with specifial dataset,...

> CSS3 background-color, color, overflow, font-size, border-bottom, padding, selectors, border-radius, margin,  display:flex,align-items: center,justify-content: center,...

> Bootstrap button and button styling, grid block,...

> W3CSS hover effect,...

> JavaScript  AJAX, Function, if...else if...else condition, document.getElementById, .setAttribute(), .removeAttribute(), new XMLHttpRequest(),...

> PHP PDO connect MySQL, foreach, if...elseif...else condition, exception, $_GET['...'],...

> SQL SELECT, INNER JOIN, WHERE, GROUP BY, HAVING

### c.IDE,Software:

> (any IDE, Software)

![image](https://user-images.githubusercontent.com/82598726/181828247-0a180433-7628-45d0-91fc-c653225c57aa.png) ![image](https://user-images.githubusercontent.com/82598726/181828341-f2d35c6d-863e-4f1c-af84-a9ebc1e33d58.png) ![image](https://user-images.githubusercontent.com/82598726/181830045-2769b49a-2b5a-43ad-b519-5ae02d5b736a.png) ![image](https://user-images.githubusercontent.com/82598726/181828759-13c51469-e35d-44d6-af61-dfff064b7536.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) ![image](https://user-images.githubusercontent.com/82598726/181835143-0f7aa21a-1081-4df5-954e-6e89259d21e7.png)

### d.Database, Cloud Service:

> (any database, cloud service)

![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) ![image](https://user-images.githubusercontent.com/82598726/181828759-13c51469-e35d-44d6-af61-dfff064b7536.png) ![image](https://user-images.githubusercontent.com/82598726/181830075-a40dcdfe-519c-4a5d-90cd-c3eb308f8cce.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828843-3ba0f2e8-a5dc-4268-b646-5b21898e1139.png) ![image](https://user-images.githubusercontent.com/82598726/181828934-4524165b-801b-44a8-97b4-3966d2eb3c93.png)

### e. Syntaxes:

- Syntax in Introduction_page.php

/*
```html
...
<head>
...
 
 <link rel='stylesheet' type='text/css' href='Styling_page.css'>
 
</head>
     <body>
     <div id='contents_trending_new_block'>


                                        <nav id='ctdnb_buttons'>
                                            

                                                    <button id="trendingContent_butt" title="trendingContent_butt"
                                                     type="button"
                                                    class="changectdnbButton btn text-white
                                                    w3-hover-blue w3-hover-text-white"
                                                    data-trendingContent-butt="trendingContent_butt_data"
                                                      onclick="GetTrendingNewWatchingContents('trending')">
                                                    TRENDING
                                                    </button>



                                                    <button id="newContent_butt" title="newContent_butt"
                                                     type="button" 
                                                    class="changectdnbButton btn text-white
                                                    w3-hover-blue w3-hover-text-white"
                                                    data-newContent-butt='newContent_butt_data'
                                                    onclick="GetTrendingNewWatchingContents('new')">
                                                    NEW ON THPSM
                                                    </button>
                                        </nav>



                                       
                                        <br><br>


                                        <div id='c_trending_new_containers'>
                                                      <div id='ctnc_block1' class='row row-cols-3'></div>
                                        </div>





                        </div>
      
      
      <script>
      
      
        /*syntax to get trending or new watching contents
                    and add bottom bar effect when user click a specific button
                    */


                
                    function GetTrendingNewWatchingContents(val){
                        let get_trending_next_containers = document.getElementById('ctnc_block1');
                        if(val == ""){
                            get_trending_next_containers.innerHTML = "";
                        }else{
                            let xml = new XMLHttpRequest();
                            xml.onreadystatechange = function(){
                                 if(this.readyState == 4 && this.status == 200){
                                    get_trending_next_containers.innerHTML = this.responseText;
                                   
                                 }
                                 
                            }
                            xml.open('GET','Getting_TrendingNew_Contents.php?content_query='+val,true);
                            xml.send();
                        }

                        //conditions below is used to add bottom bar effect
                        if(val == 'trending'){
                            //I used this condition to determine when to add 
                            //or remove a dataset attribute so that I can style it
                            document.querySelector(".changectdnbButton[data-trendingContent-butt]").setAttribute('data-buttonActive','true');
                            document.querySelector(".changectdnbButton:not(button[data-trendingContent-butt])").removeAttribute('data-buttonActive');
                        }else if(val=='new'){
                            document.querySelector(".changectdnbButton[data-newContent-butt]").setAttribute('data-buttonActive','true');
                            document.querySelector(".changectdnbButton:not(button[data-newContent-butt])").removeAttribute('data-buttonActive');
                        }else{
                              console.log('');
                        }
                    }

                    
                    GetTrendingNewWatchingContents('trending');


 
      
      
      
      
      </script>
```

- Syntax in Styling_page.css

```css


[id='ctdnb_buttons']{
    display:flex;
    align-items: center;
    justify-content: center;
}

[id='c_trending_new_containers']{
   margin:0 60px;
}
    

[id='ctnc_block1']{
   height:800px;
   overflow-y: auto;
}


[id='ctnc_block1'] > div {
   margin-bottom:30px;
  
}

[id='ctnc_block1'] > div img {
   border-radius:20px 20px;
}


[id='trendingContent_butt']{
  font-size:25px;padding:0 10px;
  background-color: rgba(0, 0, 0, 0);
                                                    
}


[id='newContent_butt']{
  font-size:25px;padding:0 10px;
  background-color: rgba(0, 0, 0, 0);
                                                    
}


button[data-buttonActive='true']{
   border-bottom: 4px solid white;
}
```


- Syntax in Getting_TrendingNew_Contents.php

```php
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









```

# 4.Files|Folders are being used:

- Introduction_page.php

- Getting_TrendingNew_Contents.php

- Styling_page.css

- XAMPP PHPMyAdmin


# 7. Running | Output:

![image](https://user-images.githubusercontent.com/82598726/182912919-bb7499c9-a349-4473-be41-264db70839c8.png)

![image](https://user-images.githubusercontent.com/82598726/182913003-d4406b99-859d-4042-a4a1-2de63b7cee87.png)

![image](https://user-images.githubusercontent.com/82598726/182913057-864155f7-1cd7-41cc-9749-73214343c141.png)

![image](https://user-images.githubusercontent.com/82598726/182913281-f3b88c1e-2985-441d-a0eb-d1c5388b21ad.png)

![image](https://user-images.githubusercontent.com/82598726/182913345-257c55a1-336a-4193-a50a-b445f50c6769.png)

![image](https://user-images.githubusercontent.com/82598726/182913453-d14d1f65-8da1-46c4-8ff7-82f1cea0e203.png)

![image](https://user-images.githubusercontent.com/82598726/182913499-7a9c29fa-11f2-45d5-ad10-67b479afee10.png)




# 9. Sources:

> THP_Movie_Streaming_PHP



