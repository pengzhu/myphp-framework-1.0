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
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 订单查询 </span>
</h1>
<!-- 商品搜索 -->

<div class="addbrand-div" id="listDiv">
	<form action="" method="post" enctype="multipart/form-data" name="searchForm">
  <table cellspacing="1" cellpadding="3" style="width:100%;">
    <tr>
      <td><div align="right"><strong>订单号：</strong></div></td>
      <td colspan="3"><input name="order_sn" type="text" id="order_sn" size="30"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>电子邮件：</strong></div></td>
      <td colspan="3"><input name="email" type="text" id="email" size="40"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>购货人：</strong></div></td>
      <td><input name="user_name" type="text" id="user_name" size="20"></td>
      <td><div align="right"><strong>收货人：</strong></div></td>
      <td><input name="consignee" type="text" id="consignee" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>地址：</strong></div></td>
      <td><input name="address" type="text" id="address" size="20"></td>
      <td><div align="right"><strong>邮编：</strong></div></td>
      <td><input name="zipcode" type="text" id="zipcode" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>电话：</strong></div></td>
      <td><input name="tel" type="text" id="tel" size="20"></td>
      <td><div align="right"><strong>手机：</strong></div></td>
      <td><input name="mobile" type="text" id="mobile" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>所在地区：</strong></div></td>
      <td colspan="3"><select name="country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')">
          <option value="0">请选择...</option>
                    <option value="1">中国</option>
                </select>
        <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
          <option value="0">请选择...</option>
        </select>
        <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')">
          <option value="0">请选择...</option>
        </select>
        <select name="district" id="selDistricts">
          <option value="0">请选择...</option>
        </select></td>
      </tr>
    <tr>
      <td><div align="right"><strong>配送方式：</strong></div></td>
      <td><select name="shipping_id" id="select4">
        <option value="0">请选择...</option>
                <option value="1">市内快递</option>
                <option value="2">城际快递</option>
                <option value="3">邮局平邮</option>
                    </select></td>
      <td><div align="right"><strong>支付方式：</strong></div></td>
      <td><select name="pay_id" id="select5">
        <option value="0">请选择...</option>
                <option value="1">支付宝</option>
                    </select></td>
    </tr>
    <tr>
      <td><div align="right"><strong>下单时间：</strong></div></td>
      <td>
      <input type="text" name="start_time" maxlength="60" size="20" readonly="readonly" id="start_time_id" />
      <input name="start_time_btn" type="button" id="start_time_btn" onclick="return showCalendar('start_time_id', '%Y-%m-%d %H:%M', '24', false, 'start_time_btn');" value="选择" class="button"/>
      ~      
      <input type="text" name="end_time" maxlength="60" size="20" readonly="readonly" id="end_time_id" />
      <input name="end_time_btn" type="button" id="end_time_btn" onclick="return showCalendar('end_time_id', '%Y-%m-%d %H:%M', '24', false, 'end_time_btn');" value="选择" class="button"/>  
      </td>
    </tr>
    <tr>
      <td><div align="right"><strong>订单状态：</strong></div></td>
      <td colspan="3">
        <select name="order_status" id="select9">
          <option value="-1">请选择...</option>
          <option value="0">未确认</option><option value="1">已确认</option><option value="2"><font color="red"> 取消</font></option><option value="3"><font color="red">无效</font></option><option value="4"><font color="red">退货</font></option><option value="5">已分单</option><option value="6">部分分单</option>        </select>
        <strong>付款状态：</strong>        <select name="pay_status" id="select11">
          <option value="-1">请选择...</option>
          <option value="0">未付款</option><option value="1">付款中</option><option value="2">已付款</option>        </select>
        <strong>发货状态：</strong>        <select name="shipping_status" id="select10">
          <option value="-1">请选择...</option>
          <option value="0">未发货</option><option value="3">配货中</option><option value="1">已发货</option><option value="2">收货确认</option><option value="4">已发货(部分商品)</option><option value="5">发货中</option>        </select></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input name="query" type="submit" class="button" id="query" value=" 搜索 " />
        <input name="reset" type="reset" class='button' value=' 重置 ' />
      </div></td>
      </tr>
  </table>
</form>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
