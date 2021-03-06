

<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
 ?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="hello">
                <a href="index.php"><img src="img/logo_copy.png"></a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php"><i class="fas fa-home fa-fw"></i>Home</a>
                </li>
                <li>
                    <a href="request.php"><i class="fas fa-tree fa-fw"></i>Request for Tree</a>
                </li>
                <li>
                    <a href="wecare.php"><i class="fab fa-angellist fa-fw"></i>We Care</a>
                </li>
                <li>
                    <a href="rescue.php"><i class="fas fa-map-pin fa-fw"></i>Rescue</a>
                </li>
                <li>
                    <a href="ngo_list.php"><i class="fab fa-centos fa-fw"></i>NGOs</a>
                </li>
                <li>
                    <a href="#myaccount" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-alt fa-fw"></i>My Account</a>
                    <ul class="collapse list-unstyled" id="myaccount">
                        <li>
                            <a href="myorder.php">My Orders</a>
                        </li>
                        <li>
                            <a href="myaccount.php">My Profile</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
                </li> -->
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
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-x">
                <div class="container-fluid">

                    <a id="sidebarCollapse" class="hidedesktop nav-c">
                        <i class="fas fa-align-left" style="height: 20px;"></i>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <span><img src="img/logo_copy.png" height="70px" width="150px"></span>

                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="request.php"><button class="nav-c btn btn-outline-light btn-ct" > Request for Tree</button> </a>
                                <!-- <a class="nav-link" href="#"> Request for Tree</a> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wecare.php" >We Care</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="rescue.php">Rescue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ngo_list.php">NGOs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <a href="index.php"><span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span></a>
                    <div class="ralign  ml-auto">

                        <!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->

                        <a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <img src="img/line.png" style="height: 30px; padding-right: 10px;">
                        
                        <a class="nav-c" href="cart.php"><img src="img/treecart.png"><!-- <i style="font-size: 20px" class="fa fa-shopping-cart head"></i> -->
                            

                            <?php
                            $id=$_SESSION['s_id'];
                            $sql= "SELECT COUNT(*) as tot FROM cart WHERE u_id=$id and req=0;"; 
                            $result=mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                            if ($row['tot']>9) {
                                $tot="9+";
                            }
                            else{
                                $tot=$row['tot'];
                            }

                            ?>
                            <span class="nav-t badge badge-sm badge-light"><?php echo "$tot";?></span></a>

                        <img src="img/line.png" style="height: 30px; padding-right: 10px">
                        <div class="btn-group">
  <a class="nav-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
 </a>
 <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="login.php">login/signup</a>
  <a class="dropdown-item" href="myaccount.php">My Account</a>
  <a class="dropdown-item" href="myorder.php">My Order</a>
  <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="logout.php">Logout</a>
</div>
</div>


                        <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                        <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                    </div>
                </div>
            </nav>

            