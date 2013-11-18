<?php include("template/header.php") ;?>

<?php

  require_once 'includes/instagram.class.php';

  require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{ ?>



<h2> View Photo </h2>
<?php

if ( $_GET['pid'] )
{$pid=$_GET['pid'];
$data=  $instagram->getMedia($pid);
  
  $img=$data->data->images->standard_resolution->url ;?>
  <div class="media-inner" style="margin-top: 10px;">
  <div class="mediaPhoto" >
  <span class="i-like-big " ></span>
  <div class="Image iLoaded iWithTransition media-photo" src="<?php echo img;?>" style="background-image: url(&quot;<?php echo $img;?>&quot;);" ></div>
  </div>






 </div> </div>
<div class="media-info few-comments no-comments  mount-addcomment can-delete-comments" >


<div class="media-likes">
<h2><span class="like-count"><?php echo $data->data->likes->count ;?></span><b>Likes</b> </h2>
<div class="like-list">
<ul>
<?php
$likes= $data->data->likes;
//print_r($comments);
foreach ($likes->data as $like)
{

echo "
<li class=\"like\">
<span class=\"img img-inset like-avatar\">
<img height=\"30px\" width=\"30px\" src=\"{$like->profile_picture}\" >
</span>
</li>";

}





?>

</ul>
</div>
</div>

<div>

<h2>code to insert this picture in your blog/website
</h2>
html code:
</br>
<?php if  ($data->data->type == "image") {?>
<textarea cols="50" rows="10" name="html"  style="width:100%;">
<img src="<?php echo $img;?>" style="width:612px;height:612px;" alt="instagram picture">
</textarea>
<?php
}
else
{?>


<textarea cols="50" rows="10" name="html" style="width:100%;">
<video width="612" height="612" controls poster="<?php echo $img;?>">
<source src="<?php echo $data->data->videos->standard_resolution->url ;?>" type="video/mp4">
</video><br />

</textarea>

<h2>view video</h2>
<video width="612" height="612" controls poster="<?php echo $img;?>">
<source src="<?php echo $data->data->videos->standard_resolution->url ;?>" type="video/mp4">
</video>
<?php
}?>
</div>

 </div>


</div>


<?php


}}

?>

<?php include("template/footer.php") ;?>