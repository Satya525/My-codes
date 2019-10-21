<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="container">
    <button class="btn btn-primary col-md-1 mt-3" id="submit" style="margin-left: 31rem" type="button">Submit</button>
        <div class="row col-md-11 form-inline mt-5 offset-2">
            <input class="form-control col-md-4" type="text" id="usern" name="usern" value="" placeholder="USERNAME" autocomplete="off"
                required>
            <input class="form-control col-md-4 ml-3" type="text" id="userp" name="userp" value="" placeholder="PASSWORD" autocomplete="off"
                required>
                <button class="btn btn-primary col-md-2 ml-3" id="addr" type="button">Add Row</button>
        </div>  
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(e){
                
                var html = '<div class="row col-md-11 form-inline mt-5 offset-2"><input class="form-control col-md-4" type="text" id="usern" name="usern" value="" placeholder="USERNAME" autocomplete="off"required><input class="form-control col-md-4 ml-3" type="text" id="userp" name="userp" value="" placeholder="PASSWORD" autocomplete="off"required><a href="#" class="col-md-2 ml-3" style="text-align:center;" id="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>';
                var maxRow = 5;
                var x = 1;
                $("#addr").click(function(e){
                    if(x <= maxRow){
                        $("#container").append(html);
                        x++;
                    }
                });

                $("#container").on('click','#remove',function(e){
                    $(this).parent('div').remove();
                    x--;
                });


            });
        </script>
    <?php


    ?>
</body>

</html>