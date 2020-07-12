<?php 
function detect() 
{
$b = explode(" ","http:// https:// + .com twitterbot facebot googlebot tumblr linkedinbot snapchat slurp yahoo microsoft bingbot framework bot");
$h =  explode(" ","apple firefox windows android linux chrome safari gecko iphone macintosh mac khtml browser nokia opera mozilla mobile network blackberry cpu outlook pc");
if (!empty($_SERVER['HTTP_USER_AGENT']))
{
    $u = strtolower($_SERVER['HTTP_USER_AGENT']);
    
	
	
	foreach ($b as $bv)
{
    if (substr_count($u , $bv) > 0) 

	{
		echo "<script>console.log('You are detected as bot at=".$bv."');</script>";
		return false;
	}
	
}


foreach ($h as $hv)
{
	
	
	if (substr_count($u,$hv) > 0) 
	{
		echo "<script>console.log('You are detected as human at=".$hv."');</script>";
		return True;
	}

}

} else { return False; }

	
}









?>
