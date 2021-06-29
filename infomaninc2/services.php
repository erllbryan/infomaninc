<?php 
	include_once('include.php');
	getHeader('services');
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
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li ><a href="<?php echo base_url('services.php');?>">Services</a></li><li>Infoman Services</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  
  <?php //$this->load->view('include/side_bar_right');
  		getSideBarRight();
  		getServicesSubs();
  ?>      
 <?php //$this->load->view('services/subss');?>

                <div class="main col3"  align="justify" style="padding-left:40px;" >
                    <h1 class="hd" style="color:green;">INFOMAN Services</h1>                        
                           <br>
                                     <div class="par" style="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp INFOMAN has spent more than 10 years developing Progress based Software solutions for top companies around the Philippines.

                                    </div>
                                   <br>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  We help our clients implement their business critical solutions thereby increasing sales, improving loyalty, reducing costs, and enhancing profitability. We are dedicated to helping you better serve your customers, but - just as importantly - we deliver exceptional customers service to you - our customer.</div>
                                       <br>
                                     <div class="par">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp That means we're with you every step along the way, providing painless implementation, thorough training and exceptional support. We get you up and running training quickly and efficiently. We help you effectively integrate our software solutions with your other installed system. And, we make sure your users have the knowledge and day-to-day technical support they need to maximize the full value of the software solution.</div>
                          
                                         <br>
                                         <div class=""><br>
                                     <div><h1 class="hd" style="color:green;">What services do we provide?</h1> 
                                      <h1 class="hd2" style="color:green;">Consulting Services</h1> 
                                     <p class="par2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We exercise quick and efficient implementation keeping you aware of the best solutions for your business.</p></div>
                                    
                                          <br>
                                     <div><h1 class="hd2" style="color:green;">Training Services</h1> 
                                     <p class="par2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We provide complete training solutions for every level of user you need.</p></div>
                                             <br>
                                     <div><h1 class="hd2" style="color:green;">Support Services</h1> 
                                     <p class="par2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  We provide superior and ongoing customer support, software upgrades and fixes.</p></div>
                          


                           </div>
                </div>
      </div>
</div>
   <br><br>         



<?php 
	getFooter();
?>