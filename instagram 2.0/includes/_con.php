<?php
//this file check if user is logged in, or have been redirected from instagram if he's not logged in he will redirected to login button

require_once 'instaconfig.php';

if( !$_GET['code'] && !$_COOKIE['ulttoken']){

require_once './template/login.php';



 }


else if (!$_COOKIE['ulttoken'] &&  $_GET["code"]) {
$code = $_GET["code"];
$data = $instagram->getOAuthToken($code);
setcookie('ulttoken',$data->access_token ,time() + (86400 * 7));
$instagram->setAccessToken($data);
echo 'Your username is: ' . $data->user->username;}
else {$instagram->setAccessToken($_COOKIE['ulttoken']);
//resgister user into database
$user = $instagram->getUser();



	$coin_query="select count(*) as total from user where id='".$user->data->id."'";
	$coin_obj=mysql_fetch_object(mysql_query($coin_query));
	
	$user_reg=$coin_obj->total ; 

	if($user_reg==0)
	{ 

$inser_qry="insert into user ( username,id ,full_name, profile_picture, bio,website, hash) values ('".$user->data->username."','".$user->data->id."','".$user->data->full_name."','".$user->data->profile_picture."','".$user->data->bio."','".$user->data->website."','".$data->access_token."' )";
			
		mysql_query($inser_qry);


}}?>