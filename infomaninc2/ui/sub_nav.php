<?php
function getSubNav() {
?>
<style>
 ul li a{color:#305874;letter-spacing: 1px;line-height: 20px;}
 ul li a:hover{color:#12ba12;}
 }
</style>   <div class="subnav2" style="width:200px;">
<h3 style="font-weight:bold;font-family:verdana;letter-spacing:1px;;font-size:1.3em;color:green;">News & Trending</h3><br>
        <ul>
      <!--   <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/accounting');?>">Accounting</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/banking');?>">Banking</a></h2>
                </div>  
            </li> -->
        <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('news.php');?>">QAD Community Trends</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('prgtrnd.php');?>">Progress Trends</a></h2>
                </div>  
            </li>
            <!-- <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/rptas.php');?>">Local Government Unit</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/erp_supply_chain.php');?>" >ERP for Manufacturting</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/hrdesk.php');?>">Human Resource</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a  href="<?php echo base_url('products/progress.php');?>">RDBMS and Development </a></h2>
                </div>  
            </li> -->
            
            

                                               
                                         
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
        </script></li></ul>


               <!-- <div class="sidebar aligntop">
                      <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Infoman Contact</h2>
                                        <div class="content corner-bottom-3 group">
                                             <h3>Amadeus Global Report 2015</h3>
                                            <p>Technical Support:
                                            For assistance or to
                                            learn about support:
                                            <span style="color:green;">support@infomaninc.com</span></p>
                                            <br>
                                            <p>
                                             <h3>Progress Support:<h3>

                                               <span style="color:green;font-size:14px;"> http://www.progress.com/
                                               support_main/index.ssp
                                               </span>
                                            </p>
                                            </div>
                    </div></div>-->

    </div>
    <?php
}
?>