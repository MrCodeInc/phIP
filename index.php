phIP
</p> </p>
A simple way to view your IP address coded in PHP.

<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
 
$addressip = getRealIpAddr();
?>
<html><head>
<title>IP Address: <?php echo $addressip; ?></title>
<style type="text/css">
div { font-family:"Segoe UI","Lucida Grande","Calibri","Tahoma","Sans"; }
div.ip { font-size:250%; }
div.desc { font-size:200%; }
</style>
</head>
<body>
<p><div>Your IP address is:</div>
<div><?php echo $addressip;?></div>
</p>
Created by <a href="https://github.com/MrCodeInc/">MrCodeInc.</a>
You can view the source code <a href="https://github.com/MrCodeInc/phIP/">here.</a>
</body>
</html>
