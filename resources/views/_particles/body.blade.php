@extends('app')

@section('gymcontent')
<section class="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" data-interval="10000">
            <div class="carousel-item active bg-gradient-blue">
            <img src="" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item bg-gradient-danger" data-interval="10000">
            <img src="" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item bg-gradient-success" data-interval="10000">
            <img src="" class="d-block w-100" alt="..." height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container py-6 py-md-7 text-white search-banner">
        <div class="row">
          <div class="col-xl-10">
            <div class="text-center text-lg-left">
              <p class="subtitle letter-spacing-4 mb-2 text-shadow" style="color: white;">The best fitness experience</p>
              <h1 class="display-3 font-weight-bold text-shadow">Lorem ipsum</h1>
            </div>
            <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
              <form action="#">
                <div class="row">
                  <div class="col-lg-4 d-flex align-items-center form-group">
                    <input type="text" name="search" placeholder="What are you searching for?" class="form-control border-0 shadow-0">
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group">
                    <div class="input-label-absolute input-label-absolute-right w-100">
                      <label for="location" class="label-absolute"><i class="fa fa-crosshairs"></i><span class="sr-only">City</span></label>
                      <input type="text" name="location" placeholder="Location" id="location" class="form-control border-0 shadow-0">
                    </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                    <div class="dropdown bootstrap-select">
                    <select title="Categories" data-style="btn-form-control" class="selectpicker" tabindex="-98">
                        <option class="bs-title-option" value=""></option>
                        <option value="small">Restaurants</option>
                        <option value="medium">Hotels</option>
                        <option value="large">Cafes</option>
                        <option value="x-large">Garages</option>
                    </select>
                    <button type="button" class="btn dropdown-toggle bs-placeholder btn-form-control" data-toggle="dropdown" role="button" title="Categories">
                        <div class="filter-option">
                            <div class="filter-option-inner">
                                <div class="filter-option-inner-inner text-muted">Categories</div>
                            </div>
                        </div>
                    </button>
                    
                    <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                    <div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 96.4px; overflow-y: auto; min-height: 137px;">
                        <ul class="dropdown-menu inner show">
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Restaurants</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Hotels</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Cafes</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Garages</span></a></li>
                        </ul>
                    </div>
                        <!-- <ul class="dropdown-menu inner show">
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Restaurants</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Hotels</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Cafes</span></a></li>
                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Garages</span></a></li>
                        </ul> -->
                    </div>
                    </div></div>
                  </div>
                  <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary btn-block rounded-xl h-100">Search </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- <div class="banner-caption">
        <h1>Hello Fittstop</h1>
        <h3>Lorem ipsum dolor sit amet.</h3>
    </div> -->
</section>


    <!-- <section class="search-sec">
        <div class="container">
            <form action="#" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 p-0">
                                <select class="form-control search-slt" id="selectcity">
                                    <option>Select City</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                    <option>Example one</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-9 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Search">
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3 p-0">
                                <button type="button" class="btn btn-danger wrn-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section> -->
    <section class="about">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="text-center mb-4">About <b>Fittstop</b></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus corrupti ipsum consectetur temporibus optio. Ab assumenda eum consequatur commodi, impedit suscipit molestiae animi quam harum, quo voluptas voluptatum tempore laudantium!</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="./site_assets/images/slide1.jpg" alt="" class="img-fluid shadow">
                </div>
            </div>
        </div>
    </section>


    <!-- START BOOKING SECTION -->
    <section class="py-5 bg-gray-100 mt-4">
      <div class="container">
        <div class="text-center pb-lg-4 mt-5">
          <p class="subtitle text-secondary">One-of-a-kind Platform </p>
          <h2 class="mb-5 main-sec-title">Booking with us is easy</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <img src="./site_assets/images/icon.png" alt="" srcset="">
              </div>
              <h3 class="h5">Lorem ipsum</h3>
              <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque a ipsum totam eius labore ratione sed.</p>
            </div>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <img src="./site_assets/images/icon.png" alt="">
                </svg>
              </div>
              <h3 class="h5">Lorem ipsum</h3>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum alias maxime ullam, debitis labore dolorum!</p>
            </div>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="px-0 px-lg-3">
              <div class="icon-rounded bg-primary-light mb-3">
                <img src="./site_assets/images/icon.png" alt="">
              </div>
              <h3 class="h5">Lorem ipsum.</h3>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, repellendus ipsum voluptate iusto eaque ex in. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END BOOKING SECTION -->



    <!-- new explore -->
    <section>
        <div class="container">
            <div class="row mt-5 mb-5 text-center">
                <div class="col-sm-12">
                <h1 class="mb-4 main-sec-title">Explore</h1>
                    <p>Fitness activities, studios, gyms, trainers and healthy food options</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow" style="width: 20rem;">
                        <img src="./site_assets/images/abc.jpg" alt="" height="500">
                        <div class="card-body overlay-content">
                            <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                            <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-12 col-md-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow " style="width: 20rem;">
                            <img src="./site_assets/images/abc.jpg" alt="" height="500">
                            <div class="card-body overlay-content">
                                <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                                <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                            </div>
                        </div>
                </div> 
                <div class="col-sm-12 col-md-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow" style="width: 20rem;">
                            <img src="./site_assets/images/abc.jpg" alt="" height="500">
                            <div class="card-body overlay-content">
                                <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                                <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                            </div>
                        </div>
                </div> 

            

                
            </div>
        </div>
    </section>
    <!-- end new explore -->

    <!-- <section class="explore">
        <div class="container">
            <div class="row mt-5 text-center mb-5">
                <div class="col-sm-12 mt-5 text-center">
                    <h1 class="mb-4 main-sec-title">Explore</h1>
                    <p>Fitness activities, studios, gyms, trainers and healthy food options</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="explore-img text-center mb-3">
                                <img src="./site_assets/images/gym.png" alt="" height="100" width="100">
                            </div>
                            <h5 class="card-title text-center">Gyms</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="explore-img text-center mb-3">
                                <img src="./site_assets/images/gym.png" alt="" height="100" width="100">
                            </div>
                            <h5 class="card-title text-center">Workouts</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="explore-img text-center mb-3">
                                    <img src="./site_assets/images/gym.png" alt="" height="100" width="100">
                                </div>
                                <h5 class="card-title text-center">Trainer</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-5 text-center">
                    <button type="button" class="btn btn-small btn-outline-danger">Show More</button>
                </div>
            </div>
        </div>
    </section> -->
    <section class="feeds">
        <div class="container-fluid">
            <div class="row margintop" style="margin-top:100px;">
                <div class="col-sm-12 p-0">
                    <div class="bd-example">
                        <div id="carouselfeedsCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselfeedsCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselfeedsCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselfeedsCaptions" data-slide-to="2"></li>
                                </ol>   
                            <div class="carousel-inner">
                                <div class="carousel-item active blog">
                                    <img src="./site_assets/images/slide1.jpg" class="d-block w-100" alt="..." height="500">
                                    <div class="carousel-caption caption">
                                        <h1>First slide label</h1>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        <button type="button" class="btn btn-small btn-outline-primary mt-3">Show More</button>
                                    </div>
                                </div>
                                <div class="carousel-item blog">
                                    <img src="./site_assets/images/slide2.jpg" class="d-block w-100" alt="..." height="500">
                                    <div class="carousel-caption">
                                        <h1>Second slide label</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <button type="button" class="btn btn-small btn-outline-primary mt-3">Show More</button>
                                    </div>
                                </div>
                                <div class="carousel-item blog">
                                    <img src="./site_assets/images/slide3.jpg" class="d-block w-100" alt="..." height="500">
                                    <div class="carousel-caption">
                                        <h1>Third slide label</h1>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        <button type="button" class="btn btn-small btn-outline-primary mt-3">Show More</button>
                                    </div>
                                    
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselfeedsCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselfeedsCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-sm-12 mt-5">
                    <div class="testimonial-title text-center mb-5">
                        <p class="subtitle">Testimonials</p>
                        <h2>What <b>our customers</b> are saying</h2>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators mt-5">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active mb-5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                                    <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                            <div class="carousel-item mb-5">
                            <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                                    <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                            <div class="carousel-item mb-5">
                            <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                                    <div class="testimonial card rounded-lg shadow border-0">
                                            <div class="testimonial-avatar"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-2/img/avatar/avatar-3.jpg" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                                                <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong>Jessica Watson</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
        <div class="row margintop">
            <div class="col-sm-12 text-center">
                <h1>Our <b>Features</b></h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-xl-4 d-flex justify-content-center">
                <div class="card mb-3 shadow">
                    <img class="card-img-top" src="./site_assets/images/new-york.jpg" alt="Card image cap" height="300">
                    <div class="card-body">
                        <h3>Lorem, ipsum.</h3>
                        <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-primary text-uppercase"><a href="">Read More</a></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-xl-4 d-flex justify-content-center">
                <div class="card mb-3 shadow">
                    <img class="card-img-top" src="./site_assets/images/new-york.jpg" alt="Card image cap" height="300">
                    <div class="card-body">
                    <h3>Lorem, ipsum.</h3>
                        <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-primary text-uppercase"><a href="">Read More</a></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-xl-4 d-flex justify-content-center">
                <div class="card mb-3 shadow">
                    <img class="card-img-top" src="./site_assets/images/new-york.jpg" alt="Card image cap" height="300">
                    <div class="card-body">
                        <h3>Lorem, ipsum.</h3>
                        <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-primary text-uppercase"><a href="">Read More</a></span>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </section>

    <section class="gympackages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5 mt-5">
                    <h2>Our <b>Packages</b></h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-5">
                    <div class="package">
                        <div class="packagename text-center bg-gradient-teal p-2" >
                            Basic
                        </div>
                        <div class="package-body mt-3 p-5">
                            <ul>
                            <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                            <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                            <li><i class="fa fa-times" style="font-size:16px;color:red"></i> &nbsp;&nbsp;12 Sessions</li>
                            <li><i class="fa fa-times" style="font-size:16px;color:red"></i> &nbsp;&nbsp;12 Sessions</li>
                            <li><i class="fa fa-times" style="font-size:16px;color:red"></i> &nbsp;&nbsp;12 Sessions</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-5">
                    <div class="package">
                        <div class="packagename text-center bg-gradient-success p-2">
                            Premium
                        </div>
                        <div class="package-body mt-3 p-5">
                            <ul>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-times" style="font-size:16px;color:red"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-times" style="font-size:16px;color:red"></i> &nbsp;&nbsp;12 Sessions</li>
                            </ul>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-5">
                    <div class="package">
                        <div class="packagename text-center bg-gradient-orange p-2">
                            Elite
                        </div>
                        <div class="package-body mt-3 p-5">
                            <ul>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                            </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section class="ourreach">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-4 mb-3">
                    <h2>Our <b>Reach</b></h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center mb-3 p-5">
                    <div class="reachgoal d-flex justify-content-center align-items-center">
                        <h1>400</h1>
                    </div>
                    <div class="text-center mt-4">Happy Customers</div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center mb-3 p-5">
                    <div class="reachgoal d-flex justify-content-center align-items-center">
                        <h1>500</h1>
                    </div>
                    <div class="text-center mt-4">Trainers Onboard</div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center mb-3 p-5">
                    <div class="reachgoal d-flex justify-content-center align-items-center">
                        <h1>70</h1>
                    </div>
                    <div class="text-center mt-4">Registered Gym</div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex flex-column align-items-center mb-3 p-5">
                    <div class="reachgoal d-flex justify-content-center align-items-center">
                        <h1>200</h1>
                    </div>
                    <div class="text-center mt-4">Trainers</div>
                </div>
            </div>
        </div>
    </section>
@endsection    