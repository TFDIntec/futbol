<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>
	
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->config->item('css');?>bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->config->item('css');?>/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
	
	 <!-- DataTables CSS -->
    <link href="<?php echo $this->config->item('css');?>plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->config->item('css');?>/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->config->item('css');?>font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	 <script type="text/javascript">
			_base_url = "<?php echo base_url(); ?>";
	 </script>
	 <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo $this->config->item('js');?>jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->config->item('js');?>bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->config->item('js');?>plugins/metisMenu/metisMenu.min.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="<?php echo $this->config->item('js');?>plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo $this->config->item('js');?>plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->config->item('js');?>sb-admin-2.js"></script>	
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="" href="<?php echo base_url();?>"><img src="<?php echo $this->config->item('img');?>logo.jpg" height="65">FUTBOL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

				
				<!--begin -->
				<li class="dropdown">
                    <a href="<?php echo base_url(); ?>lang_switch/switchLanguage/spanish" alt="espaniol">
                        <img src="<?php echo $this->config->item('img');?>es.png">
                    </a>
                </li>
				<!--begin -->
				
				<!--begin -->
				<li class="dropdown">
                    <a href="<?php echo base_url(); ?>lang_switch/switchLanguage/english">
                        <img src="<?php echo $this->config->item('img');?>us.png">
                    </a>
                </li>
      
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> <?php echo $this->lang->line("dashboard") ?></a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(); ?>partida/crear_partida"><i class="fa fa-users"></i> <?php echo $this->lang->line("new_game_set") ?></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
