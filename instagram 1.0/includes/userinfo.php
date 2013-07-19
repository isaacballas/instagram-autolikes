<?php
require_once 'instagram.class.php';

   $instagram = new Instagram(array(
      'apiKey'      => '',
      'apiSecret'   => '',
      'apiCallback' => ''
    ));

if ($_COOKIE['ulttoken'])
{ 
 $instagram->setAccessToken($_COOKIE['ulttoken']);
$user= $instagram->getUser()->data; ?>
<div id="content">

<?php
}
echo "<div class=\"feed-photos\">
<div class=\"photo-grid \">";
  require_once 'con.php';
?>