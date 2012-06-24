// JavaScript Document
var Arr_big	= new Array();
var Arr_small	= new Array();
var Arr_link	= new Array()
var Arr_title	= new Array()
var Arr_context	= new Array()
Arr_big[0]	="/Public/images/01.jpg" //大图 243x273
Arr_small[0]	="/Public/images/s1.jpg" //小图 55x58
Arr_link[0]	=encodeURIComponent("http://www.lanrentuku.com/") //链接
Arr_big[1]	="/Public/images/02.jpg"
Arr_small[1]	="/Public/images/s2.jpg"
Arr_link[1]	=encodeURIComponent("http://www.lanrentuku.com/")
Arr_big[2]	="/Public/images/03.jpg"
Arr_small[2]	="/Public/images/s3.jpg"
Arr_link[2]	=encodeURIComponent("http://www.lanrentuku.com/")
Arr_big[3]	="/Public/images/04.jpg"
Arr_small[3]	="/Public/images/s4.jpg"
Arr_link[3]	=encodeURIComponent("http://www.lanrentuku.com/")
Arr_big[4]	="/Public/images/05.jpg"
Arr_small[4]	="/Public/images/s5.jpg"
Arr_link[4]	=encodeURIComponent("http://www.lanrentuku.com/")
Arr_big[5]	="/Public/images/06.jpg"
Arr_small[5]	="/Public/images/s6.jpg"
Arr_link[5]	=encodeURIComponent("http://www.lanrentuku.com/")
var bigpics	=Arr_big.join("|")
var smallpics	=Arr_small.join("|")
var links	=Arr_link.join("|")
var titles	=Arr_title.join("|")
var context	=Arr_context.join("|")
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="243" height="365">');
document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="/Public/images/swf/xixi.swf"><param name="quality" value="high"><param name="bgcolor" value="#000000">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bigpics='+bigpics+'&smallpics='+smallpics+'&links='+links+'&titles='+titles+'&context='+context+'">');
document.write('<embed src="/Public/images/swf/xixi.swf" wmode="opaque" FlashVars="bigpics='+bigpics+'&smallpics='+smallpics+'&links='+links+'&titles='+titles+'&context='+context+'" menu="false" bgcolor="#000000" quality="high" width="243" height="365" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');	document.write('</object>');
