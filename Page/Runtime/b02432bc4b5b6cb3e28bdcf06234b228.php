
	<?
		foreach($comment as $com){
            $count=round(($com['option1']+$com['option2']+$com['option3']+$com['option4'])/4);
			echo '<li><div class="aua"><img src="/Public/img/events_auction_img4.jpg" /></div><div class="aub" style="width:600px;"><h2>';

			if($count==0){
				echo '☆ ☆ ☆ ☆ ☆ ';
			}else if($count==1){
				echo '★ ☆ ☆ ☆ ☆ ';
			}else if($count==2){
				echo '★ ★ ☆ ☆ ☆ ';
			}else if($count==3){
				echo '★ ★ ★ ☆ ☆ ';
			}else if($count==4){
				echo '★ ★ ★ ★ ☆ ';
			}else if($count==5){
				echo '★ ★ ★ ★ ★ ';
			}
			echo $count.'</h2><p>'.$com['comment'].'</p></div><div class="auc"><p>用户：'.$com['nickname'].'</p><p>'.$com['id'].'评论时间：'.$com['dt'].'</p></div></li>';
            echo '<script>$("#comment_shoe_id").html("'.$com['id'].'")</script>';
		}
	?>
