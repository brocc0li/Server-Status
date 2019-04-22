<?php
/*
-------------------------------------------
|	Game Server Status					  |	
|	Creator: Broccoli_Go 				  |
|	Email: contact@broccoligo.com		  |
-------------------------------------------
*/
//Website Settings
$title =		"SolitudeGaming Server provided by Broccoli_Go"; // Page Title
$copyright =	"©2015-2019 SolitudeGaming.com"; // Copyright at the footer of the site.
$logo = 		"logo.png"; //Header Menu Image / Logo Image

//Header URL's
$home      = "YourHomePageURL.com"; //Home Page URL 

$links = array(); // DO NOT TUTCH
array_push($links, addLink("https://forums.yourwebsitm.com;Forums")); // Copy This. Change URL to what ever URL you want, and change ;Forums to what ever you want. NOTE Remember to have it like this: website.com;WebsIte


//Remember to change The SteamAPI key in file inc.php line number 24

//Game Server Settings.
$address = array(); // DO NOT TUTCH
array_push($address, query_source("94.23.153.176:28015")); //Copy This and change IP:Port to add more servers.


//Teamspeak 3 Server IP's
$login =       "serveradmin";   // Login -- Check with your hosting provider if you can get access to that info. (default = serveradmin)
$password =    "password";  // Password for the TelNet command -- Check with your hosting provider if you can get access to that info.
$host =        "123.123.123.123";   // Server IP adress
$voiceport =   9987;        // voice port (default 9987)
$queryport =   10011;       // query port (default 10011)


//Games Supports.
/* **************************************************************************************
All Games on steam as long as they can be seen by the Steam Server list.
If you find any games not supported, but you think should be supported. Contact me.
************************************************************************************** */
?>