@extends('app')
@section('idishumcontent')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3" style=" height:100vh;">
                <div class="row">
                    <div class="col-12" >
                        <div class="side-panel p-3 shadow" style="height:100%; background:#f5fbf1;">
                            <div class="profile-image-div d-flex justify-content-center" style="margin:0 auto; ">
                                <div class="dash_profile_img p-1 mt-3 " style="width: 9rem; height: 9rem; background:white; border-radius:50%;">
                                    <img src="https://cdn4.iconfinder.com/data/icons/eldorado-user/40/user-512.png" alt="...">
                                </div>
                            </div>
                            <div class="admin-details text-center mt-4">
                                <h2>Profile Name</h2>
                            </div>
                            <div class="admin-setting">
                                <ul class="admin-setting list-group list-group-flush p-3 mt-3 text-left font-weight-bold"> 
                                    <li class="list-group-item active">Profile</li>
                                    <li class="list-group-item">Write a Post</li>
                                    <li class="list-group-item">My Articles</li>
                                    <li class="list-group-item">Sign Out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 col-lg-9">
                
                <div class="mydetails round-border shadow p-5">
                    {!! Form::open(array('url' => 'signup','class'=>'','id'=>'signup','role'=>'form')) !!}

                    <form>
                        <div class="text-left">
                            <h3 class="font-weight-bold text-dark">Listing Details</h3><hr>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"><b>First Name</b></label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4"><b>Last Name</b></label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label"><b>Location</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label"><b>Specialization</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Specialization">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label"><b>Experience</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Work Experience">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Description</b></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        {{-- <hr> --}}
                        {{-- <div class="form-group">
                            <label for="inputPassword" class="col-sm-12 text-center col-form-label" style="font-size:1.5rem;"><b>Workout Routines</b></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Paste Google Drive Link Here">
                            </div>
                        </div> --}}
                        <button type="button" class="btn btn-primary w-100">Submit</button>
                    </form>

                    {!!Form::close()!!}
                </div>
                
               
            </div>
        </div>
    </div>
</section>

@endsection