<!DOCTYPE html>
<?php
$nama=$this->session->userdata('nama');
?>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Masjid Salman </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Mega Seftia">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url('asset/')?>css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url('asset/')?>css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url('asset/')?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url('asset/')?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url('asset/')?>css/animate.min.css' rel='stylesheet'>
    <link href="<?php echo base_url().'asset/'?>vendor/datatables-responsive/dataTables.responsive.css" 
rel="stylesheet"> 
    <link href="<?php echo base_url().'asset/'?>vendor/datatables-plugins/dataTables.bootstrap.css" 
rel="stylesheet"> 
 

    <!-- jQuery -->
    <script src="<?php echo base_url('asset/')?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">


</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
        
            <a class="navbar-brand pull-left" href="index.html">  <img alt="Charisma Logo" src="<?php echo base_url('asset/')?>img/download.png" class="hidden-xs"/>
               Salman</a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" onClick="location.href=('<?php echo site_url('log')?>')">
                    <i class="glyphicon glyphicon-user"><h3>Login</h3></i><span class="hidden-sm hidden-xs"> <?php echo $nama ?></span>
                    <span class="caret"></span>
                </button>
               
            </div>
            <!-- user dropdown ends -->
        
 </div>   </div>
    <!-- topbar ends --><script src="<?php echo base_url('asset/')?>bower_components/jquery/jquery.min.js"></script>
   
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-12 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">{judul}</a>
        </li>
    </ul>
</div>


{konten}
    <!--/span-->
</div><!--/row-->
    <!-- content ends -->
   
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    

            <!--End mc_embed_signup-->
        </div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">�</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Mega Seftia</a> </p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo base_url('asset/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url('asset/')?>js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url('asset/')?>bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url('asset/')?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url('asset/')?>js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url('asset/')?>bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url('asset/')?>bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url('asset/')?>js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url('asset/')?>bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url('asset/')?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url('asset/')?>js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url('asset/')?>js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url('asset/')?>js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url('asset/')?>js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url('asset/')?>js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
<script src="<?php echo base_url().'asset/'?>vendor/datatables/js/jquery.dataTables.min.js"></script> 
 
<script src="<?php echo base_url().'asset/'?>vendor/datatables 
plugins/dataTables.bootstrap.min.js"></script> 

<script> 
    $(document).ready(function() { 
        $('#dataTables-example').DataTable({ 
            responsive: true 
        }); 
    }); 
    </script> 
 
 


</body>
</html>
