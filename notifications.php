<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Notifications</title>

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

    <!--     Fonts and icons     -->
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
                    <li>
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
                    <li class="active">
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
                        <a class="navbar-brand" href="#">Notifications</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Stats</p>
                    </a>
                            </li>
                            <li>
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
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Notifications</h4>
                            <p class="category">View all the notifications regarding traffic.</p>

                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>All Notifications</h5>
                                    <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT * FROM `all_data` WHERE `Type of Network` = ('Node' or 'Roads' or 'Metro' or 'Bus') and `Status` = 'Disabled' ");
            					while($row = mysqli_fetch_array($results)) {
            					?><div class="alert alert-info">
                                        <span><font size="4.5"><p align="justify">Please note: <?php echo $row['Type of Network']?> - Network_ID : <?php echo $row['Network_ID']?> with name '<?php echo $row['Name']?>' has been disabled on <?php echo $row['Date']?></font></span></div>
						<button class="btn btn-default ">View Notification</button>&emsp;
						<button class="btn btn-default " input type=button onClick=window.open("sendsms.php","demo","width=550,height=300,left=150,top=200,toolbar=0,status=0,");>Send SMS</button></p>
						
                                                <form action="mailto:joeljogy07@gmail.com" method="post" enctype="text/plain">

 
                                            <label class="item item-input">  
                                            <span class="input-label">Comment</span>
                                            <input type="text" name="Note:"></br>
                                            </label>
                                            <label class="item item-input">
                
                                            </label>

					<input type="submit" value="Send Email" class="button button-balanced  button-block"     margin-left="100";>
                                        </form><?php
            }
            ?>


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

</html>