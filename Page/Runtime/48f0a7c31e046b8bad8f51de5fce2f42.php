<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="order_list.html">返回订单列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 订单明细 </span>
</h1>
<!-- 商品搜索 -->

<div class="list-div" style="margin-bottom: 5px">
	<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="4">
      <div align="center">
        <input name="prev" type="button" class="button" onClick="location.href='order.php?act=info&order_id=';" value="前一个订单" disabled />
        <input name="next" type="button" class="button" onClick="location.href='order.php?act=info&order_id=2';" value="后一个订单"  />
        <input type="button" onclick="window.open('order.php?act=info&order_id=1&print=1')" class="button" value="打印订单" />
    </div></td>
  </tr>
  <tr>
    <th colspan="4">基本信息</th>
  </tr>
  <tr>
    <td width="18%"><div align="right"><strong>订单号：</strong></div></td>
    <td width="34%"><div align="left"><?=$value[0]['order_sn']?></div></td>
    <td width="15%"><div align="right"><strong>订单状态：</strong></div></td>
    <td><div align="left"><?if($value[0]['order_status']==0){echo "未确认";}if($value[0]['order_status']==1){echo "已确认";}if($value[0]['order_status']==2){echo "无效";}?>,<?if($value[0]['pay_status']==0){echo "未付款";}if($value[0]['pay_status']==1){echo "已付款";}?>,<?if($value[0]['shipping_status']==0){echo "未发货";}if($value[0]['shipping_status']==1){echo "配货中";}if($value[0]['shipping_status']==2){echo "发货中";}if($value[0]['shipping_status']==3){echo "已发货";}?></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>购货人：</strong></div></td>
    <td><div align="left"><?=$value[0]['user_id']?> //会员id[ <a href="">显示购货人信息</a> ] [ <a href="">发送/查看留言</a> ]</div></td>
    <td><div align="right"><strong>下单时间：</strong></div></td>
    <td><div align="left">2011-10-12 17:29:18</div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>支付方式：</strong></div></td>
    <td><div align="left"><?=$value[0]['pay_name']?> 支付宝[<a href="" class="special">编辑</a>] (备注: N/A)</div></td>
    <td><div align="right"><strong>付款时间：</strong></div></td>
    <td><div align="left">2011-10-12 17:33:06</div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>配送方式：</strong></div></td>
    <td><div align="left">*</span> [<a href="">编辑</a>]&nbsp;&nbsp;<input type="button" class="button" value="打印快递单"></div> </td>
    <td><div align="right"><strong>发货时间：</strong></div></td>
    <td><div align="left">未发货</div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>发货单号：</strong></div></td>
    <td><div align="left"></div></td>
    <td><div align="right"><strong></strong></div></td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <th colspan="4">其他信息 [<a href="order.php?act=edit&order_id=1&step=other" class="special">编辑</a>]</th>
    </tr>
  <tr>
    <td><div align="right"><strong>发票类型：</strong></div></td>
    <td><div align="left"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right"><strong>发票抬头：</strong></div></td>
    <td><div align="left"></div></td>
    <td><div align="right"><strong>发票内容：</strong></div></td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>客户给商家的留言：</strong></div></td>
    <td colspan="3"><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>缺货处理：</strong></div></td>
    <td><div align="left"><?=$value[0]['how_oos']?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right"><strong>包装：</strong></div></td>
    <td><div align="left"></div></td>
    <td><div align="right"><strong>贺卡：</strong></div></td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>贺卡祝福语：</strong></div></td>
    <td colspan="3"><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>商家给客户的留言：</strong></div></td>
    <td colspan="3"><div align="left"></div></td>
  </tr>
  <tr>
    <th colspan="4">收货人信息 [<a href="order.php?act=edit&order_id=1&step=consignee" class="special">编辑</a>]</th>
    </tr>
  <tr>
    <td><div align="right"><strong>收货人：</strong></div></td>
    <td><div align="left"><?=$value[0]['consignee']?></div></td>
    <td><div align="right"><strong>电子邮件：</strong></div></td>
    <td><div align="left"><?=$value[0]['email']?></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>地址：</strong></div></td>
    <td colspan="3"><div align="left">[<?=$value[0]['country']?>  <?=$value[0]['province']?>  <?=$value[0]['city']?>  <?=$value[0]['district']?>] <?=$value[0]['address']?></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>电话：</strong></div></td>
    <td><div align="left"><?=$value[0]['tel']?></div></td>
    <td><div align="right"><strong>手机：</strong></div></td>
    <td><div align="left"><?=$value[0]['mobile']?></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong>邮编：</strong></div></td>
    <td><div align="left"><?=$value[0]['zipcode']?></div></td>
    <td><div align="right"><strong>最佳送货时间：</strong></div></td>
    <td><div align="left"></div></td>
  </tr>
</table>
</div>

<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="8" scope="col">商品信息 [<a href="order.php?act=edit&order_id=1&step=goods" class="special">编辑</a>]</th>
    </tr>
  <tr>
    <td scope="col"><div align="center"><strong>商品名称 [ 品牌 ]</strong></div></td>
    <td scope="col"><div align="center"><strong>货号</strong></div></td>
    <td scope="col"><div align="center"><strong>价格</strong></div></td>
    <td scope="col"><div align="center"><strong>数量</strong></div></td>
    <td scope="col"><div align="center"><strong>属性</strong></div></td>
    <td scope="col"><div align="center"><strong>库存</strong></div></td>
    <td scope="col"><div align="center"><strong>小计</strong></div></td>
  </tr>
    <tr>
    <td>
        <a href="../goods.php?id=1" target="_blank">测试商品         </a>
        </td>
    <td>ECS000000</td>
    <td>￥10.00元</td>
    <td>1</td>
    <td></td>
    <td>1</td>
    <td><div align="right">￥10.00元</div></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right"><strong>商品总重量：    </strong></div></td>
    <td><div align="right">1千克    </div></td>
    <td>&nbsp;</td>
    <td><div align="right"><strong>合计：</strong></div></td>
    <td><div align="right">￥10.00元</div></td>
  </tr>
</table>
</div>
<!--
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th>费用信息 [<a href="order.php?act=edit&order_id=1&step=money" class="special">编辑</a>]</th>
  </tr>
  <tr>
    <td><div align="right">商品总金额：<strong>￥10.00元</strong>
- 折扣：<strong>￥0.00元</strong>     + 发票税额：<strong>￥10.00元</strong>
      + 配送费用：<strong>￥0.00元</strong>
      + 保价费用：<strong>￥0.00元</strong>
      + 支付费用：<strong>￥0.00元</strong>
      + 包装费用：<strong>￥0.00元</strong>
      + 贺卡费用：<strong>￥0.00元</strong></div></td>
  <tr>
    <td><div align="right"> = 订单总金额：<strong>￥20.00元</strong></div></td>
  </tr>
  <tr>
    <td><div align="right">
      - 已付款金额：<strong>￥20.00元</strong> - 使用余额： <strong>￥0.00元</strong>
      - 使用积分： <strong>￥0.00元</strong>
      - 使用红包： <strong>￥0.00元</strong>
    </div></td>
  <tr>
    <td><div align="right"> = 应付款金额：<strong>￥0.00元</strong>
      </div></td>
  </tr>
</table>
</div>
-->
<div class="list-div" style="margin-bottom: 5px">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="6">操作信息</th>
  </tr>
  <tr>
    <td><div align="right"><strong>操作备注：</strong></div></td>
  <td colspan="5"><textarea name="action_note" style="width:98%;" rows="3"></textarea></td>
    </tr>
  <tr>
    <td><div align="right"></div>
      <div align="right"><strong>当前可执行操作：</strong> </div></td>
    <td colspan="5"> 
	<div align="left">
	<?if($value[0]['order_status']==0){?><input name="to_confirm" type="submit" value="确认" class="button"/><?}?>
	<?if($value[0]['pay_status']==0){?><input name="to_pay" type="submit" value="付款" class="button"/><?}?>
	<?if($value[0]['pay_status']==1){?><input name="to_pay" type="submit" value="设置为未付款" class="button"/><?}?>
	<input name="to_null" type="submit" value="无效" class="button"/>
        <input name="after_service" type="submit" value="售后" class="button" />
	</div>
    </tr>
  <tr>
    <th>操作者：</th>
    <th>操作时间</th>
    <th>订单状态</th>
    <th>付款状态</th>
    <th>发货状态</th>
    <th>备注</th>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:47:00</div></td>
    <td><div align="center">已分单</div></td>
    <td><div align="center">已付款</div></td>
    <td><div align="center">发货中</div></td>
    <td></td>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:46:52</div></td>
    <td><div align="center">已确认</div></td>
    <td><div align="center">已付款</div></td>
    <td><div align="center">已发货</div></td>
    <td></td>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:37:40</div></td>
    <td><div align="center">已分单</div></td>
    <td><div align="center">已付款</div></td>
    <td><div align="center">发货中</div></td>
    <td></td>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:36:19</div></td>
    <td><div align="center">已确认</div></td>
    <td><div align="center">已付款</div></td>
    <td><div align="center">配货中</div></td>
    <td></td>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:33:06</div></td>
    <td><div align="center">已确认</div></td>
    <td><div align="center">已付款</div></td>
    <td><div align="center">未发货</div></td>
    <td>已收到款</td>
  </tr>
    <tr>
    <td><div align="center">pengzhu</div></td>
    <td><div align="center">2011-10-12 17:32:19</div></td>
    <td><div align="center">已确认</div></td>
    <td><div align="center">未付款</div></td>
    <td><div align="center">未发货</div></td>
    <td></td>
  </tr>
  </table>
</div>

<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
