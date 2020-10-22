<?php include('livedata.php');date_default_timezone_set($TZ);?>
<body>

<?php 

 //temperture indoor celsius
 if ($weather["temp_units"]=='C' && $weather["temp_indoor"]<=24){echo "<div class=\"circleindoortemp\">", $weather["temp_indoor"] ;echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } 
 else if ($weather["temp_units"]=='C' && $weather["temp_indoor"]>26){ echo "<div class=\"circleindoortemphot\">", $weather["temp_indoor"];echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } 
 else if ($weather["temp_units"]=='C' && $weather["temp_indoor"]>24){ echo "<div class=\"circleindoortempwarm\">", $weather["temp_indoor"];echo "&deg;  <spaneindoortemp> ".$weatherunitc." </spaneindoortemp> </div> " ; } //fahrenheit
 if ($weather["temp_units"]=='F' && $weather["temp_indoor"]<=70){echo "<div class=\"circleindoortemp\">", $weather["temp_indoor"] ;echo "&deg;  <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_indoor"]>80){echo "<div class=\"circleindoortemphot\">", $weather["temp_indoor"];echo "&deg;  <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }
 else if ($weather["temp_units"]=='F' && $weather["temp_indoor"]>70){echo "<div class=\"circleindoortempwarm\">", $weather["temp_indoor"];echo "&deg;  <spaneindoortemp> ".$weatherunitf." </spaneindoortemp> </div> " ; }  
?>
</div>

<div class="hometemperatureindoortrend">
<?php  //temp trend indoor
if($weather["temp_indoor_trend"]>0)echo '<spanindoortemprising>'.$risingsymbol.' </spanindoortemprising> ';
else if($weather["temp_indoor_trend"]<0)echo '<spanindoortempfalling> '.$fallingsymbol.' </spanindoortempfalling> ';
else if($weather["temp_indoor_trend"]==0)echo '<spanindoortempfalling> '.$steadysymbol.' </spanindoortempfalling> ';
?>
</div>

<div class="homeindoorhum">
<?php //humidity
echo "<spanhomeindoorhumtitle>Humidity </spanhomeindoorhumtitle><spanhomeindoorvalue>" .$weather["humidity_indoor"]."%</spanhomeindoorvalue>"
?>
<?php  //humidity trend indoor
if($weather["temp_humidity_trend"]>0)echo '<spanindoortemprising>&nbsp;'.$risingsymbol.' </spanindoortemprising> ';
else if($weather["temp_humidity_trend"]<0)echo '<spanindoortempfalling>&nbsp; '.$fallingsymbol.' </spanindoortempfalling> ';
else if($weather["temp_humidity_trend"]==0)echo '<spanindoortempfalling>&nbsp; '.$steadysymbol.' </spanindoortempfalling> ';
?>

</div>

<div class="homeindoorfeels">
<?php 
//celsius
if ($weather["temp_units"]=='C')
echo "<spanfeelstitle>Feels Like </spanfeelstitle>" .$weather["temp_indoor_feel"]. "&deg;<spanfeelstitle> ".$weatherunitcsmall."</spanfeelstitle>";
//fahrenheit
else if ($weather["temp_units"]=='F')
echo "<spanfeelstitle>Feels Like </spanfeelstitle>" .$weather["temp_indoor_feel"]. "&deg;<spanfeelstitle> ".$weatherunitfsmall."</spanfeelstitle>";
?></div>