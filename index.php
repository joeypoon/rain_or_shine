<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Weather Scrapper</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="styles.css">

        <style>

    

        </style>

    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-md-offset-3 center">

                    <h1 class="white center">Rain or Shine</h1>
                    <p class="lead white center">Enter your city to see if it's rain or shine.</p>

                    <form>

                        <div class="input-group">

                            <span class="input-group-addon"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="Eg. San Francisco, Tokyo, Seoul..." name="city" id="city" class="center">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></span>

                        </div>

                        <button class="btn btn-success bt-lg marginTop" id="findWeather">Rain or Shine</button>

                    </form>

                </div>

            </div>

            <div class="col-md-6 col-md-offset-3 alert alert-success marginTop" role="alert" id="alertSuccess"></div>
            <div class="col-md-6 col-md-offset-3 alert alert-danger marginTop" role="alert" id="alertError">Please enter valid city</div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="scripts.js"></script>

    </body>
</html>
