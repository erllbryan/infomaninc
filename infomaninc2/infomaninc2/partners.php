<?php 
	include_once('include.php');
	getHeader('partners');
	getNavigation('partners');
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
            .tab1 li{
              font-family: segoe ui;
              letter-spacing: 1px;
              text-align: justify;
              font-size: 1.3em;


            }
            .cont{
              
               font-family: segoe ui;
              letter-spacing: 1px;
              }

            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
        </style>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path" style="letter-spacing:1px;font-weight:bold;font-family:verdana;">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li ><a href="<?php echo base_url('partners');?>">Partners</a></li><li>Partnership Overview</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  <?php //$this->load->view('include/side_bar_right');
  		getSideBarRight();
  		getPartnersSubs();
  ?>
 <?php //$this->load->view('partners/subs');?>

                <div class="main col3" align="justify">
                    <h1 class="hd" style="color:green;">Partnership Overview</h1>                        
                           <br>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Information Managers, Inc. is growing rapidly and is actively recruiting value-added resellers, distributors and system integrators to expand its network. Information Managers, Inc. Software's Business Partner Program is a channel of top-notch organizations who help distribute solutions nationwide. The Business Partner Program is an attractive package that offers:
                                    </div>
                                    <br>
                                    <div class="intro">
                                  <ul class="tab1" style="font-size:1.1em;">
                                    <li style="font-size:1em">The highest reseller margins in the industry.</li>
                                    <li style="font-size:1em">Protected territories. Information Managers, Inc. Software limits the number of resellers it works with to ensure that its partners won't have to compete against each other.</li>
                                    <li style="font-size:1em">Responsive technical support via the Internet, email or telephone.</li>
                                    <li style="font-size:1em">Complete access to Information Managers, Inc. Software's business development department for product demonstrations, site visits and sales assistance.</li>
                                    <li style="font-size:1em">Customer lead generation and co-marketing programs.</li>
                                    <li style="font-size:1em">Product investment through research and development.</li>

                                  </ul>
                          
                                    </div>
                                    <br>
                                  <div >
                                      <h1 class="hd" style="color:green;">Partners </h1>
                                      <div class="background">
                <div class="connected-carousels">
            <div class="stage">
              <div class="carousel carousel-stage" data-jcarousel="true" data-jcarouselautoscroll="true">
                              <ul style="left: -4700px; top: 0px;">           
               <!--  <li>
                                    <a class="omnitureInternalPromotion" filetitle="Online Travel 2020" href="#">
                                       <img src="<?php echo base_url('assets/img/stepup.jpg');?>" style="width:50%;background-position:centered;">
                                    </a>
                                </li> -->
                                <li>
                                   <a class="omnitureInternalPromotion" filetitle="Online Travel 2020" href="#">
                                        <img src="<?php echo base_url('assets/img/qadlogo.png');?>"  style="width:50%">
                                    </a>
                                </li>
                                <li>
                                    <a class="omnitureInternalPromotion" filetitle="Online Travel 2020" href="#">
                                       <img src="<?php echo base_url('assets/img/progresslogo.jpg');?>"  style="width:50%">
                                    </a>
                                </li>
                                <li>
                                    <a class="omnitureInternalPromotion" filetitle="Online Travel 2020" href="#">
                                        <img src="<?php echo base_url('assets/img/lexsyslogo.png');?>"  style="width:50%">
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </div></div></div>                      
                                      <!-- <div   style="margin:10px;  "> -->

                                      <!--  -->
                                      <!-- </div> -->
                                  
                                  
                                  <div align="center" class="par" align="center" style="color:gray;font-family:calibri;letter-spacing:2px;"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you would like further information on our reseller and partner programs, or if you are a technology or consulting organization with a client who needs our software solutions, please email our business development division at   <a href="mailto:sales@infomaninc.com" class="link style4"> sales@infomaninc.com</a> call (632) 8 843-1786 or (632) 8 843-2634.</div>
                           </div>
                </div>
      </div>
</div>
            
<?php 
	getFooter();
?>