<?php include_once('../settings.php');?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Home Weather Station Information</title>
           <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
<div style="margin-left:0px;">
    <div class="card">
  <div class="image">
   <span class="title">Creative Commons License</span>
   
  </div>
  <div class="content">
          <p>Creative Commons License<br><br>
		 <svg id="i-info" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> Under the following terms:<br>

Attribution — You must give appropriate credit, provide a <a href="#" title="Attribution-NonCommercial 4.0 International" target="_blank"><svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
</svg> link</a><br>to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
No additional restrictions — You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.
  </div>
  <div class="action">&copy; <?php 
	date_default_timezone_set($TZ);
	echo date("Y"); ?>
  </div>
</div></div>

<div class="card2" style="margin-left:350px;">
  <div class="image">
   <span class="title">Creative Commons License</span>
  </div>
  <div class="content">
  <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><center><img alt="Creative Commons License" style="border-width:0" src="cclicence.png" /></center></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">HOME WEATHER STATION TEMPLATE</span><br> by <a xmlns:cc="https://creativecommons.org/licenses/by-nc/4.0/" href="https://weather34.com/homeweatherstation/index.html" property="cc:attributionName" rel="cc:attributionURL">Brian Underdown</a><br>is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/">Attribution-NonCommercial 4.0 International</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://weather34.com/homeweatherstation/index.html" rel="dct:source">https://weather34.com/homeweatherstation</a>.

          </p>
  </div>
  <div class="action">&copy; <?php 
	date_default_timezone_set($TZ);
	echo date("Y"); ?>
  </div>
</div>

  </body>
</html>
