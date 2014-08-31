<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->config->item('css');?>bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->config->item('css');?>plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->config->item('css');?>sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->config->item('css');?>font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="<?php echo $this->config->item('css');?>bootstrapValidator.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
			<img src="images/logo.png" style="position:relative; left:-15px;">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form id="frmLogin" name="frmLogin" method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="txtUsername" id="txtUsername" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtPassword" id="txtPassword" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a id="btnLogin" href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
								<button type="submit" id="btnLogin" class="btn btn-lg btn-success btn-block" >Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<h3 class="panel-title">Sistema de Control de Horarios</h3>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo $this->config->item('js');?>jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->config->item('js');?>bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->config->item('js');?>plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->config->item('js');?>sb-admin-2.js"></script>
	
	<!-- bootstrapValidation -->
	<script src="<?php echo $this->config->item('js');?>bootstrapValidator.js"></script>
	
	<!-- login js -->
	<script src="<?php echo $this->config->item('jquery');?>login.js"></script>

</body>

</html>
