<?php 
	include_once('include.php');
	getHeader('carreers');
	getNavigation('about');
?>
 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;

              }

             h1 {
              font-weight: bold;
              font-size: 2.4em;
              letter-spacing: 1px;
            }
            h2 {
              font-weight: bold;
              font-size: 1.3em;
              letter-spacing: 1px;

            }
            .hd {
              font-weight: bold;
              font-size: 1.3em;
              letter-spacing: 1px;
              font-family: segoe ui;
            }
           .ds li{
              letter-spacing: 1px;
              font-family: segoe ui;
              font-size: 1.3em;
            }
            .par{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;

            }
            .first {
              font-family:verdana;
              font-weight: bold;
              letter-spacing: 1px;

            }
            #content{
              padding-right: 20px;
            }
        </style>



<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('about.php');?>">About</a></li><li style=" font-family:verdana;
              font-weight: bold;
              letter-spacing: 1px;">Careers</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        
    <?php //$this->load->view('include/side_bar_right'); 
    	getSideBarRight();
    	getSideAbout(); ?>
 <?php //$this->load->view('include/sub_about');?>


<div class="main col3">
                       
           <div class="intro tab1">
           		  <p style="color:green;font-size:30px;letter-spacing:1px;">Careers at Information Managers, Inc.</p>       
                <div class="par" style="font-size:1.2em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Our people are dedicated in designing, developing and delivering software solutions and improvements that positively impacts the way our customers conduct their businesses.<br> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Our people work on an environment that is fast-paced, challenging, and fulfilling. Though every individual contribution is recognized, the collaborative output of the team is valued.
<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you see yourself thriving in this kind of a work environment, then we may have a spot for you. We currently have job openings for the following positions:</div><br>
           	<!-- 	<div class="par" style="font-size:1.2em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you are interested in joining the INFOMAN team, please see our current list of career opportunities.</div><br> -->
          <!--  <div>

           </div>
           <div class="par" style="font-size:1.2em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp INFOMAN, the leader in customer service solutions in the Philippines, would like to invite you to join our team of technology and business professionals. Job Openings and vacancy are as follows:
           </div> -->
           <br><br>


           
           <div>
               <ul class="ds">
               		<h2 id="green" class="hd">Sales</h2>
                    <li><a href="careers/sales.php">Sales And Marketing Staff</a></li><br>
                    <h2 id="green" class="hd">ERP</h2>
                    <li><a href="careers/erp.php">ERP Business Analyst / Functional Consultant</a></li><br>
                    <h2 id="green" class="hd">Application Development</h2>
                    <li><a href="careers/projectmanager.php">Project Manager</a></li>
                    <li><a href="careers/consultant.php">Business Consultant</a></li>
                    <li><a href="careers/jrprojectmanager.php">Jr Project Manager</a></li>
                    <li><a href="careers/programmer.php">Programmer / Systems Developer</a></li>
                    <li><a href="careers/analyst.php">Systems Analyst</a></li>
                    <li><a href="careers/writer.php">Technical Writer</a></li><br>


                    <h2 id="green" class="hd">Trainee</h2>
                    <li><a href="careers/ojt.php">OJT</li>        
                </ul><br>
    &nbsp;</div>

                 <div align="center" class="par" style="font-size:1em;text-align:center;color:gray;font-style:italic;">For interested applicants, please send your updated resume to <span style="color:#33cc33;font-size:1.1em;">admin@infomaninc.com</span></div>
                </div></div></div>
            </div>

 


<?php 
	getFooter();
?>