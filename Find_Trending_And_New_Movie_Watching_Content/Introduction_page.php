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
