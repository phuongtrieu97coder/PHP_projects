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


