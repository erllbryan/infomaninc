 <?php 
   include_once('include.php');
  getHeader('support');
  getNavigation('services');
?>
 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
        </style>

<style type="text/css">
    .hd {
              font-weight: bold;
              font-size: 1.7em;
              letter-spacing: 1px;
              font-family: segoe ui;
              color: green;
            }
            .hd2 {
              font-weight: bold;
              font-size: 1.5em;
              letter-spacing: 1px;
              font-family: segoe ui;
              color: green;
            }
          
            .par{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.5em;

            }
            .par2{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.2em;


            }
            .cont{
              
               font-family: segoe ui;
              letter-spacing: 1px;
              
              
            }
</style>

<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path" style="letter-spacing:1px;font-weight:bold;font-family:verdana;">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li ><a href="<?php echo base_url('services.php');?>">Services</a></li><li>Customer Support</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        
  <?php //$this->load->view('include/side_bar_right');
        getSideBarRight();
      getServicesSubs();?>
 <?php //$this->load->view('services/subss');?>

                <div class="main col3"  align="justify" style="padding-left:20px;">
                    <!-- <h1  class="hd" style="color:green;">Customer Support</h1> <br>  -->
                    <h1  class="hd" style="color:green;font-size:2em;" >Customer Support services</h1>                        
                           <div class="intro tab1" >
                               <div >

                                  <h1 class="hd2" style="color:green;">Extend Your Productivity ...</h1>  
                                <p class="par" style="font-size:1.2em;line-height:30px;font-family:segoe ui;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp First rate technical support is your insurance against downtime. When your core product is Progress products or solutions, our Technical support will provide you with prompt, expert support via telephone and e-mail.</p>
                              </div><br>

                               <!--  <div>
                                  <h1 style="color:green;"><strong>Extend Your Productivity ...</strong></h1> 
                                 <p> First rate technical support is your insurance against downtime. When your core product is Progress products or solutions, our Technical support will provide you with prompt, expert support via telephone and e-mail.</p>
                              </div> -->
                              <br>

                                <div>
                                  <h1 class="hd2" style="color:green;">Premiere Support ...</h1>  
                              </div>
                                  <ul class="tab1">
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Diagnostics, problem isolation, updates and patches.</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">24/7 support assistance.</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Access to technical updates.</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Guaranteed response time.</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Support coordinators (trained staff authorized to call Technical support)</li>
                                  
                                  </ul>
                                   <br>
                                <div>
                                  <h1 class="hd2" style="color:green;">Your Technical Support Options</h1> 

                              </div>
                                  <ul class="tab1">
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Premiere Support</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">On Request Support Services</li>
                                  </ul>
                                  <br>
                            <div>
                             <h1 class="hd2" style="color:green;">On Request Support Services</h1>  
                            <p class="par" style="font-size:1.2em;line-height:30px;font-family:segoe ui;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Special support services are available on a time and material basis including:</p>
                              </div>
                                <ul class="tab1">
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Technical audits to determine systems requirements</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Support/ debugging for non-standard customizations</li>
                                    <li style="font-size:1.1em;line-height:25px;font-family:segoe ui;letter-spacing:1px;">Support/ debugging for system aspects and components that were not supplied by Information Managers, Inc., eg. Customizations, equipment and databases.</li>
                                  </ul>

                           </div>
                </div>
      </div>
</div>
<br><br><br>
<?php 
  getFooter();
?>
            


