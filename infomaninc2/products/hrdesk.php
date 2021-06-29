<?php 
  include_once('include.php');
  getHeader('hrdesk');
  getNavigation('products');
  $menu = 'Human Resource';
?>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul style="letter-spacing:1px;">
                       <b > <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li> <li ><a href="<?php echo base_url('products/sureway.php');?>"> Solutions </a> </li><li>Payroll System</li></ul></b>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>

<style type="text/css">
        .hd {
              font-weight: bold;
              font-size: 1.5em;
              letter-spacing: 1px;
              font-family: segoe ui;
              color: green;
            }
          
           p{
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
              
              
              
              
            }
            ul li {
               font-family: segoe ui;
              letter-spacing: 1px;
            }
</style>
<!-- <div class="sidebar aligntop">
  <div class="module filter-form">
    <h2 class="mod-title blue corner-top-6">Assessment System:</h2>
    <div class="content" style="padding:10px;">
      
        <img src="<?php echo base_url('assets/img/Clients/HR.png');?>" style="margin-top:-10px; ">                    
                
    </div>
  </div> -->
<div class="sidebar aligntop">
                      <!-- <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                             <li>Voyg Transport Services Inc.</li>
                                                <li>Consolidated Packaging Enterprises</li>
                                                <li>The Old Spagetti House</li>
                                                <li>Magsaysay MOL Marine, Inc.</li>
                                                <li>Allied Bankers Insurance Corporation</li>
                                                <li>Travel Book</li>
                                                <li>Information Managers, Inc.</li>          
                                          </ul>
                                       
                                     </div>
                 </div> -->
                 <?php getSideBarRight();
                 //$this->load->view('include/side_bar_right');?>
                 </div>
 
<!-- </div> -->
 <?php getSubs(); 
 //$this->load->view('include/subs');?>

                <div class="main col3" align="justify">
        <div ><h1 class="hd" style="color:green;font-size:2.1em;">Human Resource </h1>
          <div ><img src="../assets/img/software_customer1/flexhr.png" width="100%" ></div>
          <br>

          <p class="par" style="font-size:1.1em;letter-spacing:1px;font-family:verdana;">

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>flexHR®</b> is a versatile, user friendly and integrated Human Capital Management System that empowers the management of your organization’s Human Capital efficiently and effectively. flexHR®'s innovative design offers flexibility and scalability to suit organizations of different sizes, and at different stages of growth, across diverse industry and commerce. As the organization grows, flexHR® can be easily scaled to cater to the organisation's growing requirements. This ensures maximum productivity, not only in terms of your technology investment, but more importantly for your Human Capital management professionals.</p></div>
            <br>
            <br>
            <h2 class="hd" style="color:green;font-size:1.8em;">Solutions by Application</h2>   <br>
            <div class="intro">
              <div style="font-size:1.1em;letter-spacing:1px;font-family:verdana;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp In today’s changing business-scape, your organization’s Human Capital is an important business asset. Effective management of this very key asset is essential in contributing to the business’ success. </div><br>
              <br>
              <h2 class="hd" style="color:green;font-size:1.8em;">Categories</h2>

              <ul>
                <li>HRMS</li>
                <li>ESS</li>
                <li>HRSS</li>

              </ul>

              <br> <br>
              <h2 class="hd" style="color:green;font-size:1.8em;">HRMS</h2>
              <div class="intro">
                <div style="font-size:1.1em;letter-spacing:1px;font-family:verdana;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Covers the administrative human capital tasks of employees’ service records, benefits entitlement, payroll processing, tax, retirement and other statutory requirement compliance. </div><br>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">FEATURES</h2>

                <ul>
                  <li>Worksheet styled ease of use report creation or modification</li>
                  <li>Easy to use WYSIWYG editor and export</li>
                  <li>Accurate multiple Point-In-Time information reporting and analytics</li>
                  <li>Attendance and shift with embedded heuristics artificial intelligence</li>
                  <li>Clarity in computation results with full self-explaining detail</li>
                  <li>Wage cost integration to other 3rd party GL system</li>
                  <li>Wide configurability minimises the need to customise</li>

                </ul>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">BENEFITS</h2>

                <ul>
                  <li>Improves administrative effectiveness and efficiency</li>
                  <li>Enables broad-scoped system enforced policy compliance</li>
                  <li>Fine grained security control on access to confidential human capital functions and data</li>
                  <li>Analytics for better management of benefits cost</li>
                  <li>Accurate & efficient administration of attendance, shifts and overtime</li>
                  <li>Ready to scale-up beyond the administrative human capital functions</li>
                  <li>Improves effectiveness of management decision-making.</li>

                </ul>

                <br> <br>
              </div>
              <h2 class="hd" style="color:green;font-size:1.6em;">ESS</h2>
              <div class="intro">
                <div style="font-size:1.1em;letter-spacing:1px;font-family:verdana;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Enables mobile devices and web based self-service approval workflow automation for application submission and viewing of human capital information. </div><br>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">FEATURES</h2>

                <ul>
                  <li>Multi-criteria employee grouping for workflow</li>
                  <li>Unlimited levels of approver in route</li>
                  <li>Approval routes embedded with user rules</li>
                  <li>Routes can be shared with multiple workflow documents</li>
                  <li>Apply user rules at document level</li>
                  <li>Workflow action notification, reminder and escalation is user defined</li>
                  <li>Supports Andriod and iOS mobile devices</li>

                </ul>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">BENEFITS</h2>

                <ul>
                  <li>Lower cost of web centric self service empowerment</li>
                  <li>Wider reach for self-service roll-out with mobile device accessibility</li>
                  <li>Deeper self-service functional scaling from broad range of modules</li>
                  <li>User interface design consistency & adaptiveness reduces learning time</li>
                  <li>HRMS’ administrative policies integration into ESS lowers administration costs</li>
                  <li>High process fit with fine grained workflow configurability</li>


                </ul>

                <br> <br>
              </div>
              <h2 class="hd" style="color:green;font-size:1.6em;">HRSS</h2>
              <div class="intro">
                <div style="font-size:1.1em;letter-spacing:1px;font-family:verdana;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The strategic Human Capital planning and management platform incorporating performance balanced scorecard, high performers talent pool with succession and career tracking and performance based compensation management. </div><br>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">FEATURES</h2>

                <ul>
                  <li>Flexible template by business unit, job & grade for performance form assignment</li>
                  <li>Unlimited sections, details (criteria) & score scales within form</li>
                  <li>Combine score from multiple forms</li>
                  <li>flexNotz continuous & evidence base appraisal</li>
                  <li>High performers pool for succession and career planning</li>
                  <li>Proficiency gap guided training planning</li>
                  <li>Full cycle recruitment process, i.e. job requisition to job offer</li>

                </ul>
                <br>
                <br>
                <h2 class="hd" style="color:darkblue;font-size:1.6em;">BENEFITS</h2>

                <ul>
                  <li>Performance shaped to emphasize company policy and culture</li>
                  <li>Moderation of skewed score to adjust performance reward</li>
                  <li>Corporate portal & brand enhanced with recruitment capabilities</li>
                  <li>New recruit’s data auto updates employee database</li>
                  <li>Stronger training impact from performance gap aligned training plan</li>
                  <li>Enriched analytics insights from the 3 cluster’s combined data</li>
                  <li>Improved evidence based decision from prescriptive and predictive insights</li>


                </ul>


              </div>

                                  <br>
                                    

                                     <div>
                                     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Request for Brochure</button>

                                        <!--MODAL-->
                                            <div id="id01" class="modal">
                                              
                                              <form id="gform" method="post" class="modal-content animate" action="https://script.google.com/macros/s/AKfycbxIS3IMIGQlOizKTjBa0qMxsSVSqJTpVy0LoD0d7Ai9RZMsnQk/exec" onsubmit="return validate();">
                                                <div class="modal-header" >
                                                  <span style="font-size:20px;font-family:sans serif;letter-spacing:1px;">&nbsp&nbsp Request for Brochure</span><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                </div>
												

                                                <div class="containerss">
                                                 <div class="col-sm-10 col-lg-offset-1" style="margin-top:10px;">
                                                    <div class="row">
                                                      <div class="col-sm-8">
                                                          <label style="width:100%">Full Name</label>
                                                          <input type="text" placeholder="Enter First Name" class="form" name="Fullname"  >
                                                          <p style="color:red" id="error_fname"></p>
                                                      </div>
                                                    <!--   <div class="col-sm-6">
                                                           <label style="width:100%">Last Name</label>
                                                          <input type="text" placeholder="Enter Last Name" class="form" name="Lastname"  >
                                                          <p style="color:red" id="error_lname"></p>
                                                      </div> -->
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                          <label style="width:100%">Company Name</label>
                                                          <input type="text" placeholder="Enter Company Name" class="form" name="Company"  >
                                                          <p style="color:red" id="error_cname"></p>
                                                      </div>
                                                      <div class="col-sm-6">
                                                           <label style="width:100%">Position</label>
                                                          <input type="text" placeholder="Enter Position" class="form" name="Position"  >
                                                          <p style="color:red" id="error_pos"></p>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                          <label style="width:100%">E-mail Address</label>
                                                          <input type="text" placeholder="Enter E-mail Address" class="form" name="email"  >
                                                          <p style="color:red" id="error_email"></p>
                                                      </div>
                                                      <div class="col-sm-6">
                                                           <label style="width:100%">Contact No.:</label>
                                                          <input type="text" placeholder="Enter Contact No." class="form" name="Contact_No"  >
                                                          <p style="color:red" id="error_num"></p>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-8 ">
                                                          <label style="width:100%">Current System Used:</label>
                                                          <input type="text" placeholder="Enter Current System" class="form" name="Current_System"  >
                                                          <p style="color:red" id="error_currsys"></p>
                                                      </div>
                                                      
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-12 ">
                                                          <label >Remarks:</label>
                                                          <textarea  placeholder="Enter Remarks" class="form" name="Remarks" ></textarea>
                                                          <p style="color:red" id="error_remarks"></p>
                                                      </div>
                                                      
                                                    </div>
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="HRDESK">
                                                  </div>
                                                <button type="submit" onclick="checkValid();">Send Request</button>
                                               
														 
                                              </form>

                                            </div><!--MODAL--></div><!--Inrot-->
											  
                                                </div>
												 <br>
												<div>
												<h2 class="hd" style="color:green;font-size:1.4em;">
												<a href="https://flexhr.com/" target="_blank">
												  <em>Visit FLEXHR Website</em>
												 </a>
											    </h2>
											   <br>
                                              </div>
                                            <br>
                                         
                                             <div style="display:none;" id="thankyou_message">
                                                         <h2><em>Thanks</em> for requesting a brochure!
                                                               We will get back to you soon!</h2>
                                                                
                                                                 </div>
                </div>
      </div>
</div>
            
 <script data-cfasync="false" type="text/javascript"
src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>


<script>
var valid =  false;

  function checkValid(){
    validate();
    if(valid==true){
      document.getElementById('id01').style.display='none';
    }
    else{
      document.getElementById('id01').style.display='block';
      valid =  true;
    }
  }
  function validate(){

     var error="";
     var fname = $('[name=Fullname]').val();

     if( fname == "" )
       {
        error = " Error Full Name. ";
        document.getElementById( "error_fname" ).innerHTML = error;
        valid =  false;
        
       }
       else{
        error ="";
         document.getElementById( "error_fname" ).innerHTML = error;
         valid =  true;
              }


        var cname =  $('[name=Company]').val();
       if( cname == "" )
       {
        error = " Error Company Name. ";
        document.getElementById( "error_cname" ).innerHTML = error;
        valid =  false;
        
       }
         else{
        error ="";
         document.getElementById( "error_cname" ).innerHTML = error;
         valid =  true;
              }

        var pos =  $('[name=Position]').val();
       if( pos == "" )
       {
        error = " Error Position. ";
        document.getElementById( "error_pos" ).innerHTML = error;
        valid =  false;
        
       }
         else{
        error ="";
         document.getElementById( "error_pos" ).innerHTML = error;
         valid =  true;

              }

         var email=  $('[name=email]').val();
       if((email == "") || (email.indexOf( "@" ) )== -1){
          error = " Error Email. ";
        document.getElementById( "error_email" ).innerHTML = error;
        valid =  false;
        
       }
        else{
        error ="";
         document.getElementById( "error_email" ).innerHTML = error;
         valid =  true;
              }


             var con =  $('[name=Contact_No]').val();
       if( con == "" )
       {
        error = " Error Contact No. ";
        document.getElementById( "error_num" ).innerHTML = error;
        valid =  false;
        
       }
         else{
        error ="";
         document.getElementById( "error_num" ).innerHTML = error;
         valid =  true;
              }

         var curr =  $('[name=Current_System]').val();
       if( curr == "" )
       {
        error = " Error Current System. ";
        document.getElementById( "error_currsys" ).innerHTML = error;
        valid =  false;
        
       }
         else{
        error ="";
         document.getElementById( "error_currsys" ).innerHTML = error;
         valid =  true;
              }

          var rem =  $('[name=Remarks]').val();
       if( rem == "" )
       {
        error = " Error Remarks. ";
        document.getElementById( "error_remarks" ).innerHTML = error;
        valid =  false;
       
       }
         else{
        error ="";
         document.getElementById( "error_remarks" ).innerHTML = error;
         valid =  true;
              }
        
  }
</script>  

<?php 
  getFooter();
?>