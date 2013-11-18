<?php
require_once 'instagram.class.php';

require_once 'instaconfig.php';



if ($_COOKIE['ulttoken'])
{ 
 $instagram->setAccessToken($_COOKIE['ulttoken']);
$user= $instagram->getUser()->data; ?>


<?php
}

  require_once 'con.php';
?>


