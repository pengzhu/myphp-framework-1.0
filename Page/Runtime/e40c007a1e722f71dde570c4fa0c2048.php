<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我要报名</title>
<link href="/Public/images/20110629/css.css" rel="stylesheet" type="text/css" />
<script>
function viewmypic(mypic,dir) {
	mypic.src=dir;
	document.getElementById(mypic).src=dir;

}
function photo1(dir){photo(1,dir);}
function photo2(dir){photo(2,dir);}
function photo3(dir){photo(3,dir);}
function photo4(dir){photo(4,dir);}
function photo5(dir){photo(5,dir);}
function photo(i,dir){document.getElementById("photo"+i).value=dir;viewmypic("showimg"+i,dir);}
</script>
</head>

<body>
<div id="szggz-top">
<div id="szgkong1"></div>
<div id="szggz0001231">

		<Div class="left w1">
			<div class="c">
				<div style="width:152px; height:159px;"><img src="/Public/images/20110629/img_w.jpg" id="showimg1" width="100%" /></div>
				<div style="width:152px; height:159px;"><img src="/Public/images/20110629/img_w.jpg" id="showimg2" width="100%" /></div>
				<div style="width:152px; height:159px;"><img src="/Public/images/20110629/img_w.jpg" id="showimg3" width="100%" /></div>
				<div style="width:152px; height:159px;"><img src="/Public/images/20110629/img_w.jpg" id="showimg4" width="100%" /></div>
				<div style="width:152px; height:159px; margin-left:90px;"><img src="/Public/images/20110629/img_w.jpg" id="showimg5" width="100%" /></div>
			</div>
		</Div>
		<div class="right w2">
			<div class="c"><form action="/A20110629/reg.html" method="post" name="my">
				<input type="hidden" name="post" value="post" />
				<input type="hidden" name="photo1" id="photo1" value="" />
				<input type="hidden" name="photo2" id="photo2" value="" />
				<input type="hidden" name="photo3" id="photo3" value="" />
				<input type="hidden" name="photo4" id="photo4" value="" />
				<input type="hidden" name="photo5" id="photo5" value="" />
				<table cellpadding="0" cellspacing="0" border="0" style="margin-left:30px">
					<tr>
						<td width="110" align="right">姓名：&nbsp;</td>
						<td width="170" align="left">&nbsp;<input type="text" name="truename" maxlength="30" /></td>
						<td width="90"></td>
						<td width="30"></td>
					</tr>
					<tr>
						<td align="right">网名：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="webname" maxlength="30" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">生日：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="birthday" maxlength="20" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">身高：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="shengao" maxlength="10" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">体重：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="weight" maxlength="10" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">职业：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="job" maxlength="10" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">近期愿望：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="yuanwang" maxlength="50" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">手机号码：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="mobile" maxlength="20" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">联系邮箱：&nbsp;</td>
						<td align="left">&nbsp;<input type="text" name="email" maxlength="100" /></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">照片：&nbsp;<input type="radio" name="photosel" value="1" /></td>
						<td align="left" colspan="3">&nbsp;<iframe src="/Public/upload.html?path=/Upload/20110629/&script=photo1" width="280" height="22" scrolling="no" frameborder="0"></iframe></td>
					</tr>
					<tr>
						<td align="right"><input type="radio" name="photosel" value="2" /></td>
						<td align="left" colspan="3">&nbsp;<iframe src="/Public/upload.html?path=/Upload/20110629/&script=photo2" width="280" height="22" scrolling="no" frameborder="0"></iframe></td>
					
					</tr>
					<tr>
						<td align="right"><input type="radio" name="photosel" value="3" /></td>
						<td align="left" colspan="3">&nbsp;<iframe src="/Public/upload.html?path=/Upload/20110629/&script=photo3" width="280" height="22" scrolling="no" frameborder="0"></iframe></td>
					
					</tr>
					<tr>
						<td align="right"><input type="radio" name="photosel" value="4" /></td>
						<td align="left" colspan="3">&nbsp;<iframe src="/Public/upload.html?path=/Upload/20110629/&script=photo4" width="280" height="22" scrolling="no" frameborder="0"></iframe></td>
					
					</tr>
					<tr>
						<td align="right"><input type="radio" name="photosel" value="5" /></td>
						<td align="left" colspan="3">&nbsp;<iframe src="/Public/upload.html?path=/Upload/20110629/&script=photo5" width="280" height="22" scrolling="no" frameborder="0"></iframe></td>
					
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="left" colspan="3">&nbsp;注意:<input type="radio" name="img1" />表示选择当前图片为封面图
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="left" colspan="3" class="sp"><span>请选择新的照片文件，文件不大于2MB，<br />最多不超过5张。<br />以上资料都需要填写！</span>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="4" class="h"><br />
							<input type="image" src="/Public/images/20110629/fa_b1.jpg" />&nbsp;&nbsp;&nbsp;<img src="/Public/images/20110629/fa_b2.jpg" onclick="document.my.reset()" height="46" width="141" />
						</td>
					</tr>
				</table></form>
			</div>
		</div>

	
</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
