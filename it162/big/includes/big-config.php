<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case 'index.php':
        $title = "Liyun Cecil's IT162 BIG Page";
        $logo = 'fa-home';
        $pageID = 'Main Page';
    break;
        
    
        
    //case 'fp.php' here
        
   
    default: 
        $title = THIS_PAGE;
        $logo = ''; //no icon by default
        $pageID = 'Welcome';
}


$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] ='AIA';
$nav1['flowchart.php'] ='Flowchart';
$nav1['fp/index.php'] ='Final Project';
$nav1['contact.php'] ='Contact Liyun';

//Here we're creating a function to generate links and keep the highlight on the current page
/*
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contact.php">Contact Liyun</a></li>
*/
function makeLinks($nav1){
    
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>"; 
            
        }else{
           $myReturn .= "<li><a href=\"$url\">$text</a></li>"; 
        }  
    }
    
    return $myReturn;

}

?>