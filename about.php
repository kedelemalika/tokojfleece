<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/imghover.css" />
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
</head>
<body onload="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');">
<table width="455" height="224" align="center">
	<tr>
	  <td width="455" height="218" align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="455" height="216" id="FLVPlayer">
        <param name="movie" value="FLVPlayer_Progressive.swf" />
        <param name="salign" value="lt" />
        <param name="quality" value="high" />
        <param name="scale" value="noscale" />
        <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=flash/wow&autoPlay=false&autoRewind=false" />
        <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=flash/wow&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="455" height="216" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />        
</object></td>
  </tr>
</table>
<table width="445" height="404" align="center" cellpadding="0" cellspacing="2" bordercolor="#000000" bgcolor= transparent>
<tr> <td colspan="5" align="center">Welcome To About Page, Grafansa .... !!!</td>
  <tr>
    <td width="98"><span class="zoom"><img src="images/images_friend/CameraZOOM-20130320122916435.jpg"width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/CameraZOOM-20130320122948302.jpg" width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/CameraZOOM-20130320123227869.jpg" width="144" height="98" /></span></td>
  </tr>
  <tr>
    <td height="98"><span class="zoom"><img src="images/images_friend/CameraZOOM-20130320123500203.jpg" width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/CameraZOOM-20130414055752736.jpg" width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/IMG_20130405_150936.jpg" width="144" height="98" /></span></td>
  </tr>
  <tr>
    <td height="98"><span class="zoom"><img src="images/images_friend/5.jpg" width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/3.jpg" width="144" height="98" /></span></td>
    <td><span class="zoom"><img src="images/images_friend/6.jpg" width="144" height="98" /></span></td>
  </tr>
  <tr>
    <td height="98">&nbsp;</td>
	<td><span class="zoom"><img src="images/images_friend/15.jpg" width="144" height="98" /></span></td>
	<td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
