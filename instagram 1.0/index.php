<?php

include("template/header.php"); 
require_once 'includes/instagram.class.php';


require_once "includes/userinfo.php"; 


  require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{
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
<b>Start using our features Now! </b> 
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

  </div>  </div>
<?php


}
?>


<?php

echo "</div>";
include("template/footer.php"); ?>