<?php include('settings.php');include('livedata.php');


	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 METEOR SHOWER: 25TH JANUARY 2018  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>
<?php 
//weather34 next meteor event original idea betejuice of cumulus forum..
$meteor_nextevent="No Meteor Showers";
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 1, 2,18),"event_title"=>"Meteor Shower<orange1> Quadrantids</orange1><div class=date><br>Active Dec 28th-Jan 12th
<green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 23,18),"event_title"=>"Meteor Shower <orange1>Quadrantids</orange1><div class=date><br>Active Dec 28th-Jan 12th
<green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 2,19),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 23,19),"event_title"=>"Meteor Shower <orange1>Quadrantids</orange1><div class=date><br>Active Dec 28th-Jan 12th
<green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 2,20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 24),"event_title"=>"Meteor Shower <orange1>Quadrantids</orange1><div class=date><br>>Active Dec 28th-Jan 12th
<green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Meteor Shower <orange1>Quadrantids</orange1><div class=date><br>Peak Viewing Now<br><div class=date>
<br><green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 1, 2),"event_title"=>"Meteor Shower <orange1>Lyrids</orange1><div class=date><br>Active Apr 18th-Apr 25th<br>
<green>Estimated ZHR:</green><orange>18</orange></div></div>","event_end"=>mktime(23, 59, 59, 4, 20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 20),"event_title"=>"Meteor Shower <orange1>Lyrids</orange1> <div class=date><br>Peak Viewing Now<br>
<green>Estimated ZHR:</green><orange>18</orange></div></div>","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 24),"event_title"=>"Meteor Shower <orange1>ETA Aquarids </orange1><br><div class=date><br>Active Apr 24th-May 19th<br>
<green>Estimated ZHR:</green><orange>55</div></div>","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 5, 6),"event_title"=>"Meteor Shower <orange1>Delta Aquarids</orange1><div class=date><br>Active Jul 21st-Aug 23rd<br>
<green>Estimated ZHR:</green><orange>16</div></div>","event_end"=>mktime(23, 59, 59, 7, 27),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 7, 30),"event_title"=>"Meteor Shower <orange1> Perseids</orange1><div class=date><br>Active Jul 13th-Aug 26th<br>
<green>Estimated ZHR:</green><orange>100</div>","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 8, 12),"event_title"=>"Meteor Shower<orange1> Perseids</orange1><div class=date><br>Peak Viewing Now<br>
<green>Estimated ZHR:</green><orange>100</div></div>","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 8, 13),"event_title"=>"Meteor Shower <orange1> Draconids</orange1><div class=date><br>Active October 6th-10th<br>
<green>Estimated ZHR:</green><orange>5</div></div>","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 7),"event_title"=>"Meteor Shower <orange1> Orionids</orange1><div class=date><br>Active Oct 21st-Oct 22nd<br>
<green>Estimated ZHR:</green><orange>25</div></div>","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 21),"event_title"=>"Meteor Shower <orange1> South Taurids</orange1><div class=date><br>Active Nov 4th- Nov 5th<br>
<green>Estimated ZHR:</green><orange>5</div></div>","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 5),"event_title"=>"Meteor Shower <orange1> North Taurids</orange1><div class=date><br>Active Nov 11th
<green>Estimated ZHR:</green><orange>5</div></div>","event_end"=>mktime(23, 59, 59, 11, 11),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 11),"event_title"=>"Meteor Shower <orange1> Leonids</orange1><div class=date><br>Active Nov 5th-Dec 3rd<br>
<green>Estimated ZHR:</green><orange>15</div></div>","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 18),"event_title"=>"Meteor Shower <orange1> Geminids</orange1><div class=date><br>Active Nov 30th-Dec 17th
<green>Estimated ZHR:</green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 12, 14),);

$meteorNext=time();$meteorOP=false;
foreach ($meteor_eventsnext as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNext&&$meteorNext<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_nextevent=$meteor_check["event_title"];}};
//end meteor nevt event
$meteorinfo3="<svg width='32px' height='32px' viewBox='0 0 16 16'><path fill='currentcolor' d='M0 0l14.527 13.615s.274.382-.081.764c-.355.382-.82.055-.82.055L0 0zm4.315 1.364l11.277 10.368s.274.382-.081.764c-.355.382-.82.055-.82.055L4.315 1.364zm-3.032 2.92l11.278 10.368s.273.382-.082.764c-.355.382-.819.054-.819.054L1.283 4.284zm6.679-1.747l7.88 7.244s.19.267-.058.534-.572.038-.572.038l-7.25-7.816zm-5.68 5.13l7.88 7.244s.19.266-.058.533-.572.038-.572.038l-7.25-7.815zm9.406-3.438l3.597 3.285s.094.125-.029.25c-.122.125-.283.018-.283.018L11.688 4.23zm-7.592 7.04l3.597 3.285s.095.125-.028.25-.283.018-.283.018l-3.286-3.553z'/></svg>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Meteor Showers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(../css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:29rem;height:15.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:26.5rem;background-color:#2a2e33;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:200;line-height:15px}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}.weather34card__count-text--big{font-size:23px;font-weight:100;font-family:'weathertext',sans-serif}.weather34card__count-text--bigs{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;line-height:15px}.date{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;line-height:15px}weather34card__count-text--bigsa{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:14px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}orange1{position:relative;color:#ff8841;margin:0 auto;text-align:center;margin-left:15%}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}.weather34card__count-text--bigsb{font-size:26px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#444;text-align:center;line-height:15px}</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $meteorinfo3 ;?> Annual Active <orange>Meteor</orange> Showers <?php echo date('Y');?></p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php
	if ($meteor_default)  {
	echo $meteorinfo3,"<orange> ",$meteor_default;
	} 
?></span>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigsb"> <?php
	echo "Shower";

	
?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            <br><br>
            <?php
			
	
	echo date('D jS M Y');
	?>
        </div>
        <br>
        
        
        
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <?php
	if ($meteor_nextevent)  {
	echo $meteorinfo3 ," Next ", $meteor_nextevent ;
	} 
?>
            </div>
        
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	
	</div>
        </div>
         
           
       
</section>



<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;">
        <?php echo $info ;?> <orange>Guide</orange> <green> Major Meteor Showers</green> (<?php echo date('Y');?>)<br>
       <?php echo $meteorinfo;?> <green>Quadrantids</green> Dec 28-Jan 12	Peak Jan 03<br>
       <?php echo $meteorinfo;?> <green>Lyrids</green> Apr 18-Apr 25	Peak Apr 22<br>
       <?php echo $meteorinfo;?> <green>Perseids</green> Jul 13-Aug 26	Peak Aug 12<br>
       <?php echo $meteorinfo;?> <green>Leonids</green> Nov 05-Dec 03	Peak Nov 18<br>
       <?php echo $meteorinfo;?> <green>Geminids</green> Nov 30-Dec 17	Peak Dec 13<br>
       <?php echo $meteorinfo;?> <green>Ursids</green> Dec 17-Dec 24	Peak Dec 22    
            </div>
        </div>
        
        
        
        
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:12px;">
           <?php echo $info ;?> <orange>Guide</orange><br><green>Meteors</green> are best viewed during the night hours, though meteors enter the atmosphere at any time of the day. They are just harder to see in the daylight apart from dawn and dusk. Any nearby ambient light,Moon light can make it difficult viewing . Meteor showers are best viewed away from the city lights.
            </div>
        
        
       
</section>





<div class="provided">   
Data Provided by <a href="https://en.wikipedia.org/wiki/Meteor_shower" title="https://en.wikipedia.org/wiki/Meteor_shower" target="_blank">International Meteor Organization</a>

&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>