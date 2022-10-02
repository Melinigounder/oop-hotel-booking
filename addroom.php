
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room & Facilities</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addroom.php">Room &amp; Facilities</a></li>
                    <li><a href="hotel.php">Online Reservation</a></li>
                </ul>
                
                
            </div>
        </nav>
        
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>"Standard."</h4><hr>
                                <h6>No of Beds: Two Single beds.</h6>
                                <h6>Facilities: "TV and Wifi."</h6>
                                <h6>Price:R300 per night.</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href="pricecheck.php"><button class='btn btn-primary button'>Price Check</button></a>
                            </div>

                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>"Deluxe."</h4><hr>
                                <h6>No of Beds: Two Double beds.</h6>
                                <h6>Facilities: "TV and Wifi."</h6>
                                <h6>Price:R600 per night.</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href="pricecheck.php"><button class='btn btn-primary button'>Price Check</button></a>
                            </div>

                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>"Suite."</h4><hr>
                                <h6>No of Beds: Three Double beds.</h6>
                                <h6>Facilities: "TV and Wifi."</h6>
                                <h6>Price:R1000 per night.</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href="pricecheck.php"><button class='btn btn-primary button'>Price Check</button></a>
                            </div>
    </div>

    
                           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>