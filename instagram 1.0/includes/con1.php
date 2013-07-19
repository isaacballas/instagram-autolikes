<?php


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
 ?>


<div class="post-item "> 

<div class="post-image">
<img class="attachment-home-item wp-post-image" alt="facebook-logo" src="http://www.ultgate.com/instagram/ultgateinstagram.jpg"></img></div>
<div class="post-title">
<h2><b>Instagram features by UltGate</b></h2>
</div>
<div class="post-desc clearfix"> 
<p>
<b>Thank you for choosing UltGate Instagram features</b>
We're still working on improving this section as well as on adding new features.
</p>
<p><b>Start using our features Now! </b> 
</p>

<?php
echo "
<a class=\"btn-signin\" href='{$instagram->getLoginUrl(array(
  'basic',
  'likes'
))}'>"; ?> <img src="images/btn-signin-instagram.png"></img></a>


<section class="features">

<div class="row">
            <div class="span4">
              <h2>View Instagram Photos and Videos</h2>
              <p>View your Instagram feed on the web and iPad in our  beautiful layout.</p>
            </div>
            <div class="span4">
              <h2>Search for Media Using Hashtags</h2>
              <p>Search for media using hashtags and download them!. </p>
            </div>
            <div class="span4">
              <h2>Share Media on your blog/website</h2>
              <p>When you view a picture, you immediately get a code that enables you to embed the media into your blog/site. </p>
            </div>
        </div>
</section>

 </div>

<div class="post-meta-bot clearfix">


<ul class="share-list">

	<li class="twit">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="ultGate" data-related="ultgate">Tweet</a>
<script async >!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</li>
						<li class="facebook">
							<div class="fb-like" data-send="false" data-href="http://www.ultgate.com/instagram/" data-layout="button_count" data-width="80" data-show-faces="false"></div>
						</li>
						<li class="google">

							<script  async src="https://apis.google.com/js/plusone.js"></script>

							<div class="g-plusone" data-size="medium"></div>
						</li>

							<li><a href="http://digg.com/submit?phase=2&amp;url=http://www.ultgate.com/instagram/" target="_blank" title="Digg //Get more of Instagram with Ultgate">Digg It</a></li>
                            <li><a href="http://www.stumbleupon.com/submit?url=http://www.ultgate.com/instagram/" title="Stumble //Get more of Instagram with Ultgate" target="_blank">Stumble It</a></li>
					</ul>

  </div>  





<?php }




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