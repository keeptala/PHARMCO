@extends('layouts.app')

@section('content')
    

<h1>{{$title}}</h1>

   
         <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/storage/images/cosmos.png" class="d-block image-fluid " alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <a href="/products" class="btn btn-primary">Shop Now</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="/storage/images/premeds.jpg" class="d-block image-fluid" alt="..." >
                            </div>
                            <div class="col-lg-4">
                                    <img src="/storage/images/premeds.jpg" class="d-block image-fluid" alt="..." >
                                </div>
                                <div class="col-lg-4">
                                        <img src="/storage/images/premeds.jpg" class="d-block image-fluid" alt="..." >
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                       <a href="/products" class="btn btn-primary">Shop Now</a>
                                      </div>
                                  
                    </div>
                    </div>
                    <div class="carousel-item ">
                      <div class="row">
                        <div class="col-lg-3">
                            <img src="/storage/images/logo1.png" class="d-block image-fluid" alt="..." >
                        </div>
                        <div class="col-lg-3">
                            <img src="/storage/images/logo1.png" class="d-block image-fluid" alt="..." >
                        </div>
                        <div class="col-lg-3">
                            <img src="/storage/images/logo1.png" class="d-block image-fluid" alt="..." >
                        </div>
                        <div class="col-lg-3">
                            <img src="/storage/images/logo1.png" class="d-block image-fluid" alt="..." >
                        </div>
                      </div>
                      <div class="carousel-caption d-none d-md-block">
                          <a href="/products" class="btn btn-primary">Shop Now</a>
           </div> 
                    </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
      
@endsection