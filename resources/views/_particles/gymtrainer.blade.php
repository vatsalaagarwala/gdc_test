@extends('app')


@section('gymcontent')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-8">
            <h1>Gym Name,Location</h1>
        </div>
    </div>
</div>

<div class="contianer-fluid">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-3">
         @include('_particles.sidepanel')
        </div>
    
    <div class="col-sm-12 col-md-8">
        <div class="row">
            <div class="col-sm-12 profile-bg">
                <img src="./site_assets/images/gympage.jpg" alt="" height="350" width="100%" class="img-responsive">
                <div class="trainer-profile">
                    <img src="./site_assets/images/icon.png" alt="" height="160">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="row gymnamesection">
                    <div class="col-md-8">
                        <h1>Trainer Name</h1>
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
        <section class="about">
        <div class="container">
        
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 text-center">
                    <h2>About Me</h2>
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
    </div>
    

    
</div>






@endsection