<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	转国籍列表
</title><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><link rel="stylesheet" type="text/css" href="http://admin.126play.com:8383/Public/css/style.css" />
      <style type="text/css">
      .red{color:red}
      .green{color:green}
</style>
<script type="text/javascript" src="http://act.126play.com/Public/js/jquery-1.5.js"></script>
</head>
<body>
    <form id="form1" name="form1">
	<div>

    <div style="text-align:center"><table style="text-align:left"  border="0" width="100%" cellpadding="2" cellspacing="1" class="table">
    <tr><th colspan="2" style="text-align:center" >搜索</th></tr>
    <tr><td style="padding-left:20px">
     <input type="button" class="input" value="未受理" onclick="ccoediv('未受理','')" />&nbsp;&nbsp;
     <input type="button" class="input" value="已受理" onclick="ccoediv('已受理','')" />&nbsp;&nbsp;
	 <input type="button" class="input" value="拒绝受理" onclick="ccoediv('拒绝受理','')" />&nbsp;&nbsp;
	<input type="text" class="input" id="vvri" value="" />
	 <input type="button" class="input" value="搜索帐号" onclick="ccoediv1()" />&nbsp;&nbsp;
	 <a href="http://act1.126play.com/A20110818/cuecopi1iuye21ccoe.html">返回列表</a>
    
    </td></tr>
       
            
            <script type="text/javascript">
            function search()
            {
                var id = document.getElementById("id");
                var title = document.getElementById("title");
                var cate =  document.getElementById("cate");
                var isTop =  document.getElementById("isTop");

				var url = "?p=1";
                if(id.value != "") url += "&id="+id.value+"";
                if(title.value != "") url += "&title="+title.value+"";
                if(cate.value != "0") url += "&cate="+cate.value+"";
                if(isTop.value != -1) url += "&isTop="+isTop.value+"";
				//alert(url);
				window.location.href = "/Newpanduola/Qa/nlist"+url;
            }
            </script>
            
    </table></div><br />
	<div id="ccoedivid">
     <table id="TableList" border="0" width="100%" cellpadding="2" cellspacing="1" class="table">
     <tr><th>帐号</th><th>密码</th><th>四位安全码</th><th>原来的国家</th><th>需要转换的国家</th><th>区服</th><th>角色名</th><th>状态</th><th>操作</th></tr>
    <volist name="list" id="list">
	<?foreach($c_nat as $c_value){
	echo "<tr><td align='center'>".$c_value['loginid']."</td><td align='center' id='".$c_value['loginid']."-".$c_value['id']."'><a onclick=ccoe('".$c_value['loginid']."','".$c_value['id']."')>点击查看密码</a></td><td align='center' id='".$c_value['loginid']."-user-".$c_value['id']."'><a onclick=mima('".$c_value['loginid']."','".$c_value['id']."')>查看安全码</a></td><td align='center'>".$c_value['before_nat']."</td><td align='center'>".$c_value['after_nat']."</td><td align='center'>".$c_value['server_nat']."</td><td align='center'>".$c_value['name']."</td><td align='center' id='".$c_value['loginid']."_".$c_value['id']."'>".$c_value['statu']."</td><td align='center'><a onclick=ccoeid('".$c_value['id']."',1,'".$c_value['loginid']."')>已受理</a> / <a onclick=ccoeid('".$c_value['id']."',2,'".$c_value['loginid']."')>拒绝受理</a></td></tr>";
	}?>
	
	</volist>
	
    <tr>
        <td colspan="12">
        <span style="padding-left:100px"></span>
        </td>
        </tr>
        <tr><td height="30" align="center" colspan="12"><?for($k=1;$k<=$_SESSION['page'];$k++){echo "<a style='cursor:pointer;' onclick=pageid('".$k."','page_ccid')>[".$k."]</a> ";}?> 总数据：<?=$_SESSION['count_nat']?> </td></tr>
    </table>
	
	</div>
</div>
<script>
function mima(i,j){
$.post("/A20110818/mima.html",{loginid:i},function(data){$("#"+i+"-user-"+j).html(data)});
}

function ccoe(i,j){
$.post("/A20110818/cuecopi1iuye21ccoeid.html",{loginid:i},function(data){$("#"+i+"-"+j).html(data)});
}
function pageid(i,j){
	$.post("/A20110818/cuecopi1iuye21ccoeiddiv.html",{pageid:i,page_id:j},function(data){$("#ccoedivid").html(data)});
}
function ccoeid(i,j,k){
	if(j==1){
		$.post("/A20110818/cuecopi1iuye21ccoeid.html",{cid:i,value:"已受理"},function(data){$("#"+k+"_"+i).html(data)});
	}
	if(j==2){
		$.post("/A20110818/cuecopi1iuye21ccoeid.html",{cid:i,value:"拒绝受理"},function(data){$("#"+k+"_"+i).html(data)});
	}
}
function ccoediv(i,g){
$.post("/A20110818/cuecopi1iuye21ccoeiddiv.html",{statuid:i,pageid:g},function(data){$("#ccoedivid").html(data)});
}
function ccoedivlogin(i,g){
$.post("/A20110818/cuecopi1iuye21ccoeiddiv.html",{loginid:i,pageid:g},function(data){$("#ccoedivid").html(data)});
}
function ccoedivpage(i,g){
$.post("/A20110818/cuecopi1iuye21ccoeiddiv.html",{page_id:i,pageid:g},function(data){$("#ccoedivid").html(data)});
}
function ccoediv1(){
var i=$("#vvri").val();
if(i==""){return;};
$.post("/A20110818/cuecopi1iuye21ccoeiddiv.html",{loginid:i,pageid:""},function(data){$("#ccoedivid").html(data)});
}
</script>
</form>
<script type="text/javascript">
function DelBat(){
	var items="0";
	var obj = document.form1;
	for(var i=0;i<obj.elements.length;i++){
		if(obj.elements[i].type=="checkbox"&&obj.elements[i].checked==true&&obj.elements[i].name!="chkAll"){
			items+=","+obj.elements[i].value;
		}
	}
	if(items=="0"){
		alert("至少选择一项进行操作！"); 
	}
	else{
		var url='/Newpanduola/Qa/del/id/'+items; location.href=url;
	}
}

function CheckAll(form) 
{
    for (var i=0;i<form.elements.length;i++)    
    {
        var e = form.elements[i];
        if (e.name != 'chkAll')  
        {     
            e.checked = form.chkSelectAll.checked; 
        }
    }
} 
</script>
</body>
</html>
