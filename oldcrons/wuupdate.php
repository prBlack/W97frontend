<?php
include_once('../settings1.php');include_once('../settings.php');
if(file_exists('darksky.txt')&&time()- filemtime('darksky.txt')>3600){
$json = file_get_contents('https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang='.$language.'&units='.$darkskyunit.'');
$data = json_encode($json);
$file = 'darksky.txt';
file_put_contents($file, $json);}
?>
<?php
// notification earthquake  added 29th July 2016 EVERY 30 MINUTES //
//*** worldwide and local 500km  moderate / significant earthquakes home weather station***//
$json4 = file_get_contents('https://earthquake-report.com/feeds/recent-eq?json');
$data4 = json_encode($json4);
$file4 = 'eqnotification.txt';
file_put_contents($file4, $json4);
?>

<?php
// extras added Updated 26 April 2017 //
//***k-index and solar data for home weather station***//
//k-index	  
$json5 = file_get_contents('https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json');
$data5 = json_encode($json5);
$file5 = 'kindex.txt';
file_put_contents($file5, $json5);

// air quality index Purple Air
if ($purpleairhardware=='yes'){
$json8 = file_get_contents("https://www.purpleair.com/json?show=".$purpleairID."");
$data8 = json_encode($json8);
$file8 = 'purpleair.txt';
file_put_contents($file8, $json8);}


?>
<?php 
// daily //
//***get station id weather every hour for home weather station***//
$json1 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&day&month&year&graphspan=day&format=1&units='.$unit.' ');
$data1 = json_encode($json1);
$file1 = '../chartswudata/'.date('dmY').'.txt';
file_put_contents($file1, $json1);
// month wu data //
//***get station id weather every hour for home weather station***//
$json2 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=month&year=year&month=month&format=1&units='.$unit.' ');
$data2 = json_encode($json2);
$file2 = '../chartswudata/'.date('mY').'.txt';
file_put_contents($file2, $json2);
// get wu year data //
//***get station id weather every hour for home weather station***//
$json3 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=year&year=&format=1&units='.$unit.' ');
$data3 = json_encode($json3);
$file3 = '../chartswudata/'.date('Y').'.txt';
file_put_contents($file3, $json3);
?>
