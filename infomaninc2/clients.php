<?php 
	include_once('include.php');
	getHeader('clients');
	getNavigation('about');
?>
 <style type="text/css">
            .tab1 { padding-left: 2em; }
            .tab2 { padding-left: 4em; }
        
            #green{color:green;}
            h4 {
              font-weight: bold;
              font-size: 1.3em;
              letter-spacing: 1px;
            }
            li{
              letter-spacing: 1px;
              font-family: segoe ui;
              font-size: 1.2em;
            }

        </style>



<div id="content">
    <div class="content-block group">
        <div id="subheader">
            <div class="subheader-block group">            
                <div class="path">
                    <ul>
                        <li class="first"><a href="<?php echo base_url('about.php');?>">About</a></li><li>Clients</li></ul>
                </div>
                        <div class="social"><div class="addthis_sharing_toolbox"></div></div>
            </div>
        </div>
        
    <?php //$this->load->view('include/side_bar_right');
    	getSideBarRight();
    	getSideAbout(); ?>
 <?php //$this->load->view('include/sub_about');?>


<div class="main col3">
   <style>
   h4 h2 {color:green;}

   </style> 
           <div class="intro tab1">
                 <h2 style="color:green;font-weight:bold;letter-spacing:2px;font-size:1.7em;font-family:verdana;">Clients</h2><br>
                                        <table>
                                          <thead>

                                          </thead>
                                         
                                          <tbody>
                                            <td><strong><h4>QAD</h4></strong>
                                              <ul class="intro">
                                                 <li><h3>Tupperware Brands Philippines, Inc.</h3></li>
                                                 <li><h3>Mercury Group of Companies</h3>
                                                  <ul><li>Mercury Provident Group of Companies, Inc.</li>      
                                                   <li>Telstar Manufacturing Corp.</li>
                                                   <li>Medical Center Trading Corp.</li></ul></li>
                                                 <li><h3>RI Chemical Corp.</h3></li>
                                                <li><h3>Shizokan Corporation</h3></li>
                                                <li><h3>Presline Steel Products, Inc.</h3></li>

                                                <li><h3>CafeFrance Group</h3>
                                                <ul></li>
                                                  <li>CafeFrance Corp. 2</li>
                                                  <li>Karate Kid</li>
                                                  <li>Tempura</li>
                                                  <li>Congo Grille</li>
                                                  <li>Holy Cow</li>
                                                  <li>Flavours of China</li>
                                                </ul>
                                                </li>
                                                <li><h3>C&F Manufacturing Phils. Corp</h3></li>
                                                <li><h3>Progress Manila Bulletin</h3></li>
                                                <li><h3>AM Europharma Corporation</h3></li>
                                              </ul>
                                              <br>
                                            <strong><h4>SLM</h4></strong>
                                              <ul class="intro">
                                                <font size="4px">
                                                 <li>St. Martin Tours Credit and Development</li>
                                               <li>US Embassy Filipino Employees Credit Cooperative</li>
                                                <li>Dumaguete Cathedral Credit Cooperative</li>
                                                <li>Novaliches Development Cooperative</li>
                                                <li>EasyCash Lending Company Inc.</li>     
                                                </font>                                             
                                              </ul>
                                            </td>
                                          </tbody>
                                        </table>

                                        <table>
                                          <thead>

                                          </thead>
                                          <tbody>
                                          <br>
                                            <td><strong><h4>LGU</h4></strong>
                                               <ul class="intro">
                                                <font size="4px">
                                                <li>Kabankalan City, Negros Occidental</li>
                                                <li>City of San Fernando Pampanga</li>
                                                <li>Negros Occidental</li>
                                                <li>Tagum City</li>
                                                <li>Victorias City, Negros Occidental</li>
                                              </font>
                                                </ul>
                                                <br>
                                              <strong><h4>SureWay</h4></strong>
                                               <ul class="intro">
                                                <font size="4px">
                                                 <li>Visayan Surety & Insurance Corporation</li>
                                                 <li>Pacific Union Insurance Company</li>
                                                 <li>Intra Strata Assurance Corporation</li>
                                                 <li>Stronghold Insurance Co., Inc.</li>
                                               </font>
                                              </ul>
                                            </td>

                                          </tbody>
                                        </table>
                                        <table>
                                          <thead>

                                          </thead>
                                          <tbody>
                                          <br>
                                            <td><strong><h4>Hrdesk</h4></strong>
                                               <ul class="intro">
                                                <font size="4px">
                                                <li>Voyg Transport Services Inc.</li>
                                                <li>Consolidated Packaging Enterprises</li>
                                                <li>The Old Spagetti House</li>
                                                <li>Magsaysay MOL Marine, Inc.</li>
                                                <li>Allied Bankers Insurance Corporation</li>
                                                <li>Travel Book</li>
                                                <li>Information Managers, Inc.</li>
                                              </font>
                                                </ul>
                                               
                                            </td>

                                          </tbody>
                                        </table>
                                        <!-- <table>
                                          <thead>

                                          </thead>
                                          <tbody>
                                          <br>
                                            <td><strong><h4>Automotive</h4></strong>
                                              <ul class="intro">

                                                <li>Isuzu Manila</li>
                                                <li>Isuzu Commonwealth</li>
                                                <li>Isuzu Greenhills</li>
                                                <li>Honda Cars QC</li>
                                                <li>Honda Cars Manila</li>
                                                <li>Honda Cars Fairview</li>
                                                <li>Honda Cars Caloocan</li>
                                                <li>Honda Cars Marikina</li>
                                                <li>Honda Cars Greenhills</li>
                                                <li>Honda Cars Marcos Highway</li>
                                             </ul>
                                             <br>
                                             <strong><h4>Non-life Insurance</h4></strong>
                                               <ul class="intro">
                                                <li>Stronghold Insurance Co., Inc.</li>
                                                <li>Pacific Union Insurance Company</li>
                                                <li>Intra Strata Assurance Corporation</li>
                                                <li>AlliedBankers Insurance Corporation</li>
                                                <li>Visayan Surety & Insurance Corporation</li>
                                              
                                              </ul>
                                            </td>

                                          </tbody>
                                        </table>

                                         <table>
                                          <thead>

                                          </thead>
                                          <tbody>
                                          <br>
                                            <td><strong><h4>Others</h4></strong>
                                              <ul class="intro">

                                               <li>Active Realty</li>
                                               <li>Tupperware Brands</li> 
                                               <li>Manila Bulletin</li>
                                               <li>Solaire Philippines</li>     
                                               <li>Centro Escolar University</li>                                          
                                               <li>Sta. Lucia Realty & Development, Inc.</li>
                                             
                                             </ul>

                                       
                                            </td>

                                          </tbody>
                                        </table> -->

                </div></div></div>
                <div ><img src="assets/img/infoman_clients_banner.jpg" width="100%"></img></div>
              <!--  <hr> -->
 <!-- <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1" ><img src="<?php echo base_url('assets/img/infoman_clients_banner.jpg');?>" width="100%"></img></div>
    -->        
            </div>

<?php 
	getFooter();
?>