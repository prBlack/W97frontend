<?php
include_once('../settings.php');
include('../common.php');
 header('Content-type: text/html; charset=utf-8');


	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016                                          #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	ALL4ONE (CANVAS) UVINDEX FORECAST FOR NON SUPPORTED HARDWARE: 7TH October 2016     	           #
	# 	                                       														   #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>HOUR FORECAST</title>
		
	<link rel="stylesheet" href="style.dark.css">
    

    <div class="container1" style="margin-left:10%;">
        <?php

$hourly = file_get_contents('../jsondata/wuweatherupdate.txt');
$decoded = json_decode($hourly, true);
$count = 0;
foreach ($decoded['hourly_forecast'] as $value)
{
	$count++;

	$hour = $value['FCTTIME']['civil']; //changed ['hour']

	$uvi = $value['uvi'];

	echo "<div class=\"uvi01\"><span>${hour}</span><br>$uvi<p>UVINDEX</div>";

	if ($count >13)
		break;
}
?>

	</div>
    
    <div class="container2"> 
     <!-- uv 1-2 card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square2">
     <div class="mdl-card__title mdl-card--expand">
      <span class="uvcard" style="background:#9ABA2F;width:50px;height:50px;border-radius:100%;top:10px;left:20px;bottom:0;right:0;font-size:0em;font-weight:normal;color:#ffffff;position:absolute;text-align:center;padding-top:0%;">
      <span style="font-size:20px;font-weight:normal;color:rgba(255, 255, 255, 1);position:absolute;text-align:center;padding-top:0%;background:none;top:27.5%;left:0;bottom:0;right:0;
      font-family:'weathertext',Helvetica,Arial,sans-serif;">1-2</span></span>
    </div>
    <div class="mdl-card__supporting-text" >
     <?php echo $lang['Wearsunglasses'] ;?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
       <span style="color:#fff;background:#9ABA2F;padding:4px;border-radius:4px;font-size:10px;">Low</span>
       
    </div>
  </div>
  <!-- uv 3-5 card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square2">
    <div class="mdl-card__title mdl-card--expand">
     <span class="uvcard" style="background:#EC9C4A;width:50px;height:50px;border-radius:100%;top:10px;left:20px;bottom:0;right:0;font-size:0em;font-weight:normal;color:#ffffff;position:absolute;text-align:center;padding-top:0%;">
     <span style="font-size:20px;font-weight:normal;color:rgba(255, 255, 255, 1);position:absolute;text-align:center;padding-top:0%;background:none;top:27.5%;left:0;bottom:0;right:0;
 font-family:'weathertext',Helvetica,Arial,sans-serif;">3-5</span></span>
    </div>
    <div class="mdl-card__supporting-text">
     <?php echo $lang['Stayinshade'] ;?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
     <span style="color:#fff;background:#EC9C4A;padding:4px;border-radius:4px;font-size:10px;">Moderate</span>
    </div>
  </div>
   <!-- uv 6-7 card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square2">
    <div class="mdl-card__title mdl-card--expand">
     <span class="uvcard" style="background:#df826b;width:50px;height:50px;border-radius:100%;top:10px;left:20px;bottom:0;right:0;font-size:0em;font-weight:normal;color:#ffffff;position:absolute;text-align:center;padding-top:0%;">
     <span style="font-size:20px;font-weight:normal;color:rgba(255, 255, 255, 1);position:absolute;text-align:center;padding-top:0%;background:none;top:27.5%;left:0;bottom:0;right:0;
 font-family:'weathertext',Helvetica,Arial,sans-serif;">6-7</span></span>
    </div>
    <div class="mdl-card__supporting-text">
       <?php echo $lang['Reducetime'] ;?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
       <span style="color:#fff;background:#df826b;padding:4px;border-radius:4px;font-size:10px;">High Risk</span>
    </div>
  </div><!-- uv 8-9 card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square2">
    <div class="mdl-card__title mdl-card--expand">
      <span class="uvcard" style="background:#b75c5c;width:50px;height:50px;border-radius:100%;top:10px;left:20px;bottom:0;right:0;font-size:0em;font-weight:normal;color:#ffffff;position:absolute;text-align:center;padding-top:0%;">
      <span style="font-size:20px;font-weight:normal;color:rgba(255, 255, 255, 1);position:absolute;text-align:center;padding-top:0%;background:none;top:27.5%;left:0;bottom:0;right:0;
 font-family:'weathertext',Helvetica,Arial,sans-serif;">8-10</span></span>
    </div>
    <div class="mdl-card__supporting-text">
       <?php echo $lang['Minimize'] ;?>
    </div>
         <div class="mdl-card__actions mdl-card--border">
       <span style="color:#fff;background:#b75c5c;padding:4px;border-radius:4px;font-size:10px;">Very High Risk</span>
    </div>
  </div> <!-- uv 11-12 card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square2">
    <div class="mdl-card__title mdl-card--expand">
     <span class="uvcard" style="background:#8b74a2;width:50px;height:50px;border-radius:100%;top:10px;left:20px;bottom:0;right:0;font-size:0em;font-weight:normal;color:#ffffff;position:absolute;text-align:center;padding-top:0%;">
     <span style="font-size:20px;font-weight:normal;color:rgba(255, 255, 255, 1);position:absolute;text-align:center;padding-top:0%;background:none;top:27.5%;left:0;bottom:0;right:0;font-family:'weathertext',Helvetica,Arial,sans-serif;">11+</span></span>
    </div>
    <div class="mdl-card__supporting-text">
     <?php echo $lang['Trytoavoid'] ;?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <span style="color:#fff;background:#8b74a2;padding:4px;border-radius:4px;font-size:10px;">Extreme Risk</span>
       
    </div>
  </div>
  <style>
  a { font-size:10px;color:#ccc;text-decoration:none !important; }</style>
  <div style="position:absolute;margin-left:15%;bottom:-45px;z-index:9999;font-weight:normal;font-size:12px;text-decoration:none !important;padding:5px;background:#505153;border-radius:4px;">
  <a href="http://www.wunderground.com" title="Weather Underground">UV <?php echo $lang['Forecast'] ;?> Weather Underground © <?php echo date('Y');?> (<?php echo $id ;?>)</a><br>
  <a href="<?php echo $templateinfo; ?>" title="Home Weather Station Template info">HOMEWEATHERSTATION <?php echo $templateversion ?> <span style="color:#9ABA2F;">Design Copyright 2015-<?php echo $year ;?> </span> </a></div></div>
 

	</body>
</html>