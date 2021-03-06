<?php header('Content-type: text/html; charset=utf-8');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2016-2017-2018 	  											   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include('livedata.php');
include('common.php');
include('settings1.php');
date_default_timezone_set($TZ);?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $stationlocation; ?> Smart Home Weather Station</title>
    <meta content="Smart Home weather station providing current weather conditions for <?php echo $stationlocation;?>" name="description">
    <meta content="website" property="og:type">    
    <meta content="7 days" name="revisit-after">
    <meta content="web" name="distribution">
    <meta content="<?php echo "${stationlocation} \n";?> smart home weather station" property="og:title">
    <meta content="<?php echo "${stationlocation} \n";?> smart home weather station" property="og:site_name">
    <meta content="" property="og:url">
    <meta content="Smart Home weather station providing current weather conditions for <?php echo $stationlocation;?>" property="og:description">
    <meta content="img/weather34.png" property="og:image">
    <meta content="" property="fb:app_id">
    <meta content="place" property="og:type">
    <meta content="brian underdown" name="author">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name=apple-mobile-web-app-title content="SMART HOME WEATHER STATION">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, viewport-fit=cover">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/manifest.json">
<meta name="theme-color" content="#ffffff">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link href="css/main.<?php echo $theme;?>.css?version=<?php echo filemtime('css/main.'.$theme.'.css');?>" rel="stylesheet prefetch">
</head>
<body>
<!-- begin top layout for homeweatherstation template-->
<div class="weather2-container">
<div class="container weather34box-toparea">
  <!-- position1 --->
  <div class="weather34box clock">  <div class="title"><?php echo $info?> <?php echo $position1title ;?> </div><div class="value"><div id="position1"></div></div></div>
   <!-- position2--->
  <div class="weather34box indoor"> <div class="title"><?php echo $info?> <?php echo $position2title ;?> </div><div class="value"><div id="position2"></div></div></div>
  <!-- position3--->
  <div class="weather34box earthquake"> <div class="title"><?php echo $info?> <?php echo $position3title ;?> </div><div class="value"><div id="position3"></div></div></div>
  <!-- position4--->   
  <div class="weather34box alert"><div class="title"><?php echo $info;?> <?php echo $position4title ;?> </div><div class="value"><div id="position4"></div></div></div>
  </div></div></div></div>
<!--end position section for homeweatherstation template-->
<!--begin outside/station data section for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a href="chartsweewx/yearlytemperature.php" data-featherlight="iframe" > <?php echo $chartinfo?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartsweewx/monthlytemperature.php" data-featherlight="iframe" > <?php echo $chartinfo?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartsweewx/todaytemperature.php" data-featherlight="iframe" >  <?php echo $chartinfo?> <?php echo $lang['Today']; ?> </a></span>
      </div>
<span class='moduletitle'> <?php echo $lang['Temperature']; ?> <span class="fgcontrast"><?php echo "&deg;" . $weather["temp_units"] . " \n";?></span><br /></span>   
  <div id="temperature"></div><br></div>
  <!--forecast for homeweatherstation template-->
<div class="weather-item"><div class="chartforecast">
<span class="yearpopup"> <a href="outlookds.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo $lang['Forecastsummary'];?></a></span>
<span class="yearpopup">  <a href="forecastdshour.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Hourlyforecast']; ?></a></span>
      </div>
  <span class='moduletitle'>
  <?php echo $lang['Forecast'];?>  </span><br />
  <div id="currentfore"></div></div>  
  <!--currentsky for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast">
         <!-- HOURLY & Outlook for homeweather station-->
  <span class="yearpopup"> <a href="metarnearby.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo 'Nearby Metar';?></a></span>
             
         </div>
  <span class='moduletitle'><?php echo $lang['Currentsky'];?></span><br /> 
  <div id="currentsky"></div></div></div>
 <!--windspeed for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a href="chartsweewx/yearlywindspeedgust.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo date('Y');?></a></span>
<span class="monthpopup"> <a href="chartsweewx/monthlywindspeedgust.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartsweewx/todaywindspeedgust.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Windspeed'] ;?> | <?php echo $lang['Gust'] ;?></span><br />          
         <div id="windspeed"></div></div>
       <!--barometer for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20">
<span class="yearpopup">  <a href="chartsweewx/yearlybarometer.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartsweewx/monthlybarometer.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartsweewx/todaybarometer.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Today']; ?></a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Barometer']; ?>   </span><br />
         <div id="barometer"></div></div>
	
       <!--moonphase for homeweatherstation template-->
<div class=weather-item><div class=chartforecast style="margin-top:172px;z-index:20;">
<div class="moonposition1">
<?php echo $moon=moon_posit($months,$days,$years);?>
</div>
<span class=yearpopup style="margin-top:-5px;z-index:20;"><a href=mooninfo.php data-featherlight=iframe>
<?php $moon = new MoonPhase();$moonage =$moon->age();	
{if ($moonage<1.84566)  {echo "New Moon";}else if ($moonage<5.53699) {echo "Waxing Crescent";} 	
else if ($moonage<9.22831) {echo "First Quarter";}else if ($moonage<12.91963) {echo "Waxing Gibbous";} 	
else if ($moonage<16.61096) {echo "Full Moon";}else if ($moonage<20.302228) {echo "Waning Gibbous";}	
else if ($moonage<23.99361) {echo "Last Quarter";}else if ($moonage<27.68493) {echo "Waning Crescent";}		
else echo "New Moon ";}		
?></a></span>
<span class="monthpopup"><a href="meteorshowers.php" data-featherlight="iframe"><?php echo $meteorinfo;?> &nbsp;<?php if ($meteor_default=='No Meteor'){ echo "Meteor Showers";}else echo $meteor_default;?></a></span>
<span class=todaypopup><a href=aurora.php data-featherlight=iframe><?php echo $info;?> Aurora <?php if ($kp>=5)echo '<oorange>Active</oorange>';else echo "";?></a></span>  </div>
  <span class='moduletitle'><?php echo $lang['Daylight'];?></span><br />  
  <div id="moonphase"></div> </div></div></div>
 <!--rainfall for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast" >
<span class="yearpopup">  <a href="chartsweewx/yearlyrainfall.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a href="chartsweewx/monthlyrainfall.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a href="chartsweewx/todayrainfall.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Rainfalltoday']; ?></span><br />   
         <div id="rainfall"></div></div>
  <!--solar or web cam for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20;">  
  <span class="yearpopup"> 
  <?php 
  if ($uvhardware == 'webcamsmall.php' ) {echo  '
  <a href="cam.php" data-featherlight="iframe" >
   '.$lang['LiveWebCam'] ."</a>";}  
  else echo ''   ?></a></span>      
     <?php if ($uvhardware == 'aqiuv.php'){echo '<span class="monthpopup"> 
     <a href="airqualityuv.php" data-featherlight="iframe"> '.$chartinfo.' AQI - UV Info </a></span>';} 	
	  else if ($uvhardware == 'weather34uvsolar.php' ){echo '<span class="yearpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info</a></span>';} 	  	
	else if ($uvhardware == 'cloudbasesolaruk.php'){echo '<span class="monthpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';} 	 	 	  
	  else if ($uvhardware == 'aqisolar.php'){echo '<span class="monthpopup"> 
     <a href="airqualitysolar.php" data-featherlight="iframe"> '.$chartinfo.' AQI - Solar Info </a></span>';}
     else if ($uvhardware == 'cloudbase.php'){echo '<span class="monthpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';}
	 else if ($uvhardware == 'cloudbasesolards.php'){echo '<span class="monthpopup"> 
     <a href="dsuvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';} 	
	 else if ($uvhardware == 'uvsolarlux.php'){echo '<span class="monthpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';}	
	 else if ($uvhardware == 'cumulusindoor.php'){echo '<span class="monthpopup"> 
     <a href="uvindex.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info </a></span>';}
	 else if ($uvhardware == 'weatherflowuvsolar.php'){echo '<a href="uvindexwf.php" data-featherlight="iframe"> '.$chartinfo.' UV - Solar Info</a></span>';}		
	 ?>      
     
    </div>
  <span class='moduletitle'>
  <?php 
  if ($uvhardware == 'solar.php' ) { echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'uvsolarlux.php' ){ echo "Solar | UV-Index | Lux";}
  else if ($uvhardware == 'weather34uvsolar.php' ){ echo "Solar | UV-Index | Lux";}
  else if ($uvhardware == 'cloudbasesolaruk.php' ){ echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'cloudbasesolards.php' ){ echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'cloudbase.php' ){ echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'indoortemperature.php' ){ echo $lang['Indoor'];}
  else if ($uvhardware == 'weatherflowuvsolar.php' ){ echo $lang['UVSOLAR'];}
  else if ($uvhardware == 'webcamsmall.php' ) {echo 
  "<svg id='i-eye' viewBox='0 0 32 32' width='10' height='10' fill='none' stroke='#9ABA2F' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
    <circle cx='17' cy='15' r='1' /> <circle cx='16' cy='16' r='6' /> <path d='M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z' />
</svg> " , $lang['LiveWebCam'];} ?></span></span><br />
<div id="solar"></div></div>
  <!--air quality- moon for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" style="z-index:20">
  <span class="monthpopup"><?php 
  if ($purpleairhardware=='yes')echo ' <a href="purpleair.php" data-featherlight="iframe">'. $chartinfo. "Air Quality </a></span>";
  else echo '';  ?>  
   <span class="yearpopup"> <a href="eqlist.php" data-featherlight="iframe"> <?php echo $earthquakeinfo?>  <?php echo $lang['Earthquake']; ?>   </a></span> 
  </div>
     <span class='moduletitle'> 
	 <?php if ($purpleairhardware=="yes") {echo "Purple Air Quality Index";} else if ($indoor=="true")echo $lang['Indoor'];else echo $lang['Moonphase'];?>
     </span></span>
      <div id="dldata"></div>    
    </div></div>
 <!--end outdoor data for homeweatherstation template-->
 
  <!--footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing-->
  <div class=weatherfooter-container><div class=weatherfooter-item><div class="cclicencelogo"><a href="http://weewx.com" target="_blank" title="http://weewx.com">
<img src="img/weewx.svg" width="125px" height="25px" alt="meteobridge"></a>
  </div>
<div class=designedby><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/">Designed by weather34.com</a></div>
<div class=footertext>
 <?php echo $info?> &nbsp; Data Source:&nbsp;WeeWX(<?php echo $wver ;?>)&nbsp;  
 Hardware:&nbsp;<?php echo $hardware ;?></div>
<div class=footertext>
<?php echo $info?> &nbsp; Template Version:&nbsp;W34-WE(<?php echo date("d F Y h:i",filemtime($mod34file));?>) &nbsp; &copy; 2015-<?php echo date('Y');?> &nbsp;
<?php echo $info?> &nbsp; Operational Since:&nbsp;<?php echo $since ;?></div>
<div class=footertext>
<a href="https://github.com/steepleian/weather34-Home-Weatherstation-Template-weeWX-adapted" title="https://github.com/steepleian/weather34-Home-Weatherstation-Template-weeWX-adapted">
  <?php echo $chartinfo?>&nbsp;&nbsp;<?php echo "Click here to download this WeeWX adapted version of the template from github.com";?> &nbsp;</a></div></div></div>
<div id=lightningalert></div></body><?php include('updater.php');include('menu.php')?></html>
