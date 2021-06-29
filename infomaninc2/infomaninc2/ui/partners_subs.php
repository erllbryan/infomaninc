<?php
function getPartnersSubs() {
?>
<style type="text/css">
            .subnav2 ul li a {
              font-size: 1.5em;
              font-family: segoe ui;
              letter-spacing: 1px;
              line-height: 20px;
            }
            .sidebar span{
              font-weight: bold;
              font-size: 1em;
            }
            .sidebar a{
              color:blue;
              text-decoration: underline;
              font-size: 1.2em;
            }
        </style>
<div class="subnav2" style="width:150px;">
				
		<ul>
			
			<li id="1319560218584" class="1 ">
				<div class="opener group">
					<h2><a href="<?php echo base_url('partners.php');?>">Partnership Overview</a></h2>
				</div>	
			</li>
			<li id="1319591612325" class="1">
				<div class="opener group">
					<h2><a href="<?php echo base_url('contactus.php');?>">Contact Us</a></h2>
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