<?php
function getFooter() {
?>
<style>
 ul li a{color:#305874;}
 ul li a:hover{color:#00cccc;}
 .nav li span a{
    font-size:.8em;
 }
 .bot{
    font-size: .8em;
 }
 .bot :hover{
    color:#00cccc;
 }
 .intro{
    margin: 0px;

 }
 .intro li {
    font-size: .8em;
 }
  .lnk{
    font-size: 0.5em;
 }
 .col-sm-3{
    margin: 0px;
    padding: 0px;
 }
 .col-sm-2{
    margin:0px;
    padding: 0px;
 }
 h3{
    
    font-weight: bold;
    font-size: 1em;
    letter-spacing: 1px;
    font-family: verdana;
 }
</style>
<!-- <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-2 col-lg-offset-1">
            <ul>
                <li class="column light"> Products</li>
                <ul>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                </ul>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 ">
            <ul>
                <li class="column light"> Products</li>
                <ul>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                </ul>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 ">
            <ul>
                <li class="column light"> Products</li>
                <ul>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                </ul>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 ">
            <ul>
                <li class="column light"> Products</li>
                <ul>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                </ul>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 ">
            <ul>
                <li class="column light"> Products</li>
                <ul>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                    <li>asdasdasdasd</li>
                </ul>
            </ul>
        </div>
        
    </div>
</div> -->
<br><br>
<div class="container">
    <div class="row" >
        <div class="col-sm-1"></div>
        <div class="col-sm-2 " style="margin:0px;padding:0px;">
            <h3  style="width:25%;"><a style="color:#305874" href="<?php echo base_url('products/progress.php');?>" >Products</a></h3>
            <hr style="margin:0px;margin-top:10px;margin-bottom:10px;border:1px solid #ccc;">
                   <ul class="intro" >
                                       <li><a href="<?php echo base_url('products/sureway.php');?>">Non-life Insurance</a></li>
                                         <li ><a  href="<?php echo base_url('products/slm.php');?>">Cooperatives and Micro Finance</a></li>
                                    <li ><a  href="<?php echo base_url('products/rptas.php');?>">Local Government Unit</a></li>
                                          <li ><a  href="<?php echo base_url('products/erp_supply_chain.php');?>" >ERP for Manufacturing</a></li>
                                     <li ><a  href="<?php echo base_url('products/hrdesk.php');?>">Payroll Systems</a></li>
                                       <li ><a  href="<?php echo base_url('products/progress.php');?>">RDBMS and Development </a></li>  
                                       <li ><a  href="<?php echo base_url('products/data_direct.php');?>">Data Connectivity </a></li>
                                       <li ><a  href="<?php echo base_url('products/flexhr.php');?>">Human Resources Information Systems(HRIS) </a></li>
                                         
                               
                                     </ul>
        </div>
        <div class="col-sm-2" style="margin:0px;">
             <h3  style="width:20%;"><a style="color:#305874"  href="<?php echo base_url('services.php');?>" >Services</a></h3>
             <hr style="margin:0px;margin-top:10px;margin-bottom:10px;border:1px solid #ccc ;">
                    <ul class="intro">
                        <li><a href="<?php echo base_url('services.php');?>" >Infoman Services</a></li>
                        <li class="lnk"><a  href="<?php echo base_url('services/consulting_services.php');?>" >Consulting Services</a></li>
                        <li><a href="<?php echo base_url('services/training_services.php');?>" >Training Services</a></li>
                        <li><a href="<?php echo base_url('services/customer_support.php');?>" >Customer Support</a></li>
                    </ul>
        </div>
        <div class="col-sm-2">
             <h3><a style="color:#305874"  href="<?php echo base_url('partners.php');?>" >Partners</a></h3>
            <hr style="margin:0px;margin-top:10px;margin-bottom:10px;border:1px solid #ccc ;">
                    <ul class="intro" >
                        <li><a href="<?php echo base_url('partners.php');?>" >Partnership Overview</a></li>
                        <li><a href="<?php echo base_url('contactus.php');?>" >Contact Us</a></li>
                    </ul >
        </div>
         <div class="col-sm-2">
              <h3 class="light"><a  style="color:#305874"  href="<?php echo base_url('about.php');?>" >About us</a></h3>
              <hr style="margin:0px;margin-top:10px;margin-bottom:10px;border:1px solid #ccc ;">
                    <ul class="intro">
                      <li ><a  href="<?php echo base_url('about.php');?>">Who We Are</a></li>
                            <li ><a  href="<?php echo base_url('clients.php');?>">Clients</a></li>
                            <li ><a  href="<?php echo base_url('careers.php');?>">Careers</a></li>
                            <li ><a  href="<?php echo base_url('contactus.php');?>">Contact Us</a></li>
                           </ul>
        </div>
        <div class="col-sm-2">
            <h3><a style="color:#305874"  href="<?php echo base_url('news.php');?>" >News And Trending</a></h3>
            <hr style="margin:0px;margin-top:10px;margin-bottom:10px;border:1px solid #ccc ;">
                    <ul class="intro">
                      <li><a href="<?php echo base_url('news.php');?>" >QAD Community Trends</a></li>
                       <li><a href="<?php echo base_url('prgtrnd.php');?>" >Progress Trends</a></li>
                       
                    </ul>
        </div>
    </div>
</div>
<!-- <div id="footer" >
    <div class="nav">
        <div class="footer-block group">
            <ul>
                   <li class="column " style="width:25%;"><h3><a href="<?php echo base_url('products');?>" >Products</a></h3>
                   <ul class="intro">
			                           <li><a style="font-size:12px;" href="<?php echo base_url('products/sureway');?>">Non-life Insurance</a></li>
                            			 <li ><a style="font-size:12px;" href="<?php echo base_url('products/slm');?>">Cooperatives and Micro Finance</a></li>
                           			<li ><a style="font-size:12px;" href="<?php echo base_url('products/rptas');?>">Local Government Unit</a></li>
                            			  <li ><a  style="font-size:12px;"href="<?php echo base_url('products/erp_supply_chain');?>" >ERP for Manufacturing</a></li>
                       				 <li ><a style="font-size:12px;" href="<?php echo base_url('products/hrdesk');?>">Human Resource</a></li>
                           			 <li ><a style="font-size:12px;" href="<?php echo base_url('products');?>">RDBMS and Development </a></li>
                           

                                         
                               
                                     </ul>
                </li>

               

                <li class="column light" style="width:20%;"><h3><a href="<?php echo base_url('services');?>" >Services</a></h3>
                    <ul class="intro">
                        <li><a href="<?php echo base_url('services/consulting_services');?>" >Consulting Services</a></li>
                        <li><a href="<?php echo base_url('services/training_services');?>" >Training Services</a></li>
                        <li><a href="<?php echo base_url('services/customer_support');?>" >Customer Support</a></li>
                    </ul>
                </li>

                <li class="column light" style="width:20%;">
                    <h3><a href="<?php echo base_url('partners');?>" >Partners</a></h3>
                    <ul class="intro">
                        <li><a href="<?php echo base_url('partners');?>" >Partnership Overview</a></li>
                    </ul class="intro">
                </li>

                <li class="column light" style="width:18%;">
                    <h3><a href="<?php echo base_url('home/about');?>" >About us</a></h3>
                    <ul class="intro">
                      <li ><a style="font-size:12px;" href="<?php echo base_url('home/about');?>">Who We Are</a></li>
                            <li ><a style="font-size:12px;" href="<?php echo base_url('home/clients');?>">Clients</a></li>
                            <li ><a style="font-size:12px;" href="<?php echo base_url('home/careers');?>">Careers</a></li>
                            <li ><a style="font-size:12px;" href="<?php echo base_url('home/contact_us');?>">Contact Us</a></li>
                           </ul>
                </li>

                <li class="column light" style="width:18%;"><h3><a href="<?php echo base_url('news/news_and_trending');?>" >News And Trending</a></h3>
                    <ul class="intro" style="font-size:9px;">
                      <li><a href="<?php echo base_url('news/news_and_trending');?>" >QAD Community Trends</a></li>
                       <li><a href="<?php echo base_url('news/news_and_trending');?>" >Progress Trends</a></li>
                       
                    </ul>
                </li>
            </ul>
        </div>
    </div>-->

 <!--FOOTER-->
 
    <div class="container">
        <nav class="navbar" style="text-align:center;">                  
           
           
                         <a class="bot" style="color:#305874" href="<?php echo base_url('about.php');?>" >Copyright &copy;  Information Managers Inc. All Rights Reserved 2021. &nbsp &nbsp </a><span> | &nbsp&nbsp  </span> 
                                     
                        <a class="bot" style="color:#305874" href="<?php echo base_url('legal.php');?>" >Legal &nbsp &nbsp</a> <span> |&nbsp &nbsp </span>     
                            
                    <a class="bot" style="color:#305874" href="<?php echo base_url('sitemap.php');?>" >Site Map</a>
            
            
            
        </nav>
    </div><!--Bottom-->





<script type="text/javascript">
    (function(a,b,c,d){
    a='//tags.tiqcdn.com/utag/amadeus/main/prod/utag.js';
    b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
    a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
    })();
</script>



<div id="fancybox-tmp"></div>
<div id="fancybox-loading">
</div>
<div id="fancybox-overlay"></div>
<div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div></div>

<div class="fancybox-bg" id="fancybox-bg-ne"></div>
<div class="fancybox-bg" id="fancybox-bg-e"></div>
<div class="fancybox-bg" id="fancybox-bg-se"></div>
<div class="fancybox-bg" id="fancybox-bg-s"></div>
<div class="fancybox-bg" id="fancybox-bg-sw"></div>
<div class="fancybox-bg" id="fancybox-bg-w"></div>
<div class="fancybox-bg" id="fancybox-bg-nw"></div>
<div id="fancybox-content"></div><a id="fancybox-close"></a>

<div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>
</div>
</div><span class="viber-share" id="viber1" style="position: absolute; top: 147px; left: 78.4px; width: 52px; height: 21px; background-size: 52px 21px; display: none; z-index: 2147483646; background-image: url(&quot;chrome-extension://dafalpmmoljglecaoelijmbkhpdoobmm/images/button@2x.png&quot;); cursor: pointer; background-repeat: no-repeat;"></span>
</body></html>


<!--share-->
<script type="text/javascript">//stLight.options({publisher: "7d9f937d-01b4-40d3-9b4a-c2a36666d6fd", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
// var options={ "publisher": "7d9f937d-01b4-40d3-9b4a-c2a36666d6fd", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "googleplus", "linkedin", "pinterest", "wordpress", "email", "blogger", "sharethis"]}};
// var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
<style>
/* Full-width input fields */
/*input[type=text], input[type=password],input[type=email] 
*/
.form {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-top:10px;
   /* display: inline-block; */
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.containerss {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
    min-height:300px;
}

.modal-header {
    padding: 5px;
    background-color: #1dcf4f;
    color: white;
    height:50px;
     position: relative;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: white;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
 <script type="text/javascript">prop1="Home";channel="Home";propindex=1;</script>
           
             <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

<?php
}
?>