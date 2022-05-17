<?php 
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>huqqah-Registrieren</title>
    <!--Verlinkungen-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    

    <div id="login">
        <h3 class="text-center text-white pt-5">Registrieren</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Registrieren</h3>

                            <form action="" method="post">
                                
                            <div class="form-group">
                                <input type="radio" name="geschlecht" value="Mann">Mann<br>
                                <input type="radio" name="geschlecht" value="Frau">Frau<br>
                            </div>  

                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name" class="text-info">Vorname:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-info">E-Mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary"  type="button" type="button" class="btn btn-primary" value="Registrieren">
                            </div>  
                            
                            

                              
                            <div id="login-link" class="text-right">
                                <a href="../php/login.php" class="text-info">zum Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>