<!doctype html>
<html lang="pt-br">

<head>
   
<? include(''.$_SESSION['template'].'css.php');?>

    <!-- Custom styles for this template -->
	
<link href="<? echo $_SESSION['template'];?>assets/css/style-skyblue.css" rel="stylesheet" id="style">
</head>

<body class="ui-rounded">
    <!-- Page laoder -->
    <div class="container-fluid pageloader">
        <div class="row h-100">
            <div class="col-12 align-self-start text-center">
            </div>
            <div class="col-12 align-self-center text-center">
                <div class="loader-logo">
                    <div class="logo"><span></span><span></span>
                        <div class="loader-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 align-self-end text-center">
                <p class="my-5">Por favor, aguarde<br><small class="text-mute">Um mundo está carregando ...</small></p>
            </div>
        </div>
    </div>
    <!-- Page laoder ends -->

    <!-- Fixed navbar -->
    <header class="header fixed-top header-fill">
        <nav class="navbar">
            <div>
                <button class="menu-btn btn btn-link btn-44">
                    <span class="icon material-icons">menu</span>
                </button>
            </div>
            <div>
                <a class="navbar-brand" href="/?h=inicio">
                    <div class="logo"><span></span><span></span></div>
                    <h4 class="logo-text"><img style="height:50px" src="<? echo $_SESSION['template'];?>images/logo.png" alt="logo"><span></span><small></small></h4>
                </a>
            </div>
            <div>
                <a href="cart.html" class="btn btn-link" type="button"><span aria-hidden="true" class="h5 icon_cart_alt"></span><span class="status-dot bg-danger"></span></a>
                <a href="profile.html" class=""><span class="avatar avatar-30"><img src="assets/img/user1.png" alt=""></span></a>
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->

    <!-- sidebar -->
    <? include(''.$_SESSION['template'].'/menu.php');?>
    <!-- sidebar ends -->

    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid h-300 position-relative overflow-hidden bg-default">
                    <div class="background opac">
                        <img src="<? echo $_SESSION['template'];?>assets/img/team2.jpg" alt="">
                    </div>
                </div>
                <div class="container mb-4 top-150 position-relative z-1">
                    <h4 class="text-white mb-3 text-center">Do you feel sick?<br>
                        <span class="text-mute small mt-2">Find doctors around</span>
                    </h4>
                    <div class="card border-0 shadow-light">
                        <div class="card-body">
                            <input type="text" class="form-control form-control-lg mb-3" placeholder="Search here...">

                            <button class="btn btn-sm btn-outline-default my-1">Heart</button>
                            <button class="btn btn-sm btn-outline-default my-1">Brain</button>
                            <button class="btn btn-sm btn-outline-default my-1">Kidney</button>
                        </div>
                    </div>
                </div>

                <div class="container mb-4">
                    <div class="swiper-container swiper-offers">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide w-auto py-2 pr-2">
                                <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                                    <div class="background background-h-100">
                                        <img src="assets/img/child.png" alt="">
                                    </div>
                                    <div class="card-body pt-5">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-weight-bold">Child Doctors</h5>
                                                <p class="mb-2 text-mute">55 in 5 miles</p>
                                                <a href="doctors.html" class="btn btn-sm btn-default text-white">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide w-auto py-2 pr-2">
                                <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                                    <div class="background background-h-100">
                                        <img src="assets/img/brain.png" alt="">
                                    </div>
                                    <div class="card-body pt-5">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-weight-bold">Brain Doctors</h5>
                                                <p class="mb-2 text-mute">100 in 15 miles</p>
                                                <a href="doctors.html" class="btn btn-sm btn-default text-white">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide w-auto py-2 pr-2">
                                <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                                    <div class="background background-h-100">
                                        <img src="assets/img/lab.png" alt="">
                                    </div>
                                    <div class="card-body pt-5">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-weight-bold">Lab Testings</h5>
                                                <p class="mb-2 text-mute">15 in 43 miles</p>
                                                <a href="doctors.html" class="btn btn-sm btn-default text-white">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-3">
                    <h6 class="page-subtitle">Upcoming Apointmnets</h6>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Simran Andora <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                            <p class="small text-mute">2:25pm on 10<sup>th</sup> August 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user3.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Joe Johnson <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.95</span></small></h6>
                                            <p class="small text-mute">4:30pm on 11<sup>th</sup> August 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <h6 class="page-subtitle">Near Hospitals</h6>
                    <div class="row ">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="icons icon-60 bg-light-danger mr-3">
                                            <i class="material-icons text-danger">medical_services</i>
                                        </span>
                                        <div class="media-body">
                                            <h5 class="mb-1 mt-2">Harrwardo Hospital</h5>
                                            <p class="small text-mute">E-250, African street area, NY</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="small text-mute">2 km</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                            <span class="material-icons vm">alarm </span>
                                        </div>
                                        <div class="col align-self-center">
                                            <p class="mb-0">24x7 <span class="small text-mute">(Sunday - Saturaday)</span></p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-default text-white">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="icons icon-60 bg-light-danger mr-3">
                                            <i class="material-icons text-danger">medical_services</i>
                                        </span>
                                        <div class="media-body">
                                            <h5 class="mb-1 mt-2">Jansatta Clinic</h5>
                                            <p class="small text-mute">D-250, American street area, NY</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="small text-mute">3 km</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                            <span class="material-icons vm">alarm </span>
                                        </div>
                                        <div class="col align-self-center">
                                            <p class="mb-0">24x7 <span class="small text-mute">(Sunday - Saturaday)</span></p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-default text-white">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-3">
                    <h6 class="page-subtitle">Community Updates</h6>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="card shadow-light mb-4 position-relative overflow-hidden text-white border-0 bg-dark">
                                <div class="background opac">
                                    <img src="assets/img/login.jpg" alt="" style="display: none;">
                                </div>
                                <div class="card-header border-0 bg-none">
                                    <div class="media">
                                        <div class="icons icon-circle icon-40 bg-danger text-white mr-2">
                                            <i class="material-icons vm">videocam</i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0">Live now</h6>
                                            <p class="small mb-0">265 Member</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center z-1 h-50px">

                                </div>
                                <div class="card-footer border-0 z-1">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-2">
                                            <img src="assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Mariyam</h6>
                                            <p class="mb-0 text-mute small">7-11-2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="card shadow-light mb-4 position-relative overflow-hidden text-white border-0 bg-dark">
                                <div class="background opac">
                                    <img src="assets/img/savemoneytime.jpg" alt="" style="display: none;">
                                </div>
                                <div class="card-header border-0 bg-none">
                                    <div class="media">
                                        <div class="icons icon-circle icon-40 bg-danger text-white mr-2">
                                            <i class="material-icons vm">videocam</i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0">Live now</h6>
                                            <p class="small mb-0">232 Member</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center z-1 h-50px">

                                </div>
                                <div class="card-footer border-0 z-1">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-2">
                                            <img src="assets/img/user3.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Himmant</h6>
                                            <p class="mb-0 text-mute small">7-11-2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <figure class="m-0 h-150 w-100 card position-relative overflow-hidden">
                                        <div class="background">
                                            <img src="assets/img/team4.jpg" alt="">
                                        </div>
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-2"><a href="#">Awesome people create awesome things</a></p>
                                    <p class="small text-mute">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <figure class="m-0 h-150 w-100 card position-relative overflow-hidden">
                                        <div class="background">
                                            <img src="assets/img/team5.jpg" alt="">
                                        </div>
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-2"><a href="#">Creative people create creative things</a></p>
                                    <p class="small text-mute">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <h6 class="page-subtitle">Product from Ayurveda</h6>
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card border-0 shadow-light text-center mb-3 overflow-hidden">
                                <div class="card-body position-relative p-0">
                                    <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>
                                    <a href="productdetails.html" class="h-150 position-relative overflow-hidden d-block">
                                        <div class="background">
                                            <img src="assets/img/ayurved.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-default">Ayuved Siri <small>(100 ml)</small></h6>
                                    <p class="small"><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span> 4.6</p>
                                    <div class="row">
                                        <div class="col text-left">
                                            <p class="text-success my-0">$ 20.00</p>
                                        </div>
                                        <div class="col-auto"><a href="cart.html" class="btn btn-sm btn-link text-default p-0"><i class="material-icons">shopping_basket</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card border-0 shadow-light text-center mb-3 overflow-hidden">
                                <div class="card-body position-relative p-0">
                                    <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>
                                    <a href="productdetails.html" class="h-150 position-relative overflow-hidden d-block">
                                        <div class="background">
                                            <img src="assets/img/ayurved.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-default">JiNatural <small>(100 ml)</small></h6>
                                    <p class="small"><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span> 4.6</p>
                                    <div class="row">
                                        <div class="col text-left">
                                            <p class="text-success my-0">$ 20.00</p>
                                        </div>
                                        <div class="col-auto"><a href="cart.html" class="btn btn-sm btn-link text-default p-0"><i class="material-icons">shopping_basket</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                <div class="container-fluid pt-3 mb-4 bg-white border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <select class="form-control">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option selected>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-control">
                                <option>Week 1</option>
                                <option>Week 2</option>
                                <option selected>Week 3</option>
                                <option>Week 4</option>
                                <option>Week 5</option>
                            </select>
                        </div>
                    </div>

                    <!-- Swiper -->
                    <div class="swiper-container swiper-stories">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">18</h5>
                                        <p class="mb-0 text-mute"><small>Mon</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm bg-default text-white date">
                                    <div class="card-body">
                                        <h5 class="my-0">19 <span class="status-dot bg-warning"></span></h5>
                                        <p class="mb-0 text-mute"><small>Tue</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">20</h5>
                                        <p class="mb-0 text-mute"><small>Wed</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">21 <span class="status-dot bg-warning"></span></h5>
                                        <p class="mb-0 text-mute"><small>Thu</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">22 <span class="status-dot bg-warning"></span></h5>
                                        <p class="mb-0 text-mute"><small>Fri</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">23</h5>
                                        <p class="mb-0 text-mute"><small>Sat</small></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide w-auto py-3 px-1">
                                <a class="card shadow-sm date">
                                    <div class="card-body">
                                        <h5 class="my-0">24</h5>
                                        <p class="mb-0 text-mute"><small>Sun</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-4">
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="assets/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Dr. Simran Andora <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                    <p class="small text-mute mb-0">2179 Eagle Lane, New York, 10171</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="row ">
                                <div class="col-auto pr-0 align-self-center">
                                    <span class="material-icons vm">alarm </span>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-0">2:25pm - 3:30pm</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <a class="btn btn-sm btn-outline-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card  border-0 shadow-sm mb-3">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="assets/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Dr. Joe Johnson <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.95</span></small></h6>
                                    <p class="small text-mute mb-0">2179 Eagle Lane, New York, 10171</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="row ">
                                <div class="col-auto pr-0 align-self-center">
                                    <span class="material-icons vm">alarm </span>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-0">2:25pm - 3:30pm</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <a class="btn btn-sm btn-outline-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="assets/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Dr. Simran Andora <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                    <p class="small text-mute mb-0">2179 Eagle Lane, New York, 10171</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="row ">
                                <div class="col-auto pr-0 align-self-center">
                                    <span class="material-icons vm">alarm </span>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-0">2:25pm - 3:30pm</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <a class="btn btn-sm btn-outline-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card  border-0 shadow-sm mb-3">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="assets/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Dr. Joe Johnson <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.95</span></small></h6>
                                    <p class="small text-mute mb-0">2179 Eagle Lane, New York, 10171</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="row ">
                                <div class="col-auto pr-0 align-self-center">
                                    <span class="material-icons vm">alarm </span>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-0">2:25pm - 3:30pm</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <a class="btn btn-sm btn-outline-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="deases" role="tabpanel" aria-labelledby="deases-tab">
                <div class="container-fluid h-200 position-relative overflow-hidden bg-default">
                    <div class="background opac">
                        <img src="assets/img/team2.jpg" alt="">
                    </div>
                </div>
                <div class="container-fluid mb-4 top-150 position-relative z-1 text-center">
                    <h4 class="text-white mb-4">Take self assessment<br>
                        <span class="text-mute small mt-2">Book Apointment</span>
                    </h4>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/brains.png" alt="" class="vm">
                            </a>
                            <p>Brain</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/heart.png" alt="" class="vm">
                            </a>
                            <p>Heart</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/kedney.png" alt="" class="vm">
                            </a>
                            <p>Kidenys</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/stomach.png" alt="" class="vm">
                            </a>
                            <p>Stomach</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/eye.png" alt="" class="vm">
                            </a>
                            <p>Eyes</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/lungs.png" alt="" class="vm">
                            </a>
                            <p>Lungs</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/liver.png" alt="" class="vm">
                            </a>
                            <p>Liver</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/bones.png" alt="" class="vm">
                            </a>
                            <p>Bones</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="assets/img/intestines.png" alt="" class="vm">
                            </a>
                            <p>Intestines</p>
                        </div>
                    </div>
                    <br>
                    <a href="assessment.html" class="btn btn-outline-default">Other</a>
                </div>
            </div>
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                <div class="container-fluid bg-default pt-3">
                    <div class="row position-relative">
                        <!-- use hn-60 if there is no page specific name required as below and remove below container -->
                        <div class="container align-self-end">
                            <ul class="nav nav-tabs nav-fill justift-content-center border-0" id="myTab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="chat2-tab" data-toggle="tab" href="#chat2" role="tab" aria-controls="chat2" aria-selected="true">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="call-tab" data-toggle="tab" href="#call" role="tab" aria-controls="call" aria-selected="false">Call</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTab1Content">
                    <div class="tab-pane fade show active" id="chat2" role="tabpanel" aria-labelledby="chat2-tab">
                        <div class="list-group list-group-flush my-0">
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mrs. Magon Johnson <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">"Thank you for your purchase"</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">GodFathers <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Hello How are you?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Max home <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">That was amazing article</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mr. Hulk <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Nice to see you again</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Ms. Happylime <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Thank you so much for this.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mrs. Magon Johnson <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">"Thank you for your purchase"</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">GodFathers <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Hello How are you?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Max home <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">That was amazing article</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mr. Hulk <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Nice to see you again</p>
                                    </div>
                                </div>
                            </a>
                            <a href="chat.html" class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Ms. Happylime <span class="float-right text-secondary text-mute small">12:55 AM</span></h6>
                                        <p class="small text-mute">Thank you so much for this.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
                        <div class="list-group list-group-flush my-0">
                            <div class="list-group-item">
                                <div class="row">
                                    <a class="col-auto" data-toggle="modal" data-target="#statusmodal">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </a>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">My status</h6>
                                        <p class="small text-mute">2 min ago</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-link px-2 text-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Share</a>
                                                <a class="dropdown-item" href="#">Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-light text-center py-2 text-mute">Recent Status</div>
                            <a class="list-group-item" data-toggle="modal" data-target="#statusmodal">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">GodFathers</h6>
                                        <p class="small text-mute">3 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item" data-toggle="modal" data-target="#statusmodal">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Max home</h6>
                                        <p class="small text-mute">10 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item" data-toggle="modal" data-target="#statusmodal">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mr. Hulk</h6>
                                        <p class="small text-mute">18 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item" data-toggle="modal" data-target="#statusmodal">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Ms. Happylime</h6>
                                        <p class="small text-mute">20 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <div class="list-group-item bg-light text-center py-2 text-mute">Viewed Status</div>
                            <a class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mrs. Magon Johnson</h6>
                                        <p class="small text-mute">23 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">GodFathers</h6>
                                        <p class="small text-mute">53 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Max home</h6>
                                        <p class="small text-mute">55 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mr. Hulk</h6>
                                        <p class="small text-mute">58 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Ms. Happylime</h6>
                                        <p class="small text-mute">59 min ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="call" role="tabpanel" aria-labelledby="call-tab">
                        <div class="list-group list-group-flush my-0">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">GodFathers</h6>
                                        <p class="small text-mute"><i class="h6  my-0 material-icons text-success vm">call_made</i> 3 min ago</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Max home</h6>
                                        <p class="small text-mute"><i class="h6  my-0 material-icons text-success vm">call_received</i> 10 min ago</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Mr. Hulk</h6>
                                        <p class="small text-mute"><i class="h6  my-0 material-icons text-danger vm">call_received</i> 18 min ago</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-40">
                                            <img src="assets/img/user2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col pl-0 align-self-center">
                                        <h6 class="mb-1 font-weight-normal">Ms. Happylime</h6>
                                        <p class="small text-mute"><i class="h6  my-0 material-icons text-success vm">call_made</i> 20 min ago</p>
                                    </div>
                                    <div class="col-auto pl-0">
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container mb-4">
                    <h6 class="page-subtitle">Emergency Contacts</h6>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Simran Andora <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                            <p class="small text-mute">2179 Eagle Lane, New York, 10171</p>
                                        </div>
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user3.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Dr. Joe Johnson <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.95</span></small></h6>
                                            <p class="small text-mute">2179 Eagle Lane, New York, 10171</p>
                                        </div>
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h6 class="page-subtitle">Family Contacts</h6>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user5.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Anju Vohra <small class="ml-2">Cousin</small></h6>
                                            <p class="small text-mute">E-250, African street area, NY</p>
                                        </div>
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="assets/img/user1.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Shivalica Johnson <small class="ml-2">Mother</small></h6>
                                            <p class="small text-mute">2179 Eagle Lane, New York, 10171</p>
                                        </div>
                                        <button class="btn btn-link btn-44 shadow btn-default" data-toggle="modal" data-target="#callmodal"><i class="material-icons">call</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="toast bottom-right position-fixed mb-5" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            <div class="toast-header">
                <div class="avatar avatar-20 mr-2">
                    <div class="background">
                        <img src="assets/img/team3.jpg" class="rounded mr-2" alt="...">
                    </div>
                </div>
                <strong class="mr-auto">Maxartkiller</strong>
                <small>Just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, Welcome to our website.
            </div>
        </div>


    </main>
    <!-- End of page content -->

    <!-- sticky footer tabs -->
    <div class="footer-tabs border-top text-center">
        <ul class="nav nav-tabs nav-fill justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="h4 icon_house_alt"></i>
                    <small class="sr-only">Home</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                    <i class="h4 icon_calendar"></i>
                    <small class="sr-only">Appointment</small>
                </a>
            </li>
            <li class="nav-item centerlarge">
                <a class="nav-link bg-default d-inline-block" data-toggle="tab" href="#deases" role="tab" aria-controls="deases" aria-selected="false">
                    <i class="h4 icon_shield mt-1"></i>
                    <small class="sr-only">Self Assessment</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                    <i class="h4 icon_mail_alt"></i>
                    <small class="sr-only">Messages</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="h4 icon_lifesaver mt-1"></i>
                    <small class="sr-only">Emergency Contacts</small>
                </a>
            </li>
        </ul>
    </div>
    <!-- sticky footer tabs ends -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->



    <!-- status modal -->
    <div class="modal" tabindex="-1" role="dialog" id="statusmodal">
        <div class="modal-dialog vh-100 my-0 mx-auto" role="document">
            <div class="modal-content h-100 border-0 bg-dark text-white rounded-0">
                <div class="progress m-2 h-3">
                    <div class="progress-bar statusbar" role="progressbar"></div>
                </div>
                <div class="modal-header border-0 py-2" data-dismiss="modal" aria-label="Close">
                    <div class="media w-100">
                        <figure class="avatar avatar-40 mr-2">
                            <img src="assets/img/user5.png" alt="Generic placeholder image">
                        </figure>
                        <div class="media-body">
                            <h6 class="mb-1">Mariyam Saxena</h6>
                            <p class="mb-0 text-mute small">7-11-2018 | Public</p>
                        </div>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="h-100 w-100">
                                <img src="assets/img/team6.jpg" alt="" class="mw-100 vm">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    Awesome click posted
                </div>
            </div>
        </div>
    </div>
    <!-- status modal ends -->

    <!-- call modal -->
    <div class="modal" tabindex="-1" role="dialog" id="callmodal" aria-hidden="true">
        <div class="modal-dialog vh-100 m-0 mw-100" role="document">
            <div class="modal-content h-100 border-0 bg-default text-white blur rounded-0">
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="avatar avatar-150 mb-4">
                                <img src="assets/img/team5.jpg" alt="" class="mw-100 vm">
                            </figure>

                            <h4 class="font-weight-normal">Angelina Mosaic</h4>
                            <p class="text-mute">+0019541858931542</p>
                            <p class="lead">00:30</p>

                            <div class="row justify-content-center">
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">volume_up</i></button>
                                </div>
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">videocam</i></button>
                                </div>
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">mic_none</i></button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    <button class="btn btn-danger text-white btncallmodal" data-dismiss="modal" aria-label="Close"><i class="material-icons">call</i> End Call</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Call modal ends -->

    <!-- Required jquery and libraries -->
    <? include(''.$_SESSION['template'].'scripts.php');?>
</body>

</html>