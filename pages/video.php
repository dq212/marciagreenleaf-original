<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.vidLabel {
	font-family: Arial, sans-serif;
	font-size: 10px;
	color: #666666;
	line-height:1em;
}
-->
</style>
</head>

<body onload="MM_preloadImages('../imgs/vidThumb_1_over.gif','../imgs/vidThumb_2_over.gif','../imgs/vidThumb_3_over.gif','../imgs/vidThumb_4_over.gif','../imgs/vidThumb_5_over.gif','../imgs/vidThumb_6_over.gif')">

<!-- BEGIN CONTENT DIV -->
	<div id="content" class="bodyTxt" style="float:right; width:680px; padding-top:10px; background-color:#f2f2f2">

	<div id ="thumbHolder" style="float:right; padding-top:0px;">

	<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/What_is_Hypnosis_Final.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image1","","../imgs/vidThumb_1_over.gif",1)"><img src="../imgs/vidThumb_1.gif" name="Image1" width="70" height="47" border="0" id="Image1" /><br/></a>&nbsp;<span class="vidLabel">What is Hypnosis?</span>
	</div>

	<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/The_Physiology_of_Hypnosis_Final.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image2","","../imgs/vidThumb_2_over.gif",1)"><img src="../imgs/vidThumb_2.gif" name="Image2" border="0" id="Image2" /><br/></a>&nbsp;<span class="vidLabel">The Physiology of Hypnosis</span>
	</div>

	<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/Short_Term_Therapy_Final.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image3","","../imgs/vidThumb_3_over.gif",1)"><img src="../imgs/vidThumb_3.gif" name="Image3" border="0" id="Image3" /><br/></a>&nbsp;<span class="vidLabel">Short-Term Therapy</span>
	</div>

	<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/The_Golfer_Final.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image4","","../imgs/vidThumb_4_over.gif",1)"><img src="../imgs/vidThumb_4.gif" name="Image4" width="70" height="47" border="0" id="Image4" /><br/></a>&nbsp;<span class="vidLabel">The Golfer</span></div>
	
		<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/Im_in_Control.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image6","","../imgs/vidThumb_6_over.gif",1)"><img src="../imgs/vidThumb_6.gif" name="Image6" width="70" height="47" border="0" id="Image6" /><br/></a>&nbsp;<span class="vidLabel">I'm in Control</span></div>

	<div style="position:relative; padding-bottom:10px;">
	<a href="main.php?pageName=video&amp;selectedVid=../videos/MG_2.mov" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage("Image5","","../imgs/vidThumb_5_over.gif",1)"><img src="../imgs/vidThumb_5.gif" name="Image5" width="70" height="47" border="0" id="Image5" /><br/></a>&nbsp;<span class="vidLabel">A Conversation with <br/>&nbsp;Marcia Greenleaf</span></div>
	</div>


<?PHP

$selectedVId = isset($_GET['selectedVid'])? $_GET['selectedVid'] : '../videos/MG_2.mov';


showVid($selectedVId);
?>

<?PHP
echo '</div>';

//include "footer.php";
?>


<?PHP
function showVid($activeVid) {
	
	echo '<video width="480" height="360" controls>
  <source src="'.$activeVid.'.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>';
}
	
	/*echo '<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="480" height="404">
  <param name="movie" value="'. $activeVid.'".swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <param name="BGCOLOR" value="#f2f2f2" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="'. $activeVid.'".swf" width="480" height="404">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <param name="BGCOLOR" value="#f2f2f2" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
';*/

//end of function
?>



</body>
</html>

/* VIDEOS ON YOUTUBE */
/* https://youtu.be/faEXSBwK24s (I'm in Control)

https://youtu.be/1ijxld77EoE (M Greenleaf)

https://youtu.be/CV4sOMteKR4 (Short Term Therapy)

https://youtu.be/9yCmJQdFpxQ (The Golfer)

https://youtu.be/QgwVYruevjk (The Physiology of Hyponosis)

https://youtu.be/MPApbuBRrp8 (What is Hypnosis?)

 */
