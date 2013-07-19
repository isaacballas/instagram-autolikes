<?php

  require_once 'includes/instagram.class.php';
   $instagram = new Instagram(array(
      'apiKey'      => 'dd680b6585194897b537d535adb6bf07',
      'apiSecret'   => '2195fa0b66f74c7281af5b966cc09248',
      'apiCallback' => 'http://www.ultgate.com/instagram/cb.php'
    ));

/*
$instagram = new Instagram(array(
      'apiKey'      => '63dc1852151d4431b95a706b91581fa6',
      'apiSecret'   => '3ff6483836324249850217ca5b479eae',
      'apiCallback' => 'http://www.ultgate.com/insta/master/cb.php'
    ));

*/
if( !$_GET['code'] && !$_COOKIE['ulttoken']){
 echo "<a href='{$instagram->getLoginUrl(array(
  'basic',
  'likes'
))}'>Login with Instagram</a>";



}

else if (!$_COOKIE['ulttoken'])
{




 
    $code = $_GET["code"];

  $data = $instagram->getOAuthToken($code);

setcookie('ulttoken',$data->access_token ,time() + (86400 * 7)); // 86400 = 1 day
        $instagram->setAccessToken($data);




 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.ultgate.com/instagram/">';    
    exit;    
  
}
else {
        $instagram->setAccessToken($_COOKIE['ulttoken']);
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.ultgate.com/instagram/">';    
    exit;   
if (isset($_GET) && count($_GET) > 0 && $_GET['method'])
{


    $method = $_GET['method'];

	switch($method)
	{



case 'liketag':
$instagram->likeTag("hot");
break;


	}



}
else
{
	exit();
}

}

?>