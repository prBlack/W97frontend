<?php include('livedata.php');include('common.php'); $weather["cloudbase3"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) * 1000 /2.4444) ;
$locationinfo='<svg id="i-location2" viewBox="0 0 32 32" width="15px" height="15px" fill="none" stroke="rgba(255, 124, 57, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
<circle cx="16" cy="11" r="4" /><path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" /></svg>';
$alert="<svg id='firealert' viewBox='0 0 32 32' width='18px' height='18px' fill='none' stroke='rgba(255, 124, 57, 1.000)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
<path d='M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25' /></svg>";
//weather AIR QUALITY / CLOUDBASE MODULE APRIL 2018
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Cloudbase & Air Quality Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;background:0}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.1rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-weight:300;}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-weight:300;}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;;text-align:left;width:200px}.weather34card__count-textuv{font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:12px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;;font-weight:normal;color:#aaa;text-align:center}
.weather34card__stuff-container{margin-top:35px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;;text-align:left;font-size:12px;width:800px;float:left;list-style:circle;margin-left:-45px;}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}updated{position:absolute;bottom:5px;float:right}
actual{font-size:13px;float:right;position:absolute;left:135px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}.hitemp{color:#aaa;font-size:12px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}
.hitempy{background:rgba(61, 64, 66, 0.8);color:#aaa;font-size:12px;width:240px;padding:1px;border-radius:4px;margin-top:2px;margin-left:0;padding-left:3px;}
.lotemp{font-size:26px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-weight:300;}
blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:10px;bottom:10px;}
.weather34i-cloud-bar{background:0;position:absolute;height:100px;width:100px;margin-left:135px;margin-top:48px}
.weather34i-cloud-bar .bar{shape-rendering:crispEdges;background:url(css/rain/cloudmarker.svg) no-repeat;width:100px;border:5px solid rgba(57, 61, 64, 1.00);border-bottom:3px solid rgba(57, 61, 64, 1.00);border-top:1px dotted rgba(57, 61, 64, 1.00);-webkit-border-radius:1px 1px 3px 3px;-moz-border-radius:1px 1px 3px 3px;-o-border-radius:1px 1px 3px 3px;-ms-border-radius:1px 1px 3px 3px;border-radius:1px 1px 3px 3px;position:absolute;bottom:0}
.weather34i-cloud-bar .bar-1{height:100px;max-height:100px}
.weather34i-cloud-bar .bar-inner{shape-rendering:crispEdges;background:rgba(159, 163, 166, 0.4);width:100%;-webkit-border-radius:1px 1px 3px 3px;-moz-border-radius:1px 1px 3px 3px;-o-border-radius:1px 1px 3px 3px;-ms-border-radius:1px 1px 3px 3px;border-radius:1px 1px 3px 3px;border:0;border-top:1px dotted rgba(255, 124, 57, 1.000)}
.weather34icloudair{color:rgba(255, 124, 57, 1.000);position:absolute;margin-left:165px;margin-top:67px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;max-height:42px;font-weight:normal;background:#2a2e33;width:42px;height:42px;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;font-size:15px;line-height:16px;padding-top:13px;border:.12rem solid rgba(95,96,97,.9);}
.weather34icloudair span{font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-size:0.8em;font-weight:normal;margin-left:-2px;}

.weather34icloudair1{color:rgba(255, 124, 57, 1.000);position:absolute;margin-left:165px;margin-top:67px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;max-height:42px;font-weight:normal;background:#2a2e33;width:41px;height:42px;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;font-size:14px;line-height:16px;padding-top:32px;border:.12rem solid rgba(95,96,97,.9);padding-left:5px;}
.weather34icloudair1 span{font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-size:0.7em;font-weight:normal;margin-left:0;color:#aaa;}

.weather34-aqi-bar{background:0;position:absolute;height:100px;width:100px;margin-left:135px;margin-top:48px}
.weather34-aqi-bar .bar{shape-rendering:crispEdges;background:0;width:100px;border:0;position:absolute;bottom:0}
.weather34-aqi-bar .bar-1{height:100px;max-height:100px}
.weather34aqi{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;max-height:100px;line-height:10px;font-weight:normal}
.weather34aqi span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}
actual1{font-size:13px;float:left;position:absolute;left:11px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}
actual2{font-size:12px;float:left;position:absolute;left:10px;top:70px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;
width:120px;}
maroon{color:rgba(208, 80, 65, 0.7)};purple{color:rgba(154, 106, 196, 1)};red{color:rgba(208, 80, 65, 1)}orange{color:rgba(255, 124, 57, 1)}yellow{color:rgba(186, 146, 58, 1)}green{color:rgba(144, 177, 42, 1)}grey{color:#aaa}
aqiimage1{position:absolute;left:-5px;top:-2px;}blue{color:rgba(144, 177, 42, 1.000)}


.aqilocation{position:absolute;top:25px;left:20px;font-size:0.5em;font-family:Arial, Helvetica, sans-serif;}
.aqilocation span{position:absolute;top:30px;left:10px;font-size:12px;font-family:Arial, Helvetica, sans-serif;display:block;width:70px;}
.aqilocation span2{position:absolute;top:15px;left:-20px;font-size:12px;font-family:Arial, Helvetica, sans-serif;width:130px;color:#aaa;}
.aqilocation span3{position:absolute;top:5px;left:35px;font-size:12px;font-family:Arial, Helvetica, sans-serif;width:100px;}
.aqilocation mod{position:absolute;top:5px;}
.aqitime{font-size:11px;color:#aaa;position:absolute;top:27px;left:140px;width:130px;}
aqimaroon{color:rgba(208, 80, 65, 0.7);}aqipurple{color:rgba(154, 106, 196, 1);}aqired{color:rgba(208, 80, 65, 1);}aqiorange{color:rgba(255, 124, 57, 1);}aqiyellow{color:rgba(186, 146, 58, 1);}aqigreen{color:rgba(144, 177, 42, 1);}
aqiimageg{position:absolute;top:-20px;left:100px;background:rgba(144, 177, 42, 1.000);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimagey{position:absolute;top:-20px;left:100px;background:rgba(197, 162, 49, 1.000);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimageo{position:absolute;top:-20px;left:100px;background:rgba(255, 124, 57, 0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimager{position:absolute;top:-20px;left:100px;background:rgba(208, 80, 65, 1.000);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimagep{position:absolute;top:-20px;left:100px;background:rgba(154, 106, 196, 1.000);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimagem{position:absolute;top:-20px;left:100px;background:rgba(208, 80, 65, 0.7);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;width:30px;height:30px;}
aqiimage1{position:absolute;left:-5px;top:-2px;}

.circleaqigreen{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(144, 177, 42, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0;}
.circleaqiyellow{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(197, 162, 49, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0}
.circleaqiorange{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(255, 124, 57, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0}
.circleaqired{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(208, 80, 65, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0}
.circleaqipurple{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(154, 106, 196, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0}
.circleaqimaroon{position:absolute;color:#fff;line-height:44px;display:table-cell;text-align:center;vertical-align:middle;-moz-border-radius:100%;-webkit-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;background:rgba(153, 61, 53, 1.000);width:74px;top:40px;left:20px;font-size:32px;font-family:weathertext,Arial,sans-serif;height:74px;border-right:0}

circleaqigreenvalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
background:rgba(144, 177, 42, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}

circleaqiyellowvalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
border-bottom-right-radius: 4px;background:rgba(197, 162, 49, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}

circleaqiorangevalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
border-bottom-right-radius: 4px;background:rgba(255, 124, 57, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}

circleaqiredvalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
border-bottom-right-radius: 4px;background:rgba(208, 80, 65, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}

circleaqipurplevalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
border-bottom-right-radius: 4px;background:rgba(154, 106, 196, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}

circleaqimaroonvalue{position:absolute;color:#333;line-height:31px;display:table-cell;text-align:center;vertical-align:middle;
-webkit-border-top-right-radius: 4px;-webkit-border-bottom-right-radius: 4px;-moz-border-radius-topright: 4px;-moz-border-radius-bottom-right: 4px;border-top-right-radius: 4px;
border-bottom-right-radius: 4px;background:rgba(153, 61, 53, 1.000);width:65px;margin-top:22px;margin-left:70px;font-size:1em;font-family:weathertext,Arial,sans-serif;height:32px;border:0;}
.aqigraphic{position:absolute;left:0;}

.goodairquality{position:absolute;background:rgba(144, 177, 42, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:60px;text-align:center;}
.moderateairquality{position:absolute;background:rgba(197, 162, 49, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:60px;text-align:center;}
.uhsairquality{position:absolute;background:rgba(255, 124, 57, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:50px;text-align:center;}
.unhealthyairquality{position:absolute;background:rgba(208, 80, 65, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:60px;text-align:center;}
.veryunhealthyairquality{position:absolute;background:rgba(154, 106, 196, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:50px;text-align:center;}
.hazardousairquality{position:absolute;background:rgba(153, 61, 53, 1.000);width:100px;border-radius:4px;padding:5px;font-size:18px;color:#333;left:170px;top:60px;text-align:center;}

.extraqiinfo{position:absolute;top:-10px;font-size:12px;color:#aaa;left:175px;width:100px}
.extraqiinfo2{position:absolute;top:20px;font-size:12px;color:#aaa;left:175px;width:100px}

.airhouse{position:absolute;margin-top:15px;margin-left:62px;opacity:.8}.airsvg{position:absolute;margin-top:-10px;left:27px;opacity:0.8}.airvalue{position:relative;margin-top:-65px;left:55px;font-size:26px;}
airdescription{position:absolute;font-size:16px;left:88px;line-height:18px;text-align:left;width:100px;margin-top:-65px;border:1px solid #333;padding:5px;border-radius:4px;text-align:center;}indoorpurple{color:#a475cb;}indoorblue,indoorgreen,indoororange,indoorred,indooryellow{font-family:weathertext,helvetica,arial}indoorred{color:rgba(211,93,78,1)}indoororange{color:#ff8841}indoorgreen{color:#9aba2f}indoorblue{color:#01a4b4}indooryellow{color:rgba(233, 171, 74, 1.000)}.lotemp1{font-size:22px;font-family:-apple-system, BlinkMacSystemFont, "weathertext", Roboto, Helvetica, Arial, sans-serif;font-weight:300;}
</style>
</head>
<body>
  <section class="weather34title">
   <p><?php echo $info ;?> Cloudbase & Air Quality Data <?php echo $stationlocation;?></p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <div class="weather34i-cloud-bar">
<div class="bar bar-1" style="height:100px;max-height:100px;"> 
<?php //cloudbase weather34
echo '<div class="bar bar-inner" style="max-height:90px;height: ';echo $weather["cloudbase3"]/100;?>px;">
</div></div></div>
<div class="weather34icloudair1">
   
<?php  
 echo "&nbsp; ",$weather["cloudbase3"] ;echo "<span> feet </span>";
 ?>
</span></div> 
</div>
 <div class="lotemp">
<?php //cloudbase
	echo $weather["cloudbase3"], "<orange> ft</orange><br>"; echo round($weather["cloudbase3"]*0.3048,0), "<orange> m</orange>";?>
  <div class="icon"><img src=css/icons/temp34.svg width=25px></div>
  
  
  
  </div></div>    
     <div class="weather34card__count-container">
     <div class="weather34card__count-text"></div></div>
     <div class="weather34card__stuff-container">            
<div class="weather34card__stuff-text"> 	
</div></div>
<actual><?php echo date('l jS H:i');?></actual>
</div></div></div></div>
    
       
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
         
 
	<?php  //air quality	
$json_string             = file_get_contents("jsondata/aqi.txt");
$parsed_json             = json_decode($json_string);
$aqiweather["aqi"]       = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'aqius'};
$aqiweather["state"]  = $parsed_json->{'data'}->{'state'};
$aqiweather["time2"]     = $parsed_json->{'data'}->{'current'}->{'pollution'}->{'ts'};
$aqiweather["time"]      = date('D jS F G:i', strtotime($aqiweather["time2"]));
$aqiweather["city"]      = $parsed_json->{'data'}->{'city'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "N/A" ;}

?>
<div class="lotemp1">Air Quality</div>
</div>
<div class="aqigraphic">
<div class="airhouse">
<?php //WEATHER34 AIR QAULITY SVG
if ($aqiweather["aqi"]>250){echo "<img src='css/aqi/purplemask.svg' width='70px' height='70px' " ; }
else if ($aqiweather["aqi"]>200){echo "<img src='css/aqi/redmask.svg' width='70px' height='70px' " ; }
else if ($aqiweather["aqi"]>150){echo "<img src='css/aqi/feelsverywarm.svg' width='70px' height='70px' " ; }
else if ($aqiweather["aqi"]>100){echo "<img src='css/aqi/feelsunhealthy.svg' width='70px' height='70px' " ; }
else if ($aqiweather["aqi"]>50){echo "<img src='css/aqi/feelsmoderate.svg' width='70px' height='70px' " ; }
else if ($aqiweather["aqi"]>=0){echo "<img src='css/aqi/feelscomfortable.svg' width='70px' height='70px' " ; }

?>
</div></div>
  
<div class="airsvg">
<svg width="108pt" height="108pt" viewBox="0 0 680 680" fill="<?php //airquality circle
 if ($aqiweather["aqi"]>250){echo "#a475cb" ; }
 else if ($aqiweather["aqi"]>200){echo "rgba(211,93,78,1)" ; }
 else if ($aqiweather["aqi"]>150){echo "rgba(211,93,78,1)" ; }
 else if ($aqiweather["aqi"]>100){echo "#ff8841" ; }
 else if ($aqiweather["aqi"]>50){echo "rgba(233, 171, 74, 1.000)" ; }
 else if ($aqiweather["aqi"]>=0){echo "#9aba2f" ; }?>" version="weather34 AIR QUALITY CIRCLE 1.8" >
<path  d=" M 340.00 75.84 C 368.73 75.97 397.50 80.47 424.70 89.82 C 420.96 100.86 417.21 111.90 413.48 122.94 C 389.88 114.88 364.93 110.94 340.00 110.83 C 340.00 99.17 340.00 87.50 340.00 75.84 Z" />
<path  d=" M 225.91 101.73 C 251.72 89.46 279.46 81.20 307.85 77.86 C 309.32 89.43 310.80 101.00 312.26 112.57 C 287.32 115.48 262.97 122.80 240.33 133.60 C 235.52 122.98 230.70 112.36 225.91 101.73 Z" />
<path  d=" M 455.02 102.18 C 480.64 114.70 504.30 131.25 524.65 151.23 C 516.60 159.68 508.56 168.13 500.50 176.55 C 482.58 158.89 461.69 144.31 439.07 133.32 C 444.37 122.93 449.70 112.55 455.02 102.18 Z" />
<path  d=" M 133.55 175.34 C 151.51 152.84 173.15 133.29 197.38 117.73 C 203.67 127.55 209.97 137.37 216.27 147.19 C 195.31 160.62 176.64 177.56 161.05 196.95 C 151.88 189.75 142.71 182.55 133.55 175.34 Z" />
<path  d=" M 519.04 197.11 C 528.20 189.90 537.37 182.70 546.54 175.49 C 564.61 197.95 578.71 223.51 588.63 250.56 C 577.58 254.33 566.52 258.05 555.47 261.80 C 546.86 238.49 534.64 216.48 519.04 197.11 Z" />
<path  d=" M 82.54 281.05 C 88.85 252.90 100.10 225.93 115.16 201.35 C 124.98 207.64 134.80 213.94 144.61 220.24 C 131.73 241.46 122.05 264.68 116.63 288.93 C 105.27 286.31 93.90 283.69 82.54 281.05 Z" />
<path  d=" M 563.43 289.10 C 574.79 286.46 586.15 283.84 597.51 281.22 C 603.96 309.10 605.55 338.03 602.85 366.49 C 591.22 365.62 579.59 364.72 567.96 363.84 C 570.37 338.90 569.05 313.54 563.43 289.10 Z" />
<path  d=" M 77.24 312.55 C 88.82 314.01 100.40 315.49 111.99 316.96 C 109.63 341.62 111.02 366.67 116.56 390.83 C 105.20 393.46 93.83 396.08 82.47 398.71 C 75.96 370.53 74.45 341.30 77.24 312.55 Z" />
<path  d=" M 563.39 391.00 C 574.76 393.61 586.12 396.24 597.48 398.87 C 591.19 427.03 579.94 453.99 564.89 478.58 C 555.07 472.29 545.26 465.99 535.44 459.70 C 548.31 438.47 557.99 415.25 563.39 391.00 Z" />
<path  d=" M 91.35 429.38 C 102.40 425.60 113.46 421.87 124.52 418.14 C 133.10 441.45 145.33 463.45 160.91 482.82 C 151.75 490.05 142.58 497.25 133.40 504.45 C 115.36 481.97 101.25 456.43 91.35 429.38 Z" />
<path  d=" M 463.82 532.76 C 484.77 519.33 503.44 502.39 519.01 482.99 C 528.18 490.19 537.35 497.39 546.51 504.60 C 528.55 527.09 506.94 546.69 482.70 562.21 C 476.40 552.39 470.09 542.58 463.82 532.76 Z" />
<path  d=" M 155.29 528.71 C 163.33 520.26 171.39 511.84 179.43 503.39 C 197.37 521.04 218.24 535.65 240.86 546.65 C 235.55 557.03 230.24 567.42 224.90 577.79 C 199.29 565.26 175.64 548.70 155.29 528.71 Z" />
<path  d=" M 367.80 567.44 C 392.46 564.52 416.56 557.38 438.98 546.72 C 444.31 557.10 449.63 567.49 454.95 577.89 C 428.92 590.34 400.91 598.76 372.24 602.13 C 370.75 590.57 369.33 579.00 367.80 567.44 Z" />
<path  d=" M 266.44 557.03 C 290.18 565.17 315.29 569.08 340.37 569.18 C 340.06 580.84 339.77 592.49 339.48 604.15 C 310.89 604.01 282.29 599.45 255.23 590.16 C 258.96 579.11 262.72 568.08 266.44 557.03 Z" />
</svg>
<div class="airvalue">
<?php //WEATHER34 AIR QAULITY VALUE 
 if ($aqiweather["aqi"] >250){echo "<indoorpurple>",$aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >200){echo "<indoorred>",$aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >150){echo "<indoorred>",$aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >100){echo "<indoororange>",$aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >50){echo "<indooryellow>",$aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >=0){echo "<indoorgreen>",$aqiweather["aqi"] ;echo "" ; }
 //WEATHER34 air quality description
 if ($aqiweather["aqi"]>300){echo "<br><airdescription><indoorpurple>Very Hazardous</airdescription></oorange>  ";}
 else if ($aqiweather["aqi"]>250){echo "<br><airdescription><indoorpurple>Hazardous</airdescription></oorange>  ";} 
 else if ($aqiweather["aqi"]>200){echo "<br><airdescription><indoorred>Very Unhealthy</airdescription></oorange>  ";}
 else if ($aqiweather["aqi"]>150){echo "<br><airdescription><indoorred>Unhealthy Air Quality </airdescription></oorange>  ";}
 else if ($aqiweather["aqi"]>100){echo "<br><airdescription><indoororange>Unhealthy For Some</airdescription></oorange>  ";} 
 else if ($aqiweather["aqi"]>50){echo "<br><airdescription><indooryellow>Moderate Air Quality</airdescription></oorange>  ";} 
 else if ($aqiweather["aqi"]>=0){echo "<br><airdescription><indoorgreen>Good Air Quality</airdescription></oorange>  ";} 
 ?>
            </div>
            <div class="extraqiinfo">
<?php echo "Station ID:" .$aqiweather["city"]. " ".$aqiweather["state"];?>
<?php echo "Updated:<green> " .$aqiweather["time"] ?></green>
</div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
                </div>
        </div><br>
        <div class="weather34card__stuff-container">           
      
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
 </span> 
<div class="lotemp">
<div class="icon"><img src=css/icons/temp34.svg width=25px></div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container" ><br>
           Based on the common formula temperature & dewpoint recorded realtime from this weather station to calculate an estimated height of the cloudbase.It is not a accurate tool it is a relative indicator.  
           Measured in <orange>feet</orange> or <orange>meters</orange>.        
            
<actual1>Information on Cloudbase </actual1></div></div></div></div>



    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          </div>
 </span> 
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          
          <div class="weather34card__stuff-container" >
           <li><blue>0-50 GOOD</blue></li>
           <li><yellow>50+ MODERATE</yellow></li>
           <li><orange>100+ Unhealthy for Sensitive Groups</orange></li>
           <li><red>150+ Unhealthy </red>(Precautions Required)</li>
           <li><purple>200+ Very Unhealthy</purple> (Critical Conditions)</purple></li>
           <li><maroon>300+ Hazardous</maroon> (Life Threatening)</maroon></li>
           
            
<actual1>Information on Air Quality </actual1>     

<div class="icon"><img src=img/airvisuallogo.svg width=55px style="opacity:0.9" alt="https://www.airvisual.com/api" title="https://www.airvisual.com/api"></div></div></div></div></div>
</section>
<div class="provided">   
&nbsp;
Air Quality data provided by <a href="https://www.airvisual.com/api" title="https://www.airvisual.com/api" target="_blank">https://www.airvisual.com/api</a> --PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
</html>