<?php 
  include_once('include.php');
  getHeader('events');
  getNavigation('events');
?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prettyPhoto.css')?>">
    <style>

#portfolio {
  padding: 80px 0;
  margin-top: -80px;
}
#portfolio .portfolio-filter {
  list-style: none;
  padding: 0;
  margin: 0 0 50px;
  display: inline-block;
}
#portfolio .portfolio-filter > li {
  float: left;
  display: block;
}
#portfolio .portfolio-filter > li a {
  display: block;
  padding: 7px 15px;
  margin:0px 2px;
  color: #000000;
  position: relative;
  border: 1px solid #00D3F9;
}
#portfolio .portfolio-filter > li a:hover,
#portfolio .portfolio-filter > li a.active {
  background: #00D3F9;
  color: #000;
} 
#portfolio .portfolio-items {
  margin: -15px;
}
#portfolio .portfolio-item {
  width: 145px;
  float: left;
  padding: 8px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
}
#portfolio .portfolio-item .portfolio-item-inner {
  position: relative;
}
#portfolio .portfolio-item .portfolio-item-inner .portfolio-info {
  opacity: 0;
  transition: opacity 400ms;
  -webkit-transition: opacity 400ms;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 18px 0 0;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  height:100%;
}
#portfolio .portfolio-item .portfolio-item-inner .portfolio-info h3 {
  font-size: 16px;
  line-height: 1;
  margin: 0;
  color: #fff;
}
#portfolio .portfolio-item .portfolio-item-inner .portfolio-info .preview {
  width: 42px;
  height: 42px;
  line-height: 42px;
  text-align: center;
  color: #000;
  /* box-shadow: 0 0 0 1px #fff; */
  display:block;
  /* -webkit-box-shadow: 0 0 0 1px #fff; */
  text-align: center;
  margin: 15px auto;
  background: #00D3F9;
  border-radius: 50%;
  border: none;
}
#portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
}
/* Start: Recommended Isotope styles */
/**** Isotope Filtering ****/
.isotope-item {
  z-index: 2;
}
.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}
/**** Isotope CSS3 transitions ****/
.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s;
}
.isotope {
  -webkit-transition-property: height, width;
  -moz-transition-property: height, width;
  -ms-transition-property: height, width;
  -o-transition-property: height, width;
  transition-property: height, width;
}
.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
}
/**** disabling Isotope CSS3 transitions ****/
.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  transition-duration: 0s;
}
/* End: Recommended Isotope styles */
/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;
}
.img-thumbnail {
display: inline-block;
max-width: 100%;
height: auto;
line-height: 1.42857143;
border: 1px solid #ddd;
border-radius: 0px;
padding:0px;
-webkit-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
margin-bottom: 15px;
}

/*==================================/
        P A G I N A T I O N
/====================================*/
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

    </style>
<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path" style="letter-spacing:1px;font-weight:bold;font-family:verdana;">
                    <ul>
                        <li class="first"><script type="text/javascript">prop1="Amadeus Home";</script><a href="<?php echo base_url('index.php');?>">Home</a></li><li><a href="<?php echo base_url('events/events2016_1');?>">Events</a></li><li>Progress_2009</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
  <?php getSideBarRight();?>   
 <?php getSubProg();?>


<div class="main col3">
 <section id="portfolio">
      <h1 style="color:green;">Progress Asia Forum 2016</h1>     <br>              

            <div class="portfolio-items">
                <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01835.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01835.jpg')?>" rel="prettyPhoto"></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01836.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                             <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01836.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01837.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01837.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                  <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01838.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01838.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                 <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01839.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01839.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                 <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01840.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01840.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                  <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01841.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01841.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                  <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01842.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01842.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url('assets/img/events/2009/DSC01843.jpg')?>" width="100%" alt="">
                        <div class="portfolio-info">
                            <h3>View</h3>
                            <a class="preview" href="<?php echo base_url('assets/img/events/2009/DSC01843.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
               
                
            </div>
            
                    <ul class="pagination">
                      <li><a href="<?php echo base_url('events/events2016_1.php');?>">&laquo;</a></li>
                      <li><a  class="active" href="<?php echo base_url('events/events2016_1.php');?>">1</a></li>
                      <li><a href="<?php echo base_url('events/events2016_2.php');?>">2</a></li>
                      <li><a href="<?php echo base_url('events/events2016_3.php');?>">3</a></li>
                      <li><a href="<?php echo base_url('events/events2016_4.php');?>">4</a></li>
                      <li><a href="<?php echo base_url('events/events2016_5.php');?>">5</a></li>
                      <li><a href="<?php echo base_url('events/events2016_6.php');?>">6</a></li>
                      <li><a href="<?php echo base_url('events/events2016_2.php');?>">&raquo;</a></li>
                    </ul>
    </section><!--/#portfolio-->


</div>



</div>
            </div>

 

    <script  type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/mousescroll.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/custom-scripts.js')?>"></script>

<?php getFooter(); ?>