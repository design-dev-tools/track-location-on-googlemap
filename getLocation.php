<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <style type="text/css">
   .getlatlog{
     margin:60px auto 20px;
     background-color: black;
     opacity: 0.6;
     padding: 20px;
     color:white;
   }

   .getlatlog h2{
     font-size: 25px;
     color:white;
   }

   #map {
        width: 90%;
        height: 500px;
        margin:30px auto;

    }

    .submitBtn{
      margin-top: 20px;
    }

    .paddingForm{
      padding: 10px;
    }
    
  </style>
  </head>
  <body>
      <div class="container-fluid getLocation">

        <div class="row">
            <div class="col-md-2 addressinfo getlatlog"> 
              <center> <h2> Get Location</h2></center> <br>
                <form action="getLocation.php" class=" paddingForm">
                  <div id="geoData" class="form-group">
                      <div class="latitude">
                          <label class="control-label " >Latitude:</label>
                          <input type="text" class="form-control" id="latitude" disabled="" placeholder="Get Latitude">
                      </div> <br>

                      <div class="longitude">
                          <label class="control-label " >Longitude:</label>
                          <input type="text" class="form-control" id="longitude" disabled="" placeholder="Get Longitude">
                      </div>
                  </div> 

                  <div class="submitBtn"> 
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"> </div>
                  </div>
                    
                </form>
            </div>

            <div class="col-md-10 mapinfo">
               <div id="map" >
            </div>

        </div>

      </div>

    <?php include('json/getposition.php');?>
    <!-- <script type="text/javascript" src="json/location.js"></script> -->
    <script type="text/javascript" src="js/new.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLD5wvLW3WliBDwlvjfndEHrLjy1NcWQ&callback=initMap" async defer></script>
         

  </body>
</html>