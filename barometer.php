<?php include_once('livedata.php');include_once('common.php');header('Content-type: text/html; charset=utf-8');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C' ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer_min"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C' ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer_min"]*50.6;}?>deg);}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C' ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer_max"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C' ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer_max"]*50.6;}?>deg);}
</style>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online; echo " ",$weather["time"];?></div>

<div class='barometermax'>
<?php echo '<div class=barometerorange>Max ('.$weather["thb0seapressmaxtime"].')<br><span>',$weather["barometer_max"],'&nbsp;',$weather["barometer_units"],' </span></div>';?></div>
<div class='barometermin'>
<?php echo '<div class=barometerblue>Min ('.$weather["thb0seapressmintime"].')<br><span>',$weather["barometer_min"],'&nbsp;',$weather["barometer_units"],' </span></div>';?></div>

<div class="barometertrend2">
<?php  echo "Trend";
if ($weather["barometer_trend"] > 20  && $weather["barometer_trend"] < 100)  {echo '<rising><rise> '.$risingsymbol.' </rise><span>';echo number_format($weather["barometer_trend"],2), '</rising><units> ';echo $weather["barometer_units"], '</units>';}
else if ($weather["barometer_trend"] < 0) {
echo '<falling><fall> '.$fallingsymbol.'</fall><span> '; echo number_format($weather["barometer_trend"],2), '</falling><units> ';echo $weather["barometer_units"], '</units>';}
else if ($weather["barometer_trend"] > 0 && $weather["barometer_trend"] < 100) {
echo '<rising><rise> '.$risingsymbol.' </rise><span>';echo number_format($weather["barometer_trend"],2), '</rising><units> ';echo $weather["barometer_units"], '</units>';}	  
else echo '<ogreen> '.$steadysymbol.'</ogreen><steady><ogreen>Steady</ogreen></steady></div>';?>
</div>
<div class='barometerconv'>
<?php echo "";
if ($weather["temp_units"]=='C'){echo "<convtext>inches:</convtext> ",number_format($weather["barometer"]*0.029529983071445,2),"&nbsp;<span>inHg</span>";}
else if ($weather["temp_units"]=='F'){echo "<convtext>metric:</convtext> ",round($weather["barometer"]*33.863886666667,1),"&nbsp;<span>hPa</span>";}echo " ";
?></div>
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php if ($weather["barometer_trend"]>20){echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';}
else if ($weather["barometer_trend"] < 0) {
echo '<div class="pressuretext"> <oblue>'.$lang['Falling'].'</oblue> <fall> '.$fallingsymbol.'</fall></div>';}
else if ($weather["barometer_trend"] > 0) {
echo '<div class="pressuretext"> <oorange>'.$lang['Rising'].'</orange> <rise> '.$risingsymbol.' </rise></div>';}
else echo '<div class="pressuretext"> <ogreen>'.$lang['Steady'].'</ogreen> </div>';?>
<?php echo "<darkgrey>".$weather["barometer"],"</darkgrey>&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["temp_units"]=='C'){echo "<weather34-barometerlimitmin>720</weather34-barometerlimitmin><weather34-barometerlimitmax>790</weather34-barometerlimitmax>";}
else echo "<weather34-barometerlimitminf>28</barometerlimitminf><weather34-barometerlimitmaxf>31</weather34-barometerlimitmaxf>";?></div></div>
