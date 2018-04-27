<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Table List</title>

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


    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('./assets/img/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 0px;
            /* Add some space below the input */
        }



        #myInput2 {
            background-image: url('./assets/img/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 0px;
            /* Add some space below the input */
        }


        #myInput3 {
            background-image: url('./assets/img/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 0px;
            /* Add some space below the input */
        }



        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 15px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }



        #myTable2 {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 15px;
        }

        #myTable2 th,
        #myTable2 td {
            text-align: left;
            padding: 12px;
        }

        #myTable2 tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable2 tr.header,
        #myTable2 tr:hover {
            background-color: #f1f1f1;
        }

        #myTable3 {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 15px;
        }

        #myTable3 th,
        #myTable3 td {
            text-align: left;
            padding: 12px;
        }

        #myTable3 tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable3 tr.header,
        #myTable3 tr:hover {
            background-color: #f1f1f1;
        }






        #table-wrapper {
            position: relative;
        }

        #table-scroll {
            height: 300px;
            overflow-y: auto;
            overflow-x: hidden;
            margin-top: 20px;
        }

        #table-wrapper table {
            width: 100%;
        }

        #table-wrapper table thead th .text {
            position: absolute;
            top: -20px;
            z-index: 2;
            height: 20px;
            width: 35%;
            border: 1px solid red;
        }
    </style>

    <script>
        function sortTable() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable2");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.getElementsByTagName("TR");
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
    </script>

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

                    <li class="active">
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
                        <a class="navbar-brand" href="#">Table List</a>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Notification 5</a></li>
                                </ul>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Nodes Disabled</h4>
                                    <p class="category">Details about the actions on nodes respective to time</p>
                                </div>
                                <div id="table-wrapper">
                                    <div id="table-scroll">
                                        <div class="content table-responsive table-full-width">
                                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Network_ID">
                                            <div class="fixed-header-background"></div>
                                            <table class="table table-hover">
                                                <table id="myTable">
                                                    <thead>
                                                        <th><center>Network_ID</center></th>
                                                        <th><center>Name</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Time</center></th>
                                                        <th><center>Country</center></th>
                                                        <th><center>Status</center></th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT * FROM `all_data` WHERE (`Type of Network` = 'Node' or `Type of Network` = 'Bus' or `Type of Network` = 'Bus') and `Status`='Disabled' ");
            					while($row = mysqli_fetch_array($results)) {
            					?>
                                                            <tr>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Network_ID']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Name']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Date']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center><?php
									 date_default_timezone_set("Asia/Qatar");
                                                                         echo date("h:i:sa")?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Country']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Status']?>
                                                                    </center>
                                                                </td>

                                                            </tr>

                                                            <?php
            }
            ?>
                                                                <script type="text/javascript">
                                                                    //sortTable();
                                                                </script>
                                                    </tbody>
                                                </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="header">
                                    <h4 class="title">Road Segments Disabled</h4>
                                    <p class="category">Details about the actions on road segments respective to time</p>
                                </div>
                                <div id="table-wrapper">
                                    <div id="table-scroll">
                                        <div class="content table-responsive table-full-width">
                                            <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search by Name or Network_ID">
                                            <div class="fixed-header-background"></div>
                                            <table class="table table-hover">
                                                <table id="myTable3">
                                                    <thead>
                                                        <th><center>Network_ID</center></th>
                                                        <th><center>Name</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Time</center></th>
                                                        <th><center>Country</center></th>
                                                        <th><center>Status</center></th>

                                                    </thead>
                                                    <tbody>
                                                        <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT * FROM `all_data` WHERE `Type of Network` = 'Roads' and `Status` = 'Disabled' ");
            					while($row = mysqli_fetch_array($results)) {
            					?>
                                                            <tr>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Network_ID']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Name']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Date']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php 
									 date_default_timezone_set("Asia/Qatar");
                                                                         echo date("h:i:sa")?> 
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Country']?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php echo $row['Status']?>
                                                                    </center>
                                                                </td>

                                                            </tr>

                                                            <?php
            }
            ?>
                                                                <script type="text/javascript">
                                                                    //sortTable();
                                                                </script>
                                                    </tbody>
                                                </table>

                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card plain">
                            <div class="header">

                                <h4 class="title">List of all Nodes and Road Segments</h4>
                                <p class="category">Details about the current status of all the nodes and transportation networks</p>
                            </div>
                            <div id="table-wrapper">
                                <div id="table-scroll">
                                    <div class="content table-responsive table-full-width">
                                        <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search by Mode of Transport or Osm_ID">
                                        <div class="fixed-header-background"></div>
                                        <table class="table table-hover">
                                            <table id="myTable2">
                                                <thead>
                                                    <th>
                                                        <center>Network_ID</center>
                                                    </th>
                                                    <th>
                                                        <center>Name</center>
                                                    </th>
                                                    <th>
                                                        <center>Type of Network</center>
                                                    </th>
                                                    <th>
                                                        <center>Country</center>
                                                    </th>
                                                    <th>
                                                        <center>Status</center>
                                                    </th>

                                                </thead>
                                                <tbody>
                                                    <?php
            					$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
            					$results = mysqli_query($connection,"SELECT * FROM all_data");
            					while($row = mysqli_fetch_array($results)) {
            					?>
                                                        <tr>
                                                            <td>
                                                                <center>
                                                                    <?php echo $row['Network_ID']?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php echo $row['Name']?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php echo $row['Type of Network']?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php echo $row['Country']?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $row['Status']?></center>
                                                            </td>

                                                        </tr>

                                                        <?php
            }
            ?>
                                                            <script type="text/javascript">
                                                                //sortTable();
                                                            </script>
                                                </tbody>

                                            </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }


                function myFunction2() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput2");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable2");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[2];
                        td2 = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else if (td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }

                function myFunction3() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput3");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable3");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        td2 = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else if (td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>

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