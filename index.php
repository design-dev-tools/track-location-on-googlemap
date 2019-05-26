<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
  </head>
  <body>
      <div class="setaddress">
        <form action="includes/insertData.php" method="POST">

          <?php
            include('includes/connection.php');
            $sql = "SELECT * FROM map";
            $result = mysqli_query($conn, $sql);

            $options = 0;
            if(mysqli_num_rows($result) > 0){
              while($row = $result-> fetch_assoc()){
                $id=$row['ID'];
                $adrname=$row['Name'];
                $latitude=$row['latitude'];
                $longitude=$row['longitude'];
                $zoom=$row['zoom'];

                $optionvalue= $adrname;
                $options = $options . "<option value='$optionvalue'>". $adrname . "</option>";
                }
             }else{
                   echo "0 results";
              }
          ?>
          <div class="form-group">
            <label for="sel1" class="col-sm-4">Select District:</label>
            <div class="col-sm-8">
              <select class="form-control " id="adrname" name="district">
                <option value="" disabled="" selected="" > Select any district</option>
                <?php  echo  $options ; ?>
              </select>
            </div>
          </div> <br> <br> <br>

          <div class="form-group">
               <label class="control-label col-sm-4" >Enter Street :</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" name="street" id="street" placeholder="Enter Street">
               </div>
          </div> <br> <br>
            
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
          <div class="clearfix"> </div>

        </form>
      </div>
    
  </body>
</html>