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

        <!-- Font Awesome JS -->
        <script defer src="js/all.min.js"></script>
    </head>

    <body>

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
                        <a href="#"><i class="fas fa-tree fa-fw"></i>Request for Tree</a>
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
                                <a href="#myorders">My Orders</a>
                            </li>
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

                        <a id="sidebarCollapse" class="hidedesktop nav-c">
                            <i class="fas fa-align-left" style="height: 20px;"></i>
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <span><img src="img/caretree.png" height="70px" width="150px"></span>

                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <button class="nav-c btn btn-outline-light btn-ct" href="#"> Request for Tree</button> 
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
                            <a class="nav-c" href="#"><i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
                            </a>


                            <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                            <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                        </div>
                    </div>
                </nav>
                
                    <div class="row rmv ml-auto mr-auto">
                            
                    
                    
                
                
                <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Status</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- xxxx -->
                <tr>
                  <th scope="row">
                    <div class="p-1">
                      <img src="img/Karanja.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Karanja</a></h5><span class="text-muted font-weight-normal font-italic">NGO Name: Karanj</span>
                        <br>
                        <span class="text-muted font-weight-normal font-italic">Citizen Name: Karanj</span><br>
                        <span class="text-muted font-weight-normal font-italic">Citizen Area: Karanj</span>
                        
                        
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>Free</strong></td>
                  <td class="align-middle"> 3</td>
                  <td class="align-middle">Tree Planted/Requested/ Reqeust Accepted
                  </td>
                </tr>
                <!-- xxx -->
              </tbody>
            </table>
          </div>
          <!-- End -->
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/new.js"></script>
    </body>

    </html>