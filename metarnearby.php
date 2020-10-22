<?php include('metar34get.php');
$locationinfo='<svg id="i-location2" viewBox="0 0 32 32" width="15px" height="15px" fill="none" stroke="rgba(255, 124, 57, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
<circle cx="16" cy="11" r="4" /><path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" /></svg>';
$alert="<svg id='firealert' viewBox='0 0 32 32' width='18px' height='18px' fill='none' stroke='rgba(255, 124, 57, 1.000)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
<path d='M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25' /></svg>";
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Metar Aviation Weather Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}
.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-49px}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/temprulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:RGBA(174,81,82,0.6);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.6);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 0.6);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(0, 154, 171, 0.6);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.lotempraw{font-size:12px;font-family:weathertext;line-height:11px;margin-top:5px;}
purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:13px;float:right;position:absolute;left:135px;top:10px;line-height:13px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}.hitemp{color:#aaa;font-size:13px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}.hitemp span2{color:#aaa;font-size:1.1em;margin-left:4px;}
.hitempy{background:rgba(61, 64, 66, 0.8);color:#aaa;font-size:12px;width:240px;padding:1px;border-radius:4px;margin-top:2px;margin-left:0;padding-left:3px;}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:10px;bottom:2px;}
.metar34compass1>.metar34compass-line1,.metar34compass>.metar34compass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,00);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,00)}
.metar34compass1>.metar34compass-line1,.solarcircle4{-webkit-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%}
.text1,.windvalue1{font-family:weathertext,Arial;font-size:22px}
.windseparator{color:rgba(57,61,64,1)}
.text1,.windvalue1{color:#aaa}
.windirection1{width:100%;margin:60px 0 0 85px}
.metar34compass1{position:absolute;width:150px;height:150px;text-align:center;top:30px;margin-left:140px;z-index:1}
.text1{z-index:10;text-align:center;margin:55px 0 auto}
.metar34compass1>.metar34compass-line1{position:absolute;z-index:10;left:25px;top:25px;bottom:25px;-o-border-radius:100%;border-radius:100%;border-left:8px solid rgba(95,96,97,.5);border-top:8px solid rgba(95,96,97,.8);border-right:8px solid rgba(95,96,97,.5);border-bottom:8px solid rgba(95,96,97,.8);margin:auto}
.thearrow1:before{width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-3px;border:2px solid #fff;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.metar34compass1>.windirectiontext1{display:block;text-align:center;color:#aaa;font-family:Arial,sans-serif;font-weight:600;line-height:12px;font-size:11px;z-index:10;margin:0 0 auto}
.windirectiontext1 span{color:#9aba2f}
.thearrow2{-webkit-transform:rotate(<?php echo $metar34windir;?>deg);-moz-transform:rotate(<?php echo $metar34windir;?>deg);-o-transform:rotate(<?php echo $metar34windir;?>deg);-ms-transform:rotate(<?php echo $metar34windir;?>deg);transform:rotate(<?php echo $metar34windir;?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:RGBA(255,121,58,1.00) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:before{content:'';width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-5px;border:2px solid RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
spancalm{postion:relative;font-family:weathertext,Arial;font-size:26px;}</style>
</head>
<body>
<?php $forecastime=filemtime('jsondata/metar34.txt');$weather34wuurl = file_get_contents("jsondata/metar34.txt");		?>
  <section class="weather34title">
   <p><?php echo $info ;?> Metar Aviation Weather Data  <?php echo $metar34stationid ," ", $metar34stationname;?> </p>
</section>
<section class="weather34cards"><div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php	// temp 	
	if ($tempunit=='C' &&  $metar34temperaturec >30)  {
	echo "<red>",$metar34temperaturec  . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34temperaturec >18)  {
	echo "<orange>",$metar34temperaturec  . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34temperaturec >10)  {
	echo "<green>",$metar34temperaturec  . "</value>";} 		
	else if ($tempunit=='C' &&  $metar34temperaturec >=-50) {
	echo "<blue>",$metar34temperaturec  . "</value>";}		
	//f
	if ($tempunit=='F' && $metar34temperaturef>90)  {
	echo "<red>",$metar34temperaturef. "</value>";} 	
	else if ($tempunit=='F' &&$metar34temperaturef>65)  {
	echo "<orange>",$metar34temperaturef. "</value>";} 	
	else if ($tempunit=='F' &&$metar34temperaturef>50)  {
	echo "<green>",$metar34temperaturef. "</value>";} 		
	else if ($tempunit=='F' &&$metar34temperaturef>=1) {
	echo "<blue>",$metar34temperaturef. "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]," Temp";
?></span> 
<div class="weather34-uvrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	 <?php  //c
	if ($tempunit=='C' && $metar34temperaturec >=30){echo '<div class="bar bar-inner8" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}
	else if ($tempunit=='C' && $metar34temperaturec >=18){echo '<div class="bar bar-inner5" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}
	else if ($tempunit=='C' && $metar34temperaturec >=10){echo '<div class="bar bar-inner3" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}
	else if ($tempunit=='C' && $metar34temperaturec >=-50){echo '<div class="bar bar-inner" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}		
	//f
	if ($tempunit=='F' && $metar34temperaturef>=90){echo '<div class="bar bar-inner8" style="max-height:90px; height: ';	
	echo $metar34temperaturec  *3 ;}
	else if ($tempunit=='F' && $metar34temperaturef>=65){echo '<div class="bar bar-inner5" style="max-height:90px; height: ';	
	echo $metar34temperaturec  *3;}
	else if ($tempunit=='F' && $metar34temperaturef>=50){echo '<div class="bar bar-inner3" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}
	else if ($tempunit=='F' && $metar34temperaturef>=-50){echo '<div class="bar bar-inner" style="max-height:90px; height: ';	
	echo $metar34temperaturec *3;}	
	?>px;"></div></div></div> 
 <div class="lotemp">
<?php //dewpoint
	if ($tempunit=='C' &&  $metar34dewpointc>30)  {
	echo "<red>",$metar34dewpointc . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34dewpointc>18)  {
	echo "<orange>",$metar34dewpointc . "</value>";} 	
	else if ($tempunit=='C' &&  $metar34dewpointc>10)  {
	echo "<green>",$metar34dewpointc . "</value>";} 		
	else if ($tempunit=='C' &&  $metar34dewpointc>=-50) {
	echo "<blue>",$metar34dewpointc . "</value>";}		
	//f
	if ($tempunit=='F' && $metar34dewpointf>90)  {
	echo "<red>",$metar34dewpointf . "</value>";} 	
	else if ($tempunit=='F' && $metar34dewpointf>65)  {
	echo "<orange>",$metar34dewpointf . "</value>";} 	
	else if ($tempunit=='F' && $metar34dewpointf>50)  {
	echo "<green>",$metar34dewpointf . "</value>";} 		
	else if ($tempunit=='F' && $metar34dewpointf>=1) {
	echo "<blue>",$metar34dewpointf . "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]," Dewpoint";
?>
<div class="lotemp"><orange><?php echo $metar34humidity ,"</orange><sup><unit>% <sup><unit> Humidity"; 	?></sup></unit></span></div>
<div class="icon"><img src=css/icons/temp34.svg width=25px></div></div></div>
<div class="weather34card__count-container">  <div class="weather34card__count-text"> </div> </div><div class="weather34card__stuff-container">            
<div class="weather34card__stuff-text"></div></div>
<actual>Temperature</actual>
</div></div></div> </div>      
<div class="weather34card weather34card--earthquake2">  <div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<?php //kmh
if ($tempunit=='C'){echo "<orange>",$metar34windspeedkmh  . "</value>";echo "<sup><unit> KM/H</sup></unit>";}	
else if ($tempunit=='F'){echo "<orange>",$metar34windspeedmph  . "</value>";echo "<sup><unit> MPH</sup></unit>";}?>
</span></div></span> 
<div class="lotemp">
<?php //mph
if ($tempunit=='C'){echo "<orange>",$metar34windspeedmph  . "</value>";echo "<sup><unit> MPH</sup></unit><br>";}	
else if ($tempunit=='F'){echo "<orange>",$metar34windspeedkmh  . "</value>";echo "<sup><unit> KM/H</sup></unit><br>";}?>
<?php //mph
echo "<green>",$metar34windspeedkts."</value>";echo "<sup><unit> KTS</sup></unit><br>";?>    
<div class="metar34compass1"><div class="metar34compass-line1"><div class="thearrow2"></div></div>
<div class="text1"><div class="windvalue1" id="windvalue"><?php 
if( $metar34windir==0){echo "<spancalm>Calm</spancalm>";}else echo $metar34windir,"&deg;";?></div></div>
<div class="windirectiontext1">
<?php 
if($metar34windir<=11.25){echo "Due <span>North<br></span>";}
else if($metar34windir<=33.75){echo "North North <br><span>East</span>";}
else if($metar34windir<=56.25){echo "North <span> East<br></span>";}
else if($metar34windir<=78.75){echo "East North<br><span>East</span>";}
else if($metar34windir<=101.25){echo "Due <span> East<br></span>";}
else if($metar34windir<=123.75){echo "East South<br><span>East</span>";}
else if($metar34windir<=146.25){echo "South <span> East</span>";}
else if($metar34windir<=168.75){echo "South South<br><span>East</span>";}
else if($metar34windir<=191.25){echo "Due <span> South</span>";}
else if($metar34windir<=213.75){echo "South South<br><span>West</span>";}
else if($metar34windir<=236.25){echo "South <span> West</span>";}
else if($metar34windir<=258.75){echo "West South<br><span>West</span>";}
else if($metar34windir<=281.25){echo "Due <span> West</span>";}
else if($metar34windir<=303.75){echo "West North<br><span>West</span>";}
else if($metar34windir<=326.25){echo "North <span> West</span>";}
else if($metar34windir<=348.75){echo "North North<br><span>West</span>";}
else{echo "Due <span> North</span>";}?>
</div></div>  </div>
<div class="weather34card__count-container"> <div class="weather34card__count-textuv"><span class="weather34card__count-text--bigs"> </div>
</div><br>
 <div class="weather34card__stuff-container">
<actual>Wind Speed</actual>
<div class="icon"><img src=css/icons/gust.svg width=20px></div>
</section>
<section class="weather34cards">
<div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div></div> <?php 	echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='118px' height='91px' >";	
?></span> <div class="hitemp">
<?php //min year 
 echo '<uppercase>',$sky_desc.'</uppercase> '; ?>
<div class="lotemp">
<div class="hitemp">Pressure <span> <?php echo $metar34pressuremb ," </span>(hPa)"; 	?> - <span><?php echo $metar34pressurehg ," </span>(in)"; 	?></span></div>
<div class="hitemp">Visibility <span> <?php echo $metar34vismiles  ," </span>(mi)"; 	?> - <span><?php echo $metar34viskm  ," </span>(km)"; 	?></span></div>
<div class="icon"><img src=css/icons/clear.svg width=45px></div></div> </div> </div>
<div class="weather34card__count-container"><div class="weather34card__count-textuv"><span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>
<actual>Current Conditions</actual></div></div></div></div>
<div class="weather34card weather34card--earthquake2">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div><?php echo $metar34stationid ; ?>
</span> <div class="hitemp"><span><?php echo $locationinfo,$metar34stationname  ;?></span>
 <div class="lotempraw">
<?php //metar raw
echo "<sup><unit>Metar :<greyuv>" .$metar34raw."</greyuv>";?>
</div>
<div class="hitemp">
<?php //update timestamp
date_default_timezone_set($tz);$date = $metar34time;$date=str_replace('@', ' ', $date);
$date=str_replace('Z', ' ', $date);$date1 = strtotime($date) + 60*60*$UTC;echo date('D jS F H:i a ',$date1);
?> </div></div></div></div>
<div class="weather34card__count-container">
<div class="weather34card__count-textuv">
<span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>           
<actual><?php echo $metar34stationname  ;?></actual>
<div class="icon"><img src=css/icons/airport.svg width=40px></div>
</section>
<div class="provided">   
&nbsp;
Metar Aviation API Data Provided by <a href="https://www.checkwx.com/" title="https://www.checkwx.com/" target="_blank">https://www.checkwx.com/</a> <?php echo $info;?> PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>