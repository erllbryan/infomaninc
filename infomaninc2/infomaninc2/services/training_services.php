<?php 
  include_once('include.php');
  getHeader('training');
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
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li ><a href="<?php echo base_url('services.php');?>">Services</a></li><li>Training Services</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
     
  <?php //$this->load->view('include/side_bar_right');
      getSideBarRight();
      getServicesSubs();
  ?>   
 <?php //$this->load->view('services/subss');?>

                <div class="main col3"  align="justify" style="padding-left:20px;">
                    <h1 class="hd" style="color:green;">Training Services</h1>                        
                           
                               <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp With organizations implementing Progress Software and solutions at an enterprise-wide level and for an increasing number of mission critical applications, direct training becomes a key component to help maximize the business advantage that can be achieved through the use of Progress Software and solutions.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Yet the role of Information Managers, Inc. Training Services is more than simply training in the use of Progress Software technology. The core aim is to provide the knowledge, expertise and confidence necessary to exploit the benefits that a Progress Software and solutions installation can provide.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp This knowledge transfer ensures developers, business analysts, project managers and others, understand the application of Progress Software, as well as recognize its application within their unique business environment.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Courses cover all aspects of the Progress product by combining presentations on process automation design with hands-on, skills-based instruction. Designed for both technical and non-technical staff, students can attend classes that are appropriate to their background and job classification.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Taught by experienced professionals with a wide range of relevant Progress knowledge, the groups are kept small to allow for discussion on ideas and individual experience. The use of extensive case studies allow students to apply the knowledge gained in the training room to specific system or application problems.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Dedicated training facilities are equipped with individual workstations configured to enable students to apply the skills taught in a "practical" environment. Training is also offered at customer sites, where courses are tailored to the requirements of individual clients.
                              <br>    <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Information Managers, Inc. Training Services are clearly focused on one main objective: to ensure that each and every student becomes a master of Progress Software and solutions.
                               </div>
                                  

                          
                </div>
      </div>
</div>
<br><br><br>
  <?php 
  getFooter();
?>          


