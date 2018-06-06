<?php
    require_once "config.php";

    $loginURL = $client->createAuthUrl();
    
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login with Google</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" aling="center">
                <form>
                    <input pattern="Email..." placeholder="Login" name="email" class="form-control" /><br />
                    <input type="password" placeholder="Password" name="password" class="form-control"/><br />
                    <input type="submit" value="Log in" class="btn btn-primary">
                    <input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Log in with google" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

</body>
</html>