instagram-autolikes 3.0
===================

instagram auto likes php script

This is a php script that auto likes certain tags on instagram after that you login.
Will allow you to search for pictures using tags, access your pictures and also generate html code below pictures and videos.

Installation tips:
===================

You need to setup an application using instagram api.

Replace the callback (http://www.ultgate.com/instagram2/cb.php) in  file instagram 2.0/cb.php 

The callback file should be http://[your website]/[instalation directory]/cb.php
setting up the api
===================
Files that you need to setup the api informations in :

/includes/instaconfig.php

renaming the files
===================
Rename /includes/con1.php  to con.php

setting up the database
===================
Create a new database setup the database info in /includes/opencon.php

creating required tables in sql
===================
create  a Table named user

with the following fields with their corresponding attributes :
   userid 	int(15) 	
	id 	int(15) 		
	username 	varchar(250) 	
	full_name 	varchar(250) 
	profile_picture 	varchar(500) 
	bio 	varchar(500) 	
	website 	varchar(250) 
  
  congratulation
  ===================
  congratulation the script is setup and ready to be used :)
  for questions/bugs contact me on jad@ultgate.com or twitter on @jadismael
