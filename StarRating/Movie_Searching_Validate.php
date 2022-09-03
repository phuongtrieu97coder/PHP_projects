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

                /*
                the session 'movie_select' below can be used to work 
                with different page or syntaxes that require to take a 
                specific movie title after the user choose to see a specific
                content
                */
                $_SESSION['movie_select'] = $val['Title'];
              }
         }else{
              echo "";
         }
       
         

         /*
         The array below is used to add each star data into it
         that presesent the number of users has rated a content

How many stars a content deserve is based on the highest amount of users 
rate this content through a specific amount of star. We can find out 
that number through data from MySQL database based on 
'contents_starrating' table through different columns like
 'Content_Title', '1star', '2stars', '3stars', '4stars', 
 and '5stars'. For example: If 'Aquaman' has the highest number
  of users who has rated this movie from '5stars' column, 
  then we will take this number to display into 'Total Rating'.

         */
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
         /*
         According to the array above, I want an associative array
         with different key and value. Each key is each star. I want
         to find max value of this array first, then I am going to find
         a specific key through that value and use that key to display 
         the highest number of stars that had been rated above the movie or 
         trailer content area
         */
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

                                <!-- 
                                  Display the highest number of stars that had been rated

                                  An user can see how many stars appear above the movie content's trailer.
                                   Star can have yellow color or white color.
                                    If the content deserves 4 stars, then this user can
                                     see 4 yellow star and 1 white star, 4/5 context next to it,
                                      and Total Rating: with a specific number after that.

                                 -->
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
<!-- 

 If an user click 'Rating' button, then a rating form will appear places in front of a block overlay and in the middle of the page.
  An user can close this form by clicking any area outside this form (or overlay area) or the 'X' button.
 -->

                                                       
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