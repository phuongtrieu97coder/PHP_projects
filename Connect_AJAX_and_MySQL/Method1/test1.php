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
