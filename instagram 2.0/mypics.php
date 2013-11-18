<?php include("template/header.php") ;?>

<?php

  require_once 'includes/instagram.class.php';

  require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{
  if (!isset($_POST['apivalue']))
{
    $user= $instagram->getUser()->data;
include("includes/userinfo.php");    
?>
<div class="row">
<h2> Pictures </h2>
<?php
$media=  $instagram->getUserMedia('self',20);
 displaymedia($media,$instagram);

$valueurl= $media->pagination->next_url ;


}






?>
</div>

<?php
if($valueurl!=null){


?>



<FORM method="POST" action="mypics.php" name="hiddenform">
  <INPUT type="HIDDEN" name="apivalue" value="<?php echo $valueurl ;?>">
 <INPUT type="submit" name="submit_button" value ="More pics"> 
</FORM>

<?php

}
}



?>

<?php include("template/footer.php") ;?>