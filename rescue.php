<!DOCTYPE html>
<html>
<head>

<title>Care Tree</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="css/style3.css">
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Font Awesome JS -->
  <script defer src="js/all.min.js"></script>
</head>

</style>
<body onload="JS_tree_loc()">
<?php include_once 'p_connection.php';?>
<?php include_once"header_color_sign.php";?>
          
                <div class="card" style="padding-top: 100px;">
                  <div class="card-body body-c">
                    <div class="btn-toolbar deskor justify-content-between">
                        <div class="desk1" id="rescue"><b>Rescue</b>
                        </div>
                        <!-- <div class="desk">
                            <button type="button" class="btn btn-success btn-sm btn-g">
                                View More <i class="far fa-circle"></i><i class="fas fa-plus-circle"></i>
                            </button>
                        </div> -->
                    </div>
                    <div class="card text-default">
                        <div class="mapouter">

                            <div class="gmap_canvas">
                                <div class="rescue-box deskor card-trans">
                                        <div class="btn-group-vertical">
                                            <button type="button" onclick="JS_tree_loc()" class="btn btn-light text-l"><img class="img-l" src="img/greentree.png" style="color: #ee2524;">&nbsp;&nbsp;All Tree</button>
                                            <button type="button" onclick="JS_tree_water()" class="btn btn-light text-l"><img class="img-l" src="img/bluetree.png" style="color: #007c8f;">&nbsp;&nbsp;Need Water</button>

                                            <button type="button"  class="btn btn-light text-l"><img class="img-l" src="img/redtree.png" style="color: #85c784;">&nbsp;&nbsp;Good Condition</button>
                                            
                                        </div>
                                </div>
                                <!-- <ul class="list-group list-group-flush">
                                        <a href="#"><li class="list-group-item">Cras justo odio</li></a>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                      </ul> -->
                            <!-- tree location -->

<?php 
 $sql= "SELECT t_id,lat,lng,t_status FROM tree_loc;"; 
         $result=mysqli_query($conn,$sql);
         $loc_id=[];
         $loc_lat=[];
         $loc_lng=[];
         $loc_status=[];
         while($row = mysqli_fetch_assoc($result))
         {
          array_push($loc_id,$row['t_id']);
          array_push($loc_lat,$row['lat']);
          array_push($loc_lng,$row['lng']);
          array_push($loc_status,$row['t_status']);
         }
?>
<script type="text/javascript">
  var loc_id = <?php echo json_encode($loc_id, JSON_PRETTY_PRINT) ?>;
  var loc_lat = <?php echo json_encode($loc_lat, JSON_PRETTY_PRINT) ?>;
  var loc_lng = <?php echo json_encode($loc_lng, JSON_PRETTY_PRINT) ?>;
  var loc_status = <?php echo json_encode($loc_status, JSON_PRETTY_PRINT) ?>;

  function JS_tree_loc() 
  {
  // var a=[[22.303950,70.790269],[22.294332,70.785381],[22.297849,70.787166]];
    var mapProp= {
      center:new google.maps.LatLng(22.303869,70.801995),
      zoom:3,
    };
    var map = new google.maps.Map(document.getElementById("tree_loc"),mapProp);
    var marker = new google.maps.Marker({
               position: new google.maps.LatLng(22.303869,70.801995),
               map: map,
               animation:google.maps.Animation.DROP,
               icon: 'img/office.png'  
            });

  for (var i in loc_id) 
  {   
    if (loc_status[i]=='G')
    {
      
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(loc_lat[i],loc_lng[i]),
            map: map,
            animation:google.maps.Animation.DROP,
            icon:'img/G.ico'
        });
    }
    else
    {
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(loc_lat[i],loc_lng[i]),
            map: map,
            animation:google.maps.Animation.BOUNCE,
            icon:'img/R3.png'
        });
    }
       

  }
}
</script> 
<!-- / tree location -->



<!-- tree water --><div id="tree_loc" style="width:100%;height:500px;"></div>

<?php 
 $sql= "SELECT t.t_id as tl_id,t.lat as tl_lat,t.lng as tl_lng,t.t_status,max(w.w_id),w.w_status as tw_status,MAX(w.w_timestamp) FROM tree_loc t left JOIN tree_water w ON(t.t_id=w.t_id) GROUP BY t.t_id;"; 
         $result=mysqli_query($conn,$sql);
         $wat_id=[];
         $wat_lat=[];
         $wat_lng=[];
         $wat_status=[];
         while($row = mysqli_fetch_assoc($result))
         {
          array_push($wat_id,$row['tl_id']);
          array_push($wat_lat,$row['tl_lat']);
          array_push($wat_lng,$row['tl_lng']);
          array_push($wat_status,$row['tw_status']);
         }
         // echo "string";
         // print_r($loc_id);
         // print_r($loc_lat);
         // print_r($loc_lat);
         // print_r($loc_lng);
         // print_r($wat_status);

?>
<script type="text/javascript">
  var wat_id = <?php echo json_encode($wat_id, JSON_PRETTY_PRINT) ?>;
  var wat_lat = <?php echo json_encode($wat_lat, JSON_PRETTY_PRINT) ?>;
  var wat_lng = <?php echo json_encode($wat_lng, JSON_PRETTY_PRINT) ?>;
  var wat_status = <?php echo json_encode($wat_status, JSON_PRETTY_PRINT) ?>;
console.loc(loc_id);
  function JS_tree_water() 
  {
  // var a=[[22.303950,70.790269],[22.294332,70.785381],[22.297849,70.787166]];
    var mapProp= {
      center:new google.maps.LatLng(22.303869,70.801995),
      zoom:3,
    };
    var map = new google.maps.Map(document.getElementById("tree_loc"),mapProp);
    var marker = new google.maps.Marker({
               position: new google.maps.LatLng(22.303869,70.801995),
               map: map, 
               animation:google.maps.Animation.DROP, 
               icon: 'img/office.png'
            });

  for (var i in wat_id) 
  {
    
    if (wat_status[i]=='1')
    {
      
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(wat_lat[i],wat_lng[i]),
            map: map,
            animation:google.maps.Animation.DROP,
            icon:'img/ON3.png'
        });

    }
    else if(wat_status[i]=='0')
    {
      
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(wat_lat[i],wat_lng[i]),
            map: map,
            animation:google.maps.Animation.BOUNCE,
            icon:'img/OFF.png'
        });
    }
    else
    {
      
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(wat_lat[i],wat_lng[i]),
            map: map,
            animation:google.maps.Animation.DROP,
            icon:'img/device/house_internet_network_security32.ico'
        });
    }

       

  }
}
</script>
</div></div>                        
                    </div>
                    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/new.js"></script>
    




<!-- / tree water -->
</body>
</html>