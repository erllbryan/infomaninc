<?php 
	include_once('include.php');
	getHeader('prgtrnd');
	getNavigation('news');
  $menu = 'Progress Trends';
?>
 <style type="text/css">
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
                        <li class="first"><a href="<?php echo base_url('home');?>">Home</a></li><li ><a href="<?php echo base_url('partners');?>">Partners</a></li><li>Progress Trends</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        <style>
               .n1{ 
                position: relative;
                background: url('assets/img/insidesbg-3.jpg') center top no-repeat;
           
                height: 800px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
              }
        </style>
  <?php //$this->load->view('include/side_bar_right');
  		getSideBarRight();
  		getSubNav();
  	?>
 <?php //$this->load->view('include/sub_nav');?>

                   <div class="main col3">
                          <div class="intro">  
                                    <!-- <a class="twitter-timeline" data-height="500" href="https://twitter.com/QAD_Community">News by QAD_Community</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                         <a class="twitter-timeline" data-height="700" href="https://twitter.com/ProgressSW">News by ProgressSW</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
               
                         </div>
                </div>
<?php 
	getFooter();
?>