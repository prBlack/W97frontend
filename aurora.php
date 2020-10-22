<?php include('shared.php');

// K-INDEX & SOLAR DATA FOR HOMEWEATHERSTATION TEMPLATE RADIO HAMS REJOICE :-) //
$str = file_get_contents('jsondata/kindex.txt');
$json = array_reverse(json_decode($str,false));
$kp =  $json[1][1];


	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 AURORA SUN INDEX: 25th January 2018   	                                           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>weather34 Radio Aurora Borealis and Sun Index Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:29rem;height:14.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}.weather34card__count-text--big{font-size:42px;font-weight:200;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}weather34card__count-text--bigsa{font-size:13px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right}
</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $info ;?> Visual Aurora Borealis/Northern Lights and VHF Radio Aurora Indicators</p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($kp>=7){echo "<purple>",number_format($kp,1),"</purple>";}else if($kp>=5.8){echo "<red6>",number_format($kp,1),"</red6>";}
				else if($kp>=5){echo "<red>",number_format($kp,1),"</red>";}else if($kp>=4){echo "<orange>",number_format($kp,1),"</orange>";}
				else if($kp>=0){echo "<green>",number_format($kp,1),"</orange>";}			
				?></span> KP-INDEX
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php echo " \n";if($kp>=9){echo "<red>G5 Geomagnetic Severe Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=8){echo "<red>G4 Geomagnetic Major Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=7){echo "<red>G3 Geomagnetic Major Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=6){echo "<red>G2 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=5){echo "<orange>G1 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=4){echo "<orange>Minor G1 Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=3.5){echo "<green>Weak Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}else if($kp>=0){echo "<green> Quiet No Geomagnetic Storm</span><br>";echo 'KP-PLANETARY INDEX';}?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php if($kp>7){echo 'Excellent <br>Aurora Viewing Possible';}else if($kp>6){echo 'Mid to High Latitude <br>Aurora Viewing Possible';}else if($kp>4){echo 'High Latitude Aurora <br>Viewing Possible';}else if($kp>3.5){echo 'Weak High Latitude Aurora <br>Viewing Possible';}else{echo 'No Aurora';}echo "\n";?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php if($kp>=8.9){echo "<red>400</red>";}else if($kp>=7.9){echo "<red>208</red>";}else if($kp>=6.9){echo "<red>132</red>";}else if($kp>=6){echo "<red6>80</red6>";}else if($kp>=4.9){echo "<red>",number_format($kp*6,0),"</red>";}else if($kp>=3.9){echo "<orange>",number_format($kp*5,0),"</orange>";}else if($kp>=2.9){echo "<green>",number_format($kp*4,0),"</orange>";}else if($kp>=2){echo "<green>",number_format($kp*2,0),"</orange>";}else if($kp>=0){echo "<green>",number_format($kp*2,0),"</orange>";}?></span> A-INDEX
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php echo " \n";if($kp>=9){echo "<red>G5 Geomagnetic Severe Storm</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=8){echo "<red>G4 Geomagnetic Major Storm</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=7){echo "<red>G3 Geomagnetic Major Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=6){echo "<red>G2 Geomagnetic Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=5){echo "<orange>G1 Geomagnetic Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=4){echo "<orange>Minor G1 Geomagnetic Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>=3.5){echo "<green>Weak Geomagnetic Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}else if($kp>0){echo "<green> Quiet No Geomagnetic Radio Aurora</span><br>";echo 'RADIO AURORA A-INDEX';}?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php if($kp>7){echo 'Strong Radio Aurora <br>28-433MHZ Possible';}else if($kp>6){echo 'Mid-High Latitude Radio Aurora <br>28-144MHZ Possible';}else if($kp>5){echo 'Radio Aurora <br>50-144MHZ Possible';}else if($kp>=4){echo 'High Latitude Radio Aurora <br>50-144MHZ Possible';}else if($kp>=3.5){echo 'High Latitude Weak Radio Aurora <br>50-144MHZ Possible';}else{echo 'No Radio Aurora';}echo "\n";?></div>
        </div> 
       
</section>
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:12px;">
               <?php echo $info ;?> <orange>Guide</orange><br><green>KP-INDEX</green> figure provides a good indicator of viewing the <green>Aurora Borealis</green> or <green>Northern Lights</green> The greater the KP-Index the higher probability of viewing .The Estimated 3-hour Planetary Kp-index data is collected from ground-based magnetometers.
            </div>
         </div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs" style="font-size:12px;">
               <?php echo $info ;?> <orange>Guide</orange><br><green>A-INDEX</green> is an indicator of possible enhanced VHF radio signal communication at a range of upto 1000 miles or more. During strong solar activity frequencies from 28 to 433MHZ or higher allowing radio communications to be possible at mid to high latitudes .
 <updated>               
 <?php echo '<svg viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>';
; echo " Last Updated: ".date("H:i:s",filemtime('jsondata/kindex.txt'));?>
</updated>
            </div>
        </div>
</section>


<div class="provided">   
<a href="http://services.swpc.noaa.gov" title="http://services.swpc.noaa.gov" target="_blank">Data Provided by http://services.swpc.noaa.gov</a>
&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>