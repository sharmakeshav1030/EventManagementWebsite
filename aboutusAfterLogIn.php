<!DOCTYPE html>
<html style="height: 1500;filter: blur(0px);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <div class="header-dark" style="height: 100;width: 500;">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="index.php">MMDU Event</a>
				<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                            
                            <li class="nav-item" role="presentation"><a class="nav-link" href="galleryAfterLogIn.php">Gallery</a></li>
                            
                            <li class="nav-item" role="presentation"><a class="nav-link" href="galleryupload.php">Upload</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                  
                           



                        </form><span class="navbar-text">



                            <?php
						session_start();
						if(isset($_SESSION['mail']) == '' &&  isset($_SESSION['password']) == ''){


					}

						else{
						echo	"<span class='navbar-text actions'> <a href='dashboard.php' style='color: rgb(255,255,255);'>Dashboard</a>";
						}

						?>


                            </div>



                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 col-lg-8 offset-md-2">
                        <h1 class="text-center">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2>MMDU Event Hub</h2>
                        <p><br>This is the platform that allows organizers to post and promote their event in University. It is a revolutionary idea that can reduce lot of efforts of organizers of promoting their event, collecting statistics of event, getting
                            the registrations done and handling payments. Not only this, it will make the process of registration lot easier for the participants too. It will be the single portal where students will be able to see every event, workshop,
                            function or fest which is ongoing in university and with its notification system the website will make sure that they don’t miss the event&nbsp;<br><br><br></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="assets/img/Untitled%20design%20(10).png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Mentor</h2>
            </div>
            <div class="row people" style="height: 400;width: 950;">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(6).png">
                        <h4 class="name">Ms. Gunjan Sethi</h4>
                        <p class="title">Professor</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(7).png">
                        <h4 class="name">Ms. Rohini Sharma</h4>
                        <p class="title">Professor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Team </h2>
                <p class="text-center"></p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(1).png">
                        <h3 class="name">Anshul Sharma</h3>
                        <p class="title">BAck End</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/friendanshul1998"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/anshul.sharma23"><i class="fa fa-instagram"></i></a></div>
                    </div>
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(3).png">
                        <h3 class="name">Prince Parihar</h3>
                        <p class="title">front end and UI</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/princeparihar22/"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/princepariharr"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(2).png">
                        <h3 class="name">Keshav Sharma</h3>
                        <p class="title">Database Connectivity</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/keshav.sharma.0101"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/sharmakeshav0101"><i class="fa fa-instagram"></i></a></div>
                    </div>
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(4).png">
                        <h3 class="name">Sukrut Patil</h3>
                        <p class="title">back end and front end</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/sukrut.patil.526"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/sukrut_patill"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/Untitled%20design%20(5).png">
                        <h3 class="name">Vaibhav Pahwa</h3>
                        <p class="title">Front end</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/vishu.pahwa"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/vishu_pahwa"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Team</h3>
                        <ul>
                            <li><a href="https://www.instagram.com/anshul.sharma23/">Anshul Sharm</a></li>
                            <li><a href="https://www.instagram.com/sharmakeshav0101/">Keshav Sharma</a></li>
                            <li><a href="https://www.instagram.com/vishu_pahwa/">Vaibhav Pahwa</a></li>
                            <li><a href="https://www.instagram.com/princepariharr/">Prince Parihar</a></li>
                            <li><a href="https://www.instagram.com/sukrut_patill/">Sukrut Patil</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Mentors</h3>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/gunjan-sethi-23a89711/">Dr. Gunjan Sethi</a></li>
                            <li><a href="https://www.linkedin.com/in/rohini-sharma-7117b827/">Dr. Rohini Sharma</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
					<a class="shadow" href="https://www.facebook.com/princeparihar22" style="color: rgb(255,255,255);background-color: #350bdc;"><i class="icon ion-social-facebook"></i></a>
					<a class="shadow" href="https://twitter.com/sukrutpatil77" style="background-color: #0980d6;color: rgb(255,255,255);"><i class="icon ion-social-twitter"></i></a>
					<a class="shadow-lg" href="https://www.instagram.com/anshul.sharma23/" style="color: rgb(255,255,255);background-color: #e001f4;"><i class="icon ion-social-instagram"></i></a>
                            <p class="text-center copyright">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MMDU Event Hub © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>