<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>Upload</title>
</head>
<body style="margin:0px; padding:0px; font-size:12px;background:transparent">
<form name="form1" method="post" action="/Web/Public/upload.html" id="form1" enctype="multipart/form-data">
	<input type="hidden" name="post" value="post" />
	<input type="hidden" name="path" value="<?=$path1?>" />
	<input type="hidden" name="script" value="<?=$script?>" />
	<input id="File1" type="file" name="files" class="input" style="width:220px;"/>
	&nbsp;
	 <input type="submit" name="btnUpLoad" value="上传" id="btnUpLoad" />
</form>
</body>
</html>