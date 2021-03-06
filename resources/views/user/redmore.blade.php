
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!--=== font awesome link for search-bar ===-->
    <script src="https://use.fontawesome.com/fbe804dd15.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min) ) + min;
        }

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses', 'Profit'],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), 1000],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)],
            [getRndInteger(1900, 2020).toString(), , getRndInteger(10, 1000), getRndInteger(10, 1000)]

            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)],
            // ['2014', getRndInteger(10, 1000), getRndInteger(10, 1000), getRndInteger(10, 1000)]



          ]);

          var options = {
            chart: {
              title: 'Company Performance',
              subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="loader-active">

    <!--== Preloader Area Start ==
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    == Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">


        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->

                    <div class="col-lg-4">
                        <a href="{{ url('/article')}}" class="logo" >
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>

                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">

                        <nav class="mainmenu alignright" >
                            <ul>
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">Animals</a>
                                    <ul>
                                        <li><a href="{{ url('/reptiles')}}">Reptiles</a></li>
                                        <li><a href="{{ url('/oiseaux')}}">Oiseaux</a></li>
                                        <li><a href="{{ url('/mammifers')}}">Mammifers</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>

                            </ul>


                        </nav>

                        {{-- <div class="search-box">
                            <input class="search-txt" type="text" name="" placeholder="Type to search">
                            <a class="search-btn" href="#">
                            <i class="fas fa-search"></i>
                            </a>
                        </div> --}}
                        <form action="{{ url('/search')}}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="search-box">
                                <input class="search-txt" type="text" name="q" placeholder="Type to search">
                                <a type="submit" class="search-btn">
                                    <img src="assets/img/search.png" alt="JSOFT" width = "20px">
                                </a>

                            </div>

                        </form>


                        <!--==
                        <nav class="mainmenu align-content-between">
                            <form action="">
                                 <input type="text" name="Search" placeholder="Search...">
                            </form>
                            </nav>
                        </div>
                        ==-->

                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Welcome too our ZOO</h2>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->











  <!--== Car List Area Start ==-->
  <section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-8">
                <div class="car-details-content">
                    <h2>{{$anim->Nom}}</h2>




                     <div class="single-car-preview">
                        <img src="{{ url('storage/'.$anim->Photo)}}" width="1000px" height="667px"  alt="JSOFT">
                    </div>


                    <div class="car-details-info blog-content">
                        <div>
                            <audio src="{{ url('storage/'.$anim->Son)}}" controls>
                                no way
                            </audio>
                     </div>





                        <p>
                            {{$anim->Desc}}
                        </p>

                            <?php
                            //echo substr({{$ListAnima->Desc}},0,10);
                            $subnew = substr($anim->Desc,0,100);
                            // echo'<p>'.$subnew.'</p>';
                            echo "<p class='thme-blockquote'>".$subnew."</p>";
                            ?>


                        <div class="review-area">
                            <h3>Write Your Comment</h3>
                            <div class="review-form">
                                <button class="btn btn-info btn-lg  col-md-4" style="float: none;" onclick="window.print();" id="print"><i class="fa fa-file-pdf-o"></i> &nbsp; Imprimer</button>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="name-input">
                                                <input type="text" placeholder="Full Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="email-input">
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="message-input">
                                        <textarea name="review" cols="30" rows="5" placeholder="Message"></textarea>
                                    </div>

                                    <div class="input-submit">
                                        <button type="submit">Comment</button>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->

            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
                <div class="sidebar-content-wrap m-t-50">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>For More Informations</h3>

                        <div class="sidebar-body">

                            <div id="columnchart_material" style="width: 400px; height: 250px;"></div>

                        </div>
                    </div>
                    <!-- Single Sidebar End -->



                    {{-- <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Connect with Us</h3>

                        <div class="sidebar-body">
                            <div class="social-icons text-center">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar End --> --}}
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar" >
                        <h3>video</h3>

                        <div class="sidebar-body"  width = "120px">
                            @php
                            //    echo {{$anim->urlVideo}};
                               echo $anim->urlVideo;
                            @endphp
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
<!--== Car List Area End ==-->













    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                <p>Zizoo est une application permettant de simuler un zoo d'animaux relativement rares.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Zoo">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh!
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Lorem ipsum dolor sit amet
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh!
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            consectetur adipisicing elit?
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Ecole nationale des sciences appliqués Berrechid</li>
                                    <li><i class="fa fa-mobile"></i> 060420963326</li>
                                    <li><i class="fa fa-envelope"></i> Zizoo@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT" width = "120px">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>


