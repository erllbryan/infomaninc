<?php 
	include_once('include.php');
	getHeader('contactus');
	getNavigation('about');
?>


<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('about.php');?>">About</a></li><li>Contact Us</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>  
    <?php //$this->load->view('include/side_bar_right');
    	getSideBarRight();
    	getSideAbout(); ?>
   


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


        <div><h5> &nbsp </h5></div>          
 <?php //$this->load->view('include/sub_about');?>
<style type="text/css">
   h1 {
              font-weight: bold;
              font-size: 2.2em;
              letter-spacing: 1px;
              font-family: calibri;
            }
            .par {
              letter-spacing: 1px;
              font-family: segoe ui;
              font-size: 30px;
            }
            p{
              letter-spacing: 2px;
              font-family: segoe ui;
              font-size: 1.1em;
              color:#444
           
            }
</style>

                <div class="main col3" >
                    <h1 style="color:green;font-size:2.5em;">Contact Us</h1>                        
                      <!--  <div ><img src="<?php //echo base_url('assets/img/carousel1.jpg')?>" width="100%" alt="null"></div>-->
                           <div class="" >
                                     <div ><p style="text-align:justify;">&nbsp&nbsp&nbsp&nbsp&nbsp Thank you for visiting the Information Managers, Inc. website.
                                     For all product inquiries or to learn more about  
                                     INFOMAN solutions, email us at <a href="mailto:sales@infomaninc.com" class="link style4"> sales@infomaninc.com</a></p></div><br>
                                    <br>
                                     <div><h1 style="color:green;"> Information Managers, Inc.</h1></div>
                                           
                                     <div ><i><p style="font-family:sans serif;font-size:1.2em;"> Suite 704 State Condominium 1,<br>
                                           186 Salcedo St. Legazpi Village,<br>
                                           Makati City, Metro Manila 1229,<br>
                                           Philippines<br><br>
                                           <i class="fa fa-phone"></i>  Phone:(632) 8 843-1786<br>
                                          <i class="fa fa-phone"></i>  Phone:(632) 8 843-2634<br>
										   <i class="fa fa-phone"></i>  Phone:(632) 8 843-2191<br>
                                           <!-- <i class="fa fa-fax"></i>  Fax:(632)843-2755<br> -->
                                           <i class="fa fa-tablet"></i>  Cell NO.:(+63)9760981661</p></i>

                                     </div>
                                      <br><br>
                                     <div><h1 style="color:green;"><a href="<?php echo base_url('locationmap.php');?>">Location Map</a></h1><br>
                                    <!-- <a href="<?php echo base_url('assets/img/location_map1.png');?>">  <img src="<?php echo base_url('assets/img/location_map1.png');?>" width='100%'></a> -->
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.7118182640224!2d121.01232251457151!3d14.558465389829328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b09b07a6b%3A0xee81dae5648514bb!2sInformation+Managers+Inc!5e0!3m2!1sen!2sph!4v1505287529774" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                     </div>

                                    
                            </div>
                               
                           
                </div>
               

               
    </div>
</div>
            




<?php 
	getFooter();
?>