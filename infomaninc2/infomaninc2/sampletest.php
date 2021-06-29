	<?php
  include_once('include.php');
  getHeader();
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
                      <div class="module case-study">
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">

                                          <ul class="intro">
                                              <li>Intra Strata Assurance Corp.</li>
                                              <li>Stronghold Assurance</li>
                                              <li>Pacific Union Insurance Company</li>
                                             <!--  <li>AlliedBankers Insurance Corp.</li> -->
                                              <li>Visayan Surety and Insurance Corp.</li>
                                          </ul>

                                     </div>
                 </div>
                 <?php getSideBarRight();
                 //$this->load->view('include/side_bar_right');?>
                 </div>
  <?php getSubs();
  //$this->load->view('include/subs');
  ?>


                <div class="main col3" align="justify">
                    <h1 class="hd" style="font-size: 2.1em;" >Sureway11</h1>
                               <img src="<?php echo base_url('assets/img/logo/non life ensurance.png');?>" width="100%"></img>
                                    <br>
                                     <div ><p class="par" style="font-size:1.1em;line-height:22px;">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp   <b>Sureway11</b> is an integrated non-life insurance
                                        software application designed and developed based on the local non-life
                                        insurance environment. The underlying software architecture used in the
                                        development of the application is Progress Software - a technology based on
                                        4GL/RDBMS. It provides complete functionality and features for the following
                                        ready-to-use Web-Based modules and can readily be deployed on both Linux and Microsoft Windows platforms.</p>
                                      </div><br><br>
                                      <div class="intro">
                                      <div>
                                         <h1 class="hd" style="font-size: 1.9em;">5 Integrated Module</h1>
                                         <img src="<?php echo base_url('assets/img/software_customer/sureway_modules.png');?>" width="100%"></img>
                                      <br><br> <h1 class="hd" style="color:darkblue;font-size:1.9em;">Features</h1>
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




                                     <div>

                                     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-top: -15px;">Request for Brochure</button>

                                     <?php
  $result="";
  if (isset($_POST['submit'])) {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='maaustria16@gmail.com';
    $mail->Password='Johnvincent';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('maaustria16@gmail.com');
    $mail->addAddress('kiiidph@gmail.com');
    //$mail->addAddress('admin@infomaninc.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Email: ' .$_POST['email']. '<br>Company: ' .$_POST['company'].'<br>Position: ' .$_POST['position'].'<br>Current System Used: '.$_POST['system']. '<br>Message: ' .$_POST['msg'].'</h1>';

    if (!$mail->send()) {

      $result="Something went wrong please try again.";
      # code...
    }
    else{

      $message = "Request Sent! Thanks ".$_POST['name']."!";
      $result = "<script type='text/javascript'>alert('$message');</script>";
     // $result="Thanks ".$_POST['name']." sending your request. ";
    }

  }

?>

                                           <div id="id01" class="modal">

                                              <form id="gform" method="post" class="modal-content animate" action="">
                                                <div class="modal-header" >
                                                  <span style="font-size:20px;font-family:sans serif;letter-spacing:1px;">&nbsp&nbsp Request for Brochure</span><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                </div>
                                                <h2 class="text-center text-success"><?= $result; ?></h2>
                                                <div class="containerss">
                                                 <div class="col-sm-10 col-lg-offset-1" style="margin-top:10px;">
                                                    <div class="row">
                                                      <div class="col-sm-8">
                                                        <div class="row">
                                                          <div class="col-sm-5">
                                                            <label style="width:100%">Full Name</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                        </div>
                                                          		<input id="fname" type="text" placeholder="Enter Full Name" class="form" name="name" required>
																															<p style="color:red" id="error_fname"></p>
																											</div>
                                                    </div>
                                                    <div class="row">
                                                    	<div class="col-sm-6">
                                                        <div class="row">
                                                          <div class="col-sm-7">
                                                            <label style="width:100%">Request</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                        </div>
																													 	<input type="text" placeholder="Request" class="form" name="subject" readonly="readonly" value="Sureway11 Brochure">
																														<p style="color:red" id="error_lname"></p>
                                                    	 </div>
                                                      </div>
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                        <div class="row">
                                                          <div class="col-sm-7">
                                                            <label style="width:100%">Company Name</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                         </div>
                                                            <input type="text" placeholder="Enter Company Name" class="form" name="company" required>
                                                          <p style="color:red" id="error_cname"></p>
                                                        </div>
                                                      </div>
                                                        <div class="row">
                                                          <div class="col-sm-6">
                                                            <div class="row">
                                                              <div class="col-sm-7">
                                                                <label style="width:100%">Position</label>
                                                              </div>
                                                                <div class="col-sm-1">
                                                                  <label style="color: red;">*</label>
                                                                </div>
                                                            </div>
                                                          <input type="text" placeholder="Enter Position" class="form" name="position" required>
                                                          <p style="color:red" id="error_pos"></p>
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                        <div class="row">
                                                          <div class="col-sm-7">
                                                            <label style="width:100%">E-mail Address</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                        </div>
                                                          <input type="text" placeholder="Enter E-mail Address" class="form" name="email" required>
                                                          <p style="color:red" id="error_email"></p>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                        <div class="row">
                                                          <div class="col-sm-7">
                                                            <label style="width:100%">Contact No.:</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                        </div>
                                                          <input type="text" placeholder="Enter Contact No." class="form" name="contact" required>
                                                          <p style="color:red" id="error_num"></p>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                        <div class="row">
                                                          <div class="col-sm-7">
                                                            <label style="width:100%">Current System Used:</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                        </div>
                                                            <input type="text" placeholder="Enter Current System" class="form" name="" ame="system" required>
                                                          
                                                        
                                                          <p style="color:red" id="error_currsys"></p>
                                                      </div>


                                                    </div>

                                                    <div class="row">
                                                      <div class="col-sm-10">
                                                        <div class="row">
                                                          <div class="col-sm-5">
                                                            <label style="width: 100%">Remarks:</label>
                                                          </div>
                                                          <div class="col-sm-1">
                                                            <label style="color: red;">*</label>
                                                          </div>
                                                          </div>
                                                          <textarea  placeholder="Enter Remarks" class="form" name="msg" required></textarea>
                                                          <p style="color:red" id="error_remarks"></p>
                                                      </div>
                                                    </div>

                                                      
                                                            
                                                              <label style="width: 100%; color: red;">
                                                                <i>* &nbsp&nbsp&nbsp Complete all required fields.</i>
                                                              </label>

                                                    
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="FLEXHR">
                                                  </div>
                                                <button type="submit" name="submit" id="submit">Send Request</button>

                                                </div>

                                              </form>

                                            </div>
                                            </div>
                                             </div>


                </div>
      </div>
     <!--  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Request for Brochure</button>


                                          <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                               Modal content-->
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
console.log(valid);

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
     var fname = document.getElementById("fname").value;
    console.log("php pa");
    console.log(fname);

     if( fname == "" )
       {
        error = " Error Full Name. ";
        document.getElementById( "error_fname" ).innerHTML = error;
        valid =  false;

       }
       else{
        error = "";
         document.getElementById( "error_fname" ).innerHTML = error;
         valid =  true;
              }
/*

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
   */
  }
</script>
<?php
	getFooter();
?>
