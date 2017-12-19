<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I-Exchange</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
    <link href="../vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand special" href="index.html">I-Exchange</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                 

                <?php
                if(!isset($_SESSION['userName']))
                {
                    echo '
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-th fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-user fa-fw"></i><del> User Profile</del></a>
                        </li>
                        <li><a><i class="fa fa-gear fa-fw"></i><del> Settings</del></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        </li>
                    </ul>';
                }else{
                    echo '
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p style="display:inline;padding-right:30px">Welcome! '.$_SESSION['userName'].'</p><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>';
                }
                ?>   
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="space text-center">
                            <h4>Most Discussed Topics<br><br></h4>
                        </li>
                        <li class="text-center relative">
                            <a href="1.html">1</a>
                        </li>
                        <li class="text-center relative">
                            <a href="2.html">2</a>
                        </li>
                        <li class="text-center relative">
                            <a href="3.html">3</a>
                        </li>
                        <li class="text-center relative">
                            <a href="4.html">4</a>
                        </li>
                        <li class="text-center relative">
                            <a href="6.html">5</a>
                        </li>
                        <li class="text-center relative">
                            <a href="6.html">6</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>




        <!--php or javascript to access all branch directories to add here-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 stick">
                    <h1 class="page-header">Find By Branches:</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row maintain">
                
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-lblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="huge">##</div>
                                    <div>Branch 1</div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div><br>Any<br>Info<br></div>
                                </div>
                            </div>
                        </div>
                        <a href="branch1.php">
                            <div class="panel-footer" id="ht">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-lblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="huge">##</div>
                                    <div>Branch 2</div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div><br>Any<br>Info<br></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer" id="ht">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-lblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="huge">##</div>
                                    <div>Branch 3</div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div><br>Any<br>Info<br></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer" id="ht">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-lblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="huge">##</div>
                                    <div>Branch 4</div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div><br>Any<br>Info<br></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer" id="ht">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
