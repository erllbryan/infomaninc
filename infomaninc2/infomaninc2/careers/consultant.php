<?php 
  include_once('include.php');
  getHeader('data_direct');
  getNavigation('products');
  $menu = 'Sales';
?>
 <style type="text/css">
    .hd {
              font-weight: bold;
              font-size: 2em;
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
              font-size: 1.3em;


            }
            .cont{
              
               font-family: segoe ui;
              letter-spacing: 1px;
              
              
            }
            .intro div{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.5em;

            }
             .intro .tab1 div{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.1em;

            }
           
             .intro table tbody td ol li{
              font-family: segoe ui;
              letter-spacing: 1px;
             /* text-align: justify;*/
              font-size: 1em;

            }
             h1 {
              font-weight: bold;
              font-size: 2em;
              letter-spacing: 1px;
              font-family: segoe ui;
              color: green;
            }
            .intro div a{
              font-style: italic;
              font-family: serif;
            }

            .subnav2{
              letter-spacing: 1px;
              width: 150px;
            }
            .path ul li{
              font-weight: bold;
              font-family: verdana;
              letter-spacing: 1px;
            }
</style>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul style="letter-spacing:1px;">
                       <b > <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li> <li ><a href="<?php echo base_url('careers.php');?>"> Careers </a> </li><li><?php echo $menu; ?></li></ul></b>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  <style type="text/css">
    .hd {
              font-weight: bold;
              font-size: 2em;
              letter-spacing: 1px;
              font-family: segoe ui;
              color: green;
            }
          
            .par{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.2em;

            }
            .par2{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.3em;


            }
            .cont{
              
              
              
              
            }
            ul li {
               font-family: segoe ui;
              letter-spacing: 1px;
            }
</style>
 <!-- <div class="sidebar aligntop">
                      <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                              <li>Tupperware Brands Philippines, Inc.</li>
                                              <li>RI Chemical Corp.</li>
                                              <li>Shizokan Corporation</li>
                                              <li>Presline Steel Products, Inc.</li>
                                              <li>C&F Manufacturing Phils. Corp</li>
                                              <li>Progress Manila Bulletin</li>
                                              <li>AM Europharma Corporation</li>
                                              <li>Mercury Group of Companies</li>
                                              <li>CafeFrance Group</li>            
                                          </ul>
                                       
                                     </div>
               </div>   </div>-->
                 <?php    getSideBarRight();
      getSideAbout(); 
                 //$this->load->view('include/side_bar_right');?>
                 

 <?php //$this->load->view('include/subs');?>

                <div class="main col3" align="justify">  
                 <div ><br><h2 class="hd" style="color:green;font-size:1.8em;" align="left">INFOMAN To Hire Business Consultant in the Philippines</h2><br><br>  

                   <p class="par">&nbsp&nbsp&nbsp&nbsp&nbsp Successful applicants will be assigned to different Infoman Philippines units like Web Design, Web Applications Development, and Systems Development.</p><br>

                   <h2 class="hd" style="color:green;font-size:1.2em;">Responsibilities:</h2>                   
                           <div class="intro">
                             
                                 <ul style="margin-left:30px;">
                                          <li style="font-size:1em;">Administer the life cycle of the project from business process breakdown, preparation, setting-up resource requirements, risk analysis and ROI evaluation to ensure delivery of service.</li>
                                          <li style="font-size:1em;">Suggests action plans, new procedures or strategies that may improve the utilization of production facilities thereby improving productivity, accuracy and performance of the business units.</li>
                                          <li style="font-size:1em;">Create simple and standardized processes easily transferable in contingency situation.</li>
                                         
                                                                   
                                </ul>
                               
                            </div>      

                    <h2 class="hd" style="color:green;font-size:1.2em;">Qualifications</h2>                   
                           <div class="intro">
                             
                                 <ul style="margin-left:30px;">
                                          <li style="font-size:1em;">Candidate must possess at least a Bachelor's/College Degree or Post Graduate Diploma / Master's Degree in Business Administration or equivalent.</li>
                                          <li style="font-size:1em;">At least 5 years of working experience in the related field is required for this position (banking / Insurance) Familiarity with Non-Life Insurance operations is an advantage.</li>
                                          <li style="font-size:1em;">Self motivated and can work independently.</li>
                                          <li style="font-size:1em;">Must have excellent computer skills.</li>
                                          <li style="font-size:1em;">Ability to function in a highly dynamic and changing environment.</li>
                                          <li style="font-size:1em;">Must be fluent in written and spoken English.</li>
                                          <li style="font-size:1em;">Full-Time positions available.</li>
                                                                   
                                </ul>
                               
                            </div>      
      </div>
         <br><br>
               <div align="center" class="par" style="font-size:1em;text-align:center;color:gray;font-style:italic;">For interested applicants, please send your updated resume to <span style="color:#33cc33;font-size:1.1em;"><a href="mailto:admin@infomaninc.com">admin@infomaninc.com</a></span></div>
</div>
                  
</div>

  

<?php 
  getFooter();
?>