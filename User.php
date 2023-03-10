<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>Home</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<!--  HEADER -->
<header>
<!--start navbar-->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="asset/img/logo.png">
            </a>
            <!--make button... use navbar-toggler for button into information-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#manu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--id use for transfer infromation-->
            <div class="collapse navbar-collapse" id="manu">
                <ul class="navbar-nav">
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Home Rent</a>
                        <ul class="dropdown-menu">
                            <!--sub manu-->
                            <li><a href="flat.php" class="dropdown-item"> Flat</a> </li>
                             <li><a href="sublet.php" class="dropdown-item"> Sublet</a> </li>
                            <li><a href="hostel.php" class="dropdown-item"> Hostel</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">GroundFloor</a>
                        <ul class="dropdown-menu">
                            <!--sub manu-->
                            <li><a href="shop.php" class="dropdown-item"> Shop</a> </li>
                            <li><a href="garage.php" class="dropdown-item"> Garage</a> </li>
                            <li><a href="carparking.php" class="dropdown-item"> Car Parking</a> </li>
                            <li><a href="storehouse.php" class="dropdown-item"> Store House</a> </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">CommercialProperty</a>
                        <ul class="dropdown-menu">
                            <li><a href="partycenter.php" class="dropdown-item"> Party Center</a> </li>
                            <li><a href="conferenceroom.php" class="dropdown-item"> Conference Room</a> </li>
                            <li><a href="conventionhall.php" class="dropdown-item"> Conventional Hall</a> </li>
                            <li><a href="conventionhall.php" class="dropdown-item"> Community Center</a> </li>
                            <li><a href="restaurantcenter.php" class="dropdown-item"> Restaurant Center</a> </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Transportation</a>
                        <ul class="dropdown-menu">
                            <li><a href="bus.php" class="dropdown-item"> Bus</a> </li>
                            <li><a href="car.php" class="dropdown-item"> Car</a> </li>
                            <li><a href="bike.php" class="dropdown-item"> Bike</a> </li>
                            <li><a href="truck.php" class="dropdown-item"> Truck</a> </li>
                            <li><a href="minitruck.php" class="dropdown-item"> Mini Truck</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Decoration</a>
                        <ul class="dropdown-menu">
                            <li><a href="cloth.php" class="dropdown-item"> Clothes</a> </li>
                            <li><a href="ornament.php" class="dropdown-item"> Ornaments</a> </li>
                            <li><a href="" class="dropdown-item"> Others</a> </li>
                        </ul>
                    </li>
                    <li><a href="" class="nav-link">Others</a></li>
                    <li><a href="Advertises.php" class="nav-link">Create Ads</a></li>
                </ul>
                <ul class="navbar-nav ml-auto"
                <li><a href="#ContactPaper" class="nav-link" data-toggle="modal" data-keyboard="false" data-backdrop="static">ContactPaper</a></li><!--data-keyboard="false" data-backdrop="static" use for page cannot move from home page-->
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Name</a>
                    <ul class="dropdown-menu">
                        <li><a href="Profile.php" class="dropdown-item"> Profile</a> </li>
                        <li><a href="index.php" class="dropdown-item"> Logout</a> </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</header>

<!--end navbar-->

<div class="carousel slide" data-ride="carousel" data-interval="1800" id="slider"><!--data-interval="1000" use time duration-->
    <ol class="carousel-indicators"><!--for underline -->
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <!--for changing image-->
    <div class="carousel-inner">
        <div class="carousel-item active"><!--active use for active-->
            <img src="asset/img/home1.jpg" alt="Need image" class="w-100"/><!--class="w-100" use for high pic width-->
            <div class="carousel-caption">
                <h3>Take Rent by One Click</h3>
                <a href="" class="btn btn-success">Show Details....</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="asset/img/truck3.jpg" alt="Need image"class="w-100"/>
            <div class="carousel-caption">
                <h3>Take Rent by One Click</h3>
                <a href="" class="btn btn-success">Show Details....</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="asset/img/home3.jpg" alt="Need image"class="w-100"/>
            <div class="carousel-caption">
                <h3>Take Rent by One Click</h3>
                <a href="" class="btn btn-success">Show Details....</a>
            </div>
        </div>
    </div>
    <!-- use for side icon-->
    <a href="#slider" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"</span>
    </a>
    <a href="#slider" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"</span>
    </a>

</div>
<!--for search button-->
<section class="py-1 bg-dark"><!---->
    <form class="example" action="index.php" style="margin:auto;max-width:800px">
        <h3 style="color: white">Search Your Necessary Things</h3>
        <input type="text" placeholder="Search......" name="searchbtn">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</section>

<section class="py-5 bg-dark"><!---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white">Latest Upload Rent Available</h2>
                <!--<p class="md-4">
                    <span class="text-center border-bottom" style="border-bottom: 5px dotted red;font-size: 35px">
                        Rent Available Find Your Own
                    </span>
                </p>-->
            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>House Rent Available Now</h4>
                        <h5>Location : Mirpur-10</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/home4.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="Product.php" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 20000/month</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>Truck Rent Available Now</h4>
                        <h5>Location : Dhanmondi</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/truck1.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 5000/day</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>1 RoomMate Available Now</h4>
                        <h5>Location : Mirpur-1</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/home2.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 2500/month</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>
            </div>
</section>


<!--for animation small small al product use plugin-->
<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white">Rent Available Find Your Own</h2>
                <!--<p class="md-4">
                    <span class="text-center border-bottom" style="border-bottom: 5px dotted red;font-size: 35px">
                        Rent Available Find Your Own
                    </span>
                </p>-->
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>House Rent Available Now</h4>
                                <h5>Location : Mirpur-2</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/home8.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 15000/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Wedding House Rent Available Now</h4>
                                <h5>Location : Shamoli</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/decoration.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 4500/per</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mini Truck Rent Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/minutruck2.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 2500/day</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Apartment Rent Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/appertment.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 2500/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Wedding House Rent Available Now</h4>
                                <h5>Location : Mirpur-6</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/decoration1.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 4000/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>2 Roommate Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/home2.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 2000/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mini Truck Rent Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/minitruck3.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 3500/day</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>House Rent Available Now</h4>
                                <h5>Location :  Mirpur-1</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/home6.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 25000/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mini Truck Rent Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/minitruck.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 2700/day</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>House Rent Available Now</h4>
                                <h5>Location : Mirpur</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/home8.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 17500/month</a>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h4>Wedding House Rent Available Now</h4>
                                <h5>Location : Dhanmondi</h5>
                            </div>
                            <div class="card-body">
                                <img src="asset/img/decoration1.jpg">
                                <a href="" class="btn btn-outline-success">Show Details....</a>
                                <a href="" class="btn btn-outline-dark">Taka 7000/day</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--modal use for click...modal fade use for show into click -->
<div class="modal fade" id="ContactPaper">
    <div class="modal-dialog modal-lg"><!--modal size manual-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="imgcontainer">
                    <img src="asset/img/logo.png"
                         alt="Avatar" class="avatar">
                </div>
                <h2>Contact Paper</h2>
                <!--Step 1 : Adding HTML-->
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="col-form-label">User Name</label>
                            <input type="text" name="U_name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">User Id</label>
                            <input type="text" name="U_id" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Lesse_Name</label>
                            <input type="text" name="L_name" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Lesse_Nid_Image</label>
                            <input type="file" name="L_nid_image" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Add Lesse_Id</label>
                            <input type="text" name="L_id" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Rent Amount</label>
                            <input type="number" name="R_amount" class="form-control"required/>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label"> Address</label>
                            <input type="text" name="U_address" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Contact Date</label>
                            <input type="date" name="C_date" class="form-control"required/>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label"></label>
                            <input type="submit" name="btn" class="btn btn-outline-success" value="Make Aggrement"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<footer>
    <section class="footer-widget-area footer-widget-area-bg bg-dark">
        <div class="container-fluid text-center ">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                        <div class="sidebar-widget-wrapper">
                            <div class="footer-widget-header clearfix">
                                <h3 style="color: white">Powered by</h3>
                            </div>
                            <p></p>
                            <div class="footer-subscription">
                                <li><a href=""><img src="asset/img/logo.png"></a></li>
                            </div>
                        </div>
                    </div>

                </div> <!--  end .col-md-4 col-sm-12 -->

                <div class="col-md-4 col-sm-12 col-xs-12 ml-auto">
                    <div class="footer-widget clearfix">
                        <div class="sidebar-widget-wrapper">
                            <div class="footer-widget-header clearfix">
                                <h3 style="color: white">Contact Us</h3>
                            </div>  <!--  end .footer-widget-header -->
                            <ul class="footer-useful-links">
                                <li>
                                    <div class="textwidget">
                                        <i class="fa fa-envelope-o fa-contact bg-white"></i><a href=""<h6 style="color: white">onlinerentsystem@gmail.com</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="textwidget">
                                        <i class="fa fa-facebook fa-contact bg-white"></i><a href=""<h6 style="color: white">onlinerentsystem.facebook.com</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="textwidget">
                                        <i class=" fa-contact bg-white"></i><a href=""<h6 style="color: white">About Us</h6></a>
                                    </div>
                                </li>

                            </ul>

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .col-md-4 col-sm-12 -->

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .footer-widget-area  -->

    <!--FOOTER CONTENT  -->
    <!--  end .footer-content  -->

</footer>


<script src="asset/js/jquery-3.5.1.js"></script>
<script src="asset/js/owl.carousel.js"></script>
<script src="asset/js/bootstrap.bundle.js"></script>
<script src="asset/js/bootstrap.js"></script>
<!--plugin intialization-->
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            <!-- responsive 0-600px screen show 1 in animantion 600-999px screen show 3 in animantion-->
            responsive: {
                0: {
                    items: 1,
                    <!-- nav: true-->
                },
                600: {
                    items: 3,
                    <!--nav: false-->
                },
                1000: {
                    items: 4,
                    <!--nav: true,-->
                    <!--loop: false,-->
                    margin: 20
                }
            }
        });

    })
</script>
</body>
</html>
