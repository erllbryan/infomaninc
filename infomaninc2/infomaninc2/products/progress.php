<?php 
  include_once('include.php');
  getHeader('progress');
  getNavigation('products');
  $menu = 'RDBMS Development';
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


   <?php getSideBarRight();
          getSubs();

   //$this->load->view('include/side_bar_right');?>
     
 <?php //$this->load->view('include/subs');?>

                <div class="main col3"  align="justify">
                    <h1 class="hd" style="color:green;">About Progress Software Corporation</h1>                        
                        <div ><br><img src="<?php echo base_url('assets/img/progress_logo.png')?>" width="100%" height="45%" alt="null"><br></div>
                           <br>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Data is exploding. Digital devices are proliferating. Interfaces are taking new forms. Everything must be connected. Developers need to deliver more sophisticated apps, faster than ever before. This is where Progress shines.</div>    <br>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Progress has always delivered the platform and tools that organizations need to develop and deploy mission-critical business applications.  As the types of devices and types of interfaces on which applications run proliferate, the number of systems that need to be connected rises, and the amount of data that needs to be harnessed continues to skyrocket, organizations are looking for a modern platform that will enable them to quickly and easily develop and deliver tomorrow’s applications.</div>      <br>
                                      <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Progress offers the best platform for building and deploying tomorrow’s applications quickly and easily.  Progress offers flexible frontend tooling for delivering an engaging and multi-channel UX, a modern, reliable, scalable and secure backend to build and run microservices, and leading data connectivity capabilities for harnessing data from business systems and any other data source, whether on premise or in the cloud.</div>     
                                      <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Progress customers span the globe and include thousands of ISVs that build their business application offerings on Progress, and tens of thousands of organizations using Progress to build their own mission-critical applications.</div>
                                           <div class="intro"> 
                                       <!--  <ul >
                                          <li class="par2" style="font-size:1.3em;">Boosting application developer productivity, reducing time to application deployment, and accelerating the realization of business benefits</li><br>
                                          <li class="par2" style="font-size:1.3em;">Enabling highly distributed deployment of responsive applications across internal networks, the Internet, disconnected users</li><br>
                                          <li class="par2" style="font-size:1.3em;">Simplifying the connectivity and integration of applications and data across the enterprise and between enterprises</li>
                           
                                        </ul> -->
                                        </div>
                                        <br>
                                        &nbsp;
                                         <b><div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Information Managers, Inc. (INFOMAN)</b> is the authorized distributor of Progress products and services in the Philippines.</div>
                                      
                                        
                              <div class="container">
                                  <?php //$this->load->view('software/customers');?>
                                  <style>
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
 max-width:  60%;
 max-height: 500px;
  position: relative;
  margin: auto;
  border:1 solid #eee;
  margin-top: 50px;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .13} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .13} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<br>
<h2 class="hd" style="">Progress Customers</h2>

<div class="" style="height:90%;width:50%;">
<div class="slideshow-container" style="">

        <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/ebay.png');?>" style="width:80%">
          
        </div>

        <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/Phillips.png');?>"  style="width:80%">
          
        </div>

        <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/At-t.png');?>"  style="width:80%">
        </div>
            <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/Chicco.png');?>"  style="width:80%">
        </div>
            <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/coca-cola.png');?>"  style="width:80%">
        </div>
       <div class="mySlides fade">
          <img src="<?php echo base_url('assets/img/software_customer/citibank.png');?>"  style="width:80%">
        </div>
        
</div>

</div>
<br><br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
   
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

                              </div>
                              <h1 class="hd"><a href="http://www.progress.com" target="_blank"  >View Progress Website</a></h1>
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
                                                    <input type="hidden" id="brochure" name="Brochure_Requested" value="Progress">
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