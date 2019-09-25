@extends('app')

@section('idishumcontent')
<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                <div class="featured-image">
                    <img src="https://images.unsplash.com/photo-1473186505569-9c61870c11f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-xs-12 col-lg-8 col-md-8 offset-md-2 offset-lg-2">
                <div class="article_title">
                    <h1 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ea.</h1>
                </div>
                <div class="article_subtitle">
                    <h4>Author Name</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-lg-8 col-md-8 offset-md-2 offset-lg-2">
                <div class="post_article">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Repellendus harum cum cupiditate, voluptate adipisci a,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, deleniti ipsum dolor voluptatibus animi cum reiciendis quos debitis laudantium enim pariatur tenetur fugit itaque esse expedita. Iusto sed iure, molestiae, id voluptate recusandae consequuntur, sequi aut aliquid saepe facilis optio? Tempora doloribus officia voluptatem labore modi repudiandae at eligendi saepe?
                         doloremque nostrum, recusandae facilis est reprehenderit ipsam sit. Ab dolore et error consectetur dicta, laboriosam consequuntur officia neque, ipsum ratione harum quae autem odit maiores.</p>
                
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi earum hic aperiam ipsum debitis sit corrupti molestias ex necessitatibus itaque et quibusdam, nemo ratione? Consequatur eligendi modi illo odio enim sint, commodi nemo iste et, inventore nobis, dolores accusamus eos vel ullam optio neque iusto magnam molestias porro! A, consequatur.</p>    
                </div>
            </div>
        </div>
        <hr>
        <div class="downloadpdf d-flex justify-content-center">
            <span class="d-inline-block" > <h3>Download Article:</h3> </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-info btn-sm mr-1">Download As PDF</button>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                <div class="review-post d-flex justify-content-start">
                    <h2 class="mr-3 text-dark">Editor brief Summary:</h2>
                </div>
                <div>
                    <div class="form-group">       
                        <textarea class="form-control" id="editor-summary" rows="5" placeholder="Write your summary"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3"> 
                <div class="review-post d-flex justify-content-center">
                    <h2 class="mr-3 text-dark">Review the Post:</h2>
                </div>
                <div class="action-btn d-flex justify-content-center">

                    <button type="button" class="btn btn-success mr-1">Approve</button>
                    <button type="button" class="btn btn-danger"> Reject</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection