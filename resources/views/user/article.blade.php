
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
                        <a href="index.html" class="logo" >
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
    <div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Articles Start -->
                {{-- <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End --> --}}
                <!-- Single Articles Start -->
                {{-- <form action="{{ url('/search')}}" method="POST" role="search">
                    {{ csrf_field() }}

                        <div class="input-group">

                            <input class="form-control" type="text" name="q" placeholder="Type to search">


                           </span>

                        </div>
                        <button type="submit" class="btn btn-default"> </button>


                    </form> --}}
                    @if (isset($details))

                    @foreach ($details as $ListAnima)

                    <div class="col-lg-12">
                        <article class="single-article middle">
                            <div class="row">

                                <!-- Articles Thumbnail Start -->
                                <div class="col-lg-5 d-xl-none">
                                    <div class="article-thumb">
                                        <img src="{{ url('storage/'.$ListAnima->Photo)}}"  alt="JSOFT">
                                    </div>
                                </div>
                                <!-- Articles Thumbnail End -->

                                <!-- Articles Content Start -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="article-body">
                                                <h3><a href="article-details.html">{{$ListAnima->Nom}}</a></h3>
                                                <div class="article-meta">
                                                    <a href="#" class="author">By :: <span>Admin</span></a>
                                                    <a href="#" class="commnet">Comments :: <span>10</span></a>
                                                </div>

                                                <div class="article-date">25 <span class="month">jan</span></div>




                                                <?php
                                                //echo substr({{$ListAnima->Desc}},0,10);
                                                $subnew = substr($ListAnima->Desc,0,500);
                                            // echo'<p>'.$subnew.'</p>';
                                                echo "<p>".$subnew."</p>";
                                                ?>
                                                <div>
                                                    <audio src="{{ url('storage/'.$ListAnima->Son)}}" controls>
                                                        no way
                                                    </audio>
                                                </div>
                                            {{-- <p>{{$ListAnima->Desc}}</p> --}}

                                            <form action="{{ url('redmore/')}}" method="POST" >
                                                {{ csrf_field() }}

                                                    {{-- <a  class="readmore-btn"  type="submit">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                        Read More <i class="fa fa-long-arrow-right"></i>
                                                        <input id="prodId" name="qq" type="hidden" value="{{$ListAnima->id}}">

                                                    </a> --}}
                                                    <input  name="qq" type="hidden" value="{{$ListAnima->id}}">

                                                    <button class="readmore-btn"  type="submit">
                                                        Read More <i class="fa fa-long-arrow-right"></i>
                                                    </button>



                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Articles Content End -->

                                <!-- Articles Thumbnail Start -->
                                <div class="col-lg-5 d-none d-xl-block">
                                    <div class="article-thumb">
                                        <img src="{{ url('storage/'.$ListAnima->Photo)}}" width="1000px" height="667px"  alt="JSOFT">
                                    </div>
                                </div>
                                <!-- Articles Thumbnail End -->
                            </div>
                        </article>
                    </div>
                    <!-- Single Articles End -->


                    @endforeach

                    @endif

        @if (!isset($details))

            @foreach ($ListAnimal as $ListAnima)

            <div class="col-lg-12">
                <article class="single-article middle">
                    <div class="row">

                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5 d-xl-none">
                            <div class="article-thumb">
                                <img src="{{ url('storage/'.$ListAnima->Photo)}}"  alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->

                        <!-- Articles Content Start -->
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">{{$ListAnima->Nom}}</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                            <a href="#" class="commnet">Comments :: <span>10</span></a>
                                        </div>

                                        <div class="article-date">25 <span class="month">jan</span></div>




                                        <?php
                                        //echo substr({{$ListAnima->Desc}},0,10);
                                        $subnew = substr($ListAnima->Desc,0,500);
                                    // echo'<p>'.$subnew.'</p>';
                                        echo "<p>".$subnew."</p>";
                                        ?>
                                        <div>
                                            <audio src="{{ url('storage/'.$ListAnima->Son)}}" controls>
                                                no way
                                            </audio>
                                        </div>
                                    {{-- <p>{{$ListAnima->Desc}}</p> --}}

                                        <form action="{{ url('redmore/')}}" method="POST" >
                                            {{ csrf_field() }}

                                                {{-- <a  class="readmore-btn"  type="submit">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    Read More <i class="fa fa-long-arrow-right"></i>
                                                    <input id="prodId" name="qq" type="hidden" value="{{$ListAnima->id}}">

                                                </a> --}}
                                                <input  name="qq" type="hidden" value="{{$ListAnima->id}}">

                                                    <button class="readmore-btn"  type="submit">
                                                        Read More <i class="fa fa-long-arrow-right"></i>
                                                    </button>




                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Articles Content End -->

                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5 d-none d-xl-block">
                            <div class="article-thumb">
                                <img src="{{ url('storage/'.$ListAnima->Photo)}}" width="1000px" height="667px"  alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->
                    </div>
                </article>
            </div>
            <!-- Single Articles End -->


            @endforeach
            @endif

<!-- Single Articles End -->

            </div>

            <div class="row">
                <!-- Page Pagination Start -->
                <div class="col-lg-12">
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>
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
