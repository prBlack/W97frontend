<?php 
include('livedata.php');
include('common.php');
header('Content-type: text/html; charset=utf-8');


	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 											   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################




// start temperature for homeweather station

if (array_key_exists("temp_trend", $weather)) { ?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online; echo " ",$weather["time"];?></div>

<div class="tempcontainer"><div class="circleOut">
<?php 

function echo_tempcircle($class, $temperature)
{
	global $theme;
	if ($theme == 'dark')
	{
		echo "<div class=\"temperaturecircle\"></div><div class=\"temptext" . $class . "\">" . $temperature . "<suptemp>&deg;</suptemp></div>";
	}
	elseif ($theme == 'color')
	{
		echo "<div class=\"temperaturecircle\"></div><div class=\"temptext" . $class . "\">" . $temperature . "<suptemp>&deg;</suptemp></div>";
	}
	
	else
	{
		echo "<div class=\"" . $class . "\"></div><div class=\"temptext\">" . $temperature . "<suptemp>&deg;</suptemp></div>";
	}
}

if(anyToC($weather["temp"])<0){echo_tempcircle("freezing", $weather["temp"]);}
else if(anyToC($weather["temp"])<5){echo_tempcircle("cold", $weather["temp"]);}
else if(anyToC($weather["temp"])<7){echo_tempcircle("gettingcolder", $weather["temp"]);}
else if(anyToC($weather["temp"])<10){echo_tempcircle("colder", $weather["temp"]);}
else if(anyToC($weather["temp"])<12){echo_tempcircle("cooler", $weather["temp"]);}
else if(anyToC($weather["temp"])<15){echo_tempcircle("mild", $weather["temp"]);}
else if(anyToC($weather["temp"])<18){echo_tempcircle("milder", $weather["temp"]);}
else if(anyToC($weather["temp"])<20){echo_tempcircle("gettingcooler", $weather["temp"]);}
else if(anyToC($weather["temp"])<23){echo_tempcircle("warm", $weather["temp"]);}
else if(anyToC($weather["temp"])<25){echo_tempcircle("warmer", $weather["temp"]);}
else if(anyToC($weather["temp"])<29){echo_tempcircle("hot", $weather["temp"]);}
else if(anyToC($weather["temp"])<32){echo_tempcircle("hotter", $weather["temp"]);}
else if(anyToC($weather["temp"])<35){echo_tempcircle("hotter", $weather["temp"]);}
else if(anyToC($weather["temp"])<40){echo_tempcircle("veryhot", $weather["temp"]);}
else {echo_tempcircle("extremehot", $weather["temp"]);}
?>
</div><!-- end animated temperature-->  
<?php
if (array_key_exists("temp_today_high", $weather)) {
?>
<div class="max"><?php echo $weather["temp_today_high"] . "&deg;\n"; ?><span style="line-height:0.5em;font-size:12px;vertical-align:middle;"> |</span> 
<?php echo $weather["temp_today_low"]."&deg;";?></div>
<?php } else { ?>
<div class="maxws1001"><?php echo $lang['Temperature']?></div>
<?php } ?>

<div class="temptrend">
<?php echo $weather["temp_trend"] . " </span>\n";
if ($weather["temp_trend"]<0) {
    echo' <trendmovementfalling>&nbsp;'.$fallingsymbol.' ','' .number_format($weather["temp_trend"], 1).'&deg;</trendmovementfalling>' ;
}
elseif ($weather["temp_trend"]>0) {
    echo ' <trendmovementrising>&nbsp;'.$risingsymbol.' ' ,'' .number_format($weather["temp_trend"], 1).'&deg;</trendmovementrising>';
}

else echo ' <trendmovementsteady>&nbsp;'.$steadysymbol.'', ' ',$lang['Steady'],'</trendmovementsteady>' ;?>
</span>
</div>
</div>
<div class="heatcircle">
<div class="heatcircle-content">
<?php  //heat-index/feels like
if(anyToC($weather["heat_index"])>$notifyHeatIndex||($showFeelsLike&&anyToC($weather["temp"])>27)){
echo $lang['Heatindex'],"<br><div class=svgfeels><tempred>".$alert."</div><tempred>".$weather["heat_index"]."&deg;";
if(anyToC($weather["heat_index"])>$notifyHeatIndex){
echo '  ';}
echo "</tempred>";}
//windchill offline
else if(anyToC($weather["windchill"]=='--') && $weather["temp_feel"]>=15){ echo $lang['Feelslike'],"<br>
<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div> <temporange>".$weather["temp_feel"]."&deg;";}
else if(anyToC($weather["windchill"]=='--') && $weather["temp_feel"]>=10){ echo $lang['Feelslike'],"<br><div class=svgfeels><img src=css/aqi/nicefeel.svg width=15px></div> <tempgreen>".$weather["temp_feel"]."&deg;";}
else if(anyToC($weather["windchill"]=='--') && $weather["temp_feel"]<10 ){ echo $lang['Feelslike'],"<br><div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>".$weather["temp_feel"]."&deg;";}
//windchill
else if(anyToC($weather["windchill"]<5)){
echo "Windchill <br><div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>".$weather["windchill"]."&deg;";
if(anyToC($weather["windchill"])<$notifyWindchill){
echo ' '.$alert.'';}
echo "</tempblue>";}
//feels
else if($showFeelsLike && $weather["temp_feel"]<10){echo $lang['Feelslike']," <br><div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>".$weather["temp_feel"]."&deg;";echo "</tempblue>";}
else if($showFeelsLike && $weather["temp_feel"]>=30){echo $lang['Feelslike'],"<br><div class=svgfeels><img src=css/aqi/hotfeel.svg width=15px></div><temporange>".$weather["temp_feel"]."&deg;";echo "</temporange>";}
else if($showFeelsLike && $weather["temp_feel"]>=15){echo $lang['Feelslike'],"<br><div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><temporange>".$weather["temp_feel"]."&deg;";echo "</temporange>";}
else if($showFeelsLike && $weather["temp_feel"]>=10){echo $lang['Feelslike'],"<br><div class=svgfeels><img src=css/aqi/nicefeel.svg width=15px></div><tempgreen>".$weather["temp_feel"]."&deg;";echo "</tempgreen>";}
else{echo "Temp Factors <br><tempred>No Cautions</tempred> \n";}?></div>
<div class="heatcircle-content"><?php echo $lang['Wetbulb'];?><br>
<?php //wetbulb
if ($weather["temp_units"]=='C' &&  $wetbulbx>=18){echo "<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><temporange>". $wetbulbx."&deg;";"</tempgreen>";}
else if ($weather["temp_units"]=='C' && $wetbulbx<10){echo "<div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>". $wetbulbx."&deg;";"</tempgreen>";}
else if ($weather["temp_units"]=='C' && $wetbulbx<18){echo "<div class=svgfeels><img src=css/aqi/nicefeel.svg width=15px></div><tempgreen>". $wetbulbx."&deg;";"</tempgreen>";}
//non metric wetbulb
if ($weather["temp_units"]=='F' && $wetbulbx >=64){echo "<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><temporange>". $wetbulbx ."&deg;";"</tempgreen>";}
else if ($weather["temp_units"]=='F' && $wetbulbx <50){echo "<div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>". $wetbulbx ."&deg;";"</tempgreen>";}
else if ($weather["temp_units"]=='F' && $wetbulbx <64){echo "<div class=svgfeels><img src=css/aqi/nicefeel.svg width=15px></div><tempgreen>". $wetbulbx ."&deg;";"</tempgreen>";}?>
</div>
<div class="heatcircle-content"><?php echo $lang['Humidity'];?> <br>
<?php //humidity
if ($weather["humidity"]>80){echo "<div class=svgfeels><img src=css/aqi/hotfeel.svg width=15px></div><temporange>".$weather["humidity"]."</temporange>";}
else if ($weather["humidity"]>60){echo "<div class=svgfeels><img src=css/aqi/pleasantfeel.svg width=15px></div><tempgreen>".$weather["humidity"]."</tempgreen>";}
else if ($weather["humidity"]>40){echo "<div class=svgfeels><img src=css/aqi/nicefeel.svg width=15px></div><tempgreen>".$weather["humidity"]."</tempgreen>";}
else if ($weather["humidity"]>=0){echo "<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><tempred>".$weather["humidity"]."</tempred>";}
?>%

<?php //humidity trend
if(array_key_exists("humidity_trend",$weather)){if($weather["humidity_trend"]>0){
echo '<rise> '.$risingsymbol.'</rise>';}
else if($weather["humidity_trend"]<0){
echo ' <fall>'.$fallingsymbol.'</fall>';}
else{ echo ''.$steadysymbol.'';}}?></span></div>
<div class="heatcircle-content"><?php echo $lang['Dewpoint'];?> <br><tempblue>
<?php //dewpoint
if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>20)){ echo  "<div class=svgfeels><tempred>".$alert."</div><tempred>".$weather['dewpoint'].'&deg; </tempred>';}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>15)){ echo  "<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><temporange>".$weather['dewpoint'].'&deg; </temporange>';}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=10)){ echo  "<div class=svgfeels><img src=css/aqi/pleasantfeel.svg width=15px></div><tempgreen>".$weather['dewpoint'].'&deg; </tempgreen>';}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]<10)){ echo   "<div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>".$weather['dewpoint'].'&deg; </tempblue>';}

//non metric
if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>68)){ echo  "<div class=svgfeels><tempred>".$alert."</div><tempred>".$weather['dewpoint'].'&deg; </tempred>';}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>59)){ echo  "<div class=svgfeels><img src=css/aqi/warmfeel.svg width=15px></div><temporange>".$weather['dewpoint'].'&deg; </temporange>';}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=50)){ echo  "<div class=svgfeels><img src=css/aqi/pleasantfeel.svg width=15px></div><tempgreen>".$weather['dewpoint'].'&deg; </tempgreen>';}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]<50)){ echo "<div class=svgfeels><img src=css/aqi/coldfeel.svg width=15px></div><tempblue>". $weather['dewpoint'].'&deg; </tempblue>';}
?></tempblue>
<?php //dewpoint trend
if(array_key_exists("dewpoint_trend",$weather)){
if($weather["dewpoint_trend"]>0){
echo '<rise> '.$risingsymbol.'</rise>';}
else if($weather["dewpoint_trend"]<0){
echo '<fall> '.$fallingsymbol.'</fall>';}
else{ echo ''.$steadysymbol.' ';}}?></span></div>

</div>

<div class="airwarning2"><?php
//metric to f + humidex
if( $weather["temp_units"]=='C' && $weather["humidex"]>30){echo "<div class=maxcirclered><span>Humidex</span><br>".$weather["humidex"]."&deg;" ;}
else if( $weather["temp_units"]=='C' && $weather["temp"]>29){echo "<div class=maxcirclered><br>".anyToF($weather["temp"])."&deg;F" ;}  
else if( $weather["temp_units"]=='C' && $weather["temp"]>23){echo "<div class=maxcircleorange><br>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' && $weather["temp"]>20){echo "<div class=maxcircleyellow><br>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' && $weather["temp"]>10){echo "<div class=maxcirclegreen><br>".anyToF($weather["temp"])."&deg;F" ;}
else if( $weather["temp_units"]=='C' &&$weather["temp"]>-50){echo "<div class=maxcircleblue><br>".anyToF($weather["temp"])."&deg;F" ;}
//non metric to C + humidex
if( $weather["temp_units"]=='F' && $weather["humidex"]>86){echo "<div class=maxcirclered><span>Humidex</span><br>".$weather["humidex"]."&deg;";} 
else if( $weather["temp_units"]=='F' && $weather["temp"]>=84.2){echo "<div class=maxcirclered><br>".anyToC($weather["temp"])."&deg;C" ;}
else if( $weather["temp_units"]=='F' && $weather["temp"]>=73.4){echo "<div class=maxcircleorange><br>".anyToC($weather["temp"])."&deg;C" ;}
else if( $weather["temp_units"]=='F' && $weather["temp"]>68){echo "<div class=maxcircleyellow><br>".anyToC($weather["temp"])."&deg;C" ;}
else if( $weather["temp_units"]=='F' && $weather["temp"]>50){echo "<div class=maxcirclegreen><br>".anyToC($weather["temp"])."&deg;C" ;}
else if( $weather["temp_units"]=='F' && $weather["temp"]>-50){echo "<div class=maxcircleblue><br>".anyToC($weather["temp"])."&deg;C" ;}}
?>
</div>


<div class="indoorcircle"><?php //chuck
if( $weather["temp_units"]=='C' && $weather["temp_indoor"]>=29){echo "<div class=maxcirclered><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}  
else if( $weather["temp_units"]=='C' && $weather["temp_indoor"]>23){echo "<div class=maxcircleorange><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='C' && $weather["temp_indoor"]>20){echo "<div class=maxcircleyellow><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='C' && $weather["temp_indoor"]>10){echo "<div class=maxcirclegreen><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='C' &&$weather["temp_indoor"]>-50){echo "<div class=maxcircleblue><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}

if( $weather["temp_units"]=='F' && $weather["temp_indoor"]>=84.2){echo "<div class=maxcirclered><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='F' && $weather["temp_indoor"]>=73.4){echo "<div class=maxcircleorange><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='F' && $weather["temp_indoor"]>68){echo "<div class=maxcircleyellow><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='F' && $weather["temp_indoor"]>50){echo "<div class=maxcirclegreen><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
else if( $weather["temp_units"]=='F' && $weather["temp_indoor"]>-50){echo "<div class=maxcircleblue><spani>Indoor<br></spani>".($weather["temp_indoor"])."&deg;" ;}
?>
</div>


</div></div>
