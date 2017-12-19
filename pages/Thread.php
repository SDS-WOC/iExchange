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

    <?php
    	$_SESSION['researchName']='DynamicProgramming';	//any research
    ?> 

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
                    <!-- /.dropdown-user -->
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
                    <h1 class="page-header">Research ID ##<!--  can be found using php-->:</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row maintain">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading"><h3>
                            DynamicProgramming</h3>
                        </div>
                        <div class="panel-body">
                            <p>Description</p>
                        </div>
                        <div class="panel-footer">
                            Professors and Students involved
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="col-lg-12">
                        <div class="panel-body">
                            <ul class="chat">
                            	<?php

                                    require '../php/connectbranch.php';
                                    
                                    $sql = "SELECT * FROM ".$_SESSION['researchName']." ORDER BY time;";
                                    $result = $connection->query($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if($row["userEnrollment"] == $_SESSION['userEnrollment'])
                                            {
                                                echo '<li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="pull-right col-lg-8" style=" display: flex; flex-direction: column;">
                                        <div class="header">
                                            <strong class="pull-right primary-font">'.$_SESSION['userName'].'</strong>
                                        </div>
                                        <div>
                                            <p style="display:inline;float:right">'.$row['idea'].'</p>
                                        </div>
                                        <small class="pull-right text-muted" style="display:inline; float:right;">
                                            <p style="display:inline;float:right"><i class="fa fa-clock-o fa-fw"></i> '.$row['time'].'</p></small>
                                        </div>
                                    </div>
                                </li>';
                                            } else{
                                                echo '<li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="pull-left col-lg-8">
                                        <div class="header">
                                            <strong class="primary-font">'.$row['userName'].'</strong>
                                        </div>
                                        <p>'.$row['idea'].'
                                        </p>
                                        <small class="pull-left text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> '.$row['time'].'
                                        </small>
                                        </div>
                                    </div>
                                </li>';
                                            }
                                        }
                                    }
                                    
                                    $connection->close();
                                ?>


                                <li><div class="extraspace"></div></li>
                            </ul>
                        </div>

                        <!-- /.panel-body -->
                        <div class="panel-footer float-down" style="position: fixed; bottom:0; width:79%;">
                            <div class="input-group" style="width:100%;">
                                <form <?php
	                                    	if(isset($_SESSION['userEnrollment'])){
	                                    		echo 'action="../php/save_idea.php" method="post"';
                                            }
                                    	?>>
									<input id="btn-input" type="text" style="width:95%;" name="idea" class="form-control input-sm" placeholder="Type your message here..." autofocus />
                                	<span class="input-group-btn">
                                    	<input type="submit" value="Send" class="btn btn-warning btn-sm" id="btn-chat" <?php
	                                    	if(!isset($_SESSION['userEnrollment']))
	                                    		echo 'disabled';
                                    	?>>
                                	</span>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
