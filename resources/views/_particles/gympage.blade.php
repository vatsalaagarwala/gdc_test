@extends('app')



@section("gymcontent")

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-8">
            <h1>Gym Name,Location</h1>
        </div>
    </div>

</div>

<div class="container-fluid">
        <div class="row mt-5">
            <!-- start static side nav -->
            <div class="col-sm-12 col-md-3">
                <!-- our packages -->
                <div class="card sidepanel">
                    <h5 class="card-header text-white bg-dark text-center">Our Packages</h5>
                    <div class="card-body p-0">
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
                    <div class="card-body text-center">
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
            <div class="col-sm-12 col-md-8">

                <div class="row">
                    <div class="col-sm-12">
                        <img src="./site_assets/images/gympage.jpg" alt="" height="350" width="100%">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <div class="row gymnamesection">
                            <div class="col-md-8">
                                <h1>Gym Name</h1>
                                <h5 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, temporibus!</h5>
                                
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <div>
                                    <ul class="d-flex">
                                        <li><i class="fas fa-star fa-lg"></i></li>
                                        <li><i class="fas fa-star fa-lg"></i></li>
                                        <li><i class="fas fa-star fa-lg"></i></li>
                                        <li><i class="far fa-star fa-lg"></i></li>
                                        <li><i class="far fa-star fa-lg"></i></li>
                                    </ul>
                                <button type="button" class="btn btn-success">Book a Session</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="aboutgym">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-sm-12 text-center">
                            <h1>About Gym</h1>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 text-justify">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia id repellat quas repudiandae? Eum veniam beatae quae quis, iusto velit?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nostrum est corporis nisi explicabo voluptas sapiente libero magnam ab asperiores necessitatibus quae ipsum amet maiores obcaecati, nesciunt quasi iure laudantium!
                            </p>
                        </div>
                    </div>
                </div>
                </section>

                <section class="trainers">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                            <h1>Our Trainers</h1>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-4">
                                <div class="trianers ourtrainer pa-3">
                                    <div class="trainer-image d-flex justify-content-center">
                                        <img src="./site_assets/images/trainerpic.png" alt="" width="200" height="200">
                                    </div>
                                    <div class="trainer-details text-center">
                                        <div class="name">
                                            <h5>Trainer Name</h5>
                                        </div>
                                        <div class="detials">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="trianers ourtrainer pa-3">
                                    <div class="trainer-image d-flex justify-content-center">
                                        <img src="./site_assets/images/trainerpic.png" alt="" width="200" height="200">
                                    </div>
                                    <div class="trainer-details text-center">
                                        <div class="name">
                                            <h5>Trainer Name</h5>
                                        </div>
                                        <div class="detials">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="trianers ourtrainer pa-3">
                                    <div class="trainer-image d-flex justify-content-center">
                                        <img src="./site_assets/images/trainerpic.png" alt="" width="200" height="200">
                                    </div>
                                    <div class="trainer-details text-center">
                                        <div class="name">
                                            <h5>Trainer Name</h5>
                                        </div>
                                        <div class="detials">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </section>

                <section class="facilities">
                    <div class="row mt-5">
                        <div class="col-sm-12 text-center">
                            <h1>Our Facilities</h1>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-3">
                            <div class="trianers pa-3">
                                <div class="trainer-image d-flex justify-content-center">
                                    <img src="./site_assets/images/trainerpic.png" alt="" width="100" height="100">
                                </div>
                                <div class="trainer-details text-center">
                                    <div class="name">
                                        <h5>Locker & Shower</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="trianers pa-3">
                                <div class="trainer-image d-flex justify-content-center">
                                    <img src="./site_assets/images/trainerpic.png" alt="" width="100" height="100">
                                </div>
                                <div class="trainer-details text-center">
                                    <div class="name">
                                        <h5>Personal Trainer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="trianers pa-3">
                                <div class="trainer-image d-flex justify-content-center">
                                    <img src="./site_assets/images/trainerpic.png" alt="" width="100" height="100">
                                </div>
                                <div class="trainer-details text-center">
                                    <div class="name">
                                        <h5>Workout Session</h5>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-3">
                            <div class="trianers pa-3">
                                <div class="trainer-image d-flex justify-content-center">
                                    <img src="./site_assets/images/trainerpic.png" alt="" width="100" height="100">
                                </div>
                                <div class="trainer-details text-center">
                                    <div class="name">
                                        <h5>Parking</h5>
                                    </div>
                                </div>
                            </div>
                        </div>        
                        <!-- <div class="col-sm-12">
                            <div class="facilitieslist">
                            <div class="card">
                                <div class="card-header text-white bg-dark text-center">
                                    Facilities We Provide
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-check-square" style="font-size:16px;color:green"></i> &nbsp;&nbsp;Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </section>

            </div>
        </div>
    </div>


@endsection