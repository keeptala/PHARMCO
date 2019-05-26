@extends('layouts.app')

@section('content')
    

<h1>{{$title}}</h1>

    {{-- <div class="container-fluid">
        <h1 class="display-4">Welcome</h1>
        <div class="row">
                <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="..." class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="logo1.png" class="d-block w-100" alt="image1">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="..." class="d-block w-100" alt="image2" >
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                              </div>
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
        </div>
        <div class="row"><a class="btn btn-info btn-lg" href="/register" role="button">Sign up</a>
        <a class="btn btn-success btn-lg" href="/login" role="button">Sign in</a></div>
    </div>
         --}}
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