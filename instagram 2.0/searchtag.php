
<div class="row">
<?php

if ($_GET["tag"] || $_POST["tag"]) {
if ($_POST["tag"] && $_POST["apivalue"])
{


$media = $instagram->moreresults($_POST["apivalue"]);
//$media = $instagram->getTagMedia($tag);
displaymedia($media, $instagram);

$valueurl= $media->pagination->next_url ;
$tag=$_POST["tag"];
}
else  {
    $tag=$_GET["tag"];
$tag = str_replace(' ', '', $tag);
$media = $instagram->getTagMedia($tag);
if($media){
echo "<h2>Search results for Hashtag ".$tag." ";
displaymedia($media,$instagram);
$valueurl= $media->pagination->next_url ;
}}
?>

<FORM method="POST" action="searchmedia.php?method=searchresults" name="hiddenform">
  <INPUT type="HIDDEN" name="apivalue" value="<?php echo $valueurl ;?>">
<INPUT type="HIDDEN" name="tag" value="<?php echo $tag ;?>">
 <INPUT type="submit" name="submit_button" value ="More pics"> 
</FORM>


<?php } 
else {
echo "<h4>This tag cannot be viewed</h4>";
}
?>

</div>