/* 
OpenStarRatingForm() function is used with button has
 id='OpenStarRatingForm_butt1'
*/

function OpenStarRatingForm(){
    document.getElementById('starRating_form1').style.display='block';
    document.getElementById('StarRatingFormOverlay1').style.display='block';
}

/* 
close_StarRatingForm_func() function is used with a close
button has id='CloseStarRatingFormButt1', and an overlay
block with id='StarRatingFormOverlay1'
*/
function close_StarRatingForm_func(){
    document.getElementById('starRating_form1').style.display='none';
    document.getElementById('StarRatingFormOverlay1').style.display='none';
}




/* 
       rateStar_activate(val) supports add yellow color or remove yellow color from a star button
       by adding dataset like 'data-staractivate' with value like  'activate' or 'none'
         . It also activate RatingCount() function

 

         */

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

/*
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

*/

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


/*

       getTotalRatingNumber(val) function is going to decide to display how many 
        users had been rated this content with that amount of stars into an element has
        id='totalStarRatingNumberBlock_value' using AJAX XMLHttpRequest

*/

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
                  
          /*
          submitDataRule is going to help ValidateStarRatingFormData.php
          know what kind of data this user want to see in this page through
          different way to take data from MySQL
          */        

    }
}


/* 
      SubmitStarRating(val) is going to take dataset value 'totalstar' from an element has id='rateNumberBlock'
      to connect with AJAX XMLHttpRequest to connect with MySQL database and update data into it

*/

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



/* 
The Open_starRatingForm1ContentBlock_mainContent() function below is used with
the RESET button of starRatingForm

 Open_starRatingForm1ContentBlock_mainContent() function is going to make
      elements have id='0starRatingErrorMessageBlock', and 'ThankyouRatingMessageBlock'
       disappear.
      It makes element has id='starRatingForm1ContentBlock_mainContent',
       and 'SubmitStarRating_butt1' appear
*/
function Open_starRatingForm1ContentBlock_mainContent(){
    document.getElementById('0starRatingErrorMessageBlock').style.display='none';
    document.getElementById('ThankyouRatingMessageBlock').style.display='none';
    document.getElementById('starRatingForm1ContentBlock_mainContent').style.display='block';
    document.getElementById('SubmitStarRating_butt1').style.display='block';

}
