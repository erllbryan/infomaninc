<?php 
	include_once('include.php');
	getHeader('sitemap');
	getNavigation('home');
?>
<style type="text/css">
    h1{
        font-weight: bold;
        font-size: 1.5em;
        letter-spacing: 1px;

    }
   
</style>
<div id="content" >
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li>Location Map</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
      <?php getSideBarRight(); ?>      
 <?php getSideAbout();?>

                <div class="main col3">
                    <!-- <h1 style="color:green;">Site Map</h1>  -->                       
                            <div class="intro">    
<style>

   .site_map li a{
    font-size: 12px;
   }
   .title{
    font-weight: bold;
   }
</style>
                       
                   <div><h1 style="color:green;"><a href="<?php echo base_url('locationmap.php');?>">Location Map</a></h1><br>
                                    <!-- <a href="<?php echo base_url('assets/img/location_map1.png');?>">  <img src="<?php echo base_url('assets/img/location_map1.png');?>" width='100%'></a> -->
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.7118182640224!2d121.01232251457151!3d14.558465389829328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b09b07a6b%3A0xee81dae5648514bb!2sInformation+Managers+Inc!5e0!3m2!1sen!2sph!4v1505287529774" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                     </div>


                         </div>
                </div>
    </div>
</div>
            



<?php getFooter();?>