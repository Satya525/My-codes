<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_learn</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
</head>
<body>

<div class="container col-md-5">
<form action="index.php" method="post">
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Number 1</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="num1" aria-describedby="emailHelp" placeholder="Enter Num1">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div> -->
   <div class="form-group">
    <label for="exampleInputEmail1">Number 1</label>
    <input type="text" autocomplete="off" class="form-control" id="exampleInputEmail1" name="students" aria-describedby="emailHelp" placeholder="Enter Num1">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
   </div>
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Number 2</label>
    <input type="number" class="form-control" name="num2" id="exampleInputPassword1" placeholder="Enter Num2">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" value="Apples" name="fruites[]" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Apples</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" value="Oranges" name="fruites[]" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Oranges</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" value="Pears" name="fruites[]" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Pears</label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>










    <div class="offset-4">
    <h3 style="font-style: italic">
    <?php
    // function vat(){
    //     for($i = 0; $i <= 10; $i++){
    //         echo $i ."<br>";
    //     }
    // }
    // vat();
    // $phrase = "<h1>Hello World</h1>";
    
    // String Function

    // echo str_replace("Hello","My",$phrase); 
    // echo substr($phrase, 10,3);

    // Number Functions

    // echo 10%3;
    // echo (4 + 5) * 10 ;
    // $num = 10 ; 
    // $num += 25;
    // echo $num;
    // echo abs(-900);
    // echo pow(2, 4);
    // echo sqrt(144);
    // echo max(2, 4,10,4.9,25);
    // echo min(2, 4,10,4.9,25, -25);
    // echo round(4.5);
    // echo ceil(4.3);
    // echo floor(4.5);
    

    // Get input from user
    // echo ("<h3><i>"."Your Name is ". $_GET["nme"]."</i></h3>");
    // echo ("<h3><i>"."Your Age is ". $_GET["age"]."</i></h3>");
    
    // echo ("<h3 style=". "margin-left".":" ."35rem>". "Number 1 is : ".($_POST["num1"])."</h3>");
    // echo ("<h3 style=". "margin-left".":" ."35rem>". "Number 2 is : ".($_POST["num2"])."</h3>");
    // echo ("<h3 style=". "margin-left".":" ."36rem>". "Answer is : ".($_POST["num1"] * $_POST["num2"])."</h3>");
    // $friends = array("ABC","ABD","ABE","ABF","ABG","ABH");
    // $friends[5] = "bg8";
    // echo $friends [5];
        // $fruites = $_POST["fruites"];
        // // echo $fruites[0];
        // echo ("<h3 style=". "margin-left".":" ."35rem>". "Selected fruiet is : ".$fruites[0]."</h3>");
    // echo ("<h3 style=margin-left:35rem>"."Entered Nuber is : ".$_POST["num1"]."</h3>");
    // echo ("<h3 style=margin-left:35rem>"."Entered Nuber is : ".$_POST["num2"]."</h3>");
    // echo ("<h3 style=margin-left:35rem>"."Entered Nuber is : ".($_POST["num1"]+$_POST["num2"])."</h3>");
    // // practice====
    // $fruites = $_POST["fruites"];
    // echo ("<h3 style=margin-left:35rem>"."Entered fruite is : ".$fruites[1]."</h3>");

    // $grades = ["Jimy" => "A+", "Shark" => "B-", "Rama" => "C+"];
    // $grades ["Jim"] = "F";
    // $grades ["Stark"] = "G";
    // echo count($grades);
    // echo $grades["Stark"];
    // echo $grades[$_POST["students"]];
    $name = $_POST["students"]; 
    function sayHi($name){
        
        for($nam = 1; $nam >= 10; $nam++)
        {
            echo "My Name Is ". $name. "<br>";
        }
    }
    sayHi($name);



















    ?>
    </h3>
    </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</body>
</html>