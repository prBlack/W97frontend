<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?>
<div class="hometemperatureindoor">
<?php 
 //temperture celsius
 if ($weather["temp_units"]=='C' && $weather["temp_today_high"]>-50){echo "<div class=\"circlemaxtemp\">", number_format($weather["temp_today_high"],1) ;
 echo "  <spanmaxtemp> ".$weatherunitc." ".$lang['Max']."  </spanmaxtemp>
 </div> " ;}  
 //fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["temp_today_high"]>-50){echo "<div class=\"circlemaxtemp\">", number_format($weather["temp_today_high"],1) ;
 echo "  <spanmaxtemp> ".$weatherunitf." ".$lang['Max']."  </spanmaxtemp> </div> " ;}  
?>
<?php 
 //temperture celsius
 if ($weather["temp_units"]=='C' && $weather["temp_today_low"]>-50){echo "<div class=\"circlelowtemp\">", number_format($weather["temp_today_low"],1) ;
 echo "  <spanlowtemp> ".$weatherunitc." ".$lang['Min']."  </spanlowtemp> </div> " ;}  
 //fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["temp_today_low"]>-50){echo "<div class=\"circlelowtemp\">", number_format($weather["temp_today_low"],1) ;
 echo "  <spanlowtemp> ".$weatherunitf." ".$lang['Min']."  </spanlowtemp>
 </div> " ;}  
?>
</div>