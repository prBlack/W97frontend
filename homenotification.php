<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
 <style>.circlelightning,.circlewindchill,.circlelightning3{margin-top:12px;}.homeweatheralert{margin-top:40px;}</style>
<div class="homehardwarestatus">
<?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '<offline>'.$alert.' Offline </offline>';
else echo '<online><svg id=i-info viewBox="0 0 32 32" width=10 height=10 fill=none stroke=currentcolor stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg> Online </online>';
?> 
<?php echo  $weather['time'] ;?>
</div>    <div class="eqcirclehomeregional"><div class="eqtexthomeregional">
<?php 

 //WEATHER34 heat-index //celsius
if ($weather["temp_units"]=='C' && ($weather["heat_index"]>=26)){echo "<div class=\"circlelightning\">", $weather["heat_index"] ,"<smallicon>", $weatherunitc ,"</smallicon>"; 
 echo "<spanelightning> </span>
 ".$lang['Heatindex']."</alert> <div class='orangealerticon'>".$newalert." </div> </spanelightning>"; "</div></div> " ;} 

 //WEATHER34 heat-index //fahrenheit
 else if ($weather["temp_units"]=='F' && ($weather["heat_index"]>=82)){echo "<div class=\"circlelightning\">", $weather["heat_index"] ,"<smallicon>", $weatherunitf ,"</smallicon>"; 
 echo "<spanelightning>  </span>
 ".$lang['Heatindex']."</alert> <div class='orangealerticon'>".$newalert." </div> </spanelightning>";"</div></div>" ;} 

 //WEATHER34 uvindex alert
 else if ($weather["uv"]>8 ){echo "<div class=\"circlelightning\">", $weather["uv"];
 echo "<spanewindchill><alert> <span> 
  ".$alert." </span></span> </alert> ".$lang['uvalert']." </span></alert>  </spanewindchill>"; "</div></div>" ;} 
  
  
 //WEATHER34 dewpoint //celsius cold
 else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]<2)){echo "<div class=\"circlewindchill\"><windchill>", $weather["dewpoint"] ,"<smallicon>", $weatherunitc ,"</smallicon>"; 
 echo "<spanewindchill></span>".$lang['Dewpoint']."<windchill> </span></alert>  <div class='orangealerticon'>".$newalert." </div></spanewindchill>"; "</div></div> " ;} 

 //WEATHER34 dewpoint //fahrenheit cold
 else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]<35.6)){echo "<div class=\"circlewindchill\"><windchill>", $weather["dewpoint"] ,"<smallicon>", $weatherunitf ,"</smallicon>"; 
 echo "<spanewindchill></span>".$lang['Dewpoint']."<windchill> </span></alert>  <div class='orangealerticon'>".$newalert." </div></spanewindchill>"; "</div></div> " ;} 

  
//WEATHER34 dewpoint //celsius warm
 else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=20)){echo "<div class=\"circlelightning\">", $weather["dewpoint"] ,"<smallicon>", $weatherunitc ,"</smallicon>"; 
 echo "<spanelightning></span> ".$lang['Dewpoint']." </span></alert>  <div class='orangealerticon'>".$newalert." </div></spanelightning>"; "</div></div> " ;} 

 //WEATHER34 dewpoint //fahrenheit warm
 else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=80)){echo "<div class=\"circlelightning\">", $weather["dewpoint"] ,"<smallicon>", $weatherunitf ,"</smallicon>"; 
 echo "<spanelightning></span> ".$lang['Dewpoint']."</alert> <div class='orangealerticon'>".$newalert." </div> </spanelightning>";"</div></div>" ;} 
 
 //aurora
 else if ($kp>=6){echo "<div class=\"circlelightning\">", number_format($kp,0) ,"<sup><green> kp</green></sup>"; 
 echo "<spanelightning> Aurora <span>Viewing Possible</span></span>
 <span style='margin-top:-27px;display:block;font-size:11px;'> <green>144 MHz</green> Radio Aurora Possible</spanelightning> </span> </div></div> " ;} 
 
 else //WEATHER34 no alert + WEATHER34 solar eclipse events
 echo '<div class="homeweatheralert"><noalert>'.$lang['Nocurrentalert'].'  </noalert>';  
?>
</div></div></div>