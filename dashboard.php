<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="danger">



            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.qcri.org.qa/our-research/social-computing" class="simple-text">
                    QCRI Urban Computing Project
                </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                    </li>
    
                    <li>
                        <a href="table.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                    </li>

                    <li>
                        <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                    </li>
                    <li>
                        <a href="notifications.php">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Stats</p>
                    </a>
                    </li>
                            <li class="dropdown">
                                <a href="notifications.php">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
				    <p>Notifications</p>
				    
									
			   </a>
                            </li>
                            <li>
                                <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Number of Nodes</p>
                                            <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT count(*) FROM `robsim`.`all_data` WHERE `Type of Network` = 'Node'");
            					while($row = mysqli_fetch_array($results)) {
            					?><?php echo $row['count(*)']?>
                                                <?php            }    ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-close"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Disabled Nodes</p>
                                            <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT count(*) FROM `robsim`.`all_data` WHERE `Type of Network` = 'Node' and `Status` = 'Disabled'");
            					while($row = mysqli_fetch_array($results)) {
            					?><?php echo $row['count(*)']?>
                                                <?php            }    ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i> Last day
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-pulse"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Heavy Traffic Segments</p>
                                            <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT count(*) FROM `robsim`.`all_data` WHERE `Type of Network` = 'Roads' and `Weight` = 1 and `Status` = 'Enabled'");
            					while($row = mysqli_fetch_array($results)) {
            					?><?php echo $row['count(*)']?>
                                                <?php            }    ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-timer"></i> In the last hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-na"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Disabled Roads</p>
                                            <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT count(*) FROM `robsim`.`all_data` WHERE `Type of Network` = 'Roads' and `Status` = 'Disabled'");
            					while($row = mysqli_fetch_array($results)) {
            					?><?php echo $row['count(*)']?>
                                                <?php            }    ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Traffic Behavior</h4>
                                    <p class="category">24 Hours performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartHours" class="ct-chart"></div>
                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Less Traffic segments
					    <i class="fa fa-circle text-warning"></i> Moderate Traffic segments
                                            <i class="fa fa-circle text-danger"></i> Heavy Traffic segments
                                            
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">City Traffic Statistics</h4>
                                    <p class="category">24 Hours performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Al Rayyan
                                            <i class="fa fa-circle text-danger"></i> Al Wakra
                                            <i class="fa fa-circle text-warning"></i> Doha City
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated 24 hours ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">Nodes and Road Segments Removed</h4>
                                    <p class="category">All nodes with road segments</p>
                                </div>
                                <div class="content">
                                    <div id="chartActivity" class="ct-chart"></div>

                                    <div class="footer">
                                        <div class="chart-legend">
                                            <i class="fa fa-circle text-info"></i> Nodes
                                            <i class="fa fa-circle text-warning"></i> Road Segments
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="ti-check"></i> Data information certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


 
        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Dashboard Project for Doha Traffic</b>"

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>

</html>