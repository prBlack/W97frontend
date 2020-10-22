<?php include_once('livedata.php');header('Content-type: text/html; charset=utf-8');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '
<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#ff8841 stroke=#ff8841 stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg><offline> Offline </offline>';else echo '<svg id=i-info viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 />
</svg>';?></span> <?php echo $weather["time"];?></div>
  <div class="weather34-solarrate-bar">
  <div class="bar bar-1" style="height:100px;max-height:100px;">	
	<?php 	 
	if ($weather["solar"]>1000){echo '<div class="bar bar-inner400" style="max-height:90px; height: ';echo $weather["solar"]/14;}	
	else if ($weather["solar"]>=100){echo '<div class="bar bar-inner400" style="max-height:90px; height: ';echo $weather["solar"]/12;}
	else if ($weather["solar"]>=1){echo '<div class="bar bar-inner400" style="max-height:90px; height: ';echo $weather["solar"]/10;}		
	else if ($weather["solar"]>=0){echo '<div class="bar bar-inner1" style="max-height:90px; height: ';echo $weather["solar"]+1;}	
	?>px;"></div></div></div>
    
 <div class="weather34solarrate"><span><?php echo "";
	if ($weather["solar"]==0)
	echo  "<greyuv>",number_format($weather["solar"] ,0), "</greyuv><solarwm2> W/m&sup2</solarwm2>";
	else if ($weather["solar"]>=1)
	echo  "<orangeuv>",$weather["solar"], "</orangeuv><solarwm2> W/m&sup2</solarwm2>";
?></span>
</div></div>

<div class="weather34-luxrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php 
	$lux = number_format($weather["solar"]/0.0084555,0, '.', '');
	if ($lux>=0){echo '<div class="bar bar-inner5" style="max-height:90px;height: ';	
	echo $lux/700+0.7;}?>px;">
    </div></div></div>
 <div class="weather34luxrate"><span><?php 
 $b="--";if($lux==$b){$lux = "N/A" ;}
echo "<luxrate> ",$lux,'<span> Lux</span> </luxrate>';  
?> </span></div>

<div class="weather34i-uvrate-bar">
    <div class="bar bar-1" style="height:100px;max-height:100px;"> 
    <?php 
	if ($weather["uv"]>=10){echo '<div class="bar bar-inner10" style="max-height:95px; height: ';}	
	else if ($weather["uv"]>=8){echo '<div class="bar bar-inner8" style="max-height:95px; height: ';}	
	else if ($weather["uv"]>=5){echo '<div class="bar bar-inner5" style="max-height:95px; height: ';}	
	else if ($weather["uv"]>=3){echo '<div class="bar bar-inner3" style="max-height:95px; height: ';}	
	else if ($weather["uv"]>=0){echo '<div class="bar bar-inner" style="max-height:95px; height: ';}	
	echo $weather["uv"]*8+1;?>px;">
    </div></div></div>
 <div class="weather34iuvrate"><?php 
 if ($weather["uv"]>=10){echo  "<purpleuv>",number_format($weather["uv"] ,1), "<br><span>UVI</span></purpleuv>";}
	else if ($weather["uv"]>=8){echo  "<reduv>",number_format($weather["uv"] ,1), "<br><span>UVI</span></reduv>";}
	else if ($weather["uv"]>=5){echo  "<orangeuv>",number_format($weather["uv"] ,1), "<br><span>UVI</span></orangeuv>";}
	else if ($weather["uv"]>=3){echo  "<yellow>",number_format($weather["uv"] ,1), "<br><span>UVI</span></yellow>";}
	else if ($weather["uv"]>=0){echo  "<greenuv>",number_format($weather["uv"] ,1), "<br><span>UVI</span></greenuv>";}
	else if ($weather["uv"]>=0){echo  "<greyuv>",$weather["uv"], "<br><span>UVI</greyuv>";}
?>
 </span></div>  