<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
 
$adresseip = getRealIpAddr();
?>
<html><head>
<title>Adresse IP: <?php echo $adresseip; ?></title>
<style type="text/css">
div { font-family:"Segoe UI","Lucida Grande","Calibri","Tahoma","Sans"; }
div.ip { font-size:250%; }
div.desc { font-size:200%; }
</style>
</head>
<body>
<div><img src="csdccs-blanc.png" alt="logo CSDCCS" /></div>
<p><div>Votre adresse IP: </div>
<div><?php echo $adresseip;?></div>
</p>   
</body>
</html>
