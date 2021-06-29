<?php 
	include_once('include.php');
	getHeader('locationmap');
	getNavigation('about');
?>

<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first" style="font-size:1.5em;"><a href="<?php echo base_url('index.php');?>">Home</a></li><li>Location Map</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
      <?php getSideBarRight(); ?>      
 <?php getSideAbout();?>


                <div class="main col3">
                    <h1 style="color:green;"><strong>Location Map</strong></h1>                        
                            <div class="intro">               
                               <!-- <iframe width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=infoman+in+makati+city&amp;sll=37.0625,-95.677068&amp;sspn=33.077336,56.25&amp;ie=UTF8&amp;ll=14.575609,121.017323&amp;spn=0.01973,0.027466&amp;z=14&amp;iwloc=A&amp;cid=14444813590980211193&amp;output=embed"></iframe> -->
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.7118182640224!2d121.01232251457151!3d14.558465389829328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90b09b07a6b%3A0xee81dae5648514bb!2sInformation+Managers+Inc!5e0!3m2!1sen!2sph!4v1505287529774" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                </div>
    </div>
</div>
            



<?php 
	getFooter();
?>