@extends('app')
<!-- navigation -->
<!-- <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Fittstop</a>
    </nav> -->
    <!-- end navigation -->
    <!-- toggle-btn -->

    @section("gymcontent")
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-8 mb-3 mb-md-0">
                <h1>Location Name</h1>
            </div>
            <div class="col-sm-12 col-md-4 d-flex justify-content-end align-items-center">
                <!-- <div class="toggle-button" style="display:inline-block">
                    <label class="switch">
                        <input type="checkbox" checked data-toggle="toggle" data-on="Gym" data-off="Trainer" data-onstyle="success" data-offstyle="primary">
                    </label>
                </div> -->

                <div class="select-btn ml-1 mr-md-1 pr-3">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-info active btn-sm">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Gym
                        </label>
                        <label class="btn btn-info btn-sm">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Trainer
                        </label>
                        <label class="btn btn-info btn-sm">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Workouts
                        </label>
                    </div>
                </div>
                <!-- Filters -->

                <!-- <div class="dropdown d-none" >
                    <button class="btn btn-secondary dropdown-toggle px-5 btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filters
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Rate</a>
                        <a class="dropdown-item" href="#">Popularity</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
            </div>
        </div>
    <!-- end toggle     -->

    <!-- main section -->

    <div class="container-fluid">
        <div class="row mt-5 d-flex flex-column-reverse flex-md-row">
            <!-- start static side nav -->
            <div class="col-sm-12 col-md-3">
                
                
                <!-- start sort by -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dropdown" >
                            <button class="btn btn-outline-secondary dropdown-toggle px-5 w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SORT BY
                            </button>
                            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Rate</a>
                                <a class="dropdown-item" href="#">Popularity</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end sortby -->

                <!-- start price slider -->
                <div class="row mt-5">
                    <div class="col-sm-12 form-group">
                    <label for="pricerange" class="text-muted">PRICE RANGE</label>
                        <input type="range" min="1" max="100" value="50" class="slider" id="pricerange">
                    </div>
                </div>
                <!-- end price slider -->

                <!-- our packages -->
                <div class="card sidepanel mt-4">
                    <h5 class="card-header text-white bg-dark text-center">Our Packages</h5>
                    <div class="card-body p-0 noshadow">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <h5>Lowest price of the year</h5>
                                <ul class="list-group list-group-flush packages">
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    
                                </ul>   
                            </li>
                            
                            <li class="list-group-item p-3">
                                <h5>Lowest price of the year</h5>
                                <ul class="list-group list-group-flush packages">
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li>
                                    <li><i class="fa fa-check" style="font-size:16px;color:green"></i> &nbsp;&nbsp;12 Sessions</li> 
                                </ul>   
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- end our packages -->

                <!-- Register -->
                <div class="card mt-5 sidepanel">
                    <h5 class="card-header text-center text-white bg-dark" style="font-size:18px;">Register As Member</h5>
                    <div class="card-body text-center noshadow">
                        <div class="register-content pb-3">
                            <p class="px-3" style="color: grey;">Register As a Gym or a trainer</p>
                            <button type="button" class="btn btn-outline-success">Register</button>
                        </div>
                    </div>
                </div>
                <!-- End register -->




                <!-- fitness option -->
                <!-- <div class="card mt-5">
                    <h5 class="card-header text-center" style="font-size:18px;">Fitness Option</h5>
                    <div class="card-body">
                       <ul class="list-group list-group-flush static-li-option">
                           <li class="list-group-item">Gym</li>
                           <li class="list-group-item">Yoga</li>
                           <li class="list-group-item">Zumba</li>
                           <li class="list-group-item">Fitness Studiio</li>
                       </ul> 
                    </div>
                </div> -->
                <!-- end fitness option -->
                <!-- start sub-locations -->
                <!-- <div class="card mt-5">
                    <h5 class="card-header">Locations</h5>
                    <div class="card-body location-body">
                        <form class="form-inline my-2 my-lg-0 p-2">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                        <ul class="list-group list-group-flush static-li-option">
                            <li class="list-group-item">Gym</li>
                            <li class="list-group-item">Yoga</li>
                            <li class="list-group-item">Zumba</li>
                            <li class="list-group-item">Fitness Studiio</li>
                        </ul>
                    </div>
                </div> -->
                <!-- end sub-locations -->
            </div>
            <!-- end static side nav -->
            <div class="col-sm-12 col-md-9">

                <div class="row mt-4 mt-md-0">
                    <div class="col-12 col-sm-12 col-xl-4">
                        <div class="card mb-3 border-0 shadow">
                            <img class="card-img-top img-responsive" src="./site_assets/images/cardimg.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="rating">
                                    <ul class="d-flex justify-content-end align-items-start p-0 m-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-am"></i></li>
                                    </ul>
                                </div>
                                <h4 class="card-title">Gym Name</h4>
                                <p class="card-text text-muted">Lorem consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-info btn-sm float-right">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-4">
                        <div class="card mb-3 border-0 shadow">
                            <img class="card-img-top" src="./site_assets/images/cardimg.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="rating">
                                    <ul class="d-flex justify-content-end align-items-start p-0 m-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                                <h4 class="card-title">Gym Name</h4>
                                <p class="card-text text-muted">Lorem consectetur adipisicing elit.</p>
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-8">
                                            <p class="card-text text-muted">Lorem consectetur.</p>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <ul class="d-flex justify-content-end align-items-start">
                                                <li><i class="fas fa-star fa-xs"></i></li>
                                                <li><i class="fas fa-star fa-xs"></i></li>
                                                <li><i class="fas fa-star fa-xs"></i></li>
                                                <li><i class="far fa-star fa-xs"></i></li>
                                                <li><i class="far fa-star fa-xs"></i></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                <a href="#" class="btn btn-info btn-sm float-right">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-4">
                        <div class="card mb-3 border-0 shadow">
                            <img class="card-img-top" src="./site_assets/images/cardimg.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="rating">
                                    <ul class="d-flex justify-content-end align-items-start p-0 m-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                                <h4 class="card-title">Gym Name</h4>
                                <p class="card-text text-muted">Lorem consectetur adipisicing elit.</p>
                                <a href="/gympage" class="btn btn-info btn-sm float-right">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-4">
                        <div class="card mb-3 border-0 shadow">
                            <img class="card-img-top" src="./site_assets/images/cardimg.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="rating">
                                    <ul class="d-flex justify-content-end align-items-start p-0 m-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                                <h4 class="card-title">Gym Name</h4>
                                <p class="card-text text-muted">Lorem consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-info btn-sm float-right">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end main-section -->
        
    </div>

    @endsection