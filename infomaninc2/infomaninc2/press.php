<?php 
	include_once('include.php');
	getHeader('press');
	getNavigation('press');
?>


 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
            ul li a { font-size: 1.2em;}
        </style>


<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li> <li ><a href="<?php echo base_url('press.php');?>"> Press</a></li><li>Press Release </li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        
 <?php getPressSubs(); 
 //$this->load->view('press/subs');?>

                <div class="main col3">
                    <h1 style="color:green;">Press Release  </h1>                        
                     <div class="intro">
                        <ul>


                             <li><a href="<?php echo base_url('press/press1.php');?>">INFOMAN Partnership With a Billionaire Cooperative</a></li>
                        <!--   <li><a href="<?php echo base_url('press/press2.php');?>">Computerized RPTA System Project, province of Negros Occidental</a></li> -->
                             <li><a href="<?php echo base_url('press/press3.php');?>">Progress Asia Forum, Philippines 2009</a></li>
                             <li><a href="<?php echo base_url('press/press4.php');?>">November 2008 - First delivery in Kabankalan City</a></li>   
                             <li><a href="<?php echo base_url('press/press5.php');?>">QAD Accelerate New Sales Training Program</a></li>                          
                             <li><a href="<?php echo base_url('press/press6.php');?>">INFOMAN and Negros Occidental Provincial Renewed Partnership</a></li>
                             <li><a href="<?php echo base_url('press/press7.php');?>">Tagum City awards LGU contract to INFOMAN</a></li>
                             <li><a href="<?php echo base_url('press/press8.php');?>">Software To Tap New Revenue Stream</a></li>
                             <li><a href="<?php echo base_url('press/press9.php');?>">Visayan Surety adapts SureWay INLIS</a></li>
                             <li><a href="<?php echo base_url('press/press10.php');?>">Intra Strata signs up for SureWay INLIS</a></li>
                             <li><a href="<?php echo base_url('press/press11.php');?>">Progress Software Strengthens RP Presence</a></li>
                             <li><a href="<?php echo base_url('press/press12.php');?>">INFOMAN Brings Progress Software To RP's Multi-Faceted Enterprises</a></li>
                             <li><a href="<?php echo base_url('press/press13.php');?>">Progress Software Set To Expand Presence In Asia Pacific</a></li>
                             <li><a href="<?php echo base_url('press/press14.php');?>">Logistics Firm Deploys ERP System by Lawrence D. Casiraya</a></li>
                             <li><a href="<?php echo base_url('press/press15.php');?>">Logistics Firm Picks QAD Solutions To Jumpstart Food Processing Hub</a></li>
                             <li><a href="<?php echo base_url('press/press16.php');?>">Infoman Credits Survival To Focus On Niche Market by Melvin G. Calimag</a></li>
                             <li><a href="<?php echo base_url('press/press17.php')?>">Infoman Partners With QAD</a></li>
                             <li><a href="<?php echo base_url('press/press18.php');?>">Infoman Is Sole QAD Distributor</a></li>
                             <li><a href="<?php echo base_url('press/press19.php');?>">Royal Cargo Picks QAD Solutions</a></li>
                             <li><a href="<?php echo base_url('press/press20.php');?>">RP Firm Helps Automate Food Processing Facility by Erwin Lemuel Oliva</a></li>
                             <li><a href="<?php echo base_url('press/press21.php');?>">Local IT Firm Eye South Asia</a></li>
                             <li><a href="<?php echo base_url('press/press22.php');?>">"The Return of the Dragon" by Jerry Liao</a></li>
                             <li><a href="<?php echo base_url('press/press23.php');?>">QAD, Infoman Forge Partnership</a></li>
                             <li><a href="<?php echo base_url('press/press24.php');?>">QAD Appoints INFOMAN As RP Distributor</a></li>
                             <li><a href="<?php echo base_url('press/press25.php');?>">"ERP Firm Aims At SMB Market" by Alex Villafania</a></li>
                             <li><a href="<?php echo base_url('press/press26.php');?>">QAD Partners With INFOMAN, Expands Foothold In Local Manufacturing Market</a></li>
                             <li><a href="<?php echo base_url('press/press27.php');?>">"He's Back" by Margie Grey from her column Not Business As Usual</a></li>
                            

                            </ul>
                        </div>
                </div>
      </div>
</div>
            




<?php 
	getFooter();
?>