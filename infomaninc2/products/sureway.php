<?php 
  include_once('include.php');
  getHeader('sureway');
  getNavigation('products');
  $menu = 'Non-life Insurance';
?>
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
</style>
<div class="sidebar aligntop">
                     <!--  <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                              <li>Intra Strata Assurance Corp.</li>
                                              <li>Stronghold Assurance</li>
                                              <li>Pacific Union Insurance Company</li>
                                           
                                              <li>Visayan Surety and Insurance Corp.</li>
                                          </ul>
                                       
                                     </div>
                 </div> -->
                 <?php getSideBarRight();
                 //$this->load->view('include/side_bar_right');?>
                 </div>
  <?php getSubs(); 
  //$this->load->view('include/subs');
  ?> 


                <div class="main col3" align="justify">
                    <h1 class="hd" >Sureway11</h1>                        
                               <img src="<?php echo base_url('assets/img/logo/non life ensurance.png');?>" width="100%"></img>
                                    <br>
                                     <div ><p class="par" style="font-size:1.2em;line-height:30px;">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp   Is an integrated non-life insurance
                                        software application designed and developed based on the local non-life
                                        insurance environment. The underlying software architecture used in the 
                                        development of the application is Progress Software - a technology based on 
                                        4GL/RDBMS. It provides complete functionality and features for the following
                                        ready-to-use Web-Based modules and can readily be deployed on both Linux and Microsoft Windows platforms.</p>
                                      </div><br><br>
                                      <div class="intro">
                                      <div>
                                         <h1 class="hd">5 Integrated Module:</h1> 
                                         <img src="<?php echo base_url('assets/img/software_customer/sureway_modules.png');?>" width="100%"></img>
                                      <br><br> <h1 class="hd">General Features:</h1> 
                                       <ul class="cont">
                                          <li>BIR and IC Compliance (BIR Approved)</li>
                                          <li>Web Based Modules</li>
                                          <li>Highly Automated Processing of Transactions</li>
                                          <li>Consolidated Financials</li>
                                          <li>Easy to Administer Application</li>
                                          <li>Paperless Approval Process</li>
                                          <li>Digitized Signature Capable</li>
                                          <li>PDF Printouts Format</li>
                                          <li>User-Defined Access up to process level</li>
                                          <li>Interim Policy and Quotations</li>
                                          <li>Online Approval with user-defined limits<li>
                                          <li>Alert for Approving Officers</li>
                                          <li>Common Screen for all lines</li>
                                          <li>Issuance of Provisional Receipts</li>
                                          <li>Batch Printing of Policies and Renewal Notice</li>
                                          <li>Block Card(TRL) Monitoring of Limits</li>
                                          <li>Uploading of Motor Car Fleet Policy(ies)</li>
                                          <li>Uploading of PA Covered Person(s)</li>
                                          <li>Uploading Documents</li>      
                                          <li>Definable Recurring A/R, Recurring A/p, and Recurring Journal</li> 
                                       </ul>
                                       <br>

                                     </div>
                                  
                                   <br>

                                   
                                     <div>

                                     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Request for Brochure</button>
                                        
                                            <div id="id01" class="modal" >
                                              
                                              <form style="margin-top:0px;" id="gform" method="post" class="modal-content animate" action="https://script.google.com/macros/s/AKfycbxIS3IMIGQlOizKTjBa0qMxsSVSqJTpVy0LoD0d7Ai9RZMsnQk/exec" onsubmit="return validate();">
                                              
        
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
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="Sureway">
                                                  </div>
                                                  <!-- <label>First Name</label>
                                                  <input type="text" placeholder="Enter First Name" class="form" name="fname" id="fname" >
                                                  <p style="color:red" id="error_fname"></p>


                                                  <label>Last Name</label><br><br>
                                                  <input type="text" placeholder="Enter Last Name"class="form" name="lname"  id="lname" ><br>
                                                   <p style="color:red" id="error_lname"></p>


                                                <label>Company Name</label><br><br>
                                                  <input type="text" placeholder="Enter Company Name" class="form" name="cname"id="cname"  >
                                                 <p style="color:red" id="error_cname"></p>
                                                 <input type="hidden" id="brochure" name="brochure" value="sureway">
                                                <label>Email</label><br><br>
                                                  <input type="email" placeholder="Enter Email"class="form" name="email" id="email" ><br><br>
                                                   <p style="color:red" id="error_email"></p> -->


                                                <button type="submit" onclick="checkValid();" >Send Request</button>
                                                 
                                                </div>

                                              </form>

                                            </div></div>
                                            <div style="display:none;" id="thankyou_message">
                                                         <h2><em>Thanks</em> for requesting a brochure!
                                                               We will get back to you soon!</h2>
                                                               <!--  <a class="btn btn-info btn-lg" href="http://infoman-inc.byethost5.com/infoman/products/sureway"> Go BACK to the Website</a> -->
                                                                 </div>
                                            
                                  
                </div>
      </div>
     <!--  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Request for Brochure</button>

                                          
                                          <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                           <!--    <div class="modal-content animate">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Modal Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                <form id="gform" method="post" class="" action="https://script.google.com/macros/s/AKfycbxIS3IMIGQlOizKTjBa0qMxsSVSqJTpVy0LoD0d7Ai9RZMsnQk/exec" onsubmit="return validate();">
                                               
                                                </form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>

                                            </div>
                                          </div>  -->
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