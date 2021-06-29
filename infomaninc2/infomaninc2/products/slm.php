<?php 
  include_once('include.php');
  getHeader('slm');
  getNavigation('products');
  $menu = 'Cooperatives and Micro-finance';
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
              
              
              
              
            }
            ul li {
               font-family: segoe ui;
              letter-spacing: 1px;
            }
</style>
<!-- <div class="sidebar aligntop">
  <div class="module filter-form">
    <h2 class="mod-title blue corner-top-6">Valued Clients</h2>
    <div class="content">
           <img src="<?php echo base_url('assets/img/software_customer/clients.png');?>" width="100%"></img>
                                  
         
    </div>
  </div>

  <div class="module filter-form">
    <h2 class="mod-title blue corner-top-6">Add-on Modules:</h2>
    <div class="content" style="padding:10px">
       
          <ul class="intro" >          
                <li>Election and Canvasing System                     
                 </li>
                <li> Membership Kiosk                   
                 </li>
                 <li> Queuing Application                  
                 </li>
                             
          </ul>
         
    </div>
  </div>
    <div class="module filter-form">
    <h2 class="mod-title blue corner-top-6">SLM Compliance:</h2>
    <div class="content" style="padding:10px">
       
          <ul class="intro">          
                <li> Truth and Lending Act                     
                 </li>
                <li> Credit Informationn System Act(CISA)                   
                 </li>
                 <li> COOP PESOS                  
                 </li>
                  <li>RA 9520                 
                 </li>
                             
          </ul>
         
    </div>
  </div>
</div> -->
<div class="sidebar aligntop">
                      <!-- <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                              <li>St. Martin Tours Credit and Development</li>
                                               <li>US Embassy Filipino Employees Credit Cooperative</li>
                                                <li>Dumaguete Cathedral Credit Cooperative</li>
                                                <li>Novaliches Development Cooperative</li>
                                                <li>EasyCash Lending Company Inc.</li>
                                          </ul>
                                       
                                     </div>
                 </div> -->
                 <?php getSideBarRight();
                 //$this->load->view('include/side_bar_right');?>
                 </div>
 <?php getSubs();
 //$this->load->view('include/subs');?>


                <div class="main col3" align="justify">
                    <h1 class = "hd" style="color:green;">SLM - Savings and Loan Manager</h1>                        
                              <img src="<?php echo base_url('assets/img/SLMLOGO89.jpg');?>" width="70%" ></img>
                                    
                                     <div><br>
                                        <b><p class="par" style="font-size:1.2em;line-height:30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Savings and Loan Manager</b> is a comprehensive software package
                                        that is specifically designed & developed to meet the need and demand of cooperatives,
                                        SLAI and Lending Institution. The system ensures high quality of information, integrated
                                        data exchanges, regulatory reports and implement enterprise wide range processes.
                                        </p>
                                      </div><br>
                                      <br>
                                      <div>
                                         <h3 class = "hd">SLM Integrated Module:</h3> <br>
                                         <img src="<?php echo base_url('assets/img/software_customer/slm.png');?>" width="100%"></img>
                                      <br> <br><h3 class = "hd">Features:</h3> <br>
                                       <div class="intro">
                                       <ul>
                                          <li style="font-size:1em;">Streamlines Business processess</li>
                                          <li style="font-size:1em;">Real-Time access to transaction </li>
                                          <li style="font-size:1em;">Tight Control over membership, transaction and accounting data</li>
                                          <li style="font-size:1em;">Fully Integrated modules that eliminate data re-entry</li>
                                          <li style="font-size:1em;">High Security Access</li>
                                          <li style="font-size:1em;">Database Audit Trail Features</li>
                                          <li style="font-size:1em;">Parametarize Driven</li>
                                          <li style="font-size:1em;">Easy to use Windows-based user interface</li>
                                          <li style="font-size:1em;">More than 50 reports available</li>
                                        
                                       </ul>
                                       <br>

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
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="SLM">
                                                  </div>

                                                <button type="submit" onclick="document.getElementById('id01').style.display='none';">Send Request</button>
                                                 
                                                </div>

                                              </form>

                                            </div><!--MODAL-->
                                     </div>
                                  <div style="display:none;" id="thankyou_message">
                                                         <h2><em>Thanks</em> for requesting a brochure!
                                                               We will get back to you soon!</h2>
                                                               
                                                                 </div>
                </div>
      </div>
</div>
</div>
        

<!--MODAL-->
                                            
 <script data-cfasync="false" type="text/javascript"
src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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