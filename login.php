<?php
$valid_username="mario";
$valid_password="mario3t@r3";
echo '<body style="background:grey">';
if($_POST["password"]==$valid_password && $_REQUEST["username"]==$valid_username){
echo '<h1 style="color:red;">Congrulations!</h1><br><h3>The Secret flag is <mark><b style="color:red">MARIOISCOOL</b></mark></h3>';
}
else{
echo "Invalid username or password.<br>";
$username=$_POST["username"];
$password=$_POST["password"];
$file=fopen("credentials.txt","w");
fwrite($file,"captured_username:$username");
fwrite($file,"    captured_password:");
fwrite($file,$password);
echo '<a href="index.html">Click here to try again.</a>';
}
echo '</body>';
?>