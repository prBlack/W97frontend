<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>

<?php 
 //weather34 temperture indoor celsius
 if ($weather["temp_units"]=='C' && $weather["temp_indoor"]>0){echo "<div class=\"circleindoortemp\">", $weather["temp_indoor"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ;} 
 
 //weather34 fahrenheit
 else if ($weather["temp_units"]=='F' && $weather["temp_indoor"]>0){echo "<div class=\"circleindoortemp\">", $weather["temp_indoor"] ;
 echo "&deg;  <spaneindoortemp> ".$weatherunitf." </spaneindoortemp>  </div> " ;}  
?>
</div>



<div class="homeindoorhum">
<?php echo "<spanhomeindoorhumtitle> &nbsp;&nbsp;&nbsp;&nbsp;Humidity </spanhomeindoorhumtitle><spanhomeindoorvalue>" .$weather["humidity_indoor"]."%</spanhomeindoorvalue>"?>


</div>

<div class="homeindoorfeels">
<?php 
//weather34 celsius
if ($weather["temp_units"]=='C')
echo "<spanfeelstitle>".$lang['Feelslike']." </spanfeelstitle>" .$weather["temp_indoor_feel"]."&deg;<spanfeelstitle> ".$weatherunitcsmall."</spanfeelstitle>";
//weather34 fahrenheit
else if ($weather["temp_units"]=='F') echo "<spanfeelstitle>Feels Like </spanfeelstitle> " .$weather["temp_indoor_feel"]."&deg;<spanfeelstitle> ".$weatherunitfsmall."</spanfeelstitle>";
?></div>