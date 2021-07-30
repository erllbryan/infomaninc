<?php 
	include_once('include.php');
	getHeader('about');
	getNavigation('about');
?>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('about.php');?>">About</a></li><li>Who We Are</li></ul>
                </div>
                        
            

            </div>
        </div>
         <style type="text/css">
            .sidebar p{
              font-size: 1.3em;
              font-family: segoe ui;
              letter-spacing: 1px;
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
   
        <div class="sidebar aligntop">
                      <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Infoman Contact</h2>
                                        <div class="content corner-bottom-3 group">
                                           <p>To learn more about our products and services, please contact our <br><br>
                                 <span>Sales Team:</span><br>	
                                           
                                                <br> <span>Phone:</span> (632) 8 843-1786<br></p>
                                                <p style="position: relative; left: 49px; top: -10px;">(632) 8 843-2634</p>
												<p style="position: relative; left: 49px; top: -20px;">(632) 8 843-2191</p>

                                                <p style="position: relative; top: -30px;"> <!-- <span>Fax:</span> (632)843-2755 -->
                                                   <p style="position: relative; top: -40px;"><span>Cell No.:</span>  (+63) 9760981661 
                                           <span>Email:</span>  sales@infomaninc.com </p>
                                         
                   </div>
                 </div>

<style>
.social-icons a{

  position:  relative;
  float:left;
  margin-right:2px;}
        h1 {
              font-weight: bold;
              font-size: 2em;
              letter-spacing: 1px;
              font-family: calibri;
            }
            .par {
              letter-spacing: 1px;
              font-family: segoe ui;
              font-size: 16px;
            }
            a{
              letter-spacing: 1px;
            }
}
</style>          

 <div class="social-icons">
              <h3 style="font-weight:bold;">Follow Us</h3>
              
              <a href="http://www.facebook.com/pages/Information-Managers-Inc/242314335900642" title="Facebook" target="_blank">
               <img src="<?php echo base_url('assets/img/fb1.png');?>" width="50px"></img>
               </a>
              
              <a href="https://plus.google.com/" title="Google+" target="_blank">
               <img src="<?php echo base_url('assets/img/g.png');?>" width="50px"></img>
                 </a>
              
              <a href="https://twitter.com/" title="Twitter" target="_blank">
                <img src="<?php echo base_url('assets/img/twitter.png');?>" width="50px"></img>
               </a>
              
              <a href="http://www.youtube.com/" title="youtube" target="_blank">
             <img src="<?php echo base_url('assets/img/y.png');?>" width="60px" height="50px"></img>
                </a>
              
            </div>

   </div>
 <div class="subnav2" style="width:120px;line-height:20px;">
        <ul>
        <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a style="font-size:12px;" href="<?php echo base_url('about.php');?>">Who We Are</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a style="font-size:12px;" href="<?php echo base_url('clients.php');?>">Clients</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a style="font-size:12px;" href="<?php echo base_url('careers.php');?>">Careers</a></h2>
                </div>  
            </li>
            <li id="1319560218584" class="1 ">
                <div class="opener group">
                    <h2><a style="font-size:12px;" href="<?php echo base_url('contactus.php');?>">Contact Us</a></h2>
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
        </script></li></ul>
      </div>

<style>

h4 {background-color:#eee;}
</style>

                <div class="col-sm-7" align="justify" style="padding-left:15px;font-family:verdana;">
                    <h1 style="color:green;">Information Managers, Inc.</h1>                        
                           <div class="">
                                     <!-- <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Information Managers, Inc. is a leading IT solutions provider and the authorized Philippine distributor of software products from Progress Software Corporation and QAD Inc.</div>
                                    <br> -->
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  For more than 25 years, INFOMAN has established a strong track record in serving the automation needs of more than 200 clients in the Philippines,
                                           including those in banking, insurance, retail, manufacturing, distribution, construction, education and government. INFOMAN provides software applications, database, system development and integration tools as well as project services to help clients build, customize and deploy the right IT solutions.</div>
                                        <div >
                                        &nbsp;  </div>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  The continuing goal of INFOMAN is to help clients meet changing business needs by providing innovative world-class technologies complemented with proven methodology, collaborative approaches, experienced consultants, seasoned developers, in-depth knowledge and high-quality support and services.
                                     </div> <br><br>
                                     

                 


                          
          </div>
             
              
      </div>
                                               <!-- <div>
                                        &nbsp;  </div>
                                     <div>INFOMAN stands behind the following basic beliefs:</div>
                                                <div>
                                        &nbsp;  </div>
                                        <ul>
                                          <li>Creating value for customers in every market</li>
                                          <li>Solving customer's technical issues</li>
                                          <li>Treating customers and employees with dignity and respect</li>
                                          <li>We believe change is a natural state</li>
                                          <li>Believing that change is a natural state</li>             
                                        </ul>
                                        <br>
                                        &nbsp;-->
                            </div>

      </div> 
<?php 
	getFooter();
?>