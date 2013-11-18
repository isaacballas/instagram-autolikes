<?php



 function savemedia($media,$instagram) {
$userid=$instagram->getUser()->data->id;
$i=0;
echo $userid;
$oldmask = umask(0);
mkdir(getcwd().'/pics/'.$userid, 0777);
umask($oldmask);

foreach ($media->data as $data) {

$url = $data->images->standard_resolution->url;
$img = 'pics/'.$userid.'/'.$i.'.jpg';
file_put_contents($img, file_get_contents($url));

$i++;
}

}


 function displaymedia($media,$instagram) {
echo "  <ul  class=\"photo-feed\">";
foreach ($media->data as $data) {
  echo "

<li  class=\"photo\">
<div class=\"photo-wrapper\">
 


<a href=\"photo.php?pid={$data->id}\" target=\"_blank\" >
<div class=\"Image iLoaded iWithTransition\" src=\"{$data->images->thumbnail->url}\" style=\"background-image: url(&quot;{$data->images->thumbnail->url}&quot;);\" >
</div>
<div class=\"photoShadow\" ></div></a>


<ul class=\"photo-stats\">
<li class=\"stat-likes\">
<b>{$data->likes->count}</b></li>
<li class=\"stat-comments\">
<b>{$data->comments->count}</b></li></ul>
</div></li>
";

}

echo "</ul>";



}

?>