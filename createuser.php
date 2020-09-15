<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UserGenerater</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="text-center" style="height: 450px;">
        <div style="background-image: url(&quot;assets/img/bg3.jpeg&quot;);height: 350px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboard.php" style="color: rgb(255,255,255);">Dashboard</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="createevent.php" style="color: rgb(255,255,255);">Create Event</a></li>
                        </ul><span class="navbar-text actions"> <a class="login" href="logout.php" style="color: rgb(255,255,255);margin-right: 20px;">LogOut</a></div>
        </div>
        </nav>
        <div class="card shadow-lg" style="width: 950px;margin-right: 250px;margin-left: 300px;margin-top: 100px;height: 1200px;background-color: rgb(228,228,228);">
            <div class="card-body shadow-lg">
                <h1 class="text-left" style="margin-top: 8px;font-size: 54px;color: rgb(43,43,43);">User Generation</h1>
                <div style="height: 811px;">
                    <div class="row register-form">
                        <div class="col-md-8 offset-md-2">
                            <form class="custom-form" action="createusersave.php" method="post" enctype="multipart/form-data" >
                                <h1>User Form</h1>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name" required></div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" required></div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">User Name</label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="username" required></div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field" >Password </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="password"name="password" required></div>
                                </div>
                               
                                
                               
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Choose Role </label></div>
                                    <div class="col-sm-4 input-column">
                                        <select name="role">
                                            <option value="Organizer">Organizer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <button class="btn btn-light submit-button" type="submit" name="submit">Submit Form</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>