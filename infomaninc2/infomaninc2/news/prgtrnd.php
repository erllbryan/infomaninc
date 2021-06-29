<?php 
  include_once('include.php');
  getHeader('prgtrnd');
  getNavigation('news');
  $menu = 'Progress Trends';
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
              font-size: 1.2em;

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
                      <div class="module case-study"> 
                                        <h2 class="mod-title blue corner-top-6">Clients</h2>
                                        <div class="content corner-bottom-3 group" style="padding:10px;">
                                          
                                          <ul class="intro">
                                              <li>Tupperware Brands Philippines, Inc.</li>
                                              <li>RI Chemical Corp.</li>
                                              <li>Shizokan Corporation</li>
                                              <li>Presline Steel Products, Inc.</li>
                                              <li>C&F Manufacturing Phils. Corp</li>
                                              <li>Progress Manila Bulletin</li>
                                              <li>AM Europharma Corporation</li>
                                              <li>Mercury Group of Companies</li>
                                              <li>CafeFrance Group</li>            
                                          </ul>
                                       
                                     </div>
               </div>   </div>-->
                 <?php getSideBarRight();
                        getSubs();
                 //$this->load->view('include/side_bar_right');?>
                 

 <?php //$this->load->view('include/subs');?>

                <div class="main col3">
                          <div class="intro">  
                                    <a class="twitter-timeline" data-height="500" href="https://twitter.com/QAD_Community">News by QAD_Community</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                         <a class="twitter-timeline" data-height="500" href="https://twitter.com/ProgressSW">News by ProgressSW</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
               
                         </div>
          <!--    <br>
                                  <div> <h2 class="hd" style="color:green;font-size:1.8em;">Who Is QAD?</h2> 
                                    <div class="" style="color:#657465;font-size:1.1em;letter-spacing:1px;font-family:verdana;">Bringing the power of simplicity to enterprises worldwide.</div><br>
                               <p class="par" style="font-size:1.2em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp At QAD, we don't try to be all things to all people. We try to be the right things to the right people: our customers. Every day, the world's leading manufacturing companies rely on QAD to run their global operations. QAD provides innovative enterprise software, services and support, with steadfast commitment to the future of global manufacturing. </p>
                                   
                                    <br><h2 class="hd" style="color:green;font-size:1.8em;">Our Passion. Your Advantage</h2> <br>
                                    <div class="par" style="font-size:1.3em;">     
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Passion. There's nothing like it. It is a driving force for achievement - and fuels relentless dedication to be the best at what you do.<br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp A passion for manufacturing drives QAD to deliver enterprise solutions expressly for manufacturers. In search of superior software for manufacturing, Pam Lopker, president and founder of QAD, was inspired to develop a better solution. That passion gave rise to MFG/PRO, the foundation of QAD's comprehensive suite of enterprise applications. And passion sparked more powerful QAD solutions that help dramatically improve operational performance. INFOMAN shares this passion as sole distributor of QAD Enterprise Resource planning (ERP) / Supply Chain software in the Philippines.
                              </div>
                                      <br> <br> <br>
                                    <div> <h2 class="hd" style="color:green;font-size:1.4em;"><a href="http://www.qad.com" target="_blank"> Visit QAD Website</a></h2> <br>
                                                         </div> -->
               <br><br>                   
             <!-- <div> <h2 class="hd" style="color:green;font-size:1.4em;"><a href="https://www.progress.com/datadirect-connectors" target="_blank"> LEARN MORE</a></h2> <br>
                                                         </div> -->  </div>  
</div>
               
</div>
 
<br><br><br>
  

<?php 
  getFooter();
?>