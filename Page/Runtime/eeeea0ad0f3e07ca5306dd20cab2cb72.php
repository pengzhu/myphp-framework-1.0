<?if($page_ccid!=""){?>
 <table id="TableList" border="0" width="100%" cellpadding="2" cellspacing="1" class="table">
     <tr><th>帐号</th><th>密码</th><th>原来的国家</th><th>需要转换的国家</th><th>区服</th><th>角色名</th><th>状态</th><th>操作</th></tr>
	<?
		foreach($act_value as $a_value){
		echo "<tr><td align='center'>".$a_value['loginid']."</td><td align='center' id='".$a_value['loginid']."'><a onclick=ccoe('".$a_value['loginid']."')>点击查看密码</a></td><td align='center'>".$a_value['before_nat']."</td><td align='center'>".$a_value['after_nat']."</td><td align='center'>".$a_value['server_nat']."</td><td align='center'>".$a_value['name']."</td><td align='center' id='".$a_value['loginid']."_".$a_value['id']."'>".$a_value['statu']."</td><td align='center'><a onclick=ccoeid('".$a_value['id']."',1,'".$a_value['loginid']."')>已受理</a> / <a onclick=ccoeid('".$a_value['id']."',2,'".$a_value['loginid']."')>拒绝受理</a></td></tr>";
		}
	?>

	<tr>
        <td colspan="12">
        <span style="padding-left:100px"></span>
        </td>
        </tr>
        <tr><td height="30" align="center" colspan="12"><?for($k=1;$k<=$_SESSION['page_size'];$k++){echo "<a style='cursor:pointer;' onclick=ccoedivpage('".$page_ccid."','".$k."')>[".$k."]</a> ";}?> 总数据：<?=$count_value?>
		</td></tr>
    </table>
<?}?>
<?if($statu_id!=""){?>
 <table id="TableList" border="0" width="100%" cellpadding="2" cellspacing="1" class="table">
     <tr><th>帐号</th><th>密码</th><th>四位安全码</th><th>原来的国家</th><th>需要转换的国家</th><th>区服</th><th>角色名</th><th>状态</th><th>操作</th></tr>
	<?
		foreach($act_value as $a_value){
		echo "<tr><td align='center'>".$a_value['loginid']."</td><td align='center' id='".$a_value['loginid']."'><a onclick=ccoe('".$a_value['loginid']."')>点击查看密码</a></td><td align='center'>".$a_value['before_nat']."</td><td align='center'>".$a_value['after_nat']."</td><td align='center'>".$a_value['server_nat']."</td><td align='center'>".$a_value['name']."</td><td align='center' id='".$a_value['loginid']."_".$a_value['id']."'>".$a_value['statu']."</td><td align='center'><a onclick=ccoeid('".$a_value['id']."',1,'".$a_value['loginid']."')>已受理</a> / <a onclick=ccoeid('".$a_value['id']."',2,'".$a_value['loginid']."')>拒绝受理</a></td></tr>";
		}
	?>

	<tr>
        <td colspan="12">
        <span style="padding-left:100px"></span>
        </td>
        </tr>
        <tr><td height="30" align="center" colspan="12"><?if($_SESSION['page_size']>=2){for($k=1;$k<=$_SESSION['page_size'];$k++){echo "<a style='cursor:pointer;' onclick=ccoediv('".$statu_id."','".$k."')>[".$k."]</a> ";}}?> 总数据：<?=$count_value?>
		</td></tr>
    </table>
<?}?>
<?if($login_id!=""){?>
 <table id="TableList" border="0" width="100%" cellpadding="2" cellspacing="1" class="table">
     <tr><th>帐号</th><th>密码</th><th>原来的国家</th><th>需要转换的国家</th><th>区服</th><th>角色名</th><th>状态</th><th>操作</th></tr>
	<?
		foreach($act_value as $a_value){
		echo "<tr><td align='center'>".$a_value['loginid']."</td><td align='center' id='".$a_value['loginid']."'><a onclick=ccoe('".$a_value['loginid']."')>点击查看密码</a></td><td align='center'>".$a_value['before_nat']."</td><td align='center'>".$a_value['after_nat']."</td><td align='center'>".$a_value['server_nat']."</td><td align='center'>".$a_value['name']."</td><td align='center' id='".$a_value['loginid']."_".$a_value['id']."'>".$a_value['statu']."</td><td align='center'><a onclick=ccoeid('".$a_value['id']."',1,'".$a_value['loginid']."')>已受理</a> / <a onclick=ccoeid('".$a_value['id']."',2,'".$a_value['loginid']."')>拒绝受理</a></td></tr>";
		}
	?>

	<tr>
        <td colspan="12">
        <span style="padding-left:100px"></span>
        </td>
        </tr>
        <tr><td height="30" align="center" colspan="12"><?if($_SESSION['page_size']>=2){for($k=1;$k<=$_SESSION['page_size'];$k++){echo "<a style='cursor:pointer;' onclick=ccoedivlogin('".$login_id."','".$k."')>[".$k."]</a> ";}}?> 总数据：<?=$count_value?>
		</td></tr>
    </table>
<?}?>