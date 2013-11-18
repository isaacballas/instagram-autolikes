<?php

  require_once 'includes/instagram.class.php';

  require_once 'includes/instaconfig.php';

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




 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.ultgate.com/instagram2/">';    
    exit;    
  
}
else {
        $instagram->setAccessToken($_COOKIE['ulttoken']);
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.ultgate.com/instagram2/">';    
    exit;   


}

?>
