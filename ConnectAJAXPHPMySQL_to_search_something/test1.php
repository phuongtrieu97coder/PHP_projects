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


               <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>

               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  
               
            



              <title>PHUONG WEBSITE</title>




              <style>
                    

              </style>
       </head>




       <body>
        <!-- 
              https://www.w3schools.com/php/php_ref_array.asp
         -->


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
                                                 let getMoviesListHintsChildDiv = document.querySelectorAll("[id='movies_list_hints']>div");
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



       </body>




       <footer>
              
       </footer>



</html>