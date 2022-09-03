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

> Below the movie trailer is 3 buttons, 1 rating, 1 watch movie, and 1 watch trailer buttons. I have another 'watchlist' button in my main project. In this project I just provide those 3 button above with only JavaScript syntax for 'Rating' button

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



# 5.Files|Folders are being used:

- Movie_Search_Validate.php

- Main_page_starRatingForm.php

- ValidateStarRatingFormData.php

- Styling1.css

- StarRating1.js

- XAMPP PHPMyAdmin

- 'image' folder

- 'video' folder




# 6. Sources:

> THP_Movie_Streaming_PHP


# 7. Notices:

> Image and video folder are used to testing with this small project and just contains 1 image and 1 video in it which means I used them to test 1 movie content. In my main project, I have more images and videos. 

