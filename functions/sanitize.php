<!--this file is for updating the outputing user's data. 
Validating data = Determine if the data is in proper form. 
Sanitizing data = Remove any illegal character from the data.--> 
<?php
function escape($string){
    //Convert all applicable characters to HTML entities. ENT_QUOTES to convert both double and single quotes.
    return htmlenteties($string, ENT_QUOTES, 'UTF-8'); 
}