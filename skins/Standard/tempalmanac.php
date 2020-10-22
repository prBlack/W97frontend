<?php include('common.php');include('shared.php');include('settings.php');date_default_timezone_set($TZ);
error_reporting(0);
$designedfor    = '<br>AQI For Meteobridge';
//weather34 simple AQI top module
// 34 Aqi 
$json_string             = file_get_contents("jsondata/almanac.txt");
$parsed_json             = json_decode($json_string);
$weather["tempdmax"]       = $parsed_json->{'daymaxtemp'};
$weather["tempdmaxtime"]   = $parsed_json->{'daymaxtemptime'};
$weather["tempdmaxtime"]  = date('H:i:s',$weather["tempdmaxtime"]);
$weather["tempdmin"]       = $parsed_json->{'daymintemp'};
$weather["tempdmintime"]   = $parsed_json->{'daymintemptime'};
$weather["tempdmintime"]  = date('H:i:s',$weather["tempdmintime"]);
$weather["tempydmax"]       = $parsed_json->{'yesterdaymaxtemp'};
$weather["tempydmaxtime"]   = $parsed_json->{'yesterdaymaxtemptime'};
$weather["tempydmaxtime"]  = date('H:i:s',$weather["tempydmaxtime"]);
$weather["tempydmin"]       = $parsed_json->{'yesterdaymintemp'};
$weather["tempydmintime"]   = $parsed_json->{'yesterdaymintemptime'};
$weather["tempydmintime"]  = date('H:i:s',$weather["tempydmintime"]);
$weather["tempmmax"]       = $parsed_json->{'monthmaxtemp'};
$weather["tempmmaxtime"]   = $parsed_json->{'monthmaxtemptime'};
$weather["tempmmaxtime"]  = date('d-F H:i',$weather["tempmmaxtime"]);
$weather["tempmmin"]       = $parsed_json->{'monthmintemp'};
$weather["tempmmintime"]   = $parsed_json->{'monthmintemptime'};
$weather["tempmmintime"]  = date('d-F H:i',$weather["tempmmintime"]);
$weather["tempymax"]       = $parsed_json->{'yearmaxtemp'};
$weather["tempymaxtime"]   = $parsed_json->{'yearmaxtemptime'};
$weather["tempymaxtime"]  = date('d-F H:i',$weather["tempymaxtime"]);
$weather["tempymin"]       = $parsed_json->{'yearmintemp'};
$weather["tempymintime"]   = $parsed_json->{'yearmintemptime'};
$weather["tempymintime"]  = date('d-F H:i',$weather["tempymintime"]);
$weather["temp_units"]   = "C"
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Temperature Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.1rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}
.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-49px}.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/temprulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:RGBA(174,81,82,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 1.000);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 1.000);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(0, 154, 171, 1.000);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}.weather34-luxrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-luxrate-bar .bar-1{height:100px;max-height:100px}.weather34-luxrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164,117,203,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255,136,65,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34luxrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34luxrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:13px;float:right;position:absolute;left:135px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}.hitemp{color:#aaa;font-size:12px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}
.hitempy{background:rgba(61, 64, 66, 0.8);color:#aaa;font-size:12px;width:240px;padding:1px;border-radius:4px;margin-top:2px;margin-left:0;padding-left:3px;}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:0;bottom:10px;}
</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $info ;?> Almanac Temperature Data <?php echo $stationlocation;?></p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php
	// temp today
	
	if ($tempunit=='C' &&  $weather["tempdmax"]>27)  {
	echo "<red>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='C' &&  $weather["tempdmax"]>15)  {
	echo "<orange>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='C' &&  $weather["tempdmax"]>10)  {
	echo "<green>",$weather["tempdmax"] . "</value>";} 		
	else if ($tempunit=='C' &&  $weather["tempdmax"]>=-50) {
	echo "<blue>",$weather["tempdmax"] . "</value>";}		
	
	if ($tempunit=='F' && $weather["tempdmax"]>90)  {
	echo "<red>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='F' &&$weather["tempdmax"]>65)  {
	echo "<orange>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='F' &&$weather["tempdmax"]>50)  {
	echo "<green>",$weather["tempdmax"] . "</value>";} 		
	else if ($tempunit=='F' &&$weather["tempdmax"]>=1) {
	echo "<blue>",$weather["tempdmax"] . "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]
?>





</span> 

<div class="weather34-uvrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	 <?php 
	if ($tempunit=='C' && $weather["tempdmax"]>=27){echo '<div class="bar bar-inner8" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]*2;}
	else if ($tempunit=='C' && $weather["tempdmax"]>=15){echo '<div class="bar bar-inner5" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]*2;}
	else if ($tempunit=='C' && $weather["tempdmax"]>=10){echo '<div class="bar bar-inner3" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]*2;}
	else if ($tempunit=='C' && $weather["tempdmax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]*2;}		
	
	if ($tempunit=='F' && $weather["tempdmax"]>=80){echo '<div class="bar bar-inner8" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]-20;}
	else if ($tempunit=='F' && $weather["tempdmax"]>=65){echo '<div class="bar bar-inner5" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]-20;}
	else if ($tempunit=='F' && $weather["tempdmax"]>=50){echo '<div class="bar bar-inner3" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]-10;}
	else if ($tempunit=='F' && $weather["tempdmax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px;height: ';	
	echo $weather["tempdmax"]-20;}	
	?>px;"></div></div></div>
 <div class="hitemp">Highest Temp Measured at <span><?php echo $weather["tempdmaxtime"];?></span>
 
 <div class="lotemp">
<?php //min day


	if ($tempunit=='C' &&  $weather["tempdmin"]>27)  {
	echo "<red>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='C' &&  $weather["tempdmin"]>15)  {
	echo "<orange>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='C' &&  $weather["tempdmin"]>10)  {
	echo "<green>",$weather["tempdmin"] . "</value>";} 		
	else if ($tempunit=='C' &&  $weather["tempdmin"]>=-50) {
	echo "<blue>",$weather["tempdmin"] . "</value>";}		
	
	if ($tempunit=='F' && $weather["tempdmin"]>90)  {
	echo "<red>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempdmin"]>65)  {
	echo "<orange>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempdmin"]>50)  {
	echo "<green>",$weather["tempdmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempdmin"]>=1) {
	echo "<blue>",$weather["tempdmin"] . "</value>";}		
	echo "<sup><unit>&deg;",$weather["temp_units"]; 
?>

<div class="hitemp">Lowest Temp Measured at <span><?php echo $weather["tempdmintime"];?></span></div>
            
  <div class="hitempy">  
  <?php if ($weather["tempdmax"] < $weather["tempydmax"]){echo "Max <green>Today</green> Recorded is <blue>Less</blue> than Yesterday"; echo " <b>",$weather["tempydmax"] - $weather["tempdmax"], "&deg;",$weather["temp_units"]," </b><blue>Cooler ".$fallingsymbol."</blue>";}  
  else if ($weather["tempdmax"] > $weather["tempydmax"]){echo "Max <green>Today</green> Recorded is <orange>Higher</orange> than Yesterday";echo " <b>",$weather["tempdmax"] - $weather["tempydmax"], "&deg;",$weather["temp_units"]," </b><orange>Warmer  ".$risingsymbol."</orange>  ";}
   else if ($weather["tempdmax"] = $weather["tempydmax"]){echo "Max <green>Today</green> Recorded is <orange>Same</orange> as Yesterday";echo " <b>",$weather["tempdmax"] - $weather["tempydmax"], "&deg;",$weather["temp_units"]," </b><orange>  ".$steadysymbol."</orange>  ";}
  
  ?></span>
  
  <div class="icon"><img src=css/icons/temp34.svg width=25px></div>
            </div>          
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
</div> </div>

<actual><?php echo date('l jS');?></actual>
</div></div></div>
    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="weather34-uvrate-bar" style="margin-top:0;">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	 <?php 
	if ($tempunit=='C' && $weather["tempmmax"]>=27){echo '<div class="bar bar-inner8" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]*2;}
	else if ($tempunit=='C' && $weather["tempmmax"]>=15){echo '<div class="bar bar-inner5" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]*2;}
	else if ($tempunit=='C' && $weather["tempmmax"]>=10){echo '<div class="bar bar-inner3" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]*2;}	
	else if ($tempunit=='C' && $weather["tempmmax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]-20;}	
	
	if ($tempunit=='F' && $weather["tempmmax"]>=80){echo '<div class="bar bar-inner8" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]-15;}
	else if ($tempunit=='F' && $weather["tempmmax"]>=65){echo '<div class="bar bar-inner5" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]-15;}
	else if ($tempunit=='F' && $weather["tempmmax"]>=50){echo '<div class="bar bar-inner3" style="max-height:95px;height: ';	
	echo $weather["tempmmax"]-20;}	
	else if ($tempunit=='F' && $weather["tempmmax"]>=-50){echo '<div class="bar bar-inner" style=max-height:95px;"height: ';	
	echo $weather["tempmmax"];}	
	
	
	
	?>px;">
    </div></div></div>
 
            
            
            
              <?php
	//month
	
	if ($tempunit=='C' && $weather["tempmmax"]>27)  {
	echo "<red>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmax"]>15)  {
	echo "<orange>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmax"]>10)  {
	echo "<green>",$weather["tempmmax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempmmax"]>=-50) {
	echo "<blue>",$weather["tempmmax"] . "</value>";}	
	
	if ($tempunit=='F' && $weather["tempmmax"]>90)  {
	echo "<red>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmax"]>65)  {
	echo "<orange>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmax"]>50)  {
	echo "<green>",$weather["tempmmax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempmmax"]>=-1) {
	echo "<blue>",$weather["tempmmax"] . "</value>";}	
	echo "<sup><unit>&deg;",$weather["temp_units"]
	
?>


</span> <div class="hitemp">Highest Temp Measured on <span><?php echo $weather["tempmmaxtime"];?></span>

<div class="lotemp">
<?php //min year
if ($tempunit=='C' && $weather["tempmmin"]>27)  {
	echo "<red>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmin"]>15)  {
	echo "<orange>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmin"]>10)  {
	echo "<green>",$weather["tempmmin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempmmin"]>=-50) {
	echo "<blue>",$weather["tempmmin"] . "</value>";}		
	
if ($tempunit=='F' && $weather["tempmmin"]>90)  {
	echo "<red>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmin"]>65)  {
	echo "<orange>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmin"]>50)  {
	echo "<green>",$weather["tempmmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempmmin"]>=-1) {
	echo "<blue>",$weather["tempmmin"] . "</value>";}			
	echo "<sup><unit>&deg;",$weather["temp_units"];?>

<div class="hitemp">Lowest Temp Measured on <span><?php echo $weather["tempmmintime"];?></span></div>

<div class="icon"><img src=css/icons/temp34.svg width=25px></div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             
<actual><?php echo date(' F Y');?></actual>
<div class="icon"><img src=css/icons/temp34.svg width=25px></div>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	 <?php 
	if ($tempunit=='C' && $weather["tempydmax"]>=27){echo '<div class="bar bar-inner8" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]*2;}
	else if ($tempunit=='C' && $weather["tempydmax"]>=15){echo '<div class="bar bar-inner5" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]*2;}
	else if ($tempunit=='C' && $weather["tempydmax"]>=10){echo '<div class="bar bar-inner3" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]*2;}	
	else if ($tempunit=='C' && $weather["tempydmax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]-20;}		
	
	if ($tempunit=='F' && $weather["tempydmax"]>=80){echo '<div class="bar bar-inner8" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]-15;}
	else if ($tempunit=='F' && $weather["tempydmax"]>=65){echo '<div class="bar bar-inner5" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]-15;}
	else if ($tempunit=='F' && $weather["tempydmax"]>=50){echo '<div class="bar bar-inner3" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]-20;}	
	else if ($tempunit=='F' && $weather["tempydmax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px; height: ';	
	echo $weather["tempydmax"]-20;}	
	
	
	?>px;">
    </div></div></div>
 
            
            
            
              <?php
	// yesterday
	
	if ($tempunit=='C' && $weather["tempydmax"]>27)  {
	echo "<red>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmax"]>15)  {
	echo "<orange>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmax"]>10)  {
	echo "<green>",$weather["tempydmax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempydmax"]>=-50) {
	echo "<blue>",$weather["tempydmax"] . "</value>";}	
	
	
	if ($tempunit=='F' && $weather["tempydmax"]>90)  {
	echo "<red>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmax"]>65)  {
	echo "<orange>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmax"]>50)  {
	echo "<green>",$weather["tempydmax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempydmax"]>=-50) {
	echo "<blue>",$weather["tempydmax"] . "</value>";}			
	echo "<sup><unit>&deg;",$weather["temp_units"]
	
?>


</span> <div class="hitemp">Highest Temp Measured at <span><?php echo $weather["tempydmaxtime"];?></span>
          
  
<div class="lotemp">
<?php //min year
 if ($tempunit=='C' && $weather["tempydmin"]>27)  {
	echo "<red>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmin"]>15)  {
	echo "<orange>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmin"]>10)  {
	echo "<green>",$weather["tempydmin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempydmin"]>=-50) {
	echo "<blue>",$weather["tempydmin"] . "</value>";}		
	
if ($tempunit=='F' && $weather["tempydmin"]>90)  {
	echo "<red>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmin"]>65)  {
	echo "<orange>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmin"]>50)  {
	echo "<green>",$weather["tempydmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempydmin"]>=-50) {
	echo "<blue>",$weather["tempydmin"] . "</value>";}			
	echo "<sup><unit>&deg;",$weather["temp_units"];?>

<div class="hitemp">Lowest Temp Measured at <span><?php echo $weather["tempydmintime"];?></span></div>

<div class="hitempy">  
  <?php if ($weather["tempydmax"] < $weather["tempdmax"]){echo "Max <green>Yesterday</green> Recorded was <blue>Less</blue> than Today"; echo " <b>",$weather["tempdmax"] - $weather["tempydmax"], "&deg;",$weather["temp_units"]," </b><blue>Cooler ".$fallingsymbol."</blue>";}  
  else if ($weather["tempydmax"] > $weather["tempdmax"]){echo "Max <green>Yesterday</green> Recorded was <orange>Higher</orange> than Today";echo " <b>",$weather["tempydmax"] - $weather["tempdmax"], "&deg;",$weather["temp_units"]," </b><orange>Warmer  ".$risingsymbol."</orange>  ";}
   else if ($weather["tempdmax"] = $weather["tempydmax"]){echo "Max <green>Yesterday</green> Recorded is <orange>Same</orange> as Today";echo " <b>",$weather["tempdmax"] - $weather["tempydmax"], "&deg;",$weather["temp_units"]," </b><orange>  ".$steadysymbol."</orange>  ";}
  
  ?></span></div>

<div class="icon"><img src=css/icons/temp34.svg width=25px></div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<actual>Yesterday</actual></div></div></div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	 <?php 
	if ($tempunit=='C' && $weather["tempymax"]>=27){echo '<div class="bar bar-inner8" style="max-height:95px; height: ';	
	echo $weather["tempymax"]*2;}
	else if ($tempunit=='C' && $weather["tempymax"]>=15){echo '<div class="bar bar-inner5" style="max-height:95px; height: ';	
	echo $weather["tempymax"]*2;}
	else if ($tempunit=='C' && $weather["tempymax"]>=10){echo '<div class="bar bar-inner3" style="max-height:95px; height: ';	
	echo $weather["tempymax"]*2;}	
	else if ($tempunit=='C' && $weather["tempymax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px; height: ';	
	echo $weather["tempymax"]-20;}		
	
	if ($tempunit=='F' && $weather["tempymax"]>=80){echo '<div class="bar bar-inner8" style="max-height:95px; height: ';	
	echo $weather["tempymax"]-15;}
	else if ($tempunit=='F' && $weather["tempymax"]>=65){echo '<div class="bar bar-inner5" style="max-height:95px; height: ';	
	echo $weather["tempymax"]-15;}
	else if ($tempunit=='F' && $weather["tempymax"]>=50){echo '<div class="bar bar-inner3" style="max-height:95px; height: ';	
	echo $weather["tempymax"]-20;}	
	else if ($tempunit=='F' && $weather["tempymax"]>=-50){echo '<div class="bar bar-inner" style="max-height:95px; height: ';	
	echo $weather["tempymax"]-20;}	
	
	
	?>px;">
    </div></div></div>
 
            
            
            
              <?php
	// year
	
	if ($tempunit=='C' && $weather["tempymax"]>27)  {
	echo "<red>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymax"]>15)  {
	echo "<orange>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymax"]>10)  {
	echo "<green>",$weather["tempymax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempymax"]>=-50) {
	echo "<blue>",$weather["tempymax"] . "</value>";}
	
	
	if ($tempunit=='F' && $weather["tempymax"]>90)  {
	echo "<red>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymax"]>65)  {
	echo "<orange>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymax"]>50)  {
	echo "<green>",$weather["tempymax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempymax"]>=-50) {
	echo "<blue>",$weather["tempymax"] . "</value>";}			
	echo "<sup><unit>&deg;",$weather["temp_units"]
	
?>


</span> <div class="hitemp">Highest Temp Measured on <span><?php echo $weather["tempymaxtime"];?></span><br>
 <div class="lotemp">
<?php //min year
 if ($tempunit=='C' && $weather["tempymin"]>27)  {
	echo "<red>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymin"]>15)  {
	echo "<orange>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymin"]>10)  {
	echo "<green>",$weather["tempymin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempymin"]>=-50) {
	echo "<blue>".$weather["tempymin"]."</value>";}
	
if ($tempunit=='F' && $weather["tempymin"]>90)  {
	echo "<red>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymin"]>65)  {
	echo "<orange>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymin"]>50)  {
	echo "<green>",$weather["tempymin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempymin"]>=-50) {
	echo "<blue>".$weather["tempymin"]."</value>";}	
	echo "<sup><unit>&deg;",$weather["temp_units"];?>

<div class="hitemp">Lowest Temp Measured on <span><?php echo $weather["tempymintime"];?></span></div>


</div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
<actual>Year <?php echo date('Y');?></actual>
<div class="icon"><img src=css/icons/temp34.svg width=25px></div>
</section>
<div class="provided">   
&nbsp;
Almanac Meteobridge PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>