<html>

<head>
    <title>Warrior Web Services</title>
    <link rel="shortcut icon" href="/img/favicon.ico?v=3" />
    <link href="/css/style.css?v=2.9.9.29" rel="stylesheet" />
    <link href="/css/bootstrap.min.css?v=1" rel="stylesheet" />
    <link href="/css/flat-ui.min.css?v=1" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="img/logo.png" width="100px">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li id="homeactive" class="active home"><a id="homelink" href="#mainpage" class="smoothScroll">Home</a>
                    </li>
                    <li id="servicesactive" class="services">
                        <a id="servicelink" class="smoothScroll" href="#services">Services</a>
                    </li>
                    <li id="portfolioactive" class="portfolio">
                        <a id="portfoliolink" class="smoothScroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li id="aboutactive" class="about"><a id="aboutlink" class="smoothScroll" href="#about">About</a>
                    </li>
                    <li id="pricesactive" class="prices"><a id="priceslink" class="smoothScroll" href="#prices">Prices</a>
                    </li>
                    <li id="contactactive" class="contact"><a id="contactlink" class="smoothScroll" href="#contact_form">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="mainpage" class="container">
        <div class="container" style="height: 1000px;">
            <div id="animated" class="animated-1s fadeInLeft text-center">
                Hosting
            </div>
            <div id="animated" class="animated-2s fadeInLeft text-center">
                Web design
            </div>
            <div id="animated" class="animated-3s fadeInLeft text-center">
                Troy High Clubs
            </div>
        </div>
    </div>
    <div id="services" style="background-color: #6DBDD6" class="container-fluid jumbotron">
        <div class="row">
            <h1 class="text-center header">SERVICES</h1>
            <div class="col-md-5" data-sr="enter left over .5s wait .2s" id="bigheading">&nbsp;&nbsp;&#9679; Custom domain</div>
            <div class="col-md-6" data-sr="enter left over .5s wait .4s" id="bigheading">&nbsp;&nbsp;&#9679; Hosting for one year</div>
            <div class="col-md-5" data-sr="enter left over .5s wait .6s" id="bigheading">&nbsp;&nbsp;&#9679; 100% uptime</div>
            <div class="col-md-7" data-sr="enter left over .5s wait .8s" id="bigheading">&nbsp;&nbsp;&#9679; Secure connection (SSL)</div>
            <div class="col-md-5" data-sr="enter left over .5s wait 1s" id="bigheading">&nbsp;&nbsp;&#9679; Web design</div>
            <div class="col-md-5" data-sr="enter left over .5s wait 1.2s" id="bigheading">&nbsp;&nbsp;&#9679; Admin features</div>
        </div>
    </div>
    <div id="portfolio" style="background-color: #B71427" class="container-fluid jumbotron">
        <div class="row">
            <h1 class="text-center header">PORTFOLIO</h1>
        </div>
    </div>
    <div id="about" style="background-color: #FFE658" class="container-fluid jumbotron">
        <div class="row">
            <h1 class="text-center header">ABOUT</h1>
        </div>
    </div>
    <div id="prices" style="background-color: #404040" class="container-fluid jumbotron">
        <div class="row text-center" style="margin: auto !important">
            <h1 class="header" style="color: white">PRICES</h1>
            <div data-sr="enter bottom over .5s wait .2s" class="col-md-3" style="background-color:white !important; border: 10px solid white; border-radius: 5px; height: 600px; border-bottom-right-radius: 0; border-top-right-radius: 0">
                <h1 class="header title">Basic</h1>
                <p>1 year of hosting</p>
                <p>Custom .com domain</p>
                <p>WordPress design</p>
                <p>Administrator features</p>
                <p>100% uptime</p>
                <h2 style="color: green">$15/yr + <br>$10 one time fee</h2>
            </div>
            <div data-sr="enter bottom over .5s wait .4s" class="col-md-3" style=" background-color:white !important; border: 10px solid white; height: 600px;">
                <h1 class="header title">Medium</h1>
                <h3>All Basic features</h3>
                +
                <p>SSL (Secure Socket Layer)</p>
                <p>Internet Attack Protection</p>
                <p>Faster speeds</p>
                <h2 style="color: green">$20/yr + <br>$10 one time fee</h2>
            </div>
            <div data-sr="enter bottom over .5s wait .6s" class="col-md-3" style=" background-color:white !important; border: 10px solid white; height: 600px;">
                <h1 class="header title">Addons</h1>
                <h3>Club advertisement on this site</h3>
                <h2 style="color: green">$2/mo</h2>
            </div>
            <div data-sr="enter bottom over .5s wait .8s" class="col-md-3" style=" background-color:white !important; border: 10px solid white; border-radius: 5px; height: 600px; border-bottom-left-radius: 0; border-top-left-radius: 0">
                <h1 class="header title">Addons</h1>(continued)
            </div>
        </div>
        <p id="price_disclaimer" style="color:white; text-align: center">Paying in advance can be arranged. Addons can be added to any package. All sites bought through Warrior Web Services are ad-free. </p>
    </div>
    <?php include( 'contact.php'); ?>
    <div style="margin-top: 200px" class="text-center">
        <p>Website designed by Marcus Wong, Warrior Web Services is not officially affiliated with Troy High School.
            <br>By reading this disclaimer you agree to all the things.</p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/scrollReveal.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        window.sr = new scrollReveal();
        $('#servicelink').click(function () {
            $('.home').removeClass('active');
            $('.about').removeClass('active');
            $('.portfolio').removeClass('active');
            $('.services').addClass('active');
            $('.prices').removeClass('active');
            $('.contact').removeClass('active');
        });
        $('#portfoliolink').click(function () {
            $('.home').removeClass('active');
            $('.services').removeClass('active');
            $('.about').removeClass('active');
            $('.portfolio').addClass('active');
            $('.prices').removeClass('active');
            $('.contact').removeClass('active');
        });
        $('#aboutlink').click(function () {
            $('.home').removeClass('active');
            $('.portfolio').removeClass('active');
            $('.services').removeClass('active');
            $('.about').addClass('active');
            $('.prices').removeClass('active');
            $('.contact').removeClass('active');
        });
        $('#homelink').click(function () {
            $('.home').addClass('active');
            $('.portfolio').removeClass('active');
            $('.services').removeClass('active');
            $('.about').removeClass('active');
            $('.prices').removeClass('active');
            $('.contact').removeClass('active');
        });
        $('#contactlink').click(function () {
            $('.home').removeClass('active');
            $('.portfolio').removeClass('active');
            $('.services').removeClass('active');
            $('.about').removeClass('active');
            $('.prices').removeClass('active');
            $('.contact').addClass('active');
        });
        $('#priceslink').click(function () {
            $('.home').removeClass('active');
            $('.portfolio').removeClass('active');
            $('.services').removeClass('active');
            $('.about').removeClass('active');
            $('.contact').removeClass('active');
            $('.prices').addClass('active');
        });
    </script>
    <script src="js/_dependent/greensock/TweenMax.min.js"></script>
    <script src="/js/jquery.scrollmagic.min.js"></script>
    <script src="js/jquery.scrollmagic.debug.js"></script>
    <script>
        var controller;
        $(document).ready(function ($) {
            // init controller
            controller = new ScrollMagic();
        });
    </script>
    <script>
        $(document).ready(function ($) {
            // build scene
            var scene = new ScrollScene({
                    triggerElement: "#services"
                })
                .setClassToggle('#homeactive', 'unactive')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#services"
                })
                .setClassToggle('#servicesactive', 'active')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#portfolio"
                })
                .setClassToggle('#servicesactive', 'unactive')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#portfolio"
                })
                .setClassToggle('#portfolioactive', 'active')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#about"
                })
                .setClassToggle('#portfolioactive', 'unactive')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#about"
                })
                .setClassToggle('#aboutactive', 'active')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#prices"
                })
                .setClassToggle('#pricesactive', 'active')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#prices"
                })
                .setClassToggle('#aboutactive', 'unactive')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#contact_form"
                })
                .setClassToggle('#aboutactive', 'unactive')
                .addTo(controller);
            var scene = new ScrollScene({
                    triggerElement: "#contact_form"
                })
                .setClassToggle('#contactactive', 'active')
                .addTo(controller);
        });
    </script>
</body>

</html>