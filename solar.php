<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 											   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

 include('livedata.php');
 include('common.php');
 header('Content-type: text/html; charset=utf-8'); 
 $software    = 'Cumulus <span>Software</span>';
 $designedfor    = '<br>For Cumulus';
 ?>
 
<div class="updatedtime">
<span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>';?></span> <?php echo $weather["time"];?></div>
<br />

<span style="font-size:0px;">
<?php
$sunrise=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);
$sunset=date_sunset(time(), SUNFUNCS_RET_STRING, $lat,$lon, $set_zenith, $UTC);	
echo $weather["uv"]."</span>\n";
if(date('H')>$sunset){echo "<div class=\"uv01\">0<uvi></uvi></div><div class=\"uvtext\"><span>".$lang['Sun']."</span> ".$lang['Below']." </div>";}
else if(date('H')<$sunrise){echo "<div class=\"uv01\">0<uvi></uvi></div><div class=\"uvtext\"><span>".$lang['Sun']."</span> ".$lang['Below']."</div>";}
  else if ($weather["uv"] < 1) {
    echo "<div class=\"uv01\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Nocaution']."</div>";
} else if ($weather["uv"] < 2) {
    echo "<div class=\"uv03\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Wearsunglasses']."</div>";
} else if ($weather["uv"] < 3) {
    echo "<div class=\"uv03\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Wearsunglasses']."</div>";
} else if ($weather["uv"] < 4) {
    echo "<div class=\"uv35\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Stayinshade']."</div>";
} else if ($weather["uv"] < 5) {
    echo "<div class=\"uv35\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Stayinshade']." ".$alert."</div>";
} else if ($weather["uv"] < 6) {
    echo "<div class=\"uv35\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Stayinshade']."  ".$alert."</div>";
} else if ($weather["uv"] < 7) {
    echo "<div class=\"uv67\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Reducetime']."  ".$alert."</div>";
} else if ($weather["uv"] < 8) {
    echo "<div class=\"uv67\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Reducetime']."  ".$alert."</div>";
} else if ($weather["uv"] < 9) {
    echo "<div class=\"uv810\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Minimize']." ".$alert."</div>";
} else if ($weather["uv"] < 10) {
    echo "<div class=\"uv810\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Minimize']." ".$alert."</div>";
} else if ($weather["uv"] < 11) {
    echo "<div class=\"uv810\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Minimize']." ".$alert."</div>";
} else if ($weather["uv"] < 12) {
    echo "<div class=\"uv1112\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Trytoavoid']."  ".$alert."</div>";
} else if ($weather["uv"] < 13) {
    echo "<div class=\"uv1112\">" . $weather["uv"] . "<uvi></uvi></div><div class=\"uvtext\">".$lang['Trytoavoid']."  ".$alert."</div>";
}
?>
<!-- SOLAR --> 
<?php echo "";
//solar radiation
if ($weather["solar"] >999){echo "<div class=\"solarcircleverygood\">" . $weather["solar"] . "<br><span>W/m&sup2;</span></div><div class=\"solatext\"><verygood>".$lang['Good']."</verygood></div>";}
else if ($weather["solar"] >500){echo "<div class=\"solarcirclegood\">" . $weather["solar"] . "<br><span>W/m&sup2;</span></div><div class=\"solatext\"><good>".$lang['Good']."</good></div>";}
else if ($weather["solar"] >300){echo "<div class=\"solarcirclemoderate\">" . $weather["solar"] . "<br><span>W/m&sup2;</span></div><div class=\"solatext\"><moderate>".$lang['Moderate']."</moderate></div>";}
else if ($weather["solar"] >150){echo "<div class=\"solarcirclelow\">" . $weather["solar"] . "<br><span>W/m&sup2;</span></div><div class=\"solatext\"><low>".$lang['Low']."</low></div>";}
else if ($weather["solar"] <150){echo "<div class=\"solarcirclepoor\">" . $weather["solar"] . "<br><span>W/m&sup2;</span></div><div class=\"solatext\"><poor>".$lang['Poor']."</poor></div>";}
?>
</span>
</span>



</div></span>

