<script>
$(document).ready(function(){
	for(var i=1;i<=9;i++){
		$("#td_"+i).click(function(){

			abc($(this).attr("title"));
		})
	};
	
});</script>
<table cellpadding="0" cellspacing="6" class="m2_div2">
					<tr>
						<td id="td_1" title="1" valign="top"></td>
						<td id="td_2" title="2" valign="top"></td>
						<td id="td_3" title="3" valign="top"></td>
					</tr>
					<tr>
						<td id="td_4" title="4" valign="top"></td>
						<td id="td_5" title="5" valign="top"></td>
						<td id="td_6" title="6" valign="top"></td>
					</tr>
					<tr>
						<td id="td_7" title="7" valign="top"></td>
						<td id="td_8" title="8" valign="top"></td>
						<td id="td_9" title="9" valign="top"></td>
					</tr>
				</table>