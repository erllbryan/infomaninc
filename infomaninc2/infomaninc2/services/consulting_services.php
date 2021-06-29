<?php 
  include_once('include.php');
  getHeader('consulting');
  getNavigation('services');
?>
<style type="text/css">
    .hd {
              font-weight: bold;
              font-size: 2em;
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
            .tab1 li{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
             


            }
            .cont{
              
               font-family: segoe ui;
              letter-spacing: 1px;
              
              
            }
</style>
 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
        </style>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path" style="letter-spacing:1px;font-weight:bold;font-family:verdana;">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li ><a href="<?php echo base_url('services.php');?>">Services</a></li><li>Consulting Services</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  
  <?php //$this->load->view('include/side_bar_right');
    getSideBarRight();
      getServicesSubs();
  ?>      
 <?php //$this->load->view('services/subss');?>

                <div class="main col3"  align="justify">
                    <h1 class="hd" style="color:green;">Consulting Services</h1>                        
                         
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No matter what the project size or complexity, Information Managers, Inc. has a strong reputation for rapid and successful implementations. We design and deliver the ideal customized software solution for any industry. Our large in-house consulting team gets your systems functioning on time and within budget. And because our solutions are customized to address your business challenges, the impact on your company is powerful.
                                    </div>
                                   <br><br>  <div class="intro">
                                    <h1 class="hd2" style="color:green;">Information Managers, Inc. Consulting Expertise</h1>  
                                <ul class="tab1">
                                  <li style="font-size:1em">Project planning & coordination</li>

                                  <li style="font-size:1em">Solution design and development</li>

                                  <li style="font-size:1em">Application implementation</li>

                                  <li style="font-size:1em">Product customization</li>

                                  <li style="font-size:1em">Workflow and scripting</li>

                                  <li style="font-size:1em">Object-oriented development</li>

                                  <li style="font-size:1em">Legacy systems integration</li>

                                  <li style="font-size:1em">Database design</li>

                                  <li style="font-size:1em">Knowledge transfer</li>

                                  <li style="font-size:1em">Rollout planning and coordination</li>

                                 
                                </ul>

                                         <br>  
                                     <div class="par" align="center" style="color:gray;font-family:calibri;letter-spacing:2px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Information Managers, Inc. consultants have extensive experience guiding projects in over 5 industries. For further information on Information Managers, Inc. Consulting Services, get in touch with us at: <a href="mailto:sales@Information Managers, Inc.inc.com" class="link style4" ><em> sales@Information Managers, Inc.inc.com </em></a></div>
                             

                                      </div>  
                           
                </div>
      </div>
</div>
            
<?php 
  getFooter();
?>

