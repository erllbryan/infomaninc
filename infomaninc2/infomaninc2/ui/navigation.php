
<?php
function getNavigation($active) {
?>
<nav class="navbar navbar-default" style="margin:30px 0px 0px 0px;background-color:#33cc33;letter-spacing:1px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="color:white;">
    <a class="navbar-brand" href="?a=adminpanel" style="width:175px;"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="width:50px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <style type="text/css">
     a {
        font-family: verdana;
    }
    .dropdown-menu li a {
      color:#666 ;
    }
    </style>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <!-- style="color:white;font-size:12px;font-family:arial;font-weight:bold;" -->
      <ul class="nav navbar-nav">
        <li <?php if($active=='home')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='home')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;"<?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('index.php');      ?>">Home      </a> <span class="sr-only">(current)</span></a></li>
        <li class="dropdown" id="abt">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;" onclick="changeDropDownColor(abt)">About <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
            <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('about.php');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="color:#33cc33"></span>&nbsp Who We Are</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('clients.php');?>"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:#33cc33"></span>&nbsp Clients</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('careers.php');?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:#33cc33"></span>&nbsp Careers</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('contactus.php');?>"><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="color:#33cc33"></span>&nbsp Contact Us</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;"> Solutions <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
          <!-- <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/accounting');?>">Accounting</a></li>
          <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/banking');?>">Banking</a></li> -->
           <li><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/sureway.php');?>"><span class="glyphicon glyphicon-grain" aria-hidden="true" style="color:#33cc33"></span>&nbsp Non-life Insurance</a></li>
           <li role="separator" class="divider" style="margin:1px;"></li>
               <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/slm.php');?>"><span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="color:#33cc33"></span>&nbsp Cooperatives and Micro Finance</a></li>

               <li role="separator" class="divider" style="margin:1px;"></li>
          <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/rptas.php');?>"><span class="glyphicon glyphicon-road" aria-hidden="true" style="color:#33cc33"></span>&nbsp Local Government Unit</a></li>
          <li role="separator" class="divider" style="margin:1px;"></li>
                <li ><a  style="font-size:12px;font-weight:bold;"href="<?php echo base_url('products/erp_supply_chain.php');?>" ><span class="glyphicon glyphicon-gift" aria-hidden="true" style="color:#33cc33"></span>&nbsp ERP for Manufacturing</a></li>
                <li role="separator" class="divider" style="margin:1px;"></li>
           <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/hrdesk.php');?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:#33cc33"></span>&nbsp Payroll Systems</a></li>
           <li role="separator" class="divider" style="margin:1px;"></li>
           <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/progress.php');?>"><span class="glyphicon glyphicon-lock" aria-hidden="true" style="color:#33cc33"></span>&nbsp RDBMS and Development </a></li>
           <li role="separator" class="divider" style="margin:1px;"></li>
           <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/data_direct.php');?>"><span class="glyphicon glyphicon-random" aria-hidden="true" style="color:#33cc33"></span>&nbsp Data Connectivity </a></li>
           <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/flexhr.php');?>"><span class="glyphicon glyphicon-time" aria-hidden="true" style="color:#33cc33"></span>&nbsp Human Resources Information Systems(HRIS) </a></li>
          </ul>
        </li>
       <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;"> Softwares <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products');?>">About Progress</a></li> 
          <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/actional');?>">Actional</a></li>
           <li><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/artix');?>">Artix</a></li>

                                         <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/data_direct');?>">DataDirect</a></li>
                                    <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/dataxtend');?>">DataXtend</a></li>
                                          <li ><a  style="font-size:12px;font-weight:bold;"href="<?php echo base_url('products/easyask');?>" >EasyAsk</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/object_store');?>">ObjectStore</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/openedge');?>">OpenEdge</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/orbacus');?>">Orbacus</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/orbix');?>">Orbix</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/shadow');?>">Shadow</a></li>
                                     <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('products/sonic');?>">Sonic</a></li>
                           

          </ul>
        </li> -->
         <li class="dropdown" id="abt">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;" onclick="changeDropDownColor(abt)">Services <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
             <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('services.php');?>"><span class="glyphicon glyphicon-globe" aria-hidden="true" style="color:#33cc33"></span>&nbsp Infoman Services</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('services/consulting_services.php');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="color:#33cc33"></span>&nbsp Consulting Services</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
          <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('services/training_services.php');?>"><span class="glyphicon glyphicon-blackboard" aria-hidden="true" style="color:#33cc33"></span>&nbsp Training Services</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            
              <li ><a style="font-size:12px;font-weight:bold;" href="<?php echo base_url('services/customer_support.php');?>"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="color:#33cc33"></span>&nbsp Customer Support</a></li>
          </ul>
        </li>


        <li class="dropdown" id="abt">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;" onclick="changeDropDownColor(abt)">Partners <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
             <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('partners.php');?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:#33cc33"></span>&nbsp Partnership Overview</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('contactus.php');?>"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="color:#33cc33"></span>&nbsp Contact Us</a></li>

          </ul>
        </li>
       <!--  <li <?php if($active=='services')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='services')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;" <?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('services.php');      ?>">Services</a></li> -->

        <!-- <li <?php if($active=='partners')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='partners')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;" <?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('partners.php');      ?>">Partners</a></li> -->
        <!-- <li <?php if($active=='news')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='news')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;" <?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('news.php');      ?>">News & Trending</a></li> -->
        <li class="dropdown" id="abt">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;" onclick="changeDropDownColor(abt)">News & Trending <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
             <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('news.php');?>"><span class="glyphicon glyphicon-globe" aria-hidden="true" style="color:#33cc33"></span>&nbsp QAD Community Trends</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('prgtrnd.php');?>"><span class="glyphicon glyphicon-wrench" aria-hidden="true" style="color:#33cc33"></span>&nbsp Progress Trends</a></li>

          </ul>
        </li>
       <!--  <li <?php if($active=='news')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='press')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;" <?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('press.php');      ?>">Press</a></li> -->

       <li class="dropdown" id="abt">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;font-size:12px;font-family:arial;font-weight:bold;" onclick="changeDropDownColor(abt)">Press <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff;">
             <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('press.php');?>"><span class="glyphicon glyphicon-globe" aria-hidden="true" style="color:#33cc33"></span>&nbsp Press Release</a></li>
             <li role="separator" class="divider" style="margin:1px;"></li>
            <li ><a style="font-size:12px;font-weight:bold;pading:0px;" href="<?php echo base_url('news.php');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="color:#33cc33"></span>&nbsp News</a></li>

          </ul>
        </li>


        <li <?php if($active=='events')    { ?>  class="first menu-home on" <?php }else{ ?> class="menu-resources"<?php } ?>> <a <?php if($active=='events')    { ?> style="color:green;background-color:white;font-size:12px;font-family:arial;font-weight:bold;" <?php } else { ?> style="color:white;background-color:#33cc33;font-size:12px;font-family:arial;font-weight:bold;" <?php } ?> class="section-title" href="<?php echo base_url('events/events2016_1.php');?>">Events</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
<?php
}
?>