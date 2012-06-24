<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>《潘多拉》精英主题公会</title>
<link type="text/css" rel="stylesheet" href="/Public/images/20110715/css.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
var my = new Array();
$(document).ready(function(){
	for(var i=1;i<=$("table").length;i++){
		$("#table"+i).css("display","none");
		my[i]=0;
	}
	$("#table1").css("display","");
	my[1]=1;
});
function abc(i){
	if(i==1){
		if(my[1]==1){
		return;
		}else{
			for(var j=1;j<=$("table").length;j++){
				if(my[j]==1){
					$("#table"+j).fadeOut(200);
					my[j]=0;
					
					$("#table"+(j-1)).fadeIn(200);
					my[j-1]=1;
					break;
				}
			}
		}
	}
	if(i==2){
		if(my[$("table").length]==1){
		return;
		}else{
			for(var j=1;j<=$("table").length;j++){
				if(my[j]==1){
					$("#table"+j).fadeOut(200);
					my[j]=0;
					
					$("#table"+(j+1)).fadeIn(200);
					my[j+1]=1;
					break;
				}
				
			}
		}
	}
}
</script>
</head>

<body>
<div class="body">
	<div class="link">
		<div class="left w1">
			<a href="http://pdl.126play.com/" class="a1" title="首页"></a>
			<a href="http://bbs.pdl.126play.com/viewthread.php?tid=22&extra=page%3D1" class="a2" title="公会入驻"></a>
			<a href="http://bbs.pdl.126play.com/" class="a2" title="互动中心"></a>
		</div>
		<div class="right w2">
			<div class="left q1" title="上一页" onclick="abc(1)"></div>
			<div class="left q2">
				<div style=" margin:21px 0 0 16px;">
				<table cellpadding="0" cellspacing="0" border="0" id="table1">
					<Tr>
						<Td><img src="/Public/images/20110715/logo/logo-1.gif" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-2.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-3.gif" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-4.gif" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-5.gif" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-6.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-7.jpg" /></Td>
					</Tr>
					<Tr>
						<Td><img src="/Public/images/20110715/logo/logo-8.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-9.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-10.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-11.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-12.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-13.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-14.jpg" /></Td>
					</Tr>
					<Tr>
						<Td><img src="/Public/images/20110715/logo/logo-15.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-16.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-17.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-18.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-19.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-20.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-21.jpg" /></Td>
					</Tr>
					<Tr>
						<Td><img src="/Public/images/20110715/logo/logo-22.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-23.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-24.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-25.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-26.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-27.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-28.jpg" /></Td>
					</Tr>
					<Tr>
						<Td><img src="/Public/images/20110715/logo/logo-29.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-30.jpg" /></Td>
						<Td><img src="/Public/images/20110715/logo/logo-31.jpg" /></Td>
						<Td>&nbsp;</Td>
						<Td>&nbsp;</Td>
						<Td>&nbsp;</Td>
						<Td>&nbsp;</Td>
					</Tr>
				</table>
				</div>
			</div>
			<div class="left q1" title="下一页" onclick="abc(2)"></div>
		</div>
	</div>
	
	<div class="con">
		<div class="left w1">
			<p>成为《潘多拉》主题公会后可获得以下特权</p><br />
			<span>对主题公会支持：</span><br /><br />
			1、最大限度的提高公会在各大媒体包括官网上的曝光度，依照公会的活跃程度给予不同的奖励，活跃度主要体现在公会提交的宣传链接，微博转播，论坛活动参与和论坛发帖数的连接等<br /><br />
			2、公会将因主题公会的特殊身份而得到特殊荣耀和待遇，依照公会的活跃程度给予不同的奖励，活跃度主要体现在公会提交的宣传链接，微博转播，论坛活动参与和论坛发帖数的连接等<br /><br />
			1)  大型主题公会成长史题材电影录制；<br /><br />
			2)  激活码优先发放，游戏内容优先体验； <br /><br />
			3) 《潘多拉》游戏内红包待遇 ；<br /><br />
			4) 《潘多拉》游戏内活动礼包；<br /><br />
			5）《潘多拉》媒体广告，官网等宣传位置推荐宣传；<br /><br />
			6) 公会线上，线下活动（公会聚会、免费参加各大游戏会展的机会……） 
		</div>
		<div class="right w2">
			<p>满足以下条件即可成为《潘多拉》主题公会</p><br />
			<span>一、如何成为主题公会</span><br /><br />
			第一步：申请入驻成为《潘多拉》公会 <br />
			首先公会入驻，然后按条件申请进入主题公会。<br />
			入驻方法：<br />
			在论坛公会区写入驻贴，会长加入公会联络群<br />
			第二步：申请成为主题公会 <br />
			入驻说明：<br />
			公会所得奖励以《潘多拉》的入驻资料中填写的公会负责人负责领取。所以请各位公会会长如实填写资料，我们将对您填写的内容进行资料核实；资料已审核成功，若需变更，请各大公会会长及时联系官方公会管理员，我们将会对你所提交的详细资料进行修改！ <br /><br />
			<span>主题公会公会入驻申请条件（入驻资格）</span><br />
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td valign="top">1.</td>
				<td>入驻的公会才有资格申请，申请的公会须拥有专有论坛或网站。（暂无网站论坛的公会且初具规模请通过官方联系QQ与之联系）。</td>
			</tr>
			<tr>
				<td valign="top">2.</td>
				<td>申请公会须在公会论坛或网站悬挂《潘多拉》广告与官方网站连接。</td>
			</tr>
			<tr>
				<td valign="top">3.</td>
				<td>申请公会须在公会论坛以及YY等语音系统开设《潘多拉》的论坛专区，专区内容与官网新闻信息即时同步。 </td>
			</tr>
			<tr>
				<td valign="top">4.</td>
				<td>公会需能派出负责人，作为公会代表加入官方公会联系。</td>
			</tr>
			<tr>
				<td valign="top">5.</td>
				<td>每周在各大公会媒体上发表关于《潘多拉》的评测、感想、心情，视频等任何文章五篇以上。（公会媒体：17173公会频道、公会界等）</td>
			</tr>
			<tr>
				<td valign="top">6.</td>
				<td>公会微博对官方活动，以及重要信息进行转播。（转播信息数不低于50条）</td>
			</tr>
			<tr>
				<td valign="top">7.</td>
				<td>公会游戏内活跃人数数量高。（不低于30人）</td>
			</tr>
			</table><br />
			<a>注： 如有有效的关于《潘多拉》宣传连接，请当天及时提交至公会管理进行统计，长期表现好的公会，我们会对公会进行奖励。</a>
		</div>
	</div>
	<div class="foot">
		健康游戏忠告：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活。<br />

		招贤纳士 用户协议 常见问题 互动中心 客服中心
	</div>
</div>
<!--Passit BUTTON BEGIN-->
<script type="text/javascript">
var passit_title = "";//自定义分享标题，删除和留空表示使用默认
var passit_url = "";//自定义分享网址，删除和留空表示使用默认
var passit_content= "";//自定义分享内容，删除和留空表示使用默认Meta中的描述
var passit_image= "";//自定义分享图片，删除和留空表示不分享图片
</script>
<script type="text/javascript">
bookmark_service="qqkj,sinaweibo,xnzt,qq,kxzt,qqxy,baiduHi,bookmark,baidu,douban,sohuweibo,163weibo,qqweibo,fhwwb,mhrs,more";</script>
<script type="text/javascript" src="http://www.passit.cn/js/passit_float_new.js?pub=0&img_src=btn15&simple=1" charset="UTF-8"></script>
<!--Passit BUTTON END-->

</body>
</html>
