# ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)


<br>
<br>

# Star Rating Contents


# 1. Running | Output:

![image](https://user-images.githubusercontent.com/82598726/188285669-b60f5e4d-0301-49cc-a1eb-b7dd51a55897.png)

![image](https://user-images.githubusercontent.com/82598726/188285683-7250a1bd-c56a-47dd-beaa-4fc3bede5cdc.png)


![image](https://user-images.githubusercontent.com/82598726/188285689-db8d45d0-1449-4e5d-a879-0f526ee498f3.png)


![image](https://user-images.githubusercontent.com/82598726/188285698-43e5b9f4-eb80-43d7-b94d-d1b2021167a1.png)

![image](https://user-images.githubusercontent.com/82598726/188285702-53bf2e98-9990-4245-9ab0-ad3f733f3644.png)

![image](https://user-images.githubusercontent.com/82598726/188285720-329807c9-f6df-480e-b5a8-7bc6ee824125.png)

![image](https://user-images.githubusercontent.com/82598726/188285729-dcce3b7a-e83a-42ab-bad2-ca93dc455222.png)



# 2.Purpose:

- This project is a small part of THP_Movie_Streaming_PHP Web App that is used to help users rate movie contents through the amount of star from this webpage.

- This project can be used to learn how to connect AJAX + PHP + MySQL to select and get specific data based on specific conditions.

- This project helps developers know how many stars display in each content that represent how good or bad a movie content is.

- It also help users know the ways to rate a movie content through a form contains different star options so that an user can decide to choose how many star they want to rate that content.


# 3.How it work:

> An user can see how many stars appear above the movie content's trailer. Star can have yellow color or white color. If the content deserves 4 stars, then this user can see 4 yellow star and 1 white star, 4/5 context next to it, and Total Rating: with a specific number after that.

> How many stars a content deserve is based on the highest amount of users rate this content through a specific amount of star. We can find out that number through data from MySQL database based on 'contents_starrating' table through different columns like 'Content_Title', '1star', '2stars', '3stars', '4stars', and '5stars'. For example: If 'Aquaman' has the highest number of users who has rated this movie from '5stars' column, then we will take this number to display into 'Total Rating'.

> Below the movie trailer is 3 buttons, 1 rating, 1 watch movie, and 1 watch trailer buttons. I have another 'watchlist' button in my main project. In this project I juse provide those 3 button above with only JavaScript syntax for 'Rating' button

> If an user click 'Rating' button, then a rating form will appear places in front of a block overlay and in the middle of the page. An user can close this form by clicking any area outside this form (or overlay area) or the 'X' button. 

> This form connect AJAX to submit data into 'ValidateStarRatingFormData.php' file and this file will update data into MySQL database. I chose this method because I don't want the page reload after I rate a content, and I also want to see the 'THANK YOU FOR RATING THIS CONTENT!!!' message appear in this Rating form after I click 'Rating' button.

> An user can see the text 'How would you like to rate this content?', '0/5', 'Very bad', 5 white star symbol, 'Very great', and 'Total Rating'

> Now this user can click how many star they like to rate this content, and then click RATING button. After each star turns into yellow color, the text '0/5' will increase the number and 'Total Rating' text will have a specific number next to it appears to present how many users had rated this content through that amount of star. If this user decides to click a star again to turn it into white color because he or she click a star by mistake, the number above will decrease.

> If user has successfully rating a content, he or she can see the 'THANK YOU FOR RATING THIS CONTENT!!!' message with a 'Reset' button appear in this form. The program will connect data to AJAX XMLHttpRequest to transfer data to 'ValidateStarRatingFormData.php' and connect to MySQL through PHP syntaxes to update data from 'contents_starrating' table. Since each 'star' column has a specific number of users have been rated this content, we want this specific number of users increase by one

> For example: We have '5stars' column of 'Aladin' contains a number as '7562'. If Alan want to rate Aladin 5stars, we want the column '5stars' of 'Aladin' to increase into '7563'. I don't care who had been rated this movie 5 stars because this is not a commercial project so I don't want to deal with billion or trillion data like this in MySQL database.

> If this user want to rate this content again, he or she must click 'reset' button.

> If an user just see '0/5' display in this form and click 'RATING' button, then the 'YOU MUST RATING AT LEAST 1 STAR TO ACTIVATE RATING BUTTON!!!' will appear with a 'RESET' button. This user has to click 'RESET' button to reset this form and rate again. If not, this user will see this error message everytime he or she click 'Rating' button that places below the movie or movie trailer area.


# 4.Technologies:

### a.Programming languages:

> (any programming languages)

> ![image](https://img.shields.io/badge/PHP-PHP-blueviolet) ![image](https://img.shields.io/badge/HTML-HTML5-orange) ![image](https://img.shields.io/badge/CSS-CSS3-blue)  ![image](https://img.shields.io/badge/B-Bootstrap-blueviolet) ![image](https://img.shields.io/badge/W3CSS-W3CSS-green) ![image](https://img.shields.io/badge/JS-JavaScript-yellow) ![image](https://img.shields.io/badge/SQL-SQL-blue)  

### b.Algorithms, Data structures, Syntaxes, and Methods concepts:

> HTML5 \<div\>,\<nav\>,\<button\>,button with specifial dataset,...

> CSS3 background-color, color, overflow, font-size, border,border-radius, padding, selectors, border-radius, margin,  display:flex,align-items: center,justify-content: center,float,position:fixed,position:absolute, width,z-index,outline,outline-offset,text-shadow,font-weight,display:none,...

> Bootstrap button and button styling, grid block,...

> W3CSS hover effect,...

> JavaScript  AJAX, Function, if...else if...else condition, document.getElementById, .setAttribute(), new XMLHttpRequest(),for loop, array, array push,document.querySelectorAll, document.getElementById('something').dataset.datasetname ...

> PHP PDO connect MySQL, foreach, if...elseif...else condition, exception, $_GET['...'],$_SESSION, ...

> SQL SELECT, INNER JOIN, WHERE, GROUP BY, HAVING, UPDATE, SET, select a specific column name from scratch...

### c.IDE,Software:

> (any IDE, Software)

![image](https://user-images.githubusercontent.com/82598726/181828247-0a180433-7628-45d0-91fc-c653225c57aa.png) ![image](https://user-images.githubusercontent.com/82598726/181828341-f2d35c6d-863e-4f1c-af84-a9ebc1e33d58.png) ![image](https://user-images.githubusercontent.com/82598726/181830045-2769b49a-2b5a-43ad-b519-5ae02d5b736a.png) ![image](https://user-images.githubusercontent.com/82598726/181828759-13c51469-e35d-44d6-af61-dfff064b7536.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) ![image](https://user-images.githubusercontent.com/82598726/181835143-0f7aa21a-1081-4df5-954e-6e89259d21e7.png)

### d.Database, Cloud Service:

> (any database, cloud service)

![image](https://user-images.githubusercontent.com/82598726/181828437-03bf1b40-f35c-4e48-8ebd-127ef3a6f49d.png) ![image](https://user-images.githubusercontent.com/82598726/181828759-13c51469-e35d-44d6-af61-dfff064b7536.png) ![image](https://user-images.githubusercontent.com/82598726/181830075-a40dcdfe-519c-4a5d-90cd-c3eb308f8cce.png)
 ![image](https://user-images.githubusercontent.com/82598726/181828843-3ba0f2e8-a5dc-4268-b646-5b21898e1139.png) ![image](https://user-images.githubusercontent.com/82598726/181828934-4524165b-801b-44a8-97b4-3966d2eb3c93.png)

### e. Syntaxes:


- Syntax in Movie_Search_Validate.php

```html
<?php 
declare(strict_types=1);
session_start();
?>
<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS Web TEMPLATE ">


              <meta name="author"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


                        
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
               

               <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 

               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>



               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  
               
            
               <link rel="stylesheet" type='text/css' href='Styling1.css'>
             
             



              <title>PHUONG WEBSITE</title>




       </head>




       <body>
       

                


       <?php
    $servername = 'localhost';
    $user = 'phuongcoderinfinity';
    $pass  = 'butcherfithack97';
    $dbname = 'thp_movie_streaming';
    
    $search = 'Monster Inc';//$_GET['moviesearchingquery'];
    //In my project I use $_GET['moviesearchingquery'] to get data from AJAX XMLHttpRequest() because the movie content can be changed
    //whenever an user click on different movie poster to see its information


    $movie_poster  = $movie_trailer = $movie_video =  $movie_title = $movie_type = $public_year =
     $duration  = $rating = 
      $countries = $languages ="";

    try{
         $access = 'mysql:host='.$servername.';dbname='.$dbname;
         $conn = new PDO($access,$user,$pass);
         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

         $query1 = "SELECT Movie_Poster,Title,Trailer,Video,Movie_Type,PublicYear,Duration,
         Rating,Countries_Of_Origin,Languages
          FROM movies_collection
         WHERE Title = :seek_title
         " ;

         $stmt = $conn->prepare($query1);

         $stmt->bindParam(':seek_title',$seek_title);

         $seek_title = $search;

         $stmt->execute();


         $data_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

         $row = $stmt->rowCount();

        
         
         if($row>0){
           
              foreach( $data_result as $val){
                $movie_poster = $val['Movie_Poster'];
                $movie_title = $val['Title'];
                $movie_trailer = $val['Trailer'];
                $movie_video = $val['Video'];
                $movie_type = $val['Movie_Type'];
                $public_year = $val['PublicYear'];
                $duration = $val['Duration'];
                $rating = $val['Rating'];
                $countries = $val['Countries_Of_Origin'];
                $languages = $val['Languages'];
                $_SESSION['movie_select'] = $val['Title'];
              }
         }else{
              echo "";
         }
       
         

         $getRatingStarArray = [];



         $query2 = 'SELECT 1star,2stars,3stars,4stars,5stars
         FROM contents_starrating WHERE Content_Title = :seek_title2';
         
      $stmt2 = $conn->prepare($query2);
         
       $stmt2->bindParam(':seek_title2',$seek_title2);
         
       $seek_title2 = $search;
         
       $stmt2 ->execute();
         

       $select_result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
       
      foreach($select_result2 as  $val){
         $getRatingStarArray= [
                "1star" => $val['1star'],
                "2stars" => $val['2stars'],
                "3stars" => $val['3stars'],
                "4stars" => $val['4stars'],
                "5stars" => $val['5stars']
         ];
      }

   //totalMaxRatingValue

   $totalMaxRatingValue = max(array_values($getRatingStarArray));
   

   //find the key or column name of totalMaxRatingValue through 
   //getRatingStarArray

   $keyOftotalMaxRatingValue = array_search($totalMaxRatingValue,$getRatingStarArray);
   


    }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }

    $conn = null;

  ?>







              <div id='search_movie_result_block'>
                       

                       <div id='movie_title_and_type_block'>

                          <div id='m_tl_block'>
                            <b id='search_movie_title'><?php echo $movie_title;?></b>
                          </div>


                          <div id='m_tp_block'>
                                <span id='search_movie_year'><?php echo $public_year;?></span>
                                <span id='search_movie_rating'><?php echo $rating;?></span>
                                <span id='search_movie_duration'><?php echo $duration;?></span>
                                <span id='search_movie_countries'><?php echo $countries;?></span>
                                <span id='search_movie_languages'><?php echo $languages;?></span>

                                <div id='m_tp_block_starRating'>
                                      <?php
                                      
                                      if($keyOftotalMaxRatingValue == '1star'){
                                        echo "
                                        
                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>

                                        <b class='rateNumber'>1/5</b>
                                        
                                        ";
                                      }





                                      if($keyOftotalMaxRatingValue == '2stars'){
                                        echo "
                                        
                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>

                                        <b class='rateNumber'>2/5</b>
                                        
                                        ";
                                      }





                                      if($keyOftotalMaxRatingValue == '3stars'){
                                        echo "
                                        
                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>

                                        <b class='rateNumber'>3/5</b>
                                        
                                        ";
                                      }





                                      if($keyOftotalMaxRatingValue == '4stars'){
                                        echo "
                                        
                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-white' 
                                        ><i class='fa fa-star'></i></span>

                                        <b class='rateNumber'>4/5</b>
                                        
                                        ";
                                      }





                                      if($keyOftotalMaxRatingValue == '5stars'){
                                        echo "
                                        
                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>


                                        <span class='ratingStar w3-text-yellow' 
                                        ><i class='fa fa-star'></i></span>

                                        
                                        <b class='rateNumber'>5/5</b>
                                        
                                        ";
                                      }
                                      
                                      
                                      ?>


                                      <b>Total Rating: <?php echo $totalMaxRatingValue;?></b>



                                </div>
                          </div>

                     

                       </div>


                       <br>
                       



                        <div id='movie_poster_and_trailer_block' class='row row-cols-2'>
    
    
                                <div id='s_m_poster_block' class='col-4'>
                                   <img id='s_m_poster_img'
                                    width='100%' src='<?php echo $movie_poster;?>'
                                   height='500px' alt='search_movie_poster_img'>
                                </div>
    
    
                                <div id='s_m_trailer_block' class='col-8'>
    
                                       
    
                                        <div id='search_movie_trailer_video'>
                                            <iframe id='movie_trailer' width='100%' height='500px'
                                             src='<?php echo $movie_trailer;?>'
                                            title='YouTube video player' frameborder='0' 
                                            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
                                            allowfullscreen> </iframe>


                                            <video id="movie_video" width="100%" height="600px" controls muted autoplay
                                            >
                                                  <source  id="movie_video_src" 
                                                  src="<?php echo $movie_video;?>" type="video/mp4" >
                                              

                                                  Sorry, your video does not work!!!
                                            </video>

                                        </div>



                                        
                                </div>
    
    
                       </div>

                      <br>

                      <div id='movie_info_block'>


                                <div id='m_i_b_content1'>

                                        <?php
                                        
                                        $movie_type_arr = explode(" ",$movie_type);
                                        //turns a string into array separates each element at 
                                        //each single whitespace.
                                        
                                        ?>
                                         <div id='movie_type_block'>

                                            <div id='m_t_b_container1'>
                                                <?php
                                                foreach($movie_type_arr as $mtr){
                                                    echo "<span class='m_t_item' data-m-t-item='".$mtr."'>".$mtr."</span>";
                                                }
                                                
                                                ?>

                                            </div>
                                             
                                           
                                              <span id='options_buttons_block'>

                                                     <button id='OpenStarRatingForm_butt1'  title='OpenStarRatingForm_button 1' 
                                                      type='button' class='btn
                                                      w3-hover-blue w3-hover-text-white' 
                                                      onclick="OpenStarRatingForm()"
                                                       data-starRating-butt-data='starRating_button_data'>
                                                      <i class='fa fa-star w3-text-yellow'></i>  Rating
                                                      </button>


                                                       
                                                      <?php require('Main_page_starRatingForm.php');?>







                                                    

                                                    



                                                    


                                                      <button id='watch_movie_butt1'  title='watch_movie_button 1' 
                                                      type='button' class='btn btn-success text-white 
                                                      w3-hover-aqua w3-hover-text-white'
                                                       data-watch-movie-butt-data='watch_movie_button_data' onclick='Open_movie_video()'>
                                                      <i class='fa fa-youtube-play'></i>  Watch Movie</button>

                                                      <!--

                                                      The Open_movie_video() function inside 'SearchOpenCloseMoviesTrailers1.js' file is going to help 
                                                      a block with id='movie_video' appear, and a block with id='movie_trailer' disappear.
                                                      -->

                                                      <button id='watch_trailer_butt1'  title='watch_trailer_button 1' 
                                                      type='button' class='btn btn-warning text-white w3-hover-green
                                                      w3-hover-text-white'
                                                       data-watch_trailer-butt-data='watch_trailer_button_data' onclick='Open_movie_trailer()'>
                                                      <i class='fa fa-youtube-play'></i>  Watch Trailer</button>


                                                        <!--

                                                      The Open_movie_trailer() function inside 'SearchOpenCloseMoviesTrailers1.js' file is going to help 
                                                      a block with id='movie_trailer' appear, and a block with id='movie_video' disappear.
                                                      -->




                                              </span>
                                         </div>


                                </div>


                      </div>


              </div>



             

            

                                     

              <script src='StarRating1.js'></script>



       </body>




       <footer>
              
       </footer>



</html>
```

- Syntax in Main_page_starRatingForm.php

```html
<!DOCTYPE html>
<html lang='en'>
     <body>


      


                        <div id='starRating_form1' name='starRating_form1' title='starRating_form1'
                         data-starrating-form1='starRating_form1_data'>
              
              
                         <button id='CloseStarRatingFormButt1' 
                         title='CloseStarRatingForm button 1'  type='button'
                         class='w3-hover-red w3-hover-text-white w3-transparent'
                         onclick='close_StarRatingForm_func()'
                          data-Closestarratingformbutt-data=
                          'CloseStarRatingForm_button_data'> &times;</button>
                            


                              <div id='starRatingForm1MainContent'>

                                   

                                    <div id='starRatingForm1ContentBlock'>


                                          <div id='starRatingForm1ContentBlock_mainContent' class='w3-center'>

                                                      <div id='starRatingForm1TitleBlock'>
                                                      <b>How would you like to rate this content?</b>
                                                      </div>


                                                         <br>

                                                      <span id='rateNumberBlock' data-totalstar=''>
                                                            <b id='rateNumber'>0</b><b>/5</b>
                                                      </span>

                                                      <br>



                                                <b>Very bad</b>
                                                <button id='starRating_butt1' title='starRating_button1' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button1')" 
                                                      ><i class='fa fa-star'></i></button>


                                                <button id='starRating_butt2' title='starRating_button2' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button2')" 
                                                      ><i class='fa fa-star'></i></button>


                                                <button id='starRating_butt3' title='starRating_button3' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button3')" 
                                                      ><i class='fa fa-star'></i></button>


                                                <button id='starRating_butt4' title='starRating_button4' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button4')" 
                                                      ><i class='fa fa-star'></i></button>


                                                <button id='starRating_butt5' title='starRating_button5' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button5')" 
                                                      ><i class='fa fa-star'></i></button>


                                                      <b>Very great</b>


                                                      <br>
                                                


                                                      <span id='totalStarRatingNumberBlock'>
                                                            <b>Total Rating: <i id='totalStarRatingNumberBlock_value'></i></b>
                                                      </span>
                                                
                                                            
                                                      
                                          </div>





                                          <div id='0starRatingErrorMessageBlock'>

                                                <button id='0starRatingErrorMessage_resetButt1' 
                                                title='0starRatingErrorMessage reset button 1' 
                                                type='button' class='w3-transparent w3-hover-green w3-hover-text-white'
                                                onclick='Open_starRatingForm1ContentBlock_mainContent()'>
                                                <i class='fa fa-refresh fa-spin w3-text-aqua'></i> 
                                                <b class='text-white'>RESET</b>
                                               </button>


                                               <div id='0starRatingErrorMessageInfo' class='w3-center'></div>
                                                      



                                          </div>






                                          <div id='ThankyouRatingMessageBlock'>

                                          <button id='ThankyouRatingMessage_resetButt1' title='ThankyouRatingMessage reset button 1' 
                                          type='button' class='w3-transparent w3-hover-green w3-hover-text-white'
                                          onclick='Open_starRatingForm1ContentBlock_mainContent()'>
                                          <i class='fa fa-refresh fa-spin w3-text-aqua'></i> 
                                          <b class='text-white'>RESET</b>
                                          </button>


                                          <div id='ThankyouRatingMessageInfo' class='w3-center'></div>
                                                


                                          </div>



                                    </div>
                                    
                                    <br>
                                    <br>
              
                                     <button id='SubmitStarRating_butt1'  title='SubmitStarRating_button 1'
                                     type='button' class='w3-hover-text-yellow w3-hover-white'
                                     data-submitstarrating-butt='SubmitStarRating_button_data'
                                     onclick="SubmitStarRating(document.getElementById('rateNumberBlock').dataset.totalstar)">
                                     <i class='fa fa-star w3-text-yellow'></i> <b>RATING</b></button>
                        


                               </div>

                        </div>



                             
                             <div id='StarRatingFormOverlay1' onclick='close_StarRatingForm_func()'></div>

              
     </body>
</html>



```


- Syntax in ValidateStarRatingFormData.php

```php

<?php
session_start();

    $servername = 'localhost';
    $user = 'phuongcoderinfinity';
    $pass  = '*************';
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



      





```

- Syntax in Styling1.css

```css
body{
    background-color: rgb(3, 24, 78);
}

[id='search_movie_result_block']{
    padding:0 30px;
 }

 [id='search_movie_title']{
    font-size:35px;
    color:white;
    letter-spacing:5px;
}

[id='search_movie_year']{
    font-size:20px;
    color:white;
    margin-right:20px;
}
[id='search_movie_rating']{
    font-size:20px;
    color:white;
    margin-right:20px;
}
[id='search_movie_duration']{
    font-size:20px;
    color:white;
    margin-right:20px;
}
[id='search_movie_countries']{
    font-size:20px;
    color:white;
    margin-right:20px;
}
[id='search_movie_languages']{
    font-size:20px;
    color:white;
    margin-right:20px;
}



[id='m_tp_block_starRating']{
    float:right;
    font-size:20px;
}

[id='m_tp_block_starRating'] > b {
    color:white;
}



[id='movie_video']{
    display:none;
    position:relative;top:-100px;
  }




  [id='movie_type_block']{
    width:100%;
    position:relative;
    top:0;
}


[id='m_t_b_container1'] span{
   
    width:100%;
    border:2px solid gray;
    border-radius:30px 30px;
    font-size:20px;
    color:white;
    padding:10px;
    margin-right:20px;
}

[id='options_buttons_block']{
    position:absolute;
    top:-5px;right:0;
}


[id='OpenStarRatingForm_butt1']{
    font-size:15px;
    padding:10px 20px;
    border:1px solid white;
    border-radius:20px 20px;
    background-color:rgb(5, 18, 96);
    color:white;
}




[id='starRating_form1']{
    width:900px;border:3px solid rgb(34, 31, 117);
    padding:20px;
    display:none;position:fixed;
    top:150px;left:350px;z-index:2;
    background-color:black;
    color:white;
    outline: 2px solid rgb(106, 125, 61);
    outline-offset: 1px;
}

[id='CloseStarRatingFormButt1']{
    position: absolute;
    top:0;right:0;
    font-size:35px;
    padding:10px;
    border:none;
    color:white;
}

[id='starRatingForm1TitleBlock']{
    font-size:32px;
}

[id='starRatingForm1ContentBlock']{
    font-size:22px;
}

[id^='starRating_butt']{
    font-size:35px;
    color:white;
}

button[data-staractivate="activate"] i {
    color:yellow;
}


[id='0starRatingErrorMessageBlock']{
    display:none;
}

[id='0starRatingErrorMessage_resetButt1']{
    font-size:20px;
    padding:10px;
}



[id='0starRatingErrorMessageInfo']{
    color:white;
    font-weight: bold;
    text-shadow:2px 2px 2px rgb(242, 191, 102);
}




[id='ThankyouRatingMessageBlock']{
    display:none;
}

[id='ThankyouRatingMessage_resetButt1']{
    font-size:20px;
    padding:10px;
}



[id='ThankyouRatingMessageInfo']{
    color:white;
    font-weight: bold;
    text-shadow:4px 4px 4px rgb(71, 235, 136);
}




[id='SubmitStarRating_butt1']{
    width:100%;font-size:25px;
    background-color: rgba(16, 16, 114, 0.599);
    color:white;
    padding:10px;
    border-radius:30px 30px;
}


[id='StarRatingFormOverlay1']{
    width:100%;height:100%;position:fixed;top:0;
    left:0;right:0;bottom:0;z-index:1;
    background-color:rgba(0, 0, 0, 0.778);display:none;
}






[id='add_to_watchlist_butt1']{
    font-size:15px;
    padding:10px 20px;
    border:1px solid white;
    border-radius:20px 20px;
}
   
   
[id='watch_movie_butt1']{
 font-size:15px;
 padding:10px 20px;
 border:1px solid white;
 border-radius:20px 20px;
}
   
   
   
[id='watch_trailer_butt1']{
 font-size:15px;
 padding:10px 20px;
 border:1px solid white;
 border-radius:20px 20px;
}

```


- Syntax in StarRating1.js

```javascript
function OpenStarRatingForm(){
    document.getElementById('starRating_form1').style.display='block';
    document.getElementById('StarRatingFormOverlay1').style.display='block';
}
function close_StarRatingForm_func(){
    document.getElementById('starRating_form1').style.display='none';
    document.getElementById('StarRatingFormOverlay1').style.display='none';
}




function getTotalRatingNumber(rateValue){
                                          
    if(rateValue == ''){
          document.getElementById("totalStarRatingNumberBlock_value").style.display = 'none'; 
    }else{
          
                  
                  
           var xml = new XMLHttpRequest();
           xml.onreadystatechange = function(){
             if(this.readyState == 4 && this.status == 200){
                  document.getElementById("totalStarRatingNumberBlock_value").style.display = 'block'; 
                document.getElementById("totalStarRatingNumberBlock_value").innerHTML = this.responseText;
             }
           }
           xml.open("POST", "ValidateStarRatingFormData.php",true); 
           xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
           xml.send("submitDataRule=GetTotalRatingNumber&rateDataValue="+rateValue);
                  
                  

    }
}







function RatingCount(){
    var getDataStarActivateEqualTrueArray =[];

    let  getDataStarActivateEqualTrue = 
    document.querySelectorAll("button[data-staractivate='activate']");
     
    for(let i = 0;i<getDataStarActivateEqualTrue.length;i++){
           getDataStarActivateEqualTrueArray.push(getDataStarActivateEqualTrue[i]);
           
    }
    document.getElementById('rateNumber').innerHTML = getDataStarActivateEqualTrueArray.length;


    let totalStarValue = "";
    if(getDataStarActivateEqualTrueArray.length == 0){
           totalStarValue = "";
           document.getElementById('rateNumberBlock')
           .setAttribute('data-totalstar','');
           document.getElementById("totalStarRatingNumberBlock_value").style.display = 'none'; 

    }else if(getDataStarActivateEqualTrueArray.length == 1){
           totalStarValue = getDataStarActivateEqualTrueArray.length + 'star';
           document.getElementById('rateNumberBlock')
           .setAttribute('data-totalstar',totalStarValue);

           getTotalRatingNumber(document.getElementById('rateNumberBlock').dataset.totalstar);

    }
    
    
    else if (getDataStarActivateEqualTrueArray.length > 1){
           totalStarValue = getDataStarActivateEqualTrueArray.length + 'stars';
           document.getElementById('rateNumberBlock')
           .setAttribute('data-totalstar',totalStarValue);
         
           getTotalRatingNumber(document.getElementById('rateNumberBlock').dataset.totalstar);

    }
    else{
        console.log('');
    }
   


    
}


var StarRatingTestingNumber = 0;
function rateStar_activate(val){
if(StarRatingTestingNumber==0){
    document.querySelector("button[title='"+val+"']").setAttribute('data-staractivate','activate');
    StarRatingTestingNumber=1;
}else if(StarRatingTestingNumber==1){
       document.querySelector("button[title='"+val+"']").setAttribute('data-staractivate','none');
       StarRatingTestingNumber=2;

}else{
    document.querySelector("button[title='"+val+"']").setAttribute('data-staractivate','activate');
    StarRatingTestingNumber=0;

}

return RatingCount();
}





function SubmitStarRating(val){
    if(val == ""){
        document.getElementById('0starRatingErrorMessageBlock').style.display='block';
        document.getElementById('starRatingForm1ContentBlock_mainContent').style.display='none';
        document.getElementById('ThankyouRatingMessageBlock').style.display='none';
        document.getElementById('SubmitStarRating_butt1').style.display='none';
        document.getElementById('0starRatingErrorMessageInfo').innerHTML =
         "YOU MUST RATING AT LEAST 1 STAR TO ACTIVATE RATING BUTTON!!!";

    
    }else{
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('ThankyouRatingMessageBlock').style.display = 'block';
            document.getElementById('starRatingForm1ContentBlock_mainContent').style.display='none';
            document.getElementById('0starRatingErrorMessageBlock').style.display='none';
            document.getElementById('SubmitStarRating_butt1').style.display='none';
             document.getElementById('ThankyouRatingMessageInfo').innerHTML = this.responseText;
             
          }
        }
        xml.open("POST", "ValidateStarRatingFormData.php",true); 
        xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        xml.send("submitDataRule=submitStarRating&rateDataValue="+val);
    }
}




function Open_starRatingForm1ContentBlock_mainContent(){
    document.getElementById('0starRatingErrorMessageBlock').style.display='none';
    document.getElementById('ThankyouRatingMessageBlock').style.display='none';
    document.getElementById('starRatingForm1ContentBlock_mainContent').style.display='block';
    document.getElementById('SubmitStarRating_butt1').style.display='block';

}

```

# 5.Files|Folders are being used:

- Movie_Search_Validate.php

- Main_page_starRatingForm.php

- ValidateStarRatingFormData.php

- Styling1.css

- StarRating1.js

- XAMPP PHPMyAdmin




# 6. Sources:

> THP_Movie_Streaming_PHP



