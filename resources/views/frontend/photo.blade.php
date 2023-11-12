
@section('page_title', 'Photo Gallery- Ministry of Sanitation & Water Resources')


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


 

   <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Photo Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->






 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="fs-5 fw-bold text-primary">Photo Gallery</h3>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/t.jpg ') }}" alt="">
                        <div class="portfolio-text">
                          
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/t.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/p.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Pruning plants</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/p.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/g.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Irrigation & Drainage</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/g.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/l.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Garden Maintenance</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/l.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                              
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/a.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Green Technology</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/a.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/0.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Urban Gardening</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/0.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                              
                            </div>
                        </div>
                    </div>
                </div>


                          <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/l.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Garden Maintenance</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/l.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                              
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/a.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Green Technology</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/a.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/0.jpg ') }}" alt="">
                        <div class="portfolio-text">
                            {{-- <h4 class="text-white mb-4">Urban Gardening</h4> --}}
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{asset('frontend/assets/img/0.jpg ') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                              
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>




    
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
    <script src="{{asset('frontend/assets/js/main.js ') }}"></script>
</body>

</html>