<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_learn</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
      
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<form method="post" class="mt-3">
<div class="container" id="container">
<div class="row col-md-11 form-inline offset-1" style="">
    <input type="text" class="form-control  col-md-3" value="" name="make[]"   id="make"   placeholder="make1"   autocomplete="off">
    <input type="text" class="form-control col-md-3 ml-2"  value="" name="model[]"  id="model"  placeholder="Model1"  autocomplete="off">
    <input type="text" class="form-control col-md-3 ml-2"  value="" name="siri[]" id="siri" placeholder="Siriel1" autocomplete="off">
    <a href="#" id="add" class="btn btn-primary col-md-2 ml-2">Add More</a>
    
</div>
<button class="btn blue-gradient" style="margin-left: 67rem; margin-top: -14rem;" name="submit" value="">Submit</button>
</div>
</form>

<!-- php queries -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(e){
    var tbl = '<div class="row col-md-11 form-inline offset-1 mt-2" style=""><input type="text" class="form-control  col-md-3" value="" name="make[]"   id="childmake"   placeholder="make1"   autocomplete="off"><input type="text" class="form-control col-md-3 ml-2"  value="" name="model[]"  id="childmodel"  placeholder="Model1"  autocomplete="off"><input type="text" class="form-control col-md-3 ml-2"  value="" name="siri[]" id="childsiri" placeholder="Siriel1" autocomplete="off"><a href="#" style="text-align:center;" id="remove" class="col-md-2 ml-2"><i class="fas fa-trash"></i></a></div>';

    var maxRow = 5;

    var x = 1;

    $("#add").click(function(e){
        if(x <= maxRow){
         $("#container").append(tbl);
         x++;
        };
    });

    $("#container").on("click","#remove",function(e){
            $(this).parent('div').remove();
            x--;
    })

    $("#container").on('dblclick','#childmake',function(e){
        $(this).val($('#make').val());
    });

    $("#container").on('dblclick','#childmodel',function(e){
        $(this).val($('#model').val());
    });

    $("#container").on('dblclick','#childsiri',function(e){
        $(this).val($('#siri').val());
    });

});
</script>
<?php
//  echo $output; 
    
// $output = NULL;



if (isset($_POST['submit'])){
    // Connect to db
    $mysqli = NEW MySQLi('localhost','root','','test');

    $make = $_POST['make'];
    $model = $_POST['model'];
    $siri = $_POST['siri'];


    // echo $make;
    foreach($make AS $key => $value){
        $query = "SELECT id FROM 
        inventory WHERE siri = '" . $mysqli->real_escape_string($siri[$key])."'LIMIT 1";

        $resultSet = $mysqli->query($query);

        if($resultSet->num_rows == 0){
            //perform Insert
            $query = "INSERT INTO inventory(make,model,siri)
            VALUES ('"
                . $mysqli->real_escape_string($value) .
            "','"
            . $mysqli->real_escape_string($model[$key]) .
            "','"
            . $mysqli->real_escape_string($siri[$key]) .
            "')
            ";
            $insert = $mysqli->query($query);

            if(!$insert){
                echo $mysqli->error;
            }else{
                $output = "<p>Succesfully Added " . $siri[$key] . "</p>";
            }
        }else{
            $output = "This record already exist" . $mysqli->error; 
        }
    }
    $mysqli->close();
}   
?>
</body>

</html>