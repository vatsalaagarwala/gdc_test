@extends('app')

@section('gymcontent')
  <section>
    <div class="dash_bg d-flex align-items-center bg-gradient-orange">
        <h1 class="font-weight-bold ml-5 text-white">Fittstop > Admin Dashboard</h1>
    </div>
  </section>  
  
  <section>
    <div class="container-fluid">
       
      <div class="row mt-5">
        <div class="col-12 col-lg-3 d-flex justify-content-center">
            <div class="dashsidepanel shadow text-center mb-4">
             
              <ul class="list-group list-group-flush p-3 mt-3 text-left font-weight-bold">
                <li class="list-group-item">Profile</li>
                <li class="list-group-item active">All Listing</li>
                <li class="list-group-item">Settings</li>
                <li class="list-group-item">Referrals</li>
               
              </ul>
              <div class="logout-btn mt-5 mb-5">
                <button type="button" class="btn btn-outline-danger">Log Out</button>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-9 maindashboard">
            <div class="alllsiting round-border shadow">
                <div class="row mb-5 ">
                    <div class="col-12 mt-4">
                        <h2 class="text-left mb-4 ml-4">Gym Listing</h2>
                       <div class="gymlisting p-2">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td><span class="badge badge-danger">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>   
                                    </td>
                                    </tr>
                                </tbody>
                            </table>       
                       </div>
                   </div>
               </div>
               <div class="row mb-5">
                   <div class="col-12">
                       <h2 class="mb-4 ml-4">Tranier Listing</h2>
                       <div class="trainerlisting p-2">
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td><span class="badge badge-danger">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>   
                                    </td>
                                    </tr>
                                </tbody>
                            </table>       
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12">
                       <h2 class="ml-4 mb-4"> Workout Routine</h2>
                       <div class="routinelisting p-2">
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td><span class="badge badge-danger">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>   
                                    </td>
                                    </tr>
                                </tbody>
                            </table>       
                       </div>
                   </div>
               </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection