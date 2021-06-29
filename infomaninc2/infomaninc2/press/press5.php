<?php 
  include_once('include.php');
  getHeader('press');
  getNavigation('press');
  getStyleX();
?> 

 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
        </style>
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
                width: 180px;
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
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('index.php');?>">Home</a></li> <li ><a href="<?php echo base_url('press.php');?>"> Press</a></li><li>QAD Accelerate New Sales Training Program Solutions Training and Sales Enablement, Process, and Tools</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        
 <?php getPressSubs();?>

                <div class="main col3">
                    <h1 style="color:green;">QAD Accelerate New Sales Training Program<br>
                                                    Solutions Training and Sales Enablement, Process, and Tools
                                             </h1>                        
                     <div class="intro">
                          <div><strong>
                            Duration: November 3-13, 2008<br>
                            Place: Santa Barbara , California<br>
                            Conducted by: QAD
                            </strong> </div><br>
                              <div>
                         The US sales training was comprehensive. It covered products, modules and solution selling ideas. During the first one week, we were focused on overview of QAD applications and what’s new about QAD products. We did several case studies from different verticals. QAD also introduced the QAD Enterprise Edition and QAD Standard Edition. Mac McGary presented the vertical overview and he emphasized that our strength and focused are still the 6 verticals such as<strong> Food and Beverages, CPG, Life Science, Hi-Tech, Automotive and Industrial.</strong>
                            </div><br>


                        <div>
                  Gerald Wright presented the Financial 2008 and is now referred to as Enterprise Financials, which has sophisticated functionality for advanced financials, operational and corporate reporting processes specifically addresses enhanced globalization and compliance needs and based on Lean concepts: combines user efficiency and flexibility. QAD Enterprise Financials allows QAD to compete even better head-to-head with SAP and Oracle. The second week of the program was focused on how to sell, how to price and what to sell. We did several vision presentations. We should remember that presentations are not about features and functions…..they are about solving business issues! Gordon Fleming the Chief Marketing Officer of QAD talked about Marketing, Branding and Messaging. Lisa Pope discussed about Sales Process and at ways to improve overall sales process. QAD share the updated sales process under the umbrella of “continuous customer engagement” which clearly represents the approach to solving our customer's business problems again and again and again! There’s a quick look at some of the areas that QAD focused on over the past year, and some of the best practices from the field. Before the end of the training, we are all given the chance to meet the Executives and other QAD Managers. It was a pleasure to be with other QAD representatives from different countries and States for 2 weeks training. We had a great chance to be together, learn and enjoy, and immerse ourselves in the QAD world.
                     </div>   <br>




                         <h1>
                              <strong style="color:green;">Photos:</strong></h1>
                           </br>

          <div>
               
               <section id="portfolio" style="">
                
                          <div class="portfolio-items">
                              <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img1.jpg')?>" width="100%"  alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img1.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->

                              <div class="portfolio-item">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img2.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img2.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                              <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img3.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img3.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img4.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img4.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                               <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img5.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img5.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                 <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img6.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img6.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                 <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img7.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img7')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                 <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img8.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img8.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                 <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img9.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                      
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img9.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img10.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>view</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img10.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                                <div class="portfolio-item ">
                                  <div class="portfolio-item-inner">
                                      <img class="img-responsive" src="<?php echo base_url('assets/img/press/img11.jpg')?>" width="100%" alt="">
                                      <div class="portfolio-info">
                                          <h3>View</h3>
                                          <a class="preview" href="<?php echo base_url('assets/img/press/img11.jpg')?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                      </div>
                                  </div>
                              </div><!--/.portfolio-item-->
                          </div>
                          
                            
                  </section><!--/#portfolio-->

</div></div>  
    <br><br>
 
                <br><h1> </h1>
                <div style="margin-top:300px;width:200px;">
                <br>
                          <h1>
                              <strong style="color:green;">PRESS CONTACT:</strong></h1>
                           
                            <div><strong style="color:green;">Contact:</strong> Precy M. Abalon    </div> 
                            <div><strong style="color:green;">Tel:</strong> (632) 8 843-1786 </div>
                            <div><strong style="color:green;">Fax:</strong> (632) 843-2755 </div>
                            <div><strong style="color:green;">E-mail:</strong> <a href="mailto:sales@infomaninc.com" class="link" style="text-decoration:none"><em>sales@infomaninc.com</em>
                                         </a></div></div>
                            
                        </div>
                </div>
      </div>
</div>
            



    <script  type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/mousescroll.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('assets/js/custom-scripts.js')?>"></script>

<?php 
  getFooter();
?> 