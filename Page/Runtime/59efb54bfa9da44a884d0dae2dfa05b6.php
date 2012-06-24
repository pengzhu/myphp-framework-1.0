<?
	foreach($goods as $value)
	{
		echo "<option value='".$value['goods_id']."'>".$value['goods_name']."</option>";
	}
?>