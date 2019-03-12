<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        body {
            background-image: url("assets/img/background.png");
        }

        .footer {
            display: none;
        }

        .navbar {
            background-color: #111111;
        }

    </style>
    <script>
        let quotes = [
            'A pair of skis are the ultimate transportation to freedom. – Warren Miller',
            'There is no such thing as too much snow. – Doug Coombs',
            'Skis are not just pieces of wood, steel & fiberglass. They are tools for escape, a medium for personal expression, a way to challenge fears, push limits and share incredible experiences with your friends. – Unknown',
            'Skiing is a dance, and the mountain always leads. - Unknown'
        ];

        function newQuote() {
            let randomQuote = Math.floor(Math.random()*(quotes.length));
            document.getElementById('inspiration').innerHTML = quotes[randomQuote];
        }
    </script>

</head>
<body onload="newQuote()">

<div class="wrapper">
    <div class="sidebar">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/track3-logo.png" alt="track-three logo" id="logo-t3">
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <p>Information</p>
                <li class="active">
                    <a href="#">
                        <p>Students</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <p>Welcome, Admin!</p>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-8"><span class="dashboard-title">Overview</span></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><span class="dashboard-title">Announcements</span></div>
                        <div class="col-sm">
                            <span class="dashboard-title">Inspiration</span>
                            <br>
                            <i class="fas fa-quote-right red fa-4x"></i>
                            <div id="inspiration"></div>
                            <i class="fas fa-quote-left red fa-4x"></i>
                        </div>
                        <div class="col-sm"><span class="dashboard-title">Upcoming Events</span></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>
