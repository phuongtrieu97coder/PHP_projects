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
