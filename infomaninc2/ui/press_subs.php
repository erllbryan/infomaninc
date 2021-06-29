<?php
function getPressSubs() {
?>
<div class="subnav2">
				
		<ul>
			
			<li id="1319560218584" class="1 ">
				<div class="opener group">
					<h2><a href="<?php echo base_url('press.php');?>">Press Release</a></h2>
				</div>	
			</li>
			<li id="1319591612325" class="1">
				<div class="opener group">
					<h2><a href="<?php echo base_url('news.php');?>">News</a></h2>
				</div>	
			</li>
			
		
		</ul>
		<script type="text/javascript">
			$(document).ready(function () {
				var pid = 'null';
				var currentPageURL = window.location.href;
				
					$(".subnav2 li").each(function(){
						if (currentPageURL.indexOf($(this).prop('id')) > -1) {
							if($(this).prop('class') == 2 || $(this).prop('class') == 3 || $(this).prop('class') == 4){
								  $(this).closest("li.1").addClass('on').find('a').css('color','#333');
								  if($(this).prop('class') == 3) $(this).closest("li.2").addClass('on').find('a').css('color','#333');
								  if($(this).prop('class') == 4) $(this).closest("li.3").addClass('on').find('a').css('color','#333');
							}
						  	$(this).addClass('on');
						  	$(this).find('a').css( "color", "#333");
						}
					});
					$( ".subnav2 li" ).not( ".on" ).each(function(){$(this).find('a').css( "color", "#005eb8" )});
				
				
			});	
		</script></li></ul></div>
		<?php
}
?>