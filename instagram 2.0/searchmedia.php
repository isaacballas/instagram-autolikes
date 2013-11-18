<?php

include("template/header.php"); 
require_once 'includes/instagram.class.php';
require_once "includes/userinfo.php"; 
require_once 'includes/con.php';
if ( $_COOKIE['ulttoken'])
{
   ?>

<div class="row">
<h3>Enter Keyword to search for on instagram </h3>
<form
id="searchform" method="get" action="searchmedia.php">
 <input
type="text" value="" name="tag" id="searchbox" onfocus="if (this.value == 'Search this website...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this website...';}" autofocus />
 <input
type="submit" id="searchsubmit" value="Search" /></form>

</div>
<?php

if ( $_POST['tag'] || $_GET['tag'] && $_COOKIE['ulttoken'])
{
  require_once 'searchtag.php';
}


}

include("template/footer.php"); ?>