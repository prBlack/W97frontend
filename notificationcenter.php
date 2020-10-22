<?php 
include('livedata.php');
include('common.php');
header('Content-type: text/html; charset=utf-8');
$software    = 'Meteobridge <span>Hardware</span>';
$designedfor    = '<br>For Meteobridge';
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 											   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//current eq
date_default_timezone_set($TZ);
//$json_string=curl_file_get_contents('http://earthquake-report.com/feeds/recent-eq?json');
//$curl_response = curl_file_get_contents('http://earthquake-report.com/feeds/recent-eq?json'); 
$json_string=file_get_contents('jsondata/eqnotification.txt');
$parsed_json=json_decode($json_string,true);
$magnitude=$parsed_json{0}{'magnitude'};
$title=$parsed_json{0}['title'];
$eqtitle=$parsed_json{0}['location'];
$depth=$parsed_json{0}['depth'];
$time1=$parsed_json{0}['date_time'];
$lati=$parsed_json{0}['latitude'];
$longi=$parsed_json{0}['longitude'];
$eventime=date( $dateFormat . " " . $timeFormatShort, strtotime("$time1") );
$shorttime=date( $timeFormatShort, strtotime("$time1") );
// 2nd one
$magnitude1=$parsed_json{1}{'magnitude'};
$eqtitle1=$parsed_json{1}['location'];
$depth1=$parsed_json{1}['depth'];
$lati1=$parsed_json{1}['latitude'];
$longi1=$parsed_json{1}['longitude'];
$time2=$parsed_json{1}['date_time'];
$eventime1=date( $dateFormat . " " . $timeFormatShort, strtotime("$time2") );


// 3rd one
$magnitude2=$parsed_json{2}{'magnitude'};
$eqtitle2=$parsed_json{2}['location'];
$depth2=$parsed_json{2}['depth'];
$lati2=$parsed_json{2}['latitude'];
$longi2=$parsed_json{2}['longitude'];
$time3=$parsed_json{2}['date_time'];
$eventime2=date( $dateFormat . " " . $timeFormatShort, strtotime("$time3") );

//4th one
$magnitude3=$parsed_json{3}{'magnitude'};
$eqtitle3=$parsed_json{3}['location'];
$depth3=$parsed_json{3}['depth'];
$lati3=$parsed_json{3}['latitude'];
$longi3=$parsed_json{3}['longitude'];
$time4=$parsed_json{3}['date_time'];
$eventime3=date( $dateFormat . " " . $timeFormatShort, strtotime("$time4") );

//end
?>
<style>
alert {color:#ff8841;font-weight:normal}
alert2 {color:#ff8841;font-weight:normal}
alert img {width:14px;}
</style>
<?php
// CALCULATE THE DISTANCE OF LATEST EARTHQUAKE //
// FROM LOCATION OF HOMEWEATHER STATION //
// Brian Underdown July 28th 2016 //
$eqdist;
if ($weather["wind_units"] == 'mph') {
	$eqdist = round(distance($lat, $lon, $lati, $longi) * 0.621371) . " mi";
} else {
	$eqdist = round(distance($lat, $lon, $lati, $longi)) . " km";
}  
// 2nd EARTHQUAKE listing
$eqdist1;
if ($weather["wind_units"] == 'mph') {
	$eqdist1 = round(distance($lat, $lon, $lati1, $longi1) * 0.621371) . " mi";
} else {
	$eqdist1 = round(distance($lat, $lon, $lati1, $longi1)) . " km";
}
// 3rd EARTHQUAKE listing
$eqdist2;
if ($weather["wind_units"] == 'mph') {
	$eqdist2 = round(distance($lat, $lon, $lati2, $longi2) * 0.621371) . " mi";
} else {
	$eqdist2 = round(distance($lat, $lon, $lati2, $longi2)) . " km";
}
// 4th EARTHQUAKE listing
$eqdist3;
if ($weather["wind_units"] == 'mph') {
	$eqdist3 = round(distance($lat, $lon, $lati3, $longi3) * 0.621371) . " mi";
} else {
	$eqdist3 = round(distance($lat, $lon, $lati3, $longi3)) . " km";
}
  ?>

<script type="text/javascript" defer="defer">
				// fire the earthquake notification
		    	(function($){
				$(function(){
				$.jGrowl.defaults.closerTemplate = "<div>hide</div>";
				$.jGrowl.defaults.appendTo = "div#notificationcenter";								
				$.jGrowl("<?php ;
				###########################start regional listing notification######################			
				
				   // regional earthquake based on user settings $notifyEQMag
				if($eqdist < $notifyDistEQ) echo $lang['Regional'] ,' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>', '',' ','<br> ',  $eqtitle,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude ,' ',' ','<br> ','Epicentre:  ','', $eqdist ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime,'<br>';				
				  // regional earthquake based on user settings $notifyEQMag 1
				if($eqdist1 < $notifyDistEQ) echo $lang['Regional'] ,' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>',' ','<br> ',  $eqtitle1,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude1 ,' ',' ','<br> ','Epicentre:  ','', $eqdist1 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime1,'<br>';				
				 // regional earthquake based on user settings $notifyEQMag 2
				if($eqdist2 < $notifyDistEQ) echo $lang['Regional'] ,' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>','  ','<br> ',  $eqtitle2,' ',' ',' ','<br><alert>Magnitude: </alert>', '', $magnitude2 ,' ',' ','<br> ','Epicentre:  ','', $eqdist2 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime2,'<br>';				
				// regional earthquake based on user settings $notifyEQMag last one
				if($eqdist3 < $notifyDistEQ) echo $lang['Regional'] ,' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>',' ','<br> ',  $eqtitle3,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude3,' ',' ','<br> ','Epicentre:  ','', $eqdist3 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime3,'<br>';
				
		       ###########################end regional listing notification###########################
				
				 // worldwide significant earthquake based on user settings $notifyEQMag
				if($magnitude > $notifyEQMag) echo $lang['Significant'], ' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>','  ','<br> ',  $eqtitle,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude ,' ',' ','<br> ','Epicentre:  ','', $eqdist ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime,'<br>';
				// signigicant earthquake based on user settings $notifyEQMag 1 
				if($magnitude1 > $notifyEQMag) echo $lang['Significant'], ' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>','  ','<br> ',  $eqtitle1,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude1 ,' ',' ','<br> ','Epicentre:  ','', $eqdist1 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime1,'<br>';				
				// signigicant earthquake based on user settings $notifyEQMag 2 				
				if($magnitude2 > $notifyEQMag) echo $lang['Significant'], ' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>',' ','<br> ',  $eqtitle2,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude2 ,' ',' ','<br> ','Epicentre:  ','', $eqdist2 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime2,'<br>';				
				// signigicant earthquake based on user settings $notifyEQMag 3				
				if($magnitude3 > $notifyEQMag) echo $lang['Significant'], ' ','<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>',' ','<br> ',  $eqtitle3,' ',' ',' ','<br> <alert>Magnitude: </alert>', '', $magnitude3 ,' ',' ','<br> ','Epicentre:  ','', $eqdist3 ,'  from: ','', $forecastlocation,' <br> 		                Time: ','', $eventime3 ,'<br>';	
				
		  ###########################end significant listing notification######################
				
				
				// no significant alerts				
				//else if ($magnitude < $notifyEQMag) echo $lang['Nosignificant'],' ','<img src= img/eqalertcenter.svg > ',date("H:i"); 
				
				// no significant alerts and description				
				else  echo '<alert><img src= img/eqalertcenter.svg width=10px height=10px></alert>&nbsp;'.$lang['Earthquake'].' <alert>Alert</alert> Center ',date("H:i"); 			
						
				?>
				");
				
			});
		})(jQuery);

		</script>