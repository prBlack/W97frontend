<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');
// 34 Aqi 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 UV-Index - Solar Radiation Module Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:none}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}

section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}
.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}
.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:31rem;height:14.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}
.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}
.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100;}

.weather34cardguide{width:27rem;height:200px;background:RGBA(37, 41, 45, 0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px;}

.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100;}
.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}
.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center;width:200px;}
.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;}
.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:'weathertext',sans-serif}
.weather34card__count-text--bigs{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px;}
weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;}
.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37, 41, 45, 0);border:solid RGBA(156, 156, 156, 0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px;}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a;}darkred{color:#f47264}value{color:#fff}yellow{color:#c1b01e}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}
a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right;}

.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-49px}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/uvrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57, 61, 64, 1.00);border-bottom:5px solid RGBA(57, 61, 64, 1.00);border-top:3px solid RGBA(57, 61, 64, 1.00);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164, 117, 203, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211, 93, 78, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(255, 136, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233, 145, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233, 145, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-uvrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255, 136, 65, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}

.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal;}
.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal;}purpleuv{color:#a475cb;}reduv{color:#d65b4a;}orangeuv{color:#ff8841;}greenuv{color:#9aba2f;}greyuv{color:#aaa;}
.uvsun{position:absolute;top:10px;margin-left:175px;}.sunfade{opacity:0.8;}yellow{color:RGBA(233, 145, 65, 0.8)}

.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}
.weather34-solarrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/solarrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57, 61, 64, 1.00);border-bottom:5px solid RGBA(57, 61, 64, 1.00);border-top:3px solid RGBA(57, 61, 64, 1.00);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}
.weather34-solarrate-bar .bar-1{height:100px;max-height:100px}
.weather34-solarrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164, 117, 203, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211, 93, 78, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211, 93, 78, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233, 145, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233, 145, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}
.weather34-solarrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255, 136, 65, 0.7);width:100%;-webkit-border-radius:1px 1px 5px 5px;border:0}

.weather34solarrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal;}
.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal;}purpleuv{color:#a475cb;}reduv{color:#d65b4a;}orangeuv{color:#ff8841;}greenuv{color:#9aba2f;}greyuv{color:#aaa;}

</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $info ;?> UV-Index-Solar Radiation<green> <?php
			
	
	echo $locationinfo, " ", $aqilocation;
	?></green></p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php
	
	
	
	// KP INDEX
	
	if ($weather["uv"]>11)  {
	echo "<purple>",$weather["uv"] . "</value>";	} 
	
	
	else if ($weather["uv"]>=10) {
	echo "<purple>",$weather["uv"] . "</value>";}	 	
	
	
	else if ($weather["uv"]>=8) {
	
	echo "<red>",$weather["uv"] . "</value>";	} 
	
		
	else if ($weather["uv"]>=6) {
	
	echo "<orange>",$weather["uv"] . "</value>";	} 
	
		
	else if ($weather["uv"]>=3) {
	
	echo "<yellow>",$weather["uv"] . "</value>";	}
	
	
	else if ($weather["uv"]>=0) {
	
	echo "<green>",$weather["uv"] . "</value>";	}
	
	
	else {
	echo "UV Index<br><span style='font-size:13px; font-family:arial;font-weight: 600'>---</span><br></aqivalue>";
	echo "</aqivalue1><value>N/A</value>";}




?></span> 
<div class="weather34-uvrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 	 
	if ($weather["uv"]>=10){echo '<div class="bar bar-inner1000" style="max-height:95px;height: ';echo $weather["uv"]*8;}	
	else if ($weather["uv"]>=7){echo '<div class="bar bar-inner700" style="max-height:95px;height: ';echo $weather["uv"]*8;}	
	else if ($weather["uv"]>5){echo '<div class="bar bar-inner600" style="max-height:95px;height: ';echo $weather["uv"]*8;}	
	else if ($weather["uv"]>=3){echo '<div class="bar bar-inner400" style="max-height:95px;height: ';echo $weather["uv"]*8;}
	else if ($weather["uv"]>=1){echo '<div class="bar bar-inner200" style="max-height:95px;height: ';echo $weather["uv"]*8;}
		
	else if ($weather["uv"]>=0){echo '<div class="bar bar-inner1" style="max-height:95px;height: ';echo $weather["uv"]+1;}	
	?>px;"></div></div></div>
 UV-Index
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";

	if ($weather["uv"]>10)  {
	echo "<purple><br><br> Extra Protection </purple><br>";
	echo 'Avoid being outside during midday hours!
Make sure you seek a shaded area! <orange>Sunscreen</orange> and wear a hat ,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.';
	} 
	
	else if ($weather["uv"]>8)  {
	echo "<red><br><br> Extra Protection ", $alert,"</red><br>";
	echo 'Avoid being outside during midday hours!
Make sure you seek a shaded area! Wear <orange>Sunscreen</orange> and hat ,<orange>wear sunglasses</orange>.';
	} 
	
	
	else if ($weather["uv"]>5)  {
	echo "<orange><br><br> Protection Required ", $alert,"</orange><br>";
	echo 'Seek shadea area during midday hours!
Use sunscreen and a hat for protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange periods.';
	} 
	
	else if ($weather["uv"]>3)  {
	echo "<yellow><br><br> Protection Required ", $alert,"</yellow><br>";
	echo ' During midday hours!
caution use some form of  protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange periods.';
	} 
	
	else if ($weather["uv"]>=1)  {
	echo "<green><br><br> No Cautions Required</green><br>";
	echo 'No advisory required . Safe for all skin types though be-aware of <orange>sunlight</orange> when <orange>sun</orange> approaches low horizon,<orange>wear sunglasses</orange>.';
	} 
	
	else if ($weather["uv"]==0)  {
	echo "<green><br><br> No Caution Required</green><br>";
	echo 'No cautions required.The <orange>sun</orange> may be low on the horizon,obscured or below the horizon due to darkness hours.';
	
	} 


?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php
			
	
	echo $aqilocation;
	?></div>
        </div>
        
        
        
        
        
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solar"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solar"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solar"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solar"]>700){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solar"]>600){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solar"]>500){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solar"]>400){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solar"]>300){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solar"]>200){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solar"]>100){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solar"]>50){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solar"]>0){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div></div></div>
            
            
            
               <?php //34 aqi ozone script
$b="--";if($weather["solar"]==$b){$weather["solar"] = "N/A" ;}			   
			   
			   
if ($weather["solar"]>=1000) echo "<purple>",$weather["solar"]; 
else if ($weather["solar"] >=500) echo "<red>",$weather["solar"]; 
else if ($weather["solar"] >=300) echo "<orange>",$weather["solar"]; 
else if ($weather["solar"] >=100) echo "<yellow>",$weather["solar"]; 
else if ($weather["solar"] >=0) echo "<green>",$weather["solar"]; 

?></span> Solar Radiation
<div class="uvsun"><?php
	if ($weather["solar"]>=800){echo "<img src=css/icons/uvstrong.svg width=60px>";}	
	else if ($weather["solar"]>=10){echo "<img src=css/icons/clear.svg width=60px>";}		
	else echo "<img src=css/icons/nosunuv.svg width=60px>";
	?></div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               <?php
 
	echo " ";

	if ($weather["solar"]>1000)  {
	echo "<green><br> <br>Solar Radiation Excellent</green> and Sustainable<br>";
	echo '<green>Solar Energy</green> replenishment is good to excellent.';
	} 
	
	else if ($weather["solar"]>600)  {
	echo "<green><br><br> Solar Radiation Good</green> and Sustainable<br>";
	echo '<green>Solar Energy</green> replenishment is moderate to good.';
	} 
	
	
	else if ($weather["solar"]>100)  {
	echo "<orange><br><br> Solar Radiation Moderate</orange><br>";
	echo '<green>Solar Energy</green> replenishment is low to moderate. ';
	} 
	
	else if ($weather["solar"]>200)  {
	echo "<yellow><br><br> Solar Radiation Poor</yellow><br>";
	echo ' <green>Solar Energy</green> replenishment is low. ';
	} 
	
	else if ($weather["solar"]>100)  {
	echo "<yellow><br><br> Solar Radiation Poor</yellow><br>";
	echo ' <green>Solar Energy</green> replenishment is poor. ';
	} 
	
	else if ($weather["uv"]>=0)  {
	echo "<red><br><br><br>Solar Radiation Poor</red><br>";
	echo 'When the <orange>sun</orange> is near the horizon,overcast,obscured or darkness hours this will prevent <green>Solar Energy</green> replenishment.  ';
	} 
	
	


?> 
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
            
            
       
</section>







<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;line-height:12px;">
             
	<?php echo $info ;?> <orange>Guide</orange><br>
<green>0-3</green> = Safe.<br>
<yellow>3-5</yellow> = Caution Required.<br>
<orange>6-7</orange> = Fair Skin types Protect yourself.<br>
<red>8-10</red> = Fair to Dark Skin Risk high sun burn risk.<br>
<purple>11+</purple> = High Risk  All Skin types very dangerous.<br>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	</div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;">
          <?php echo $info ;?> <orange>Guide</orange><br>
<green>Solar Energy</green> delivered by the sun is both intermittent and varies during the day also with the seasons.The value can be used has a good relative indicator
of solar replenishment for recharching solar panels and solar powered devices.
  </div>
  
       
</section>




<div class="provided">   
<a href="https://aqicn.org" title="https://aqicn.org" target="_blank">AQI Data Provided by https://aqicn.org</a> / <a href="https://www.wunderground.com" title="https://www.wunderground.com" target="_blank">UV Data Provided by https://www.wunderground.com</a>
&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>