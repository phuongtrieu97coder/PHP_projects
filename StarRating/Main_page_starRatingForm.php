<!DOCTYPE html>
<html lang='en'>
     <body>


      
<!-- 

> The form with id='starRating_form1' must be hidden as default and only
appear when an user click a button element with id='OpenStarRatingForm_butt1'


> This form connect AJAX to submit data into 'ValidateStarRatingFormData.php' file 
and this file will update data into MySQL database. I chose this method because I don't want the page reload after I rate a content, and I also want to see the 'THANK YOU FOR RATING THIS CONTENT!!!' message appear in this Rating form after I click 'Rating' button.

> An user can see the text 'How would you like to rate this content?',
 '0/5', 'Very bad', 5 white star symbol, 'Very great', and 'Total Rating'

> Now this user can click how many star they like to rate this content,
 and then click RATING button. After each star turns into yellow color, 
 the text '0/5' will increase the number and 'Total Rating' text will have
  a specific number next to it appears to present how many users had rated
  this content through that amount of star. If this user decides to click
   a star again to turn it into white color because he or she click a star
    by mistake, the number above will decrease.

> If user has successfully rating a content, he or she can see the
 'THANK YOU FOR RATING THIS CONTENT!!!' message with a 'Reset' button
  appear in this form. The program will connect data to AJAX
   XMLHttpRequest to transfer data to 'ValidateStarRatingFormData.php'
    and connect to MySQL through PHP syntaxes to update data from 
    'contents_starrating' table. Since each 'star' column has a specific
     number of users have been rated this content, we want this specific
      number of users increase by one

> For example: We have '5stars' column of 'Aladin' contains a number
 as '7562'. If Alan want to rate Aladin 5stars, we want the column
  '5stars' of 'Aladin' to increase into '7563'. I don't care who had
   been rated this movie 5 stars because this is not a commercial
    project so I don't want to deal with billion or trillion data like
     this in MySQL database.

> If this user want to rate this content again, he or she must click 
'reset' button.

> If an user just see '0/5' display in this form and click 'RATING'
 button, then the 'YOU MUST RATING AT LEAST 1 STAR TO ACTIVATE RATING
  BUTTON!!!' will appear with a 'RESET' button. This user has to click
   'RESET' button to reset this form and rate again. If not, this user
    will see this error message everytime he or she click 'Rating' 
    button that places below the movie or movie trailer area.
 -->

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

                                                      <!-- 
                                                            <b id='rateNumber'> will be increased or decreased based on
                                                                  the number of star an user decides to click to rate a movie content
                                                       -->

                                                      <br>



                                                <b>Very bad</b>
                                                <button id='starRating_butt1' title='starRating_button1' 
                                                type='button' class='btn w3-hover-text-yellow'
                                                onclick="rateStar_activate('starRating_button1')" 
                                                      ><i class='fa fa-star'></i></button>
<!-- 
       rateStar_activate(val) supports add yellow color or remove yellow color from a star button
       by adding dataset like 'data-staractivate' with value like  'activate' or 'none'
      . It also activate RatingCount() function
      RatingCount() is used to connect with for loop syntax to count the number of button
      that has data-staractivate='activate', then add data into 
      an array called getDataStarActivateEqualTrueArray.
      After that display the number to element has id='rateNumber' above

      We call RatingCount() inside rateStar_activate(val) function 
      because we want RatingCount() just only activate when an user
      clicks a star button to add yellow color or remove that color

      When RatingCount() function activates, it decides how many element has 
      dataset data-staractivate='activate' to add into array named 
      getDataStarActivateEqualTrueArray


      RatingCount() function also helps an element has id='rateNumberBlock'
      has dataset 'data-totalstar' contains a specific value like '','1star',
      '2stars','3stars','4stars', or '5stars'. Then, it is going to call function
      like  getTotalRatingNumber(document.getElementById('rateNumberBlock').dataset.totalstar);


        getTotalRatingNumber(val) function is going to decide to display how many 
        users had been rated this content with that amount of stars into an element has
        id='totalStarRatingNumberBlock_value' using AJAX XMLHttpRequest
      -->

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
<!-- 
      Open_starRatingForm1ContentBlock_mainContent() function is going to make
      elements have id='0starRatingErrorMessageBlock', and 'ThankyouRatingMessageBlock'
       disappear.
      It makes element has id='starRatingForm1ContentBlock_mainContent',
       and 'SubmitStarRating_butt1' appear
 -->

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
                        
<!-- 
      SubmitStarRating(val) is going to take dataset value 'totalstar' from an element has id='rateNumberBlock'
      to connect with AJAX XMLHttpRequest to connect with MySQL database and update data into it
 -->

                               </div>

                        </div>



                             
                             <div id='StarRatingFormOverlay1' onclick='close_StarRatingForm_func()'></div>

              
     </body>
</html>


