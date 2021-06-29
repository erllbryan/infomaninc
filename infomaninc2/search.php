<?php 
	include_once('include.php');
	getHeader('sitemap');
	getNavigation('home');

    if(isset($_POST['q'])){
         $q = $_POST['q'];
    }
   
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
                    <!-- <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li><li>Location Map</li></ul> -->
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
      <?php getSideBarRight(); ?>      
 <?php getSideAbout();?>

                <div class="main col3">
                    <h1 style="color:green;"><i class="fa fa-search"></i> SEARCH RESULTS</h1>                        
                            <div class="intro" id="results">    
                                <p>Results for Key word : "<?php  if(isset($_POST['q'])){
                                                                     echo $q;
                                                                 } ?>"</p>
                            </div>
                            <div class="intro">
                                <?php 
                                    $keywords = array(
                                           array("lgu","Local Government Unit Software - RiseLGU","products/rptas.php"),
                                        );
                                    if(isset($_POST['q'])){
                                        for($i=0;$i<count($keywords);$i++){
                                            for($j=0;$j<3;$j++){
                                                if((strcasecmp($q, $keywords[$i][$j]) == 0){

                                                }
                                            }
                                        }
                                    }
                                ?>
                            </div>
                </div>
    </div>
</div>
            



<?php getFooter();?>