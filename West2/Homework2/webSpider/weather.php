<?php
	$url="http://www.weather.com.cn/weather/101230101.shtml";
	$html=file_get_contents($url);
	//echo($html);
	$reg='#hour3data.+?\["(?<date>.+?),.+?,(?<weather>.+?),(?<tmp>.+?),(?<wind>.+?),(?<level>.+?),#';
	if (preg_match($reg,$html,$result)){
		$std="今时天气\r\n日期：".$result['date']."\r\n天气：".$result['weather']."\r\n温度：".$result['tmp']."\r\n风向：".$result['wind']."\r\n风力等级：".$result['level'];
	}
	//echo $std;
	//$arr=['日期：','天气：','温度：','风向：','风力等级：'];
	file_put_contents('weather.txt',$std);
?>