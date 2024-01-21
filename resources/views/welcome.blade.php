@extends('layouts.app')
@section('content')
    <!-- Topbar Start -->
    
</div>
</div>
<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
<div class="col-lg-4 col-6 text-left">
    
    <form action="{{ route('ads.search') }}" method="get">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for products" name="keyword">
            <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<!-- Topbar End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Ads</span></h2>
            <div class="row px-xl-5">

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">


                <!-- filter by -->
<div class="filter-by">
    <button onclick="filter()">Filter by</button>
</div>

<div class ="filter-by-c">
    <label class="labelc" for="category">Category :</label>
    <select class="selectc form-select" name="category" id="category">
      <option value="">All</option>
      <option value="Electronique">Electronique</option>
      <option value="Vêtements">Vêtements</option>
      <option value="Maison">Maison</option>
    </select>
  </div>
  

  <div class ="filter-by-c">
    <label class="labelc" for="location">Location :</label>
    <input class="selectc" id="location" type="text" name="location" placeholder="Enter a location">
  </div>



  <div class="filter-by-c">
    <p  class= "price-r" for="price">Price Range :</p> 
    <label for="price-min">Min:</label>
    <input class="selectc" type="text" id="price-min" name="min" placeholder="min">
    <label for="price-max">Max:</label>
    <input class="selectc" type="text" id="price-max" name="max" placeholder="max">
    <div class="slider-range"></div>
  </div>
  
  
  <!-- <div class ="filter-by-c">
    
    <label class="labelc" for="price">Price Range :</label>   

        <input class="selectc" id="price range" type="text" name="price range" placeholder=" Enter Min-Max Price">
   
  </div> -->
  
  <div class ="filter-by-c">
    <label class="labelc" for="condition">Condition :</label>
    <select class="selectc form-select" id="condition" name="condition">
      <option value="">All</option>
      <option value="new">New</option>
      <option value="good">Good</option>
      <option value="used">Used</option>
    </select>
  </div>

  
  
<!-- End filter by -->
                
            </div>
            @forelse($ads as $key => $row)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('storage/images/'.$row->image) }}" alt="" width=400px height=350px>
                        
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{ $row->title }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$ {{ $row->price }}</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
    <!-- Products End -->
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Warning</h5>
                <p class="mb-4">We will be best, even it will take time</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>HOME</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>POST AD</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>LOGIN</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Don't miss a best opportunity, subscribe now !</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Shopads</a> all rights reserved
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- category script -->

</body>

</html>
@endsection