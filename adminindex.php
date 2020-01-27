    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Care Tree</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- Font Awesome JS -->
        <script defer src="js/all.min.js"></script>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
include_once 'p_connection.php';
include_once 'count.php';
ini_set( "display_errors", 0);

$sql= "SELECT i_name,SUM(i_qty) as su FROM `product` GROUP BY i_name"; 
                 $result=mysqli_query($conn,$sql);
                 
               $a = array();
                 while($row = mysqli_fetch_assoc($result))
                 {
                    $k=$row['i_name'];
                    $v=$row['su'];
                    $a[$k] = $v;
                    
                 }
                print_r($a);

                 ?>
    ?>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Aloe',     <?php echo $a['Aloe']; ?>],
          ['Amla',      <?php echo $a['Amla']; ?>],
          ['Banyan',  <?php echo $a['Banyan']; ?>],
          ['Eucalyptus', <?php echo $a['Eucalyptus']; ?>],
          ['Neem',    <?php echo $a['Neem']; ?>],
          ['Peepal',    <?php echo $a['Peepal']; ?>],
          ['Tulsi',    <?php echo $a['Tulsi']; ?>]
        ]);

        var options = {
          title: 'Tree Stock chart',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    </head>

    <body>
<?php 
include_once 'p_connection.php';
include_once 'count.php';
ini_set( "display_errors", 0);
 ?>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="hello">
                    <img src="img/caretree.png">
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#home"><i class="fas fa-home fa-fw"></i>Home</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fab fa-angellist fa-fw"></i>We Care</a>
                    </li>
                    <li>
                        <a href="#rescue"><i class="fas fa-map-pin fa-fw"></i>Rescue</a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-centos fa-fw"></i>NGOs</a>
                    </li>
                    <li>
                        <a href="#myaccount" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-alt fa-fw"></i>My Account</a>
                        <ul class="collapse list-unstyled" id="myaccount">
                            
                            <li>
                                <a href="#myprofile">My Profile</a>
                            </li>
                            <li>
                                <a href="#logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-address-card fa-fw"></i>About Us</a>
                    </li>
                </ul>
    <!-- 
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul> -->
            </nav>

            <!-- Page Content  -->
            <div id="content-x">

                <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-x">
                    <div class="container-fluid">

                        <a id="sidebarCollapse" class=" nav-c">
                            <i class="fas fa-align-left" style="height: 20px;"></i>
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <span><img src="img/caretree.png" height="70px" width="150px"></span>

                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    
                                    <!-- <a class="nav-link" href="#"> Request for Tree</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">We Care</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#rescue">Rescue</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">NGOs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span>
                        <div class="ralign  ml-auto">

                            <!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->

                            <a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
                            <img src="img/line.png" style="height: 30px; padding-right: 10px;">
                            <a class="nav-c" href="#"><img src="img/treecart.png"><!-- <i style="font-size: 20px" class="fa fa-shopping-cart head"></i> -->
                            <span class="nav-t badge badge-sm badge-light">9+</span></a>
                            <img src="img/line.png" style="height: 30px; padding-right: 10px">
                            
                            <div class="btn-group">
                                  <a class="nav-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">My Account</a>
                                    
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                  </div>
                            </div>
                                

                            <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                            <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                        </div>
                    </div>
                </nav>
<?php
$sql= "SELECT COUNT(t_id) as count FROM `tree_loc` WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                    <div class="row rmv ml-auto mr-auto">
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total Tree Planted</h5>
                                        <p class="card-text">
                                           <?php  echo "$ana"; ?>
                                        </p>
                                    </div>
                                </div>    
                            </div>

<?php
$sql= "SELECT COUNT(l_id) as count FROM `login` WHERE 1";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total Citizen Users</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>

<?php
$sql= "SELECT COUNT(*) as count FROM n_login WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total NGO Users</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
<?php
$sql= "SELECT `w_id`, COUNT(*) as count, `w_status`, `w_timestamp` FROM `tree_water`
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total Devices Working</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
                        </div>
<?php
$sql= "SELECT COUNT(*) as count FROM `tree_loc` WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                        <div class="row rmv ml-auto mr-auto">
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total Wecare Post</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
<?php
$sql= "SELECT COUNT(t_id) as count FROM `tree_loc` WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Total Damaged Tree</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
<?php
$sql= "SELECT COUNT(t_id) as count FROM `tree_loc` WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Need Water</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
<?php
$sql= "SELECT COUNT(t_id) as count FROM `tree_loc` WHERE 1
";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $ana=$row['count'];
        }

?>
                            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                    <div class="card-body text-md">
                                        <h5 class="card-title">Safe Tree</h5>
                                        <p class="card-text"><?php  echo "$ana"; ?></p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="row rmv ml-auto mr-auto">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xs-12" class="border" id="piechart">
                            </div>
                            <div id="chartContainer" class="col-md-5 col-sm-5 col-lg-5 col-xl-5 col-xs-12" class="border"></div>
                        </div>
                        <div class="row rmv ml-auto mr-auto">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xs-12" style="height: 500px;" class="border" id="donutchart">
                            </div>
                        </div>
                                


                    
                    
                    
                
                
                <footer>
                    <div class="container" style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-md-4" align="center"><p><i class="fa fa-envelope  mx-2"></i><a href="mailto:caretree1@gmail.com">caretree1@gmail.com</a></p> </div>
                            <div class="col-md-4" align="center" style="color: #fff; font-weight: bold; padding-top:5px;">CARETREE @ 2020</div>
                            <div class="col-md-4" align="center">
                                <p><a href="" >Team ID : TM000079 - Atmiya University</a></p>
                            </div>

                        </div>                    
                    </div>
                </footer>
                </div>
            </div>

            
        </div>
    <!-- <button onclick="topFunction()" id="myBtn" class="btn btn-outline-light btn-up" title="Go to top"><i class="fas fa-chevron-up"></i></button> -->
        <div class="overlay"></div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <!-- Popper.JS -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/new.js"></script>




<?php
$sql= "SELECT MONTHNAME(t_timestamp) mn,count(DATE_FORMAT(t_timestamp, '%m')) as mon FROM tree_loc WHERE DATE_FORMAT(t_timestamp, '%Y')=2019 GROUP BY DATE_FORMAT(t_timestamp, '%m')"; 
                 $result=mysqli_query($conn,$sql);
                  // $a=array();
               $a = array();
                 while($row = mysqli_fetch_assoc($result))
                 {
                    $k=$row['mn'];
                    $v=$row['mon'];
                    $a[$k] = $v;
                    
                 }
                print_r($a);

                 ?>








        <script>
            // Draw the chart and set the chart values
            // Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Planted', 'Per Month'],
  ['January', <?php if(isset($a['January'])){ echo $a['January']; } else {echo 0;} ?>],
  ['February', <?php if(isset($a['February'])){ echo $a['February']; } else {echo 0;} ?>],
  ['March', <?php if(isset($a['March'])){ echo $a['March']; } else {echo 0;} ?>],
  ['April', <?php if(isset($a['April'])){ echo $a['April']; } else {echo 0;} ?>],
  ['May', <?php if(isset($a['May'])){ echo $a['May']; } else {echo 0;} ?>],
  ['June', <?php if(isset($a['June'])){ echo $a['June']; } else {echo 0;} ?>],
  ['July', <?php if(isset($a['July'])){ echo $a['July']; } else {echo 0;} ?>],
  ['August', <?php if(isset($a['August'])){ echo $a['August']; } else {echo 0;} ?>],
  ['September', <?php if(isset($a['September'])){ echo $a['September']; } else {echo 0;} ?>],
  ['October', <?php if(isset($a['October'])){ echo $a['October']; } else {echo 0;} ?>],
  ['November', <?php if(isset($a['November'])){ echo $a['November']; } else {echo 0;} ?>],
  ['December', <?php if(isset($a['December'])){ echo $a['December']; } else {echo 0;} ?>]

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Planted trees per month', 'width':600, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}


        </script>
        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Planted Trees"
    },
    axisY:{
        includeZero: false
    },
    data: [{        
        type: "line",       
        dataPoints: [
            { y: <?php if(isset($a['January'])){ echo $a['January']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['February'])){ echo $a['February']; } else {echo 0;} ?>},
            { y: <?php if(isset($a['March'])){ echo $a['March']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['April'])){ echo $a['April']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['May'])){ echo $a['May']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['June'])){ echo $a['June']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['July'])){ echo $a['July']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['August'])){ echo $a['August']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['September'])){ echo $a['September']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['October'])){ echo $a['October']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['November'])){ echo $a['November']; } else {echo 0;} ?> },
            { y: <?php if(isset($a['December'])){ echo $a['December']; } else {echo 0;} ?> }




        ]
    }]
});
chart.render();

}
</script>

    </body>

    </html>