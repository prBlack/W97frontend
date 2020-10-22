<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<body>
<div class="yesterdaymax">
<?php 

$json_string             = file_get_contents("jsondata/aqi.txt");
$parsed_json             = json_decode($json_string);
$aqiweather["aqi"]       = $parsed_json->{'aqiv'};
//$aqiweather["aqiozone"]  = $parsed_json->{'data'}->{'iaqi'}->{'o3'}->{'v'};
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'mtime'};
$aqiweather["time"]      = date("H:i",$aqiweather["time2"]);
$aqiweather["city"]      ='<span>Esenyurt,Istanbul</span>';
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}
 //weather34 temperture indoor celsius
 
 if ($aqiweather["aqi"]>301){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqimaroon>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}

 else if ($aqiweather["aqi"]>201){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqipurple>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}
 
 else if ($aqiweather["aqi"]>151){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqired>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}
 
 else if ($aqiweather["aqi"]>101){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqiorange>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}
 
 else if ($aqiweather["aqi"]>51){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqiyellow>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}
 
 else if ($aqiweather["aqi"]>=0){echo "<div class=\"circleyestemperature\"><div class='maxyesterday'>AQI</div><aqigreen>", $aqiweather["aqi"] ;
 echo "<spaneindoortemp><aqitime> ".$aqiweather["time"]."</aqitime></spaneindoortemp> </div><div class='yesterdaytempword'> PM10</div>" ;}
 
 
?>
</div></div>
<div class="aqilocation">
<?php 
if ($aqiweather["aqi"]>=301){echo " <aqimaroon>HAZARDOUS<span2> &nbsp;&nbsp;Life Threatening ".$alert."</span2></aqimaroon><span>Air Quality</span><aqiimagem><aqiimage1><img src='css/aqi/151whitemask.svg' width=36px ></aqiimage1></aqimagem></aqigreen>" ; }

else if ($aqiweather["aqi"]>=201){echo " <aqipurple>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERY </aqipurple> <span2>UNHEALTHY ".$alert."</span2><span>Air Quality</span><aqiimagep><aqiimage1><img src='css/aqi/151whitemask.svg' width=36px ></aqiimage1></aqimagep></aqigreen>" ; }

else if ($aqiweather["aqi"]>=151){echo " <aqired>&nbsp;UNHEALTHY<span2> &nbsp;Health Warnings ".$alert."</span2></aqired><span>Air Quality</span><aqiimager><aqiimage1><img src='css/aqi/151whitemask.svg' width=36px ></aqiimage1></aqimager></aqigreen>" ; }

else if ($aqiweather["aqi"]>=101){echo " <aqiorange>&nbsp;&nbsp;UNHEALTHY<span2>&nbsp;&nbsp;Sensitive Groups</span2><span>Air Quality</span><aqiimageo><aqiimage1><img src='css/aqi/uhswhite.svg' width=36px ></aqiimage1></aqimageo></aqigreen>" ; }

else if ($aqiweather["aqi"]>=51){echo " <aqiyellow>&nbsp;&nbsp;&nbsp;MODERATE<span2> Air Quality</span></aqiyellow><aqiimagey><aqiimage1><img src='css/aqi/modwhite.svg' width=36px ></aqiimage1></aqimagey></aqigreen>" ; }

else if ($aqiweather["aqi"]>=0){echo " <aqigreen>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GOOD<span2> Satisfactory</span2></aqigreen><span>Air Quality</span><aqiimageg><aqiimage1><img src='css/aqi/goodwhite.svg' width=36px ></aqiimage1></aqimageg></aqigreen>" ; }
?>
 

</div>