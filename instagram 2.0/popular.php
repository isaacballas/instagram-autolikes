<?php

include("template/header.php"); 
require_once 'includes/instagram.class.php';
require_once "includes/userinfo.php"; 
require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{
   
 $user= $instagram->getUser()->data;
include("includes/userinfo.php");    

?>

<div class="row">
<h2> Popular Media </h2>

<?php
$media=  $instagram->getPopularMedia();
 displaymedia($media,$instagram);
  




}?>
</div>
<?php include("template/footer.php"); ?>