<?php 
  include_once('include.php');
  getHeader('rptas');
  getNavigation('products');
  $menu = 'Local Government Unit';
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
                       <b > <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li> <li ><a href="<?php echo base_url('products/sureway.php');?>"> Solutions </a> </li><li><?php echo $menu; ?></li></ul></b>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  

     
 <?php getSubs();
  //$this->load->view('include/subs');?>
<div class="sidebar aligntop">
                     <!--  <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                              <li>Kabankalan City, Negros Occidental</li>
                                              <li>City of San Fernando Pampanga</li>
                                              <li>Negros Occidental</li>
                                              <li>Tagum City</li>
                                              <li>Victorias City, Negros Occidental</li>
                                          </ul>
                                       
                                     </div>

                 </div> -->
                 <?php getSideBarRight(); 
                 //$this->load->view('include/side_bar_right');?>
                 </div>

                <div class="main col3">  
                 <div ><img src="<?php echo base_url('assets/img/riseLGU2.jpg')?>" width="100%" height="40%" alt="null" align="left"><br><p style=" font-family: segoe ui;
            letter-spacing: 1px;
              text-align: justify;
              font-size: 1.1em;"><strong><span style="color:green;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp RISE LGU</span></strong> is a comprehensive software solution that provides revenue-generating information, financial management, governance, and administration systems for local government units. The solution is developed primarily for Philippine Barangays, Towns, Cities, Municipalities, and Provinces.</p></div>
                     <br><br>
                     <br>
                    <h1 style="color:green;font-size:2em;">Features</h1>                        
                           <div class="intro">
                                  <div> <h1 style="color:green;"><strong>Real Property Tax Administration System(RPTAS / RPTA)</strong></h1> 
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The <strong>Real Property Tax Administration System</strong> as a tool provide a comprehensive approach in maintaining large volume of property records and offers fast and accurate assessment service on all real property taxpayers for tax payment purposes. It is also designed to be flexible enough to be adopted to any local government unit's real property assessment system. The RPTAS was updated to adopt the prescribed assessment forms and guidelines in accordance with LAR 1-04 (The Manual on Real Property Appraisal and Assessment Operations) </div>
                                   <br>
                                   <h1 style="color:#333;"><strong>System Benefits</strong></h1> 
                                      <ul style=" font-family: segoe ui;letter-spacing: 1px;text-align: justify;font-size: 1.2em;">
                                          <li>Higher Revenues</li>
                                          <li>Fast and easy access of information</li>
                                          <li>Zero Graft and Corruption</li>
                                          <li>Ensure Assessment Accuracy</li>
                                          <li>Improved System Workflow and Personnel Efficiency</li>
                                          <li>Upgraded Technical Skills of Personnel</li>
                                          <li>Reduce Cost</li>
                                          <li>Enhance Tax Payers Awareness / Increased Satisfaction</li>
                                          <li>Improve Data Security</li>
                                          <li>Enhanced RPTAS Support Programs (Special Projects)</li>
                                      </ul>
                                 <br>
                                   <br>
                                    <!-- <div> <h1 style="color:green;"><strong>Real Property Tax Collection System (RPTCS)</strong></h1> 
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The billing functions of the Treasurer's office for the assessed taxes due on real estate properties. It has facilities for producing billing notices/statements and monitoring of payments collected in the Revenue Collection System (RCS).</div>
                                      <br><br> -->
                                    <div> <h1 style="color:green;"><strong>Electronic Business Permit & License System (eBPLS)</strong></h1> 
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The <strong> electronic Business Permit and License System</strong> is a web-based/cloud application that handles business permits, licenses and certificates application and processing. Together with practices and procedures, eBPLS enables the Local Government Units to create organized processes which translates to better services and improve revenues through efficient collection.</div>
                                   <br><br>
                                    <div> <h1 style="color:green;"><strong>Budget and Expense Monitoring System (BEMS)</strong></h1> 
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The BEMS takes over the manual task of consolidating the budgets of all units in an organization and produces reports such as Projected Cash Flow Statements. It maintains in a database the approved budget of each unit, thus information on budget balances and variances between budgeted amounts and actual expenditures are captured.</div>
                                 <br><br>
                                    <div> <h1 style="color:green;"><strong>Motorized Tricycle Operator's Permit System (MTOPS)</strong></h1>  
                         <strong>Generates the following reports:</strong><br><br>
                                  <p>a. Recording of all MTOP issued </p>
                                  <p>b. Setup of Transaction and other fees  </p>
                                  <p>c. Ledger of transactions of MTOP  </p>
                                  <p>d. Assessment of Transaction   </p>
                                  <p>e. Posting of Payment   </p>
                                  <p>f.  Printing of Forms  </p>
                                  <p>g. Reports  </p>
                                  </div>
                                 <br>
                                  <div> <h1 style="color:green;"><strong>Revenue Collection System (RCS)</strong></h1> 
                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The RCS captures and maintains a database of all revenue collections and bank deposit transactions. It also generates the required standard reports on collections and deposits.</div>
                                   <br><br>
                                <div> <h1 style="color:green;"><strong>Executive Information System (EIS)</strong></h1> 
                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The Executive Information System will access the data of the application systems in order to provide management with easy-to-understand summary information. The EIS also provides the facility to drill down for more detailed data as needed. The EIS makes it possible for decision-makers to see both the big picture and little details. It allows the Local Chief Executive and LGU officials to quickly access vital information.</div>
                                <br><br>
                               <div> <h1 style="color:green;"><strong>Miscellaneous Systems</strong></h1> 
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Able to capture all sources of revenue through the issuance of computer generated receipt. </div>
                                   <br> 
                              <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The Residence Certificate System (RCS) will be able to capture database of residence applying for residence certificates, Report of Collection, and Deposit and Abstract Collection. 
                            </div><br>
                             <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The Professional Tax Receipt (PTR) captures professionals applying for a professional tax receipt. The system maintains the subsidiary legder of each taxpayer. The system is linked to Point of Payment System for the issuance of computerized official receipt. The reports generated consists of payment history of each taxpayer, masterlists of taxpayers, daily abstract of collection report (CCS), and abstract module of professional tax.
                            </div>
                            <br><br>
                           <h1 style="color:#333;"><strong>Industry Benefits</strong></h1> 
                               <ul style=" font-family: segoe ui;
            letter-spacing: 1px;
              text-align: justify;
              font-size: 1.2em;">
                                          <li>Designed and proven for Philippine Local Government Units.</li>
                                          <li>Strategic and potent decision making, managing operations and governance.</li>
                                          <li>Facilitates the proper formulation and execution of development plans.</li>
                                          <li>Boosts revenues through efficient collection and monitoring systems.</li>
                                          <li>Provides effective and efficient linkage of the provincial gov't. with its municipal gov't and barangay units.</li>
                                          <li>Delivers timely, relevant and accurate information.</li>
                                          <li>Open System solution</li>
                                          <li>Locally developed</li>
                                          <li>Source Code Availability</li>                               
                               </ul>



                          </div>
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
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="RiesLGU">
                                                  </div>
                                                <button type="submit" onclick="checkValid();">Send Request</button>
                                                 
                                                </div>

                                              </form>

                                            </div><!--MODAL--></div><!--Inrot-->
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