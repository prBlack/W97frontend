<?php include('livedata.php');?>
<?php //homeweatherstation calculate sunrise/set times and differences
		$result = date_sun_info( time(), $lat, $lon );	
		// homeweatherstation sun hours graphic beta August 8th 2016//
		$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat,$lon, $rise_zenith, $UTC);
		$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);
		$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, $rise_zenith, $UTC);
		$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);	
		$tw=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, 96, $UTC);
		$twe=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat,$lon, 96, $UTC);			
		$suns2 =date( 'G.i', $result['sunset'] );
		$sunr2 =date( 'G.i', $result['sunrise']  );
		$suns3 =date( 'G.i', $result['sunset'] );
		$sunr3 =date( 'G.i', $result['sunrise']  );
		$sunrisehour =date( 'G', $result['sunrise'] );
		$sunsethour =date( 'G', $result['sunset'] );
		$twighlight_begin =date( 'G:i', $result['civil_twilight_begin'] );
		$twighlight_end =date( 'G:i', $result['civil_twilight_end'] );
		$now  =date('G.i');
		//$diff3 = $now - $sunr ;	// alternative hours from		
		$diff4 = $suns2 - $sunr2 ; // hours of daylight
		//$diff5 = $suns - $now ; // alternative hours till				    	
        // homeweatherstation to sunset	(1)
        $startdate1=$now; 
        $enddate1=$suns; 
        $diff=strtotime($enddate1)-strtotime($startdate1); 
        $temp=$diff/86400; 
        $days1=floor($temp);  $temp=24*($temp-$days1); 
        $hours1=floor($temp);  $temp=60*($temp-$hours1); 
        $minutes1=floor($temp);  $temp=60*($temp-$minutes1);
        $seconds1=floor($temp); 		
		 // homeweatherstation from sunrise	(2)
        $startdate2=$sunr; 
        $enddate2=$now; 
        $diff=strtotime($enddate2)-strtotime($startdate2); 
        $temp=$diff/86400; 
        $days2=floor($temp);  $temp=24*($temp-$days2); 
        $hours2=floor($temp);  $temp=60*($temp-$hours2); 
        $minutes2=floor($temp);  $temp=60*($temp-$minutes2);
        $seconds2=floor($temp); 		
		 // homeweatherstation to sunrise after (00:00) midnight (3)	
        $startdate3=$now; 
        $enddate3=$sunr; 
        $diff=strtotime($enddate3)-strtotime($startdate3); 
        $temp=$diff/86400; 
        $days3=floor($temp);  $temp=24*($temp-$days3); 
        $hours3=floor($temp);  $temp=60*($temp-$hours3); 
        $minutes3=floor($temp);  $temp=60*($temp-$minutes3);
        $seconds3=floor($temp); 		
		 // homeweatherstation daylight (4)	
        $startdate4=$sunr; 
        $enddate4=$suns; 
        $diff=strtotime($enddate4)-strtotime($startdate4); 
        $temp=$diff/86400; 
        $days4=floor($temp);  $temp=24*($temp-$days4); 
        $hours4=floor($temp);  $temp=60*($temp-$hours4); 
        $minutes4=floor($temp);  $temp=60*($temp-$minutes4);
		$seconds4=floor($temp); 		
		// homeweatherstation daylight (5)	
        $startdate5=$suns; 
        $enddate5=$sunr; 
        $diff=strtotime($enddate5)-strtotime($startdate5); 
        $temp=$diff/86400; 
        $days5=floor($temp);  $temp=24*($temp-$days5); 
        $hours5=floor($temp);  $temp=60*($temp-$hours5); 
        $minutes5=floor($temp);  $temp=60*($temp-$minutes5);
		$seconds5=floor($temp);		
		// homeweatherstation daylight (6)	
        $startdate6=$now; 
        $enddate6=$sunr; 
        $diff=strtotime($enddate6)-strtotime($startdate6); 
        $temp=$diff/86400; 
        $days6=floor($temp);  $temp=24*($temp-$days6); 
        $hours6=floor($temp);  $temp=60*($temp-$hours6); 
        $minutes6=floor($temp);  $temp=60*($temp-$minutes6);
		$seconds6=floor($temp); 		
		// includes conversions added 21st Aug 2016
        $minutesdarkness = sprintf("%02d", $minutes5);
        $minutesdaylight = sprintf("%02d",$minutes4);
        $minutesdayleft = sprintf("%02d",$minutes1);
        $minutesdarkleft = sprintf("%02d",$minutes3);
        $minutesagosunrise = sprintf("%02d",$minutes2);			
		// drive the pie with daylight hours 6th september 2016	
        $dayl1 =$hours4 ;
        $dayl2 =$minutesdaylight;
        $dayl3 = '.' ;
        $daylighthourstoday= $dayl1.$dayl3 .$dayl2 ;
        // drive the pie with darkness hours 6th september 2016			
        $dark1 =$hours5 ;
        $dark2 =$minutesdarkness;
        $dark3 = '.' ;
        $darkhourstonight= $dark1.$dark3 .$dark2 ; 		
		
		$moonangle = time() - $MoonRise  ;	
		
		
		// end homeweatherstation calculations		
		
		
$sunsetsvg ='<svg version="1.1" id="weather34 sunsets" x="0px" y="0px"	width="22px" height="22px" viewBox="0 0 369.2 369.2" style="enable-background:new 0 0 369.2 369.2;" stroke-width="0" fill="currentcolor"><g><g>
		<path d="M181.7,86.05c5.701,0,9.6-3.8,9.6-9.6v-38.2c0-5.7-3.8-9.6-9.6-9.6c-5.8,0-9.6,3.8-9.6,9.6v38.2 C172.2,82.25,176,86.05,181.7,86.05z"/>
		<path d="M283.1,122.45l26.8-26.8c3.801-3.8,3.801-9.6,0-13.4c-3.8-3.8-9.6-3.8-13.399,0l-26.8,26.8c-3.801,3.8-3.801,9.6,0,13.4 C273.5,126.25,279.3,126.25,283.1,122.45z"/>
		<path d="M76.5,219.95h210.399c0-3.8,0-5.699,0-9.6c0-57.4-47.8-105.2-105.2-105.2s-105.2,47.8-105.2,105.2	C76.5,214.25,76.5,216.15,76.5,219.95z"/>
		<path d="M306.1,210.45c0,5.7,3.8,9.601,9.601,9.601h38.199c5.7,0,9.601-3.8,9.601-9.601c0-5.8-3.8-9.6-9.601-9.6H315.7	C311.8,200.85,306.1,206.55,306.1,210.45z"/>
		<path fill="#00a4b4" d="M353.899,258.25H237.2l-23,19.1l-34.4,28.7l-30.6-28.7l-22.9-19.1H9.6c-3.8,0-9.6,3.8-9.6,9.6s5.7,9.6,9.6,9.6h105.2 l66.9,57.4l66.9-57.4h105.2c5.7,0,9.6-3.8,9.6-9.6S359.6,258.25,353.899,258.25z"/>
		<path fill="currentcolor" d="M80.4,122.45c3.8,3.8,9.6,3.8,13.4,0c3.8-3.8,3.8-9.6,0-13.4L67,82.25c-3.8-3.8-9.6-3.8-13.4,0c-3.8,3.8-3.8,9.6,0,13.4 L80.4,122.45z"/>
		<path fill="currentcolor" d="M9.6,219.95h38.2c3.8,0,9.6-3.8,9.6-9.6c0-3.8-3.8-9.601-9.6-9.601H9.6c-5.7,0-9.6,5.7-9.6,9.601 C0.1,216.15,3.9,219.95,9.6,219.95z"/></g>';
$sunrisesvg ='<svg version="1.1" id="weather34 sunrises" x="0px" y="0px"  width="22px" height="22px" viewBox="0 0 369.2 369.2" style="enable-background:new 0 0 369.2 369.2;" stroke-width="0" fill="currentcolor"><g><g>
		<path d="M181.8,117.6c5.7,0,9.601-3.8,9.601-9.6V69.8c0-5.7-3.8-9.6-9.601-9.6c-5.8,0-9.6,3.8-9.6,9.6V108 C172.2,113.8,177.9,117.6,181.8,117.6z"/>
		<path d="M308,241.9c0,5.699,3.8,9.6,9.601,9.6H355.8c5.7,0,9.601-3.8,9.601-9.6c0-5.801-3.8-9.601-9.601-9.601h-38.199 C311.8,232.4,308,238.1,308,241.9z"/>
		<path d="M283.101,154l26.8-26.8c3.8-3.8,3.8-9.6,0-13.4c-3.8-3.8-9.601-3.8-13.4,0l-26.8,26.8c-3.8,3.8-3.8,9.6,0,13.4 C273.601,157.8,281.2,157.8,283.101,154z"/>
		<path d="M78.5,251.5h49.7l55.5-47.8l55.5,47.8H287c0-3.8,0-5.7,0-9.6c0-57.4-47.8-105.2-105.2-105.2 c-57.399,0-105.2,47.8-105.2,105.2C76.6,245.8,76.6,247.7,78.5,251.5z"/>
		<path fill="#00a4b4" d="M353.9,289.8H248.7L181.8,232.4L114.9,289.8H11.5c-5.7,0-9.6,3.8-9.6,9.601c0,5.8,3.8,9.6,9.6,9.6h116.7l22.9-19.1 l34.4-28.7l34.4,28.7l23,19.1h116.7c5.699,0,9.6-3.8,9.6-9.6C365.4,293.6,359.601,289.8,353.9,289.8z"/>
		<path d="M9.6,251.5h38.2c5.7,0,9.6-3.8,9.6-9.6c0-5.801-3.8-9.601-9.6-9.601H9.6C3.9,232.3,0,238,0,241.9 C0.1,247.7,3.9,251.5,9.6,251.5z"/>
		<path d="M80.4,154c3.8,3.8,9.6,3.8,13.4,0c3.8-3.8,3.8-9.6,0-13.4L67,113.8c-3.8-3.8-9.6-3.8-13.4,0c-3.8,3.8-3.8,9.6,0,13.4 L80.4,154z"/>	</g></svg';
$solareclipsesvg2='<svg version="1.1" id="moonphase weather34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 width="12px" height="12px" stroke-width="1.25%" fill="currentcolor" viewBox="0 0 107.112 107.112" style="enable-background:new 0 0 107.112 107.112;"xml:space="preserve"><g>
	<path d="M53.556,0C24.025,0,0,24.025,0,53.557c0,29.531,24.025,53.556,53.556,53.556s53.556-24.024,53.556-53.556
		C107.112,24.025,83.087,0,53.556,0z M86.085,22.621c0.394,0.318,0.438,0.539-0.123,0.664c-0.088-0.084-0.174-0.168-0.262-0.251
		c-0.14-0.162-0.31-0.195-0.515-0.162c-0.258,0.042-0.346-0.108-0.317-0.337c0.026-0.248,0.188-0.317,0.408-0.246
		C85.553,22.379,85.844,22.424,86.085,22.621z M0.75,53.557C0.75,24.439,24.438,0.75,53.556,0.75c2.281,0,4.524,0.162,6.729,0.444
		C66.717,2.81,72.479,6.819,77.574,13.21c0.006,0.003,0.014,0.003,0.02,0.006c0.385,0.227,0.709,0.541,1.227,0.523
		c0.189-0.006,0.539,0.128,0.484,0.572c-0.047,0.369,0.594,0.341,0.619,0.751l0.002,0.001c0.44-0.042,0.709,0.244,0.983,0.518
		c0.138,0.103,0.299,0.188,0.448,0.212c0.355,0.058,0.558,0.235,0.699,0.56c0.111,0.249,0.289,0.445,0.601,0.541
		c0.437,0.133,0.573,0.544,0.471,0.938c-0.104,0.401-0.004,0.676,0.244,0.968c0.613,0.72,0.541,2.103-0.155,2.732
		c-0.037,0.033-0.068,0.071-0.102,0.108c0.977,1.819,1.852,3.697,2.633,5.629c0.046-0.123,0.088-0.246,0.116-0.376
		c0.065-0.308,0.233-0.554,0.596-0.508c0.359,0.046,0.515-0.098,0.615-0.435c0.094-0.306,0.354-0.43,0.69-0.412
		c0.31,0.016,0.486,0.126,0.588,0.429c0.058,0.164,0.193,0.314,0.382,0.535c-0.537-0.671-0.726-1.406-1.027-2.078
		c-0.205-0.46-0.762-0.494-0.887-0.969c-0.123-0.467-0.048-1.015-0.459-1.374c-0.44-0.384-0.214-0.803-0.106-1.219
		c0.028-0.117,0.151-0.13,0.256-0.151c0.02,0.003,0.032,0.014,0.053,0.018c0.016-0.105-0.098-0.168-0.211-0.231v-0.655
		c0.646,0.533,1.256,0.965,1.772,1.486c0.394,0.394,0.894,0.622,1.291,0.992c0.354,0.327,0.134,0.398-0.174,0.451
		c0.004,0.125,0.01,0.25,0.017,0.374c-0.052,0.139-0.105,0.275-0.148,0.415c-0.098,0.314-0.244,0.438-0.523,0.16
		c-0.119-0.117-0.285-0.277-0.43-0.13c-0.156,0.158,0.041,0.307,0.145,0.422c0.248,0.275,0.717,0.46,0.34,0.958
		c-0.014,0.018,0.015,0.099,0.039,0.109c0.689,0.257,0.767,1.233,1.588,1.343c0.285,0.038,0.382,0.229,0.248,0.512
		c-0.106,0.229-0.096,0.475,0.104,0.637c0.229,0.187,0.242-0.128,0.36-0.203c0.087-0.053,0.177-0.041,0.22,0.041
		c0.119,0.222,0.285,0.485,0.099,0.703c-0.269,0.314-0.347,0.587-0.111,0.953c0.111,0.174,0.057,0.314-0.215,0.288
		c-0.424-0.042-0.438,0.307-0.504,0.587c-0.09,0.378,0.186,0.349,0.43,0.444c0.309,0.121,0.416,0.479,0.602,0.75
		c0.301,0.44,0.301,0.955,0.486,1.417c0.08,0.198,0.057,0.418-0.152,0.564c-0.443,0.31-0.549,0.778-0.561,1.273
		c-0.018,0.712-0.182,1.383,0.139,2.14c0.271,0.642,0.779,0.712,1.205,0.947c0.799,0.441,1.08,0.835,0.859,1.712
		c-0.086,0.341-0.09,0.64,0.01,0.974c0.145,0.485,0.41,0.963,0.127,1.5c-0.078,0.152,0.062,0.318,0.195,0.433
		c0.623,0.536,0.625,1.19,0.363,1.896c-0.029,0.054-0.07,0.095-0.127,0.121c-0.386-0.035-0.365-0.474-0.628-0.638
		c-0.094,0.09-0.114,0.224-0.049,0.287c0.813,0.756,0.731,1.739,0.533,2.648c-0.175,0.804-0.875,1.257-1.646,1.533
		c-0.242-0.029-0.312-0.204-0.298-0.401c0.043-0.582-0.327-0.868-0.764-1.118c-0.961-0.551-1.015-0.707-0.67-1.771
		c0.114-0.357,0.262-0.707,0.307-1.085c0.022-0.19,0.074-0.379,0.283-0.446c0.248-0.08,0.313,0.162,0.45,0.276
		c-0.002-0.011,0.011-0.017-0.006-0.029c-0.369-0.275-0.104-0.63-0.119-0.949c-0.004-0.086-0.012-0.171-0.016-0.257
		c0.164-0.303,0.176-0.609-0.088-0.849c-0.189-0.175-0.104-0.381-0.146-0.572c-0.002-0.024-0.01-0.04-0.012-0.062
		c-0.24-0.025-0.479-0.047-0.711-0.1c-0.166-0.038-0.309-0.108-0.414-0.216c-0.053,0.001-0.106,0.006-0.16,0.019
		c-0.049,0.03-0.1,0.049-0.151,0.068c-0.078-0.011-0.136,0.012-0.19,0.037c-0.029,0.133-0.023,0.272-0.031,0.409
		c0.652,4.001,0.984,8.188,0.984,12.569c0,14.647-3.619,27.158-10.863,37.532c-6.063,8.683-13.148,13.718-21.246,15.132
		c-1.596,0.145-3.207,0.23-4.838,0.23C24.439,106.362,0.75,82.674,0.75,53.557z"/></g></svg> ';
$sunsvg='<svg version="1.1" id="weather34 sunrise/set" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612.2 612.2" style="enable-background:new 0 0 612.2 612.2;" xml:space="preserve" width="14px" height="14px" stroke-width="1.25%" fill="currentcolor">
<g>	<g><path d="M329,151.15c3.8,3.8,9.6,3.8,13.4,0c3.8-3.8,3.8-9.6,0-13.4l-26.801-26.8c-3.8-3.8-9.6-3.8-13.399,0
c-3.8,3.8-3.8,9.6,0,13.4L329,151.15z"/><path fill="#ff8841" d="M527.9,279.25c5.699-11.5,7.6-24.9,7.6-40.2c0-57.4-47.8-105.2-105.2-105.2c-42.1,0-76.5,24.9-93.7,59.3
C409.3,198.95,476.2,231.45,527.9,279.25z"/><path d="M531.7,151.15l26.8-26.8c3.8-3.8,3.8-9.6,0-13.4c-3.8-3.8-9.6-3.8-13.4,0l-26.8,26.8c-3.8,3.8-3.8,9.6,0,13.4
C522.1,154.95,527.9,154.95,531.7,151.15z"/><path d="M554.6,239.15c0,5.7,3.801,9.6,9.601,9.6h38.2c5.699,0,9.6-3.8,9.6-9.6c0-5.8-3.8-9.6-9.6-9.6h-38.2
C560.4,229.55,554.6,235.25,554.6,239.15z"/><path d="M430.3,114.85c5.7,0,9.601-3.8,9.601-9.6v-38.2c0-5.7-3.801-9.6-9.601-9.6s-9.6,3.8-9.6,9.6v38.2
C420.8,110.95,424.6,114.85,430.3,114.85z"/><path d="M306,286.95c-122.4,0-223.8,95.6-229.5,218v1.9c0,5.699,3.8,9.6,9.6,9.6c5.8,0,9.6-3.801,9.6-9.6
c5.7-110.9,97.5-200.8,210.3-200.8s204.6,89.9,210.4,200.8c0,5.699,3.8,9.6,9.6,9.6s9.6-3.801,9.6-9.6v-1.9
C529.8,382.549,428.4,286.95,306,286.95z"/><path d="M306,210.45c-164.5,0-300.3,130-306,294.5v1.9c0,5.699,3.8,9.6,9.6,9.6c5.8,0,9.6-3.801,9.6-9.6
c5.7-154.9,132-277.3,286.9-277.3s281.1,122.4,286.9,277.3c0,5.699,3.8,9.6,9.6,9.6c5.801,0,9.601-3.801,9.601-9.6v-1.9
C606.3,340.45,470.5,210.45,306,210.45z"/><path fill="RGBA(0, 143, 161, 1.00)" stroke-width="15%" d="M602.4,535.549H9.6c-5.7,0-9.6,3.801-9.6,9.6c0,5.801,3.8,9.602,9.6,9.602h592.9c5.7,0,9.6-3.801,9.6-9.602
C612.1,539.35,608.2,535.549,602.4,535.549z"/><path d="M564.2,516.45c5.7,0,9.6-3.801,9.6-9.6v-1.9C568,361.549,449.4,248.65,306,248.65c-143.4,0-262,112.899-267.8,256.3v1.9
c0,5.699,3.8,9.6,9.6,9.6c5.8,0,9.6-3.801,9.6-9.6c5.7-132,114.8-239.1,248.6-239.1s242.9,107.1,248.6,239.1
C554.6,512.549,558.5,516.45,564.2,516.45z"/></g></g></svg>';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Home Weather Moon Phase Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:0}body{color:#aaa;overflow:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:29rem;height:20.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34cardinfo{width:29rem;height:11.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:26.5rem;background-color:#2a2e33;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',sans-serif;font-weight:200;line-height:15px}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}
.weather34card__count-text--bigsun{font-size:46px;font-weight:100;font-family:'weathertext',sans-serif;position:absolute;text-align:center;margin-left:55px;top:25%}
.weather34card__count-text--bigsun span{font-size:20px;margin-left:-25px;position:relative;width:200px;border:solid 1px #444;padding:5px;border-radius:4px}.weather34card__count-text--bigs{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;line-height:15px}.date{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;line-height:15px}weather34card__count-text--bigsa{font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:rgba(37,41,45,0);border:solid rgba(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:14px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#db7660}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none;margin-left:70px}
.weather34mooncontainer{width:0;height:0;font-size:0;background:0;margin-left:-55px;position:absolute;margin-top:-55px}
.weather34card__count-text--big{font-size:16px;font-weight:100;font-family:'weathertext',sans-serif;position:absolute;top:180px;margin-left:85px;width:200px;text-align:center;z-index:20}
sup{font-size:12px;color:#9aba2f}mydate{color:#aaa;font-size:12px;margin-left:2%}sunset{color:#ff8841;}
</style>

</head>
<body>
  <section class="weather34title">
   <p> <?php echo $solareclipsesvg2;?> Moon Phase / <?php echo $sunsvg;?> Sun Rise-Sun Set Information</p>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container"><mydate><?php echo $solareclipsesvg2;?>  Moonphase <?php echo date('l jS F');?><br></mydate>
            <div class="weather34card_weather34-wrapper">
            
            <div class="weather34mooncontainer">
              <div id="weather34mooncontainer">
 <div id="Moon34" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);">   
 <div class="shadow"></div>
 <div class="light"></div>
 </div>
            
         <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--big"> 
	<?php $moon = new MoonPhase();$moonage =$moon->age();	
echo " ";{
	
	$day = date('l jS F Y');
if($day===date("l jS F Y",strtotime('2018-1-31'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2018-2-15'))){echo 'Partial Solar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2018-7-13'))){echo 'Partial Solar <orange>Eclipse</orange>>';}
else if($day===date("l jS F Y",strtotime('2018-7-27'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2018-7-28'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2018-8-11'))){echo 'Partial Solar <orange>Eclipse</orange>';}

else if($day===date("l jS F Y",strtotime('2019-1-5'))){echo 'Solar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-1-6'))){echo 'Solar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-1-20'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-1-21'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-7-2'))){echo 'Solar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-7-16'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-7-17'))){echo 'Lunar <orange>Eclipse</orange>';}
else if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Solar <orange>Eclipse</orange>';}
		
	
	// weather34 moonphase no scraping its calculated from the livedata !
	else if ($moonage<1.84566)  {
	echo "<aqivalue1>New Moon </aqivalue1>";}
	else if ($moonage<5.53699) {echo "<aqivalue1>Waxing Crescent</aqivalue1>";} 	
	else if ($moonage<9.22831) {echo "<aqivalue3>First Quarter</aqivalue3>";} 	
	else if ($moonage<12.91963) {echo "<aqivalue1>Waxing Gibbous</aqivalue1>";} 	
	else if ($moonage<16.61096) {echo "<aqivalue1>Full Moon</aqivalue1>";} 	
	else if ($moonage<20.302228) {echo "<aqivalue1>Waning Gibbous</aqivalue1>";}	
	else if ($moonage<23.99361) {echo "<aqivalue1>Last Quarter</aqivalue1>";}	
	else if ($moonage<27.68493) {echo "<aqivalue1>Waning Crescent</aqivalue1>";}		
		else echo "<aqivalue1>New Moon </aqivalue1>";}
		
		

		
		
		
		
		
		
?>
<br>
<?php $date="";$time="";$tzone="$TZ </span>";do_phase($date,$time,$tzone);function do_phase($date,$time,$tzone){$moondata=phase(strtotime($date.' '.$time.' '.$tzone));$MoonIllum=$moondata[1];$MoonIllum=round($MoonIllum,2);$MoonIllum*=100;if($MoonIllum==0){$phase="New Moon";}if($MoonIllum==100){$phase="Full Moon";}echo" Luminance <orange> $MoonIllum% </orange> \n";}?>

	</div>
        </div></div></div></div></div>
            
            
</span>
            </div>
        </div>
        
        
        
        </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container"><mydate><?php echo $sunsvg;?> Sunrise/set <?php echo date('l jS F');?><br></mydate>
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsun">
            
            <?php echo " ";{
	// Sun
	if ($lightLeft) {
	if ($now > $suns2) { echo "$hours3<sup> hrs</sup> : $minutesdarkleft<sup> min</sup> <br><span>Till <orange>Sunrise $sunrisesvg</orange></span>" ;}
	else if ($now < $sunr2) {echo "$hours3<sup> hrs</sup> : $minutesdarkleft<sup> min</sup>   <br><span>Till <orange>Sunrise $sunrisesvg</orange></span>" ;}
	else if ($now < $suns2) {echo "$hours1<sup> hrs</sup> : $minutesdayleft<sup> min</sup>  <br><span>Till <sunset>Sunset $sunsetsvg</sunset></span>" ;}
} else { 
	if ($now > $suns2) { echo "$hours5<sup> hrs</sup> : $minutesdarkness<sup> min</sup>  <br><span>Till <orange>Sunrise $sunrisesvg</orange></span>";}
	else if ($now < $suns2) {echo "$hours4<sup> hrs</sup> : $minutesdaylight<sup> min</sup>  <br><span>Till <sunset>Sunset $sunsetsvg</sunset></span>" ;}}}
?>
            </div>
        
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	
	</div>
        </div>
         
           
       
</section>


<!-- weather34 info moon--->
<section class="weather34cards">
   <div class="weather34cardinfo weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:13px;">
              

<?php echo $info;?> Moon Rise/Set <span>Information</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonrise:
<span style="color:#aaa;font-weight:normal;">
<?php echo  date('D jS-M-Y' . ' ' . $timeFormatShort, $MoonRise ),"\n";?>
<svg id="i-chevron-top" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 20 L16 8 2 20" /></svg>
</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#D46842" stroke="#D46842" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonset: <span style="color:#aaa;font-weight:normal;">
<?php echo date('D jS-M-Y' . ' ' . $timeFormatShort, $MoonSet ),"\n";?>
<svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 12 L16 24 2 12" /></svg>
</span><br>
<?php  // full/new moon for homeweather station  // ?>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg>
Next Full Moon:<span style="color:#aaa;"> <?php  // homeweatherstation fullmoon info output 18th Aug
$now1 =time();$moon1 = new MoonPhase();
echo "";
if ($now1 < $moon1->full_moon()) 
{echo date('D jS-M-Y', $moon1->full_moon() );}
else echo date('D jS-M-Y', $moon1->next_full_moon() );
?></span><br>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /> <path d="M6 6 L26 26" /></svg>
Next New Moon:<?php $moon=new MoonPhase();$nextnewmoon=date('D jS-M-Y',$moon->next_new_moon());echo $nextnewmoon;?>
</span><br /><svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(154, 186, 47, 1.00)" stroke="rgba(154, 186, 47, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> 
<?php // homeweatherstation create an instance of the age of moon
$moon = new MoonPhase();$moonage =round($moon->age(),2);echo "Current Moon cycle is <span style='color:#ff8841'>", round($moonage,0)," days old";?>

            </div>
        </div>
        
        
        
        
    </div>
    <!-- weather34 info sun--->
    <div class="weather34cardinfo weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigsa" style="font-size:13px;">
         <?php echo $info;?> Sun Rise/Set <span>Information</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#9aba2f" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> 
Sunrise: <?php //sunrise
echo '';
if(date('H:i')  > $sunr) {echo "<span style='color:#aaa;'>Tomorrow </span>(" . $tw . ") <span style='color:#ff8841;'>" . date($timeFormatShort, date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_TIMESTAMP, $lat,$lon, $rise_zenith, $UTC)) . "</span>";}
else echo "<span style='color:#aaa;'>Today </span>(" . $tw . ") <span style='color:#ff8841;'>" . date($timeFormatShort, date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, $lat, $lon, $rise_zenith, $UTC)) . "</span>";
?> <svg id="i-chevron-top" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 20 L16 8 2 20" /></svg>
<br><svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(210, 90, 73, 1.00)" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1%"><circle cx="16" cy="16" r="14" />
<path d="M6 6 L26 26" /></svg>
<span style="color:rgba(255, 136, 65, 1.00);"></span> Sunset: <?php //sunset 
echo '';
if(date('H:i')  > $suns) {echo "<span style='color:#aaa;'>Tomorrow <span style='color:rgba(255, 136, 65, 1.00);'>" . date($timeFormatShort, date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_TIMESTAMP, $lat,$lon, $rise_zenith, $UTC)) . "</daylight></span> (" . $twe . ") ";}
else echo "<span style='color:#aaa;'>Today <span style='color:#e9996a;'>" . date($timeFormatShort, date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, $lat, $lon, $rise_zenith, $UTC)) . " (" . $twe . ") ";
?><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 12 L16 24 2 12" /></svg></span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 147, 80, 1.00)" stroke="none)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1%"><circle cx="16" cy="16" r="14" />
<path d="M6 6 L26 26" /></svg> 
<?php // daylight hours
echo " Total Daylight Today <blue> $hours4:$minutesdaylight </blue><br>" ;?>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#716098" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> 
<?php // darkness hours
echo "Total Darkness Overnight <grey> $hours5:$minutesdarkness </grey> ";?>
            </div>
        
        
       
</section>





<div class="provided">   
<a href="#" title="#" target="_blank">Data Provided by <?php echo $stationlocation;?> Home Weather Station</a>

&nbsp;
PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy;<?php echo date('Y');?></a></div>
</body>
<script src='js/jquery.js'></script>
<script>
function isPositive(n){return n>0?1:0>n?-1:void 0}!function(){"use strict";function n(n){return n.valueOf()/S-.5+R}function o(n){return new Date((n+.5-R)*S)}function t(o){return n(o)-A}function e(n,o){return z(M(n)*P(k)-p(o)*M(k),P(n))}function i(n,o){return x(M(o)*P(k)+P(o)*M(k)*M(n))}function a(n,o,t){return z(M(n),P(n)*M(o)-p(t)*P(o))}function r(n,o,t){return x(M(o)*M(t)+P(o)*P(t)*P(n))}function s(n,o){return I*(280.16+360.9856235*n)-o}function d(n){return I*(357.5291+.98560028*n)}function u(n){var o=I*(1.9148*M(n)+.02*M(2*n)+3e-4*M(3*n)),t=102.9372*I;return n+o+t+b}function c(n){var o=d(n),t=u(o);return{dec:i(t,0),ra:e(t,0)}}function h(n,o){return Math.round(n-$-o/(2*b))}function m(n,o,t){return $+(n+o)/(2*b)+t}function g(n,o,t){return A+n+.0053*M(o)-.0069*M(2*t)}function l(n,o,t){return H((M(n)-M(o)*M(t))/(P(o)*P(t)))}function f(n,o,t,e,i,a,r){var s=l(n,t,e),d=m(s,o,i);return g(d,a,r)}function v(n){var o=I*(218.316+13.176396*n),t=I*(134.963+13.064993*n),a=I*(93.272+13.22935*n),r=o+6.289*I*M(t),s=5.128*I*M(a),d=385001-20905*P(t);return{ra:e(r,s),dec:i(r,s),dist:d}}function w(n,o){return new Date(n.valueOf()+o*S/24)}var b=Math.PI,M=Math.sin,P=Math.cos,p=Math.tan,x=Math.asin,z=Math.atan2,H=Math.acos,I=b/180,S=864e5,R=2440588,A=2451545,k=23.4397*I,D={};D.getPosition=function(n,o,e){var i=I*-e,d=I*o,u=t(n),h=c(u),m=s(u,i)-h.ra;return{azimuth:a(m,d,h.dec),altitude:r(m,d,h.dec)}};var W=D.times=[[-.833,"sunrise","sunset"],[-.3,"sunriseEnd","sunsetStart"],[-6,"dawn","dusk"],[-12,"nauticalDawn","nauticalDusk"],[-18,"nightEnd","night"],[6,"goldenHourEnd","goldenHour"]];D.addTime=function(n,o,t){W.push([n,o,t])};var $=9e-4;D.getTimes=function(n,e,a){var r,s,c,l,v,w=I*-a,b=I*e,M=t(n),P=h(M,w),p=m(0,w,P),x=d(p),z=u(x),H=i(z,0),S=g(p,x,z),R={solarNoon:o(S),nadir:o(S-.5)};for(r=0,s=W.length;s>r;r+=1)c=W[r],l=f(c[0]*I,w,b,H,P,x,z),v=S-(l-S),R[c[1]]=o(v),R[c[2]]=o(l);return R},D.getMoon34Position=function(n,o,e){var i=I*-e,d=I*o,u=t(n),c=v(u),h=s(u,i)-c.ra,m=r(h,d,c.dec);return m+=.017*I/p(m+10.26*I/(m+5.1*I)),{azimuth:a(h,d,c.dec),altitude:m,distance:c.dist}},D.getMoon34Illumination=function(n){var o=t(n),e=c(o),i=v(o),a=149598e3,r=H(M(e.dec)*M(i.dec)+P(e.dec)*P(i.dec)*P(e.ra-i.ra)),s=z(a*M(r),i.dist-a*P(r)),d=z(P(e.dec)*M(e.ra-i.ra),M(e.dec)*P(i.dec)-P(e.dec)*M(i.dec)*P(e.ra-i.ra));return{fraction:(1+P(s))/2,phase:.5+.5*s*(0>d?-1:1)/Math.PI,angle:d}},D.getMoon34Times=function(n,o,t){var e=new Date(n);e.setHours(0),e.setMinutes(0),e.setSeconds(0),e.setMilliseconds(0);for(var i,a,r,s,d,u,c,h,m,g,l,f,v,b=.133*I,M=D.getMoon34Position(e,o,t).altitude-b,P=1;24>=P&&(i=D.getMoon34Position(w(e,P),o,t).altitude-b,a=D.getMoon34Position(w(e,P+1),o,t).altitude-b,d=(M+a)/2-i,u=(a-M)/2,c=-u/(2*d),h=(d*c+u)*c+i,m=u*u-4*d*i,g=0,m>=0&&(v=Math.sqrt(m)/(2*Math.abs(d)),l=c-v,f=c+v,Math.abs(l)<=1&&g++,Math.abs(f)<=1&&g++,-1>l&&(l=f)),1===g?0>M?r=P+l:s=P+l:2===g&&(r=P+(0>h?f:l),s=P+(0>h?l:f)),!r||!s);P+=2)M=a;var p={};return r&&(p.rise=w(e,r)),s&&(p.set=w(e,s)),r||s||(p[h>0?"alwaysUp":"alwaysDown"]=!0),p},"function"==typeof define&&define.amd?define(D):"undefined"!=typeof module?module.exports=D:window.SunCalc=D}(),Date.prototype.addHours=function(n){return this.setHours(this.getHours()+n),this};var datetime=(new Date).addHours(0),getMoon34Illumination=SunCalc.getMoon34Illumination(datetime),Moon34Fraction=getMoon34Illumination.fraction,Moon34Phase=getMoon34Illumination.phase,Moon34Angle=getMoon34Illumination.angle,Moon34Rotate=Moon34Angle;isWaxing=isPositive(Moon34Angle),Moon34Size=20.5,zIndex=10,shadowWidth=Moon34Size,shadowHeight=Moon34Size,shadowRadius=Math.abs(50-100*Moon34Fraction),lightMove=(100-100*Moon34Fraction)*isWaxing,shadowMove=100*Moon34Fraction*isWaxing,Moon34Phase>0&&.25>Moon34Phase?$("#Moon34").css({background:"linear-gradient(to bottom,rgba(210,220,230,1) 25%,rgba(200,210,250,1) 100%)"}):Moon34Phase>.25&&.5>Moon34Phase?$("#Moon34").css({background:"linear-gradient(to bottom,RGBA(42, 46, 51, 1.00) 25%,RGBA(42, 46, 51, 1.00) 100%)"}):Moon34Phase>.5&&.75>Moon34Phase?$("#Moon34").css({background:"linear-gradient(to bottom,RGBA(42, 46, 51, 1.00) 25%,RGBA(42, 46, 51, 1.00) 100%)"}):Moon34Phase>.75&&1>Moon34Phase&&$("#Moon34").css({background:"linear-gradient(to bottom,rgba(210,220,230,1) 25%,rgba(200,210,250,1) 100%)"}),$("#Moon34").css({position:"absolute",overflow:"hidden",margin:"0","z-index":zIndex,"border-radius":"50%",width:Moon34Size+"vmin",height:Moon34Size+"vmin",top:"74px",left:"150px","mix-blend-mode":"lighten"}),$(".light").css({position:"absolute",overflow:"hidden",margin:"0 auto","z-index":zIndex+1,"border-radius":shadowRadius+"%/50%",width:shadowWidth+"vmin",height:shadowHeight+"vmin",top:"calc(50% - "+shadowHeight/2+"vmin)",left:"calc( (50% - "+shadowWidth/2+"vmin) - "+lightMove+"%)",background:"linear-gradient(to bottom,rgba(210,220,230,1) 25%,rgba(200,210,250,1) 100%)","box-shadow":"inset 0vmin 0vmin "+.25*Moon34Size+"vmin "+.01*Moon34Size+"vmin rgba(75,50,100,.5)","mix-blend-mode":"lighten"}),$(".shadow").css({position:"absolute",overflow:"hidden",margin:"0 auto","z-index":zIndex+2,"border-radius":shadowRadius+"%/50%",width:shadowWidth+"vmin",height:shadowHeight+"vmin",top:"calc(50% - "+shadowHeight/2+"vmin)",right:"calc( (50% - "+shadowWidth/2+"vmin) - "+shadowMove+"%)",background:"linear-gradient(to bottom,RGBA(42, 46, 51, 0.5) 25%,RGBA(42, 46, 51, 0.5) 100%)"});
</script>