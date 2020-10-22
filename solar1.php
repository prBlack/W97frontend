<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017     cloudbase script added 20 July 2017    				   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');
include_once('uvinfo/uvindexforecast.php');
include('common.php');
header('Content-type: text/html; charset=utf-8');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo $weather["time"];
$weather["cloudbase1"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /4.4) ;
$weather["cloudbase2"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /4.4*0.3048) ;
$weather["cloudbase3"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /2.4444) ;
$weather["cloudbase4"] = round(($weather["temp"] - $weather["dewpoint"] ) * 1000 /2.4444*0.3048) ; 
$weather["cloudbase5"] = round(($weather["temp"] - $weather["dewpoint"] ) *412) ; 
$weather["cloudbase6"] = round(($weather["temp"] - $weather["dewpoint"] ) *412)*0.3048; 
$weather["cloudbaseformula"] = $weather["temp"] - $weather["dewpoint"]  *412*0.000868055446194 ; 
$weather["cloudbase"] = round(($weather["temp"] - $weather["dewpoint"] ) *412*0.000868055446194) ; 
?></div>

   <span style="font-size:0">
  <div class="weather34-solarrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 
	 
	if ($weather["solar"]>1000){echo '<div class="bar bar-inner1000" style="height: ';echo $weather["solar"]/14;}	
	else if ($weather["solar"]>700){echo '<div class="bar bar-inner700" style="height: ';echo $weather["solar"]/12;}	
	else if ($weather["solar"]>600){echo '<div class="bar bar-inner600" style="height: ';echo $weather["solar"]/12;}	
	else if ($weather["solar"]>400){echo '<div class="bar bar-inner400" style="height: ';echo $weather["solar"]/12;}
	else if ($weather["solar"]>=1){echo '<div class="bar bar-inner1" style="height: ';echo $weather["solar"]/12;}		
	else if ($weather["solar"]>=0){echo '<div class="bar bar-inner1" style="height: ';echo $weather["solar"]+1;}	
	?>px;">
	
	
	
	
    </div></div>    
  </div>
 <div class="weather34solarrate"><span><?php echo "";
if ($weather["solar"]==0)
echo  "<greyuv>",number_format($weather["solar"] ,0), "</greyuv><solarwm2> W/m&sup2</solarwm2>";
else if ($weather["solar"]>=1000)
echo  "<orangeuv>",str_replace(",", "",$weather["solar"]), "</orangeuv><solarwm2> W/m&sup2</solarwm2>";
else if ($weather["solar"]>=1)
echo  "<orangeuv>",number_format($weather["solar"] ,0), "</orangeuv><solarwm2> W/m&sup2</solarwm2>";
?>
 </span>
</div>
<style>
.cloudbaseweather34 > div:after {
	content:'<?php   if($units=="us"){  echo  $weather["cloudbase1"],'ft (',$weather["cloudbase2"],'m)';}else echo  $weather["cloudbase3"],'ft (',$weather["cloudbase4"],'m)';
?>';}
</style>

<div class="cloudbaseweather34 clear" data-max="10000" data-fill="
<?php if($units=="us"){ echo  $weather["cloudbase1"];}	else echo  $weather["cloudbase3"];?>">
<div></div></div>
<div class="weather34cloud">
<style>
.weather34-cloudbase-bar .bar-inner:after{content:' <?php   if($units=="us"){  echo  $weather["cloudbase1"],'ft (',$weather["cloudbase2"],'m)';}else echo  $weather["cloudbase3"],'ft (',$weather["cloudbase4"],'m)';
?>';}
</style>

</div>

<div class="weather34-uvrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;">
    <?php 
	if ($weather["uv"]>10){echo '<div class="bar bar-inner10" style="height: ';}	
	else if ($UVfcstUVTODAY>8){echo '<div class="bar bar-inner8" style="height: ';}	
	else if ($UVfcstUVTODAY>5){echo '<div class="bar bar-inner5" style="height: ';}	
	else if ($UVfcstUVTODAY>3){echo '<div class="bar bar-inner3" style="height: ';}	
	else if ($UVfcstUVTODAY>=0){echo '<div class="bar bar-inner" style="height: ';}	
	echo $UVfcstUVTODAY*8+1;?>px;">
    </div></div>    
  </div>
 <div class="weather34uvrate"><span><?php 
 if ($UVfcstUVTODAY>10){echo  "<purpleuv>",number_format($UVfcstUVTODAY,1), "</purpleuv><solarwm2> UVI</solarwm2>";}
	else if ($UVfcstUVTODAY>8){echo  "<reduv>",number_format($UVfcstUVTODAY,1), "</reduv><solarwm2> UVI</solarwm2>";}
	else if ($UVfcstUVTODAY>5){echo  "<orangeuv>",number_format($UVfcstUVTODAY,1), "</orangeuv><solarwm2> UVI</solarwm2>";}
	else if ($UVfcstUVTODAY>3){echo  "<orangeuv>",number_format($UVfcstUVTODAY,1), "</orangeuv><solarwm2> UVI</solarwm2>";}
	else if ($UVfcstUVTODAY>=0.1){echo  "<greenuv>",number_format($UVfcstUVTODAY,1), "</greenuv><solarwm2> UVI</solarwm2>";}
	else if ($UVfcstUVTODAY>=0){echo  "<greyuv>",number_format($UVfcstUVTODAY ,1), "</greyuv><solarwm2> UVI</solarwm2>";}
 
 
?>
 </span>
</div>

<script Defer>
function cloudbaseweather34Update(c){var a=$(c).attr("data-max");var d=$(c).attr("data-fill");var b=(a)?d/a*110:d;if(!isNaN(d)){$(c).children().css("height",b+"%").text(d)}}$(".cloudbaseweather34").each(function(a,b){cloudbaseweather34Update(b)});
</script>