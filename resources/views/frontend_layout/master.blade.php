<!DOCTYPE html>
<html lang="en">

<head>
        @include('frontend_layout.body.css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
          @include('frontend_layout.body.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
     @include('frontend_layout.body.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
        @yield('content')
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h3>Let's clean Ghana</h3>
                                <h4>Sesa wo suban</h4>
                                <span>(Change your habit)</span>
                                <h5>Play Your Part</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone-alt text-success fa-2x"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Whatsapp Line for Reporting Dumping of Waste Illegally</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-success"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <p></p>
                                 <h5>020-246-4444</h5>
                                <h5>020-246-4411</h5>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
            
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{asset('frontend/assets/img/min.jpg ' ) }}" class="img-fluid w-100 rounded"  alt="">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-success">Our Goal</h3>
                        <h1 class="mb-4">Ministry of Sanitation & Water Resources</h1>
                    <p class="mb-4">Our goal is to contribute to improvement in the living standards of Ghanaians through increased access to and use of safe water, sanitation and hygiene practices and sustainable management of water resources. 
                    The Ministry derives its core mandate primarily from article 190 of the 1992 constitution of the Republic of Ghana.</p>
                    <a class="btn btn-primary py-3 px-4" href="{{ route('home.about')}}">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3"> Vision</h4>
                                <span>Sustainable water and environmental sanitation for all</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Political Leadership</h4>
                                <span>The Ministry is headed by a Minister and supported by one Deputy Minister who provide political leadership.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                 <h2 class="text-success">The Ministers</h2>
                <h5 class="display-7 mb-5">Dedicated & Experienced Team Leaders</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/team-1.jpg ') }}" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Hon. Dr. Freda Prempeh</h4>
                            <p class="text-primary">Minister of Sanitation and Water Resources</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/team-2.jpg ') }}" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">HON. Amidu Issahaku Chinnia</h4>
                            <p class="text-primary">Deputy Minister of Sanitation and Water Resources</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/team-3.jpg ') }}" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">MR. Noah Tumfo</h4>
                            <p class="text-primary">Chief Director</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Facts Start -->
       <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{asset('frontend/assets/img/carousel-1.jpg') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle=""></h1>
                    <span class="fs-5 fw-semi-bold text-light"></span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Project Completed</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle=""></h1>
                    <span class="fs-5 fw-semi-bold text-light"></span>
                </div>
            </div>
        </div>
    </div>>
    <!-- Facts End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                      <h2 class="text-success">Our Blog</h2>
                <h5 class="display-7 mb-5">Latest Blog & News</h5>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{asset('frontend/assets/img/blog-1.jpg ') }}" class="img-fluid w-100 rounded-top" alt="">
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-success px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-success px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{asset('frontend/assets/img/admin.jpg ') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">24 March 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{asset('frontend/assets/img/blog-2.jpg ') }}" class="img-fluid w-100 rounded-top" alt="">
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-success px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-success px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{asset('frontend/assets/img/admin.jpg ') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">23 April 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{asset('frontend/assets/img/blog-3.jpg ') }}" class="img-fluid w-100 rounded-top" alt="">
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-success px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-success px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{asset('frontend/assets/img/admin.jpg ') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">30 jan 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
 


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                 <h3 class="text-success">Events Calendar</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-1.jpg ') }}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('frontend/assets/img/icon/icon-3.png ') }}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Upcoming Events</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-2.jpg ') }}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('frontend/assets/img/icon/icon-6.png ') }}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Ongoing Events</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-3.jpg ') }}" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{asset('frontend/assets/img/icon/icon-5.png ') }}" alt="Icon">
                            </div>
                            <h4 class="mb-3">Past Events</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
         
              
            </div>
        </div>
    </div>
    <!-- Service End -->



  <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                  <h2 class="text-success">Our Projects</h2>
                <h5 class="display-7 mb-5">Some Of Our Wonderful Projects</h5>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/green.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Sanitation</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/green.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/waste.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Solid Waste</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/waste.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/liquid.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Liquid Waste</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/liquid.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/resource.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Water Resource Management</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/resource.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/service-2.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Urban Water</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/service-2.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/rural.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Rural Water</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/rural.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- Projects End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimonial</p>
                    <h3 class="display-6 mb-5">What Our Clients Say About Us!</h3>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                    <a class="btn btn-primary py-3 px-4" href="">See More</a>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="{{asset('frontend/assets/img/testimonial-1.jpg ') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="{{asset('frontend/assets/img/testimonial-2.jpg ') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

{{--  --}}

 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="text-success">Agencies</h3>
           
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('frontend/assets/img/gwcl.png') }}" alt="">
                     
                        <span class="text-primary">Water Resources Commission (WRC)</span>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('frontend/assets/img/wrc.png') }}" alt="">
                       
                        <span class="text-primary">Ghana Water Company Limited (GWCL)</span>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('frontend/assets/img/cw-sa.jpg') }}" alt="">
                        
                        <span class="text-primary">Community Water and Sanitation Agency (CWSA)</span>
                   
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('frontend/assets/img/soh-ho.jpg') }}" alt="">
                    
                        <span class="text-primary">School of Hygiene, Accra</span>
                    
                    </div>
                </div>

                 {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('frontend/assets/img/soh-accra.jpg') }}" alt="">
                    
                        <span class="text-primary">Digital Marketer</span>
                    
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

{{--  --}}


    <!-- Footer Start -->
          @include('frontend_layout.body.footer')
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/parallax/parallax.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/isotope/isotope.pkgd.min.js ') }}"></script>
    <script src="{{asset('frontend/assets/lib/lightbox/js/lightbox.min.js ') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>