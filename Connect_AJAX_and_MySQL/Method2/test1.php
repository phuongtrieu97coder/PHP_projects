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


