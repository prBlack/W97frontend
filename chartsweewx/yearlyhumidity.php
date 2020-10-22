<?php
include('/var/www/html/common.php');	
	####################################################################################################
	#	WUDATACHARTS by BRIAN UNDERDOWN 2016                                                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('/var/www/html/settings.php');include('conversion.php');include('../settings1.php');	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>HUMIDITY DATABASE CHART</title>	
		<script src=js/jquery.js></script>
		<script src=canvasJs.js></script>
		
	';
	
	$date= date('D jS Y');	$weatherfile = date('Y');	?>
    <br>	
	<script type="text/javascript">
		// today temperature
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "/chartsweewxdata/<?php echo $weatherfile;?>.txt",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints1.push({label:moment(rowData[0]).format('MMM'),y:<?php echo $temperatureconv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints2.push({label:moment(rowData[0]).format('MMM'),y:parseFloat(rowData[8])});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "RGBA(37, 41, 45, 0.9)",
		 animationEnabled: true,
		
		title: {
            text: "<?php echo $stationName ;?> <?php echo $lang['Temperature'] ;?> (<?php echo $tempunit ;?>) - <?php echo $lang['Humidity'] ;?> (<?php echo "%" ;?>) <?php echo date('Y') ;?>",
            fontSize: 11,
			fontColor:' #ccc',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "RGBA(37, 41, 45, 0.9)",			   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
			   
    
 },
		axisX: {
			gridColor: "RGBA(64, 65, 66, 0.8)",
		    labelFontSize: 10,
			labelFontColor:' #ccc',
			lineThickness: 0.5,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			interval:36,
			minimum:0,
			intervalType : "day",
			
			},
			
		axisY:{
			title: "<?php echo "Temperature" ;?> <?php echo $tempunit ;?> ",
		titleFontColor: "#ccc",
		titleFontSize: 10,
        titleWrap: true,
		margin: 10,
		lineThickness: 0.5,		
		gridThickness: 0,		
        includeZero: false,
		gridColor: "RGBA(64, 65, 66, 0.8)",
		labelFontSize: 11,
		labelFontColor:' #ccc',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		},
		
		axisY2:{
			title: "<?php echo "Humidity" ;?> (%) ",
		titleFontColor: "#ccc",
		titleFontSize: 10,
        titleWrap: false,
		margin: 0,
		lineThickness: 0.5,		
		gridThickness: 1,		
        includeZero: false,
		gridColor: "RGBA(64, 65, 66, 0.8)",
		labelFontSize: 11,
		labelFontColor:' #ccc',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		},
		


	  
	  
	 



	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#ccc",
  
 },
		
		
		data: [
		{
			//type: "spline",
			type: "splineArea",
			color:"#ff9350",
			markerSize:2,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",
			name:" <?php echo $lang['Temperature'] ;?> ",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# <?php echo $tempunit ;?>",
			
		},
		{
			type: "spline",
			color:"#00A4B4",
			markerSize:2,
			showInLegend:true,
			legendMarkerType: "circle",
			axisYType: "secondary",
			axisYIndex: 2,
			lineThickness: 2,
			markerType: "circle",
			name:"<?php echo $lang['Humidity'] ;?>",
			dataPoints: dataPoints2,
			yValueFormatString: "# '%'",
			
		}

		]
		});

		chart.render();
	}
});

    </script>
    
</head>

<body>
<style>
a {color:#ccc;
text-decoration:none; }
body {background:none;font-size:12px;}
</style>
<div style="width:auto;border-radius:5px;background:RGBA(37, 41, 45, 1.00);padding:0px;margin-left:5px;font-size: 12px;">
<div id="chartContainer" style="height: 375px; width: auto;margin-left:0px;border:0px solid rgba(153,153,153,1);border-radius:4px;font-size: 12px;color:#fff;"></div></div>
<span style="position:absolute;color:#fff;font-size:10px;font-family:arial;padding-top:5px;margin-left:25px;">
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="http://weewx.com" title="WeeWX" target="_blank"><?php echo $creditsmysql ;?> <img src="../img/weewx.png" width="20"></a>
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="http://canvasjs.com" title="http://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a>

&nbsp;

</body></html>
