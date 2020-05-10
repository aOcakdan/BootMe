<!doctype html>
<html lang="en"><?php include "vendor/autoload.php";
session_start();
if(isset($_GET["cikis"])){
    user::logout();
}
if(isset($_POST["username"])){
    $state = user::login($_POST["username"], $_POST["password"]);

    if($state === true){
        $message = "Giriş başarılı";
    }else {
        switch ($state) {
            case "passErr":
                $message = "Şifre Yanlış";
                break;
            case "noUser":
                $message = "Kullanıcı Bulunamadı";
                break;
        }
    }
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Oswald Font-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,600,700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/Style.css">

    <!-- Scroll Reveal JS -->
    <script src="js/scrollreveal.min.js"></script>

    <title>BootMe</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand">BootMe</a>
        <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#headerSection">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#caseStudy">Our Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HEADER SECTİON -->

<header id="headerSection">
    <div class="overlay">
        <div class="container">
            <div class="row text-center mainContent">
                <div class="col my-auto">
                    <h1  class=" display-3 text-white">
                        <span>BootMe</span> Landing Theme</h1>
                    <p class="text-muted"><em>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</em></p>
                    <button type="button" class="btn btn-outline-primary">Action</button>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- FEATURES SECTİON -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Giriş Yap</h2>

                <div class="d-flex flex-row">
                    <div class="p-2">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    </div>
                    <div class="p-2">
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="p-2">
                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                if(isset($message)) echo "<p>". $message. "</p>";
                if(!user::checkLogin()) {
                ?>
                <form method="post">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                            <input name="username" class="form-control" type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input name="password" class="form-control" type="password" placeholder="Şifre">
                        </div>
                    </div>

                    <input type="submit" value="Giriş Yap" class="btn btn-primary btn-block">
                </form>

                <?php }else{
                    ?>
                    <p>Hoş geldin <?=user::getCurrentUserData("name")?></p>
                    <a class="btn btn-danger" href="?cikis">Çıkış Yap</a>
                <?php

                } ?>
            </div>
        </div>
    </div>
</section>
<section id="features" class="pt-5">
    <div class="container">
       <div class="row mt-5">
           <div class="col-md-3 text-center">
               <div class="feature">
                   <div class="feature-top">
                   <i class="fa fa-ravelry"></i>
                   <h3 class="mt-3">SLEEK DESİGN</h3>
                   </div>
                   <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>

               </div>
           </div>
           <div class="col-md-3 text-center">
               <div class="feature">
                   <div class="feature-top">
                   <i class="fa fa-cog"></i>
                   <h3 class="mt-3">CLEAN CODE</h3>
                   </div>
                   <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>

               </div>
           </div>
           <div class="col-md-3 text-center">
               <div class="feature">
                   <div class="feature-top">
                   <i class="fa fa-leaf"></i>
                   <h3 class="mt-3">CREATİVE IDEAS</h3>
                   </div>
                   <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>

               </div>
           </div>
           <div class="col-md-3 text-center">
               <div class="feature">
                   <div class="feature-top">
                   <i class="fa fa-podcast"></i>
                   <h3 class="mt-3">FREE SUPPORT</h3>
                   </div>
                   <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>

               </div>
           </div>
       </div>
    </div>
</section>

<!-- HISTORY SECTİON -->

<section id="ourHistory">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 historyLeft">
                <img src="images/Apple.png" class="img-fluid" alt="Our History">
            </div>
            <div class="col-lg-6 historyRight">
                <h2 class="mb-5">Our History</h2>
                <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>
                <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>
                <button type="button" class="btn btn-outline-primary">Check Our Work</button>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTİON -->

<section id="team" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 team1">
                <div class="card text-center">
                    <div class="card-block">
                        <img src="images/Mustafa%20Kemal%20Atatürk%20-1.jpg" class="img-fluid rounded-circle my-4">
                        <h3>Mustafa Kemal</h3>
                        <h5 class="text-muted">MARSHAL</h5>
                        <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.
                        </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team2">
                <div class="card text-center">
                    <div class="card-block">
                        <img src="images/Mustafa%20Kemal%20Atatürk%20-1.jpg" class="img-fluid rounded-circle my-4">
                        <h3>Mustafa Kemal</h3>
                        <h5 class="text-muted">MARSHAL</h5>
                        <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.
                        </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team3">
                <div class="card text-center">
                    <div class="card-block">
                        <img src="images/Mustafa%20Kemal%20Atatürk%20-1.jpg" class="img-fluid rounded-circle my-4">
                        <h3>Mustafa Kemal</h3>
                        <h5 class="text-muted">MARSHAL</h5>
                        <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.
                        </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team4">
                <div class="card text-center">
                    <div class="card-block">
                        <img src="images/Mustafa%20Kemal%20Atatürk%20-1.jpg" class="img-fluid rounded-circle my-4">
                        <h3>Mustafa Kemal</h3>
                        <h5 class="text-muted">MARSHAL</h5>
                        <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.
                        </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="p-4">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO SECTION -->

<section id="whatWeDo" class="py-5" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>What Are We Doing?</h2>
                <p class="text-muted"><em>Victory is for those who can say "Victory is mine".</em></p>
            </div>
            <div class="col-md-6 text-center mx-auto">
                <a href="#" class="video" data-video="https://www.youtube.com/embed/QHXfsLZmq2U"
                   data-toggle="modal" data-target="#videoModal">
                    <i class="fa fa-play-circle-o fa-5x"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO SECTION MODAL -->

<div class="modal fade" id="videoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/QHXfsLZmq2U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- CASE STUDY SECTION -->

<section id="caseStudy" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 case1">
                <div class="caseArea text-center">
                    <i class="fa fa-podcast"></i>
                    <h3>ACCUMULATIVE CREATIVE AREAS</h3>
                    <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>
                    <button type="button" class="btn btn-outline-primary">Action</button>
                </div>
            </div>
            <div class="col-md-6 case2">
                <div class="caseImage">
                    <img src="images/Mustafa%20Kemal%20Atatürk%20-3.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO SECTION -->

<section id="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="webDesign" data-title="Web Design">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="webDesign" data-title="Web Design">
                    <a href="images/portfolio.png" data-lightbox="image-1" data-title="Web Design">
                        <div class="imageContainer">
                            <img src="images/portfolio.png" class="img-fluid">
                            <div class="imageOverlay">
                                <div class="imageText">
                                    <i class="fa fa-search-plus"></i>
                                    <h4>WEB DESIGN</h4>
                                    <p><em>code/design</em></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </a>
            </div>
            <div class="col-md-3">,
                <a href="images/portfolio.png" data-lightbox="webDesign" data-title="Web Design">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="webDesign" data-title="Web Design">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="printDesign" data-title="Web Design 2">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="printDesign" data-title="Web Design 2">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="printDesign" data-title="Web Design 2">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="images/portfolio.png" data-lightbox="printDesign" data-title="Web Design 2">
                    <div class="imageContainer">
                        <img src="images/portfolio.png" class="img-fluid">
                        <div class="imageOverlay">
                            <div class="imageText">
                                <i class="fa fa-search-plus"></i>
                                <h4>WEB DESIGN</h4>
                                <p><em>code/design</em></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->

<section id="testimonials" class="py-5">
    <div class="container-fluid" style="padding: 0;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/caro1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/caro2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/caro3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>CONTACT US</h2>
                <p>Victory is for those who can say "Victory is mine". Success is for those who can begin saying "I will succeed" and say "I have succeeded" in the end.</p>
                <h4>Address</h4>
                <p>Mithatpaşa mah.</p>
                <h4>Email</h4>
                <p>laughmanlj@gmail.com</p>
                <h4>Phone</h4>
                <p>555 444 33 32</p>
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    </div>
                    <div class="p-2">
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="p-2">
                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input class="form-control" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text">
                                <i class="fa fa-pencil"></i>
                            </span>
                            <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="SUBMIT" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER SECTION -->

<footer id="main-footer" class="py-2">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-6 mx-auto">
                <p class="lead">NO Copyright &copy; 2020 BootMe</p>
            </div>
        </div>
    </div>
</footer>


















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.js" ></script>
<script type="text/javascript" src="js/lightbox.js" ></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/main.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>

<script>
    window.sr = ScrollReveal();
    sr.reveal('.mainContent', {
       duration:3000
    });
    sr.reveal('#features', {
        duration:3000
    });
    sr.reveal(".historyLeft", {
        duration: 3000,
        viewFactor: 0.2,
        origin: 'left',
        distance: '50px',
    });
    sr.reveal(".historyRight", {
        duration: 3000,
        viewFactor: 0.2,
        origin: 'right',
        distance: '50px',
    });
    sr.reveal(".team1", {
        duration: 3000,
        viewFactor: 0.2,
        origin: 'left',
    });
    sr.reveal(".team2", {
        duration: 3000,
        delay:500,
        viewFactor: 0.2,
        origin: 'left',
    });
    sr.reveal(".team3", {
        duration: 3000,
        delay:1000,
        viewFactor: 0.2,
        origin: 'left',
    });
    sr.reveal(".team4", {
        duration: 3000,
        delay:1500,
        viewFactor: 0.2,
        origin: 'left',
    });
    sr.reveal(".case2", {
        duration: 3000,
        viewFactor: 0.2,
        origin: 'right',
        distance: '50px',
    });
</script>
</body>
</body>
</html>