 <?php include('livedata.php');date_default_timezone_set($TZ);?><div class="eqcirclehomeregional"><div class="eqtexthomeregional">
<?php 
//WEATHER34 started raining
if ($weather["rain_rate2"]>0 && $weather["rain_rate2"]<0.7){echo "<div class=\"alertcircle\"><oblue>",$weather["rain_rate2"],"</orange><smallicon>  &nbsp;mm</smallicon>"; 
 echo "<spanelightning><blue> Light Rain<br><span style='margin-top:-25px;display:block;font-size:11px;'>Detected</span>
  <div class='rainalerticon'> <img src='css/icons/rain.svg' width=40px > </spanelightning></div></div>" ;}   
    
    
//WEATHER34 lightning
else if ($weather["lightningtimeago"]>1 && $weather["lightningtimeago"]<0){echo "<div class=\"alertcircle\"><orange>", number_format($weather["lightningkm"],0) ,"</orange><suplight>km</suplight>"; 
 echo "<spanelightning> Lightning Strike Nearby <br><span style='margin-top:-25px;display:block;font-size:11px;'>Possible Storm Approaching</span>
  <div class='orangealerticon'> ".$newalert." </spanelightning></div></div>" ;}   
  
 ///WEATHER34 wind gusts
 else if ($weather["temp_units"]=='C' && $weather["wind_speed_avg"]>=25 ){echo "<div class=\"alertcircle\">", $weather["wind_speed_avg"]."<smallicon><oblue style=font-size:11px;'>".$windunit."</smallicon></oblue>"; 
 echo "<orange><spanelightning style='margin-left:18px;'> Caution <span>Gusty Conditions</<spanelightning><heatindex>Strong Winds</heatindex> </spanelightning>"; "</div></div> " ;} 
//WEATHER34 wind gusts NON METRIC
 else if ($weather["temp_units"]=='F' && $weather["wind_speed_avg"]>=20 ){echo "<div class=\"alertcircle\">", $weather["wind_speed_avg"]."<smallicon><oblue style=font-size:11px;'>".$windunit."</smallicon></oblue>"; 
 echo "<orange><spanelightning style='margin-left:17px;'> Caution <span>Gusty Conditions</<spanelightning><heatindex>Strong Winds</heatindex> </spanelightning>"; "</div></div> " ;} 
   
  
  
  ///WEATHER34 freezing //celsius
 else if ($weather["temp_units"]=='C' && $weather["temp"]<=0 && $weather["dewpoint"]<=0){echo "<div class=\"alertcircle\"><oblue>", number_format($weather["dewpoint"],1),"<smallicon><oblue> ", $weatherunitc ,"</oblue></smallicon>";  
 echo "<spanefreezing> Caution <span>Dewpoint</<spanefreezing><heatindex>Below Freezing</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 

  else if ($weather["temp_units"]=='F' && $weather["temp"]<=32 && $weather["dewpoint"]<=32){echo "<div class=\"alertcircle\"><oblue>", number_format($weather["dewpoint"],1),"<smallicon><oblue> ", $weatherunitf ,"</oblue></smallicon>";  
 echo "<spanefreezing> Caution <span>Dewpoint</<spanefreezing><heatindex>Below Freezing</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 

  
  
 ///WEATHER34 humidex //celsius
 else if ($weather["temp_units"]=='C' && $weather["temp"]>=30 && $weather["humidex"]>=30){echo "<div class=\"alertcircle\"><orange>", number_format($weather["humidex"],1),"<smallicon><orange> ", $weatherunitc ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Humidity Index</<spanelightning><heatindex>Heat Discomfort</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 
//WEATHER34 humidex //fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["temp"]>=80.6 && $weather["humidex"]>=86){echo "<div class=\"alertcircle\"><orange>", number_format($weather["humidex"],1),"</orange><smallicon><orange> ", $weatherunitf ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Humidity Index</<spanelightning><heatindex>Heat Discomfort</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;}   
  
  
  
 ///WEATHER34 fire risk//celsius
 else if ($weather["temp_units"]=='C' && ($weather["humidity"]<=40) && ($weather["temp"]>=27)){echo "<div class=\"alertcircle\"><orange>", number_format($weather["temp"],1),"</orange><smallicon><orange> ", $weatherunitc ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Fire Risk</<spanelightning><heatindex>Possible</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 
//WEATHER34 fire risk // fahrenheit
 else if ($weather["temp_units"]=='F' && ($weather["humidity"]<=40) && ($weather["temp"]>=80.6)){echo "<div class=\"alertcircle\"><orange>", number_format($weather["temp"],1),"</orange><smallicon><orange> ", $weatherunitf ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Fire Risk</<spanelightning><heatindex>Possible</heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;}   
  
  
///WEATHER34 heat-index //celsius
 else if ($weather["temp_units"]=='C' && $weather["temp"]>=30 && $weather["heat_index"]>=30){echo "<div class=\"alertcircle\"><orange>", number_format($weather["heat_index"],1),"</orange><smallicon><orange> ", $weatherunitc ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Heat-Index</<spanelightning><heatindex>Heat Exhaustion </heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 
//WEATHER34 heat-index //fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["temp"]>=86 && $weather["heat_index"]>=86){echo "<div class=\"alertcircle\"><orange>", number_format($weather["heat_index"],1),"</orange><smallicon><orange> ", $weatherunitf ,"</orange></smallicon>";  
 echo "<spanelightning> Caution <span>Heat-Index</<spanelightning><heatindex>Heat Exhaustion </heatindex> <div class='orangealerticonheatindex'>".$newalert." </div></spanelightning>"; "</div></div> " ;}  
 //aurora
 else if ($kp>=5){echo "<div class=\"alertcircle\"><orange>", number_format($kp,1) ,"</orange><sup><span style='font-size:10px;'> kp</sup>"; 
 echo "<spanelightning><darkgrey> Aurora</darkgrey> <orange>Viewing Possible</orange>
 <span style='margin-top:-25px;display:block;font-size:11px;'> <orange>144 MHz</orange> <darkgrey>Radio Aurora Possible</spanelightning> </span> </div> " ;}
 
//echo $darkskydayIcon;
  //weather34 alerts rain,snow
  
  else if ($darkskydayIcon=='snow')
  {echo '<div class="homeweatheralert"><noalert><talert>Expect <blue>Snow Showers</blue><br> This Week <div class="orangealerticon1">&nbsp;&nbsp; '.$newalert.' </spanelightning></div></div></div>';}   
  else if ($darkskydayIcon=='rain'){echo '<div class="homeweatheralert"><noalert><talert>Expect <blue>Rain Showers</blue><br> This Week <div class="orangealerticon1">&nbsp;&nbsp; '.$newalert.' </spanelightning></div></div></div>';} 
 
 
//WEATHER34 solar eclipse events and no alerts
 else {echo '<div class="homeweatheralert" style="margin-left:25px;"><noalert>', $eclipse_default.'';} ?></noalert></div></div>

 <?php //WEATHER34 lightning pop up alert 
 if($weather["lightningtimeago"]>1 && $weather["lightningtimeago"]<500){?>
<script type="text/javascript">
// fire the weather34 weatherflow lightning notification
(function($){$(function(){$.jGrowl.defaults.closerTemplate = "<div>hide</div>";$.jGrowl.defaults.appendTo = "div#lightningalert";
$.jGrowl("<?php if($weather["lightningtimeago"]<700){ echo '<img src= img/lightningalert.svg width=30px height=30px > Lightning Strike Alert',' ','<br> Detected Nearby  '.number_format($weather["lightningkm"],0).' km ('.number_format($weather["lightningkm"]*0.621371,1).'mi) <br>'.gmdate("i",$weather["lightningtimeago"]).' min '.gmdate("s",$weather["lightningtimeago"]).' secs ago';}
?>");});})(jQuery);	</script>
<?php ;}?>