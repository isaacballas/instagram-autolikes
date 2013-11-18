<?php include("template/header.php") ;?>

<?php

  require_once 'includes/instagram.class.php';

  require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{
    $user= $instagram->getUser()->data;
    require_once("includes/userinfo.php"); 
?>



<h3>Enter hashtag to like 20 pics of on instagram </h3>
<form
id="searchform" method="get" action="liketags.php">
 <input
type="text" value="" name="tag" id="searchbox" onfocus="if (this.value == 'Search this website...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this website...';}" autofocus />
 <input
type="submit" id="searchsubmit" value="LikeTag" /></form>
<?php

if ( $_GET['tag'] && $_COOKIE['ulttoken'])
{
  $likeresults=$instagram->likeTag($_GET['tag']);





}


}



?>

<?php include("template/footer.php") ;?>