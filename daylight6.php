<?php include_once('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');
//weather34 experimental daylight css module 26th Feb 2018
//pure css designed by weather34.com ///
?>

<?php $result=date_sun_info(time(),$lat,$lon);$sunr=date_sunrise(time(),SUNFUNCS_RET_STRING,$lat,$lon,$rise_zenith,$UTC);$suns=date_sunset(time(),SUNFUNCS_RET_STRING,$lat,$lon,$set_zenith,$UTC);$sunr1=date_sunrise(strtotime('+1 day',time()),SUNFUNCS_RET_STRING,$lat,$lon,$rise_zenith,$UTC);$suns1=date_sunset(strtotime('+1 day',time()),SUNFUNCS_RET_STRING,$lat,$lon,$set_zenith,$UTC);$suns2=date('G.i',$result['sunset']);$sunr2=date('G.i',$result['sunrise']);$sunrisehour=date('H.i',$result['sunrise']);$sunsethour=date('G',$result['sunset']);$now=date('G.i');
$startdate1=$now;$enddate1=$suns;$diff=strtotime($enddate1)-strtotime($startdate1);$temp=$diff/86400;$days1=floor($temp);$temp=24*($temp-$days1);$hours1=floor($temp);$temp=60*($temp-$hours1);$minutes1=floor($temp);$temp=60*($temp-$minutes1);$seconds1=floor($temp);$startdate2=$sunr;$enddate2=$now;$diff=strtotime($enddate2)-strtotime($startdate2);$temp=$diff/86400;$days2=floor($temp);$temp=24*($temp-$days2);$hours2=floor($temp);$temp=60*($temp-$hours2);$minutes2=floor($temp);$temp=60*($temp-$minutes2);$seconds2=floor($temp);$startdate3=$now;$enddate3=$sunr;$diff=strtotime($enddate3)-strtotime($startdate3);$temp=$diff/86400;$days3=floor($temp);$temp=24*($temp-$days3);$hours3=floor($temp);$temp=60*($temp-$hours3);$minutes3=floor($temp);$temp=60*($temp-$minutes3);$seconds3=floor($temp);$startdate4=$sunr;$enddate4=$suns;$diff=strtotime($enddate4)-strtotime($startdate4);$temp=$diff/86400;$days4=floor($temp);$temp=24*($temp-$days4);$hours4=floor($temp);$temp=60*($temp-$hours4);$minutes4=floor($temp);$temp=60*($temp-$minutes4);$seconds4=floor($temp);$startdate5=$suns;$enddate5=$sunr;$diff=strtotime($enddate5)-strtotime($startdate5);$temp=$diff/86400;$days5=floor($temp);$temp=24*($temp-$days5);$hours5=floor($temp);$temp=60*($temp-$hours5);$minutes5=floor($temp);$temp=60*($temp-$minutes5);$seconds5=floor($temp);$startdate6=$now;$enddate6=$sunr;$diff=strtotime($enddate6)-strtotime($startdate6);$temp=$diff/86400;$days6=floor($temp);$temp=24*($temp-$days6);$hours6=floor($temp);$temp=60*($temp-$hours6);$minutes6=floor($temp);$temp=60*($temp-$minutes6);$seconds6=floor($temp);$minutesdarkness=sprintf("%02d",$minutes5);$minutesdaylight=sprintf("%02d",$minutes4);$minutesdayleft=sprintf("%02d",$minutes1);$minutesdarkleft=sprintf("%02d",$minutes3);$minutesagosunrise=sprintf("%02d",$minutes2);$hoursdaylight=sprintf("%02d",$hours4);$hoursdark=sprintf("%02d",$hours5);$dayl1=$hours4;$dayl2=$minutesdaylight;$dayl3='.';$daylighthourstoday=$dayl1.$dayl3.$dayl2;$dark1=$hours5;$dark2=$minutesdarkness;$dark3='.';$darkhourstonight=$dark1.$dark3.$dark2;




//sun position based on https://github.com/KiboOst/php-sunPos
class sunPos{public function getSunPos(){$date=clone $this->date;$date->setTimezone(new DateTimeZone('UTC'));$year=$date->format("Y");$month=$date->format("m");$day=$date->format("d");$hour=$date->format("H");$min=$date->format("i");$pos=$this->getSunPosition($this->latitude,$this->longitude,$year,$month,$day,$hour,$min);$this->elevation=$pos[0];$this->azimuth=$pos[1];return array('elevation'=>$pos[0],'azimuth'=>$pos[1]);}public function getDayPeriod(){$ts=$this->date->getTimestamp();$sun_info=date_sun_info($ts,$this->latitude,$this->longitude);$sunrise=date("H:i:s",$sun_info["sunrise"]);$transit=date("H:i:s",$sun_info["transit"]);$sunset=date("H:i:s",$sun_info["sunset"]);$this->sunrise=$sunrise;$this->transit=$transit;$this->sunset=$sunset;$isDay=0;$isMorning=0;$isNoon=0;$isAfternoon=0;$isEvening=0;$now=$this->date->format('H:i:s');if($now>$sunrise and $now<$sunset)$isDay=1;if($isDay==1){if($now<='12:00:00')$isMorning=1;if($now>'12:00:00' and $now<'14:00:00')$isNoon=1;if($isMorning==0 and $isNoon==0){$sunrise=new DateTime($sunrise);$transit=new DateTime($transit);$sunset=new DateTime($sunset);$nowTime=new DateTime($now);$dayLenght=date_diff($sunset,$sunrise);$dayLenght=$dayLenght->h * 60 + $dayLenght->i;$sunsetDelta=date_diff($sunset,$nowTime);$sunsetDelta=$sunsetDelta->h * 60 + $sunsetDelta->i;$portion=pow($dayLenght / 12,2)/ 40;if($sunsetDelta<$portion)$isEvening=1;else $isAfternoon=1;}}$this->isDay=$isDay;$this->isMorning=$isMorning;$this->isNoon=$isNoon;$this->isAfternoon=$isAfternoon;$this->isEvening=$isEvening;}public function isSunny($from=0,$to=0){if(is_null($this->azimuth)){$pos=$this->getSunPos();$this->elevation=$pos['elevation'];$this->azimuth=$pos['azimuth'];}if($to<$from){if($this->azimuth<$to)$this->azimuth+=360;$to+=360;}if($this->azimuth>$from and $this->azimuth<$to)return true;return false;}public function getSunPosition($lat,$long,$year,$month,$day,$hour,$min){$jd=gregoriantojd($month,$day,$year);$dayfrac=$hour / 24 - .5;$frac=$dayfrac + $min / 60 / 24;$jd=$jd + $frac;$time=($jd - 2451545);$mnlong=(280.460 + 0.9856474 * $time);$mnlong=fmod($mnlong,360);if($mnlong<0)$mnlong=($mnlong + 360);$mnanom=(357.528 + 0.9856003 * $time);$mnanom=fmod($mnanom,360);if($mnanom<0)$mnanom=($mnanom + 360);$mnanom=deg2rad($mnanom);$eclong=($mnlong + 1.915 * sin($mnanom)+ 0.020 * sin(2 * $mnanom));$eclong=fmod($eclong,360);if($eclong<0)$eclong=($eclong + 360);$oblqec=(23.439 - 0.0000004 * $time);$eclong=deg2rad($eclong);$oblqec=deg2rad($oblqec);$num=(cos($oblqec)* sin($eclong));$den=(cos($eclong));$ra=(atan($num / $den));if($den<0)$ra=($ra + pi());if($den>=0&&$num<0)$ra=($ra + 2*pi());$dec=(asin(sin($oblqec)* sin($eclong)));$h=$hour + $min / 60;$gmst=(6.697375 + .0657098242 * $time + $h);$gmst=fmod($gmst,24);if($gmst<0)$gmst=($gmst + 24);$lmst=($gmst + $long / 15);$lmst=fmod($lmst,24);if($lmst<0)$lmst=($lmst + 24);$lmst=deg2rad($lmst * 15);$ha=($lmst - $ra);if($ha<pi())$ha=($ha + 2*pi());if($ha>pi())$ha=($ha - 2*pi());$lat=deg2rad($lat);$el=(asin(sin($dec)* sin($lat)+ cos($dec)* cos($lat)* cos($ha)));$az=(asin(-cos($dec)* sin($ha)/ cos($el)));if((sin($dec)- sin($el)* sin($lat))>00){if(sin($az)<0)$az=($az + 2*pi());}else{$az=(pi()- $az);}$el=rad2deg($el);$az=rad2deg($az);$lat=rad2deg($lat);return array(number_format($el,2),number_format($az,2));}public $latitude=null;public $longitude=null;public $date=null;public $timezone=null;public $elevation=null;public $azimuth=null;public $sunrise=null;public $transit=null;public $sunset=null;public $isDay=null;public $isMorning=null;public $isNoon=null;public $isAfternoon=null;public $isEvening=null;protected $dateFormat='Y-m-d';function __construct($latitude=0,$longitude=0,$timezone=false,$date=false,$time=false){$this->latitude=$latitude;$this->longitude=$longitude;if($timezone){$this->timezone=$timezone;date_default_timezone_set($timezone);}else $this->timezone=date_default_timezone_get();if($date)$this->date=DateTime::createFromFormat($this->dateFormat,$date);else $this->date=new DateTime('NOW',new DateTimeZone($this->timezone));if($time){$var=explode(':',$time);$this->date->setTime($var[0],$var[1]);}$this->getSunPos();$this->getDayPeriod();}}$lati=$lat;$long=$lon;$timezone=$TZ;$_SunPos=new sunPos($lati,$long,$timezone);
//1st september 2018 extra weather34 lets manipulate the output according to arc radius //$_SunPos->isMorning; //$_SunPos->isAfternoon;//$_SunPos->isEvening;
$elev=$_SunPos->elevation;
//$elev=32;
date_default_timezone_set($TZ);$morning=$_SunPos->isMorning;
if ($morning==0 && $elev<=40){ $az= 122-$elev;}
else if ($morning==0 && $elev<=50){ $az= 120-$elev;}
else if ($morning==0 && $elev<=60){ $az= 118-$elev;}
else if ($morning==0 && $elev<=90){ $az= 110-$elev;}
else if ($morning==1 && $elev>49){ $az= $elev-70+$elev;}
else if ($morning==1 && $elev>29){ $az= $elev-60+$elev;}
else if ($morning==1 && $elev>5){ $az= $elev-55+$elev;}
else if ($morning==1 && $elev>-1){ $az= $elev-50+$elev;}
?>

<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.daylightvalue1:before{position:absolute;content:"<?php echo "";if($now>$suns2){echo $lang['Estimated'];}else if($now<$sunr2){echo $lang['Estimated'];}else if($now<$suns2){echo $lang['Estimated'];}?>";display:block;font-size:12px;line-height:20px;top:-28px;left:45px;letter-spacing:normal;border:0;}

.thearrow5{-webkit-transform:rotate(<?php echo $az;?>deg);-moz-transform:rotate(<?php echo $az;?>deg);-o-transform:rotate(<?php echo $az;?>deg);-ms-transform:rotate(<?php echo $az;?>deg);transform:rotate(<?php echo $az?>deg);
position:absolute;z-index:200;top:0;left:44%;margin-left:-4px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;}
.thearrow5:before{color:<?php if (date('H:i')<$suns1){echo '#ff8841';}else '#aaa' ?>;display:<?php if (date('H:i')>$suns){echo 'none';}if (date('H:i')<$sunr){echo 'none';}else 'inline' ?>;}
</style>
<div class="daylightmoduleposition">
<div class='sunlightday'>
<?php echo $sunlight;?> <?php echo "<strongnumbers> ${hours4}:${minutesdaylight} </strongnumbers>hrs <br> <period>".$lang['TotalDaylight']."</period>";?></div>

<div class='sundarkday'>
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg></span>
<?php echo "<strongnumbers>${hours5}:<minutes>${minutesdarkness} </strongnumbers>hrs</minutes> <br> <period>".$lang['TotalDarkness']."</period>";?>
</div>


<div class='sunriseday'> <?php echo $lang['Sunrise']," ",$sunricon;?> <br>
&nbsp;&nbsp;
<?php echo '';if(date('H:i')>$sunr){echo "".$lang['Tomorrow']." <strongnumbers>$sunr1 </strongnumbers></span>";}else echo " ".$lang['Today']." <strongnumbers> $sunr</strongnumbers></span>";?>
</span></div>


<div class='sunsetday'> <?php echo $sunsicon," ", $lang['Sunset']?>  <br>
<?php echo '';if(date('H:i')>$suns){echo "".$lang['Tomorrow']." <strongnumbers>$suns1 </strongnumbers></span> ";}else echo " ".$lang['Today']." <strongnumbers> $suns</strongnumbers> </span>";?>
</div>


<div class="daylightcompass2" >
<div class="daylightcompass-line2" >
<div class="thearrow5"></div></div>
<div class="daylightvalue1"><hrs>hrs</hrs><span><svg id="i-clock" viewBox="0 0 32 32" width="5" height="5" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
<circle cx="16" cy="16" r="14" />
<path d="M16 8 L16 16 20 20" />
</svg></span>
<?php if($lightLeft){if($now>$suns2){echo "${hours3} <minutes>${minutesdarkleft}</minutes> <br> <period>".$lang['Sunrise']."".$lang['Till']."</period>";}else if($now<$sunr2){echo "${hours3} <minutes>${minutesdarkleft}</minutes> <br> <period>".$lang['Till']."".$lang['Sunrise']."</period>";}else if($now<$suns2){echo "${hours1}  <minutes>${minutesdayleft}</minutes> <br> <period>".$lang['Till']."".$lang['Sunset']."</period>";}}else{if($now>$suns2){echo "${hours5} <minutes>${minutesdarkness}</minutes> <br> <period>".$lang['Darkness']."</period>";}else if($now<$suns2){echo "${hours4}  <minutes>${minutesdaylight}</minutes> <br> <period>".$lang['Daylight']."</period>";}}?><min>min</min></div>


<div class="azimuth"><?php echo "Азимут <orange>".$_SunPos->azimuth."</orange>&deg;";?></div>
<div class="elevation"><?php echo "Угол места <orange>".$_SunPos->elevation."</orange>&deg;";?></div>
</div></div></div></div></div>
